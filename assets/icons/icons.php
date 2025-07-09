<?php
// Remove Duplicates
$duplicatesMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_duplicates'])) {
    $svgFiles = glob(__DIR__ . '/*.svg');
    $hashes = [];
    $deleted = 0;
    $deletedFiles = [];
    foreach ($svgFiles as $file) {
        $svg = file_get_contents($file);
        // Normalize: remove whitespace between tags, sort attributes (basic), remove xml declaration
        $svgNorm = preg_replace('/\s+/', ' ', $svg); // collapse whitespace
        $svgNorm = preg_replace('/<\?xml.*?\?>/', '', $svgNorm);
        $svgNorm = preg_replace('/>\s+</', '><', $svgNorm); // trim between tags
        // Hash for comparison
        $hash = md5($svgNorm);
        if (isset($hashes[$hash])) {
            if (unlink($file)) {
                $deleted++;
                $deletedFiles[] = basename($file);
            }
        } else {
            $hashes[$hash] = basename($file);
        }
    }
    if ($deleted) {
        $duplicatesMessage = "<span style='color:green;'>Removed $deleted duplicate(s): " . implode(', ', $deletedFiles) . "</span>";
    } else {
        $duplicatesMessage = "<span style='color:#c00;'>No duplicate SVG icons found.</span>";
    }
}

// Bulk Delete
$deleteMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_selected']) && isset($_POST['delete_files'])) {
    $deleted = 0;
    foreach ($_POST['delete_files'] as $fileToDelete) {
        $fileToDelete = basename($fileToDelete);
        $path = __DIR__ . '/' . $fileToDelete;
        if (is_file($path) && preg_match('/\.svg$/i', $fileToDelete)) {
            if (unlink($path)) $deleted++;
        }
    }
    $deleteMessage = $deleted
        ? "<span style='color:green;'>Deleted $deleted icon(s).</span>"
        : "<span style='color:red;'>No icons deleted.</span>";
}

// Handle single rename
$renameMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['old_name'], $_POST['new_name']) && !isset($_POST['delete_selected'])) {
    $oldName = basename($_POST['old_name']);
    $newName = preg_replace('/[^A-Za-z0-9_\-]/', '', $_POST['new_name']);
    if ($oldName && $newName && $oldName !== $newName . '.svg') {
        $oldPath = __DIR__ . '/' . $oldName;
        $newPath = __DIR__ . '/' . $newName . '.svg';
        if (file_exists($newPath)) {
            $renameMessage = "<span style='color:red;'>File <b>$newName.svg</b> already exists.</span>";
        } elseif (file_exists($oldPath)) {
            if (rename($oldPath, $newPath)) {
                $renameMessage = "<span style='color:green;'>Renamed to <b>$newName.svg</b> successfully.</span>";
            } else {
                $renameMessage = "<span style='color:red;'>Rename failed.</span>";
            }
        }
    }
}

