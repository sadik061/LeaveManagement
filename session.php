<?php
// Start the session
session_start();
if(isset($_COOKIE["remember"])) {
    if($_COOKIE["remember"]=="true"){
        $_SESSION["login"] = "true";
        $_SESSION["userid"]= $_COOKIE["id"];
        $_SESSION["role"] = $_COOKIE["role"];
    }
}

if(isset($_SESSION["login"])){
    if($_SESSION["login"]!="true"){
        header('Location: login.php?type=alert&message=Please Login first');
    }
}else{
    header('Location: login.php?type=alert&message=Please Login first');
}


?>