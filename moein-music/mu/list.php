<?php
$dir = __DIR__;
$files = array_values(array_filter(scandir($dir), function($file) {
    return pathinfo($file, PATHINFO_EXTENSION) === 'mp3';
}));
header('Content-Type: application/json');
echo json_encode($files);
?>