$svgFiles = glob(__DIR__ . '/*.svg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SVG Icons Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.min.css">
    <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs/components/prism-markup.min.js"></script>
    <script src="https://jscolor.com/releases/2.4.6/jscolor.js"></script>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; color: #222;}
        .icon-list { display: flex; flex-wrap: wrap; gap: 24px; padding: 24px;}
        .icon-block { background: #cfcfcf; border: 1px solid #eee; border-radius: 12px; padding: 16px 12px; width: 180px; display: flex; flex-direction: column; align-items: center; box-shadow: 0 2px 8px rgba(0,0,0,0.06);}
        .icon-block svg { width: 64px; height: 64px; display: block; margin-bottom: 10px;}
        .icon-name { font-size: 14px; word-break: break-all; text-align: center; color: #444; margin-bottom: 6px;}
        .rename-form, .icon-actions { display: flex; flex-direction: column; align-items: center; gap: 5px; margin-top: 6px;}
        .rename-form input[type="text"] { width: 80px; padding: 2px 6px; border: 1px solid #888; border-radius: 5px;}
        .rename-form button, .icon-actions button { background: #222; color: #fff; border: none; border-radius: 4px; padding: 3px 10px; cursor: pointer; font-size: 13px;}
        .rename-form button:hover, .icon-actions button:hover { background: #444;}
        .rename-form label { font-size: 12px; color: #333;}
        .msg { text-align:center; font-size: 15px; padding: 8px 0;}
        .bulk-actions { display: flex; align-items: center; gap: 16px; margin: 0 0 24px 24px;}
        .bulk-actions button { background: #d11a2a; color: #fff; border: none; border-radius: 4px; padding: 6px 16px; font-size: 15px; cursor: pointer;}
        .bulk-actions button:hover { background: #a00;}
        .select-all { margin-right: 8px; }
        .icon-checkbox { margin-bottom: 8px;}
        /* Modal */
        .modal-bg { display: none; position: fixed; z-index: 9999; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.35);}
        .modal { background:#fff; border-radius: 10px; max-width: 540px; margin:80px auto; padding:30px 24px; position:relative;}
        .modal .close { position: absolute; top:12px; right:20px; background: #eee; border:none; font-size:18px; border-radius:50%; width:32px; height:32px; cursor:pointer;}
        .modal-header { font-size: 18px; margin-bottom: 18px; }
        .modal-controls { display:flex; gap: 12px; align-items:center; margin: 10px 0 18px 0;}
        .modal-controls label { font-size: 13px; }
        .modal svg { display:block; margin:12px 0;}
        pre code { font-size: 13px;}
    </style>
</head>
<body>
    <h1 style="text-align:center;">SVG Icons Gallery</h1>
    <?php if ($deleteMessage): ?>
        <div class="msg"><?= $deleteMessage ?></div>
    <?php endif; ?>
    <?php if ($renameMessage): ?>
        <div class="msg"><?= $renameMessage ?></div>
    <?php endif; ?>
    <?php if ($duplicatesMessage): ?>
    <div class="msg"><?= $duplicatesMessage ?></div>
<?php endif; ?>
    <form method="post" id="bulkDeleteForm">
        <div class="bulk-actions">
            <input type="checkbox" class="select-all" id="selectAll" title="Select All">
            <label for="selectAll" style="font-size:15px;cursor:pointer;">Select All</label>
            <button type="submit" name="delete_selected" onclick="return confirm('Delete selected icons?');">Delete Selected</button>
        </div>
        <div class="icon-list">
        <?php foreach ($svgFiles as $file): ?>
            <?php
                $svgContent = file_get_contents($file);
                $svgContentClean = preg_replace('/<\?xml.*?\?>/', '', $svgContent);
                $filename = basename($file);
                $basename = preg_replace('/\.svg$/i', '', $filename);
            ?>
            <div class="icon-block">
                <input type="checkbox" name="delete_files[]" class="icon-checkbox" value="<?php echo htmlspecialchars($filename); ?>">
                <div class="icon-preview" id="preview_<?php echo md5($basename); ?>"><?php echo $svgContentClean; ?></div>
                <div class="icon-name"><?php echo htmlspecialchars($filename); ?></div>
                <div class="icon-actions">
                    <button type="button" onclick="openModal('<?php echo htmlspecialchars(addslashes($basename)); ?>', `<?php echo htmlspecialchars(addslashes($svgContentClean)); ?>`)">View Code</button>
                </div>
                <form class="rename-form" method="post" onsubmit="return confirm('Rename this file?');">
                    <label for="rename_<?php echo $basename; ?>">Rename:</label>
                    <input type="hidden" name="old_name" value="<?php echo htmlspecialchars($filename); ?>">
                    <input type="text" id="rename_<?php echo $basename; ?>" name="new_name" value="<?php echo htmlspecialchars($basename); ?>" required>
                    <button type="submit">Rename</button>
                </form>
            </div>
        <?php endforeach; ?>
        <?php if (empty($svgFiles)): ?>
            <div style="color:#888;font-size:16px;">No SVG files found in this directory.</div>
        <?php endif; ?>
        </div>
    </form>
    <form method="post" style="display:inline;">
    <button type="submit" name="remove_duplicates" style="background:#38a169;color:#fff;padding:6px 16px;border:none;border-radius:4px;font-size:15px;cursor:pointer;">
        Remove Duplicates
    </button>
</form>
    <!-- Modal for SVG code & live preview -->
    <div class="modal-bg" id="modalBg">
        <div class="modal" id="iconModal">
            <button class="close" onclick="closeModal()">&times;</button>
            <div class="modal-header" id="modalIconName"></div>
            <div class="modal-controls">
                <label>Color: <input id="svgColor" class="jscolor" value="222222"></label>
                <label>Size: <input id="svgSize" type="range" min="16" max="256" value="64" style="width:80px;">
                    <span id="svgSizeValue">64</span>px</label>
            </div>
            <div id="modalSvgPreview"></div>
            <pre><code class="language-markup" id="modalSvgCode"></code></pre>
        </div>
    </div>
    <script>
        // Select All
        document.getElementById('selectAll').addEventListener('change', function(){
            document.querySelectorAll('.icon-checkbox').forEach(cb => cb.checked = this.checked);
        });

        // Modal Logic
        let origSVG = '';
        function openModal(name, svg) {
            document.getElementById('modalBg').style.display = 'block';
            document.getElementById('modalIconName').textContent = name + ".svg";
            document.getElementById('modalSvgCode').textContent = svg;
            Prism.highlightElement(document.getElementById('modalSvgCode'));
            origSVG = svg;
            renderPreview();
        }
        function closeModal() {
            document.getElementById('modalBg').style.display = 'none';
        }
        // Live controls
        function renderPreview() {
            let color = '#' + document.getElementById('svgColor').value;
            let size = document.getElementById('svgSize').value;
            // Replace fill/stroke or add fill attribute to svg
            let svg = origSVG.replace(/(fill|stroke)="[^"]*"/gi, ''); // remove old
            svg = svg.replace('<svg', `<svg fill="${color}" width="${size}" height="${size}"`);
            document.getElementById('modalSvgPreview').innerHTML = svg;
            document.getElementById('svgSizeValue').textContent = size;
        }
        document.getElementById('svgColor').addEventListener('input', renderPreview);
        document.getElementById('svgSize').addEventListener('input', renderPreview);
        // Close on bg click
        document.getElementById('modalBg').onclick = function(e){
            if(e.target === this) closeModal();
        };
        // For color picker library to re-render preview
        window.jscolor && jscolor.installByClassName('jscolor');
        document.getElementById('svgColor').addEventListener('change', renderPreview);
    </script>
</body>
</html>
