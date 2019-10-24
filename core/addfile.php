<?php
// Start the session
session_start();
?>
<?php
$targetfolder = "../uploads/documents/";

$targetfolder = $targetfolder . basename( $_FILES['fileToUpload2']['name']) ;
$file=basename( $_FILES['fileToUpload2']['name']);

if(move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $targetfolder))
{

    echo "The file ". basename( $_FILES['fileToUpload2']['name']). " is uploaded";
    include 'database.php';
    $stmt = $conn->prepare("INSERT INTO files (url, user_id, namee) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $file, $_SESSION['userid'],$_POST["name"]);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: ../profile.php");
}

else {

    echo "Problem uploading file";

}

?>