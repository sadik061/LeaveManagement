<?php

$filename = $_GET['filename'];
$url = '../uploads/documents/'.$_GET['url'];
// $url = 'database.php';

$fileType = explode (".", $url);
$fileType = end($fileType);


if (file_exists($url)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($filename.'.'.$fileType).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($url));
    readfile($url);
    exit;
    header("Location: ../profile.php");;
}


