<?php
@session_save_path("tmp/");
@session_start();
//isset($_POST['save']) && 
if(!isset($_SESSION['status'])){
    header("location: home.php");
    exit();
}else
{
    require_once("config.php");
    mysqli_query($conn, "insert into time (startday, clockStart, status) values ('$_POST[startday]', '$_POST[clockStart]', '1');");
    mysqli_close($conn);
}
?>

