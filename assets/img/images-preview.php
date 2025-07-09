<?php
// Utility for human-readable file size
function human_filesize($bytes, $decimals = 2) {
    $sizes = ['B','KB','MB','GB','TB'];
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sizes[$factor];
}

// Get images and build hashes
$image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'];
$images = [];
$image_hashes = [];

foreach (scandir(__DIR__) as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, $image_extensions) && is_file($file)) {
        $hash = md5_file($file);

        // Get dimensions (skip SVG since getimagesize won't work)
        $dimensions = '';
        if ($ext !== 'svg') {
            $size = @getimagesize($file);
            $dimensions = $size ? $size[0].'×'.$size[1] : '';
        } else {
            // Try to read width/height from SVG
            $svg_data = @file_get_contents($file);
            if (preg_match('/width="([0-9.]+)"/', $svg_data, $mw) &&
                preg_match('/height="([0-9.]+)"/', $svg_data, $mh)) {
                $dimensions = $mw[1].'×'.$mh[1];
            }
        }

        $images[] = [
            'name' => $file,
            'hash' => $hash,
            'dimensions' => $dimensions,
            'size' => filesize($file),
        ];
        $image_hashes[$hash][] = $file;
    }
}

// Group and order: duplicates first, then unique
$duplicates = [];
$uniques = [];
foreach ($image_hashes as $hash => $files) {
    if (count($files) > 1) {
        foreach ($files as $file) {
            $info = array_filter($images, fn($i) => $i['name'] === $file);
            $duplicates[] = array_merge(array_values($info)[0], ['is_duplicate' => true]);
        }
    } else {
        $file = $files[0];
        $info = array_filter($images, fn($i) => $i['name'] === $file);
        $uniques[] = array_merge(array_values($info)[0], ['is_duplicate' => false]);
    }
}
$sorted_images = array_merge($duplicates, $uniques);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Preview (<?= count($sorted_images) ?>)</title>
    <style>
        body { font-family: "Segoe UI", Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 1100px; margin: 40px auto; padding: 20px; }
        .images-toolbar { display:flex; align-items:center; gap:14px; margin-bottom:22px;}
        .images-toolbar button { background:#444; color:#fff; border:none; padding:10px 16px; border-radius:7px; font-size:1em; cursor:pointer; transition:.15s; }
        .images-toolbar button:disabled { background: #bbb; color:#eee; cursor: not-allowed; }
        .resize-panel {display:none; background:#fff6f0; padding:18px 22px 14px 22px; border-radius:12px; margin-bottom:20px; box-shadow:0 2px 12px rgba(0,0,0,0.05);}
        .resize-panel.active {display:block;}
        .resize-panel label {display:inline-block; margin-right:15px;}
        .resize-panel input[type="number"] {width:75px; padding:4px;}
        .resize-panel .radio-group {margin:8px 0 0 0;}
        .resize-panel button { margin-left:14px; margin-right:4px; background:#3773f4;}
        .resize-panel .close-btn {background:#d44;}
        .resize-panel .resize-status { margin-left:18px; font-size:0.98em; }
        .images-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 24px; }
        .img-card { position:relative; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.05), 0 1.5px 5px rgba(0,0,0,0.04); padding: 18px 12px 14px 12px; text-align: center; transition: transform 0.15s, box-shadow 0.15s, background 0.3s, border 0.3s; cursor: pointer; overflow: hidden; border: 2px solid transparent;}
        .img-card.duplicate { background: #ffe3e3 !important; border: 2px solid #e54040 !important; }
        .img-thumb { width: 100%; height: 120px; object-fit: contain; border-radius: 10px; background: #e9e9e9; box-shadow: 0 1px 2px rgba(0,0,0,0.03);}
        .img-filename { margin: 11px 0 0 0; font-size: 0.97em; color: #333; word-break: break-all; font-weight:500;}
        .img-info { font-size: 0.94em; margin-top: 4px; color: #666;}
        .img-meta { font-size: 0.93em; margin-top: 2px; color: #999;}
        .img-card input[type="checkbox"] {position:absolute;top:13px;left:13px;width:19px;height:19px;z-index:3;}
        .img-card .duplicate-label { color:#e54040; font-size:0.93em; margin-top:6px; }
        .img-card.selected { box-shadow:0 0 0 4px #3773f4, 0 2px 12px rgba(0,0,0,0.08);}
        @media (max-width: 600px) {
            .container { padding: 7px; }
            .images-grid { gap: 11px; }
            .img-card { padding: 11px 5px 7px 5px; }
            .img-thumb { height: 70px; }
            .resize-panel {padding: 12px 6vw;}
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Image Preview (<?= count($sorted_images) ?>)</h1>
    <div class="images-toolbar">
        <button id="delete-btn" disabled>Delete Selected</button>
        <button id="resize-btn" disabled>Resize Selected</button>
        <span id="selected-count" style="margin-left:10px;color:#444;font-weight:500"></span>
    </div>
    <div class="resize-panel" id="resize-panel">
        <form id="resize-form" style="display:inline;">
            <label>Width: <input type="number" name="width" id="resize-width" min="1"></label>
            <label>Height: <input type="number" name="height" id="resize-height" min="1"></label>
            <span class="radio-group">
                <label><input type="radio" name="resize_action" value="overwrite" checked> Overwrite</label>
                <label><input type="radio" name="resize_action" value="copy"> Copy</label>
            </span>
            <input type="hidden" name="images" id="resize-images">
            <button type="submit">Resize</button>
            <button type="button" class="close-btn" id="resize-cancel-btn">Cancel</button>
            <span class="resize-status" id="resize-status"></span>
        </form>
    </div>
    <?php if (empty($sorted_images)): ?>
        <p>No images found in this directory.</p>
    <?php else: ?>
        <div class="images-grid" id="images-grid">
            <?php foreach ($sorted_images as $img): ?>
                <div class="img-card<?= $img['is_duplicate'] ? ' duplicate' : '' ?>" data-img="<?= htmlspecialchars($img['name']) ?>">
                    <input type="checkbox" class="select-chk" data-img="<?= htmlspecialchars($img['name']) ?>">
                    <img class="img-thumb" src="<?= htmlspecialchars($img['name']) ?>" alt="<?= htmlspecialchars($img['name']) ?>">
                    <div class="img-filename"><?= htmlspecialchars($img['name']) ?></div>
                    <div class="img-info"><?= $img['dimensions'] ? htmlspecialchars($img['dimensions']) : '—' ?></div>
                    <div class="img-meta"><?= human_filesize($img['size']) ?></div>
                    <?php if ($img['is_duplicate']): ?>
                        <div class="duplicate-label">Duplicate</div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<script>
    // Image selection
    let selectedImages = [];
    const updateToolbar = () => {
        selectedImages = Array.from(document.querySelectorAll('.select-chk:checked')).map(cb => cb.dataset.img);
        document.getElementById('delete-btn').disabled = selectedImages.length === 0;
        document.getElementById('resize-btn').disabled = selectedImages.length === 0;
        document.getElementById('selected-count').textContent = selectedImages.length ? selectedImages.length+' selected' : '';
        // Highlight cards
        document.querySelectorAll('.img-card').forEach(card => {
            card.classList.toggle('selected', selectedImages.includes(card.getAttribute('data-img')));
        });
        // If cancel resize, hide panel if nothing selected
        if (selectedImages.length === 0) {
            document.getElementById('resize-panel').classList.remove('active');
        }
    };
    document.querySelectorAll('.select-chk').forEach(cb => {
        cb.addEventListener('change', updateToolbar);
        // Clicking card toggles checkbox, but not image click
        cb.closest('.img-card').addEventListener('click', function(e){
            if(e.target.tagName.toLowerCase() !== 'img') cb.checked = !cb.checked;
            updateToolbar();
        });
    });

    // Delete selected images
    document.getElementById('delete-btn').onclick = function() {
        if (!selectedImages.length) return;
        if (!confirm('Delete selected images? This cannot be undone.')) return;
        fetch('images-handler.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({action: 'delete', images: selectedImages})
        })
        .then(r=>r.json())
        .then(data => {
            if (data.success) {
                selectedImages.forEach(name => {
                    const card = document.querySelector('.img-card[data-img="'+name.replace(/"/g,'\\\"')+'"]');
                    if (card) card.remove();
                });
                updateToolbar();
                alert('Deleted.');
            } else {
                alert('Error: '+data.error);
            }
        });
    };

    // Show resize form (inline, above grid)
    document.getElementById('resize-btn').onclick = function() {
        if (!selectedImages.length) return;
        document.getElementById('resize-width').value = '';
        document.getElementById('resize-height').value = '';
        document.getElementById('resize-images').value = selectedImages.join(',');
        document.getElementById('resize-status').textContent = '';
        document.getElementById('resize-panel').classList.add('active');
    };
    // Cancel button
    document.getElementById('resize-cancel-btn').onclick = function() {
        document.getElementById('resize-panel').classList.remove('active');
    };

    // Handle resize submit
    document.getElementById('resize-form').onsubmit = function(e){
        e.preventDefault();
        const width = document.getElementById('resize-width').value;
        const height = document.getElementById('resize-height').value;
        const images = document.getElementById('resize-images').value;
        const action = document.querySelector('input[name="resize_action"]:checked').value;
        if (!width && !height) {
            document.getElementById('resize-status').style.color = '#e54040';
            document.getElementById('resize-status').textContent = 'Enter width or height!';
            return false;
        }
        document.getElementById('resize-status').style.color = '#444';
        document.getElementById('resize-status').textContent = 'Processing...';
        fetch('images-handler.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({
                action: 'resize',
                images: images.split(','),
                width: width,
                height: height,
                resize_action: action
            })
        })
        .then(r=>r.json())
        .then(data=>{
            if (data.success) {
                document.getElementById('resize-status').style.color = 'green';
                document.getElementById('resize-status').textContent = 'Done! Reloading...';
                setTimeout(()=>window.location.reload(), 700);
            } else {
                document.getElementById('resize-status').style.color = '#e54040';
                document.getElementById('resize-status').textContent = 'Error: '+data.error;
            }
        });
        return false;
    };
</script>
</body>
</html>
