<?php
// Start the session
session_start();

$target_dir = "../uploads/";
$target_file = $target_dir . date('dmYHis') . round(microtime(true)) . basename($_FILES["fileToUpload"]["name"]);
$name = date('dmYHis') . round(microtime(true)) . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $msg = "File is an image - " . $check["mime"] . ".";
        echo "<script type='text/javascript'>
                alert('$msg');
                window.location.href = '../profile.php';
                </script>";
        $uploadOk = 1;
    } else {
        $msg = "File is not an image.";
        echo "<script type='text/javascript'>
                alert('$msg');
                window.location.href = '../profile.php';
                </script>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $msg = "Sorry, file already exists.";
    echo "<script type='text/javascript'>
            alert('$msg');
            window.location.href = '../profile.php';
            </script>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $msg = "Sorry, your file is too large.";
    echo "<script type='text/javascript'>
            alert('$msg');
            window.location.href = '../profile.php';
            </script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != ""){
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        echo "<script type='text/javascript'>
                alert('$msg');
                window.location.href = '../profile.php';
                </script>";
        $uploadOk = 0;
    }
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $sql = "UPDATE users SET user_name='%s', email='%s',phone='%s',blood='%s', password='%s', designation_id='%s', facebook='%s', linkedin='%s', skype='%s' WHERE user_id='%s'";

    $query = sprintf($sql,$_POST["user_name"],$_POST["email"],$_POST["phone"],$_POST["blood"],$_POST["password"],$_POST["designation_id"],$_POST["facebook"],$_POST["linkedin"],$_POST["skype"],$_SESSION['userid']);
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        $sql = "UPDATE users SET user_name='%s', email='%s',phone='%s',blood='%s', password='%s', designation_id='%s', image='%s', facebook='%s', linkedin='%s', skype='%s' WHERE user_id='%s'";

        $query = sprintf($sql,$_POST["user_name"],$_POST["email"],$_POST["phone"],$_POST["blood"],$_POST["password"],$_POST["designation_id"],date('dmYHis') . round(microtime(true)) .basename($_FILES["fileToUpload"]["name"]),$_POST["facebook"],$_POST["linkedin"],$_POST["skype"],$_SESSION['userid']);
    } else {
        //echo "Sorry, there was an error uploading your file.";
        $sql = "UPDATE users SET user_name='%s', email='%s',phone='%s',blood='%s', password='%s', designation_id='%s', facebook='%s', linkedin='%s', skype='%s' WHERE user_id='%s'";

        $query = sprintf($sql,$_POST["user_name"],$_POST["email"],$_POST["phone"],$_POST["blood"],$_POST["password"],$_POST["designation_id"],$_POST["facebook"],$_POST["linkedin"],$_POST["skype"],$_SESSION['userid']);
    }
}

include 'database.php';
mysqli_query($conn, $query);
mysqli_close($conn);
header("Location: ../profile.php");
exit();
?>