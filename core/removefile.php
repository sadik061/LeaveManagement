<?php

require('database.php');

// deleting from database

$fileid = $_GET['fileid'];
$filename = $_GET['filename'];
$conn->query("DELETE FROM files WHERE files.id = '$fileid'");

// deleting from server
unlink("../uploads/documents/".$filename);

header("Location: ../profile.php");