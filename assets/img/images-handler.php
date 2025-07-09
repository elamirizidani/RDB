<?php
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);

$image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp'];
$dir = __DIR__;

function safe_filename($f) {
    return preg_match('/^[\w.\-]+$/', $f) ? $f : false;
}

if ($input['action'] === 'delete') {
    $success = true;
    $error = '';
    foreach ($input['images'] as $f) {
        $name = safe_filename($f);
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (!$name || !in_array($ext, $GLOBALS['image_extensions'])) continue;
        $filepath = $dir . DIRECTORY_SEPARATOR . $name;
        if (file_exists($filepath)) {
            if (!unlink($filepath)) {
                $success = false;
                $error .= "Failed to delete $name. ";
            }
        }
    }
    echo json_encode(['success'=>$success, 'error'=>$error]); exit;
}

if ($input['action'] === 'resize') {
    $width = isset($input['width']) && $input['width'] ? intval($input['width']) : null;
    $height = isset($input['height']) && $input['height'] ? intval($input['height']) : null;
    $resize_action = ($input['resize_action'] === 'copy') ? 'copy' : 'overwrite';
    $success = true;
    $error = '';
    foreach ($input['images'] as $f) {
        $name = safe_filename($f);
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (!$name || !in_array($ext, $GLOBALS['image_extensions'])) continue;
        $filepath = $dir . DIRECTORY_SEPARATOR . $name;
        if (!file_exists($filepath)) continue;
        $info = getimagesize($filepath);
        if (!$info) { $error .= "Cannot get info for $name. "; $success=false; continue; }
        // Open image
        switch($ext) {
            case 'jpg': case 'jpeg': $src = imagecreatefromjpeg($filepath); break;
            case 'png': $src = imagecreatefrompng($filepath); break;
            case 'gif': $src = imagecreatefromgif($filepath); break;
            case 'bmp': $src = imagecreatefrombmp($filepath); break;
            case 'webp': $src = imagecreatefromwebp($filepath); break;
            default: $src = false; break;
        }
        if (!$src) { $error .= "Cannot open $name. "; $success=false; continue; }
        $src_w = imagesx($src);
        $src_h = imagesy($src);
        $new_w = $width ? $width : intval($src_w * $height / $src_h);
        $new_h = $height ? $height : intval($src_h * $width / $src_w);
        if (!$width) $new_w = intval($src_w * $new_h / $src_h);
        if (!$height) $new_h = intval($src_h * $new_w / $src_w);
        $dst = imagecreatetruecolor($new_w, $new_h);
        // PNG/GIF: preserve alpha
        if ($ext == 'png' || $ext == 'gif') {
            imagealphablending($dst, false);
            imagesavealpha($dst, true);
            $transparent = imagecolorallocatealpha($dst, 255, 255, 255, 127);
            imagefilledrectangle($dst, 0, 0, $new_w, $new_h, $transparent);
        }
        imagecopyresampled($dst, $src, 0,0, 0,0, $new_w, $new_h, $src_w, $src_h);
        if ($resize_action=='overwrite') {
            $savepath = $filepath;
        } else {
            $savepath = $dir . DIRECTORY_SEPARATOR . pathinfo($name, PATHINFO_FILENAME) . '_resized.' . $ext;
        }
        switch($ext) {
            case 'jpg': case 'jpeg': imagejpeg($dst, $savepath, 90); break;
            case 'png': imagepng($dst, $savepath); break;
            case 'gif': imagegif($dst, $savepath); break;
            case 'bmp': imagebmp($dst, $savepath); break;
            case 'webp': imagewebp($dst, $savepath); break;
        }
        imagedestroy($dst);
        imagedestroy($src);
    }
    echo json_encode(['success'=>$success, 'error'=>$error]); exit;
}

echo json_encode(['success'=>false, 'error'=>'Invalid request']);
