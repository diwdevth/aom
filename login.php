<?php
@session_save_path("tmp/");
@session_start();
if(!isset($_POST['send'])){
    header("Location: index.php");
    exit();
}else{
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    if($username == "diwdow" && $password == "diwdow"){
        $_SESSION['status'] = 1;
        header("Location: home.php");
        exit();
    }else{
        header("refresh: 0;url=index.php");
        exit();
    }
}
?>