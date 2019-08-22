<?php
// Start the session
session_start();
?>
<?php
$targetfolder = "../uploads/documents/";

$targetfolder = $targetfolder . basename( $_FILES['fileToUpload2']['name']) ;
$file=basename( $_FILES['fileToUpload2']['name']);

$file_name = $_POST["name"]; // The file name user want to see

if ($file_name == ""){
    echo "You have not given the name of file";
}

else if(move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $targetfolder))
{

    // echo "The file ". basename( $_FILES['fileToUpload2']['name']). " is uploaded";
    include 'database.php';
    $sql = sprintf("INSERT INTO files (url, user_id, namee) VALUES ('%s', '%s', '%s')",$file, $_SESSION['userid'],$file_name);
    $conn->query($sql);
    // echo $sql;
    header("Location: ../profile.php");
}

else {

    echo "Problem uploading file";

}

?>