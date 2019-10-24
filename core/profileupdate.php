<?php
// Start the session
session_start();
?>
<?php
$target_dir = "../uploads/";
$target_file = $target_dir . date('dmYHis') . round(microtime(true)) . basename($_FILES["fileToUpload"]["name"]);
$name = date('dmYHis') . round(microtime(true)) . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


<?php include 'database.php';
$sql = "UPDATE users SET user_name='" . $_POST["user_name"] . "', email='" . $_POST["email"] . "', password='" . $_POST["password"] . "', designation_id=" . $_POST["designation_id"] . ", image='" . date('dmYHis') . round(microtime(true)) .basename($_FILES["fileToUpload"]["name"]). "', facebook='" . $_POST["facebook"] . "', linkedin='" . $_POST["linkedin"] . "', skype='" . $_POST["skype"] . "' WHERE user_id=" . $_SESSION['userid'];
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: ../profile.php");
?>