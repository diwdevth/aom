<?php
@session_save_path("tmp/");
@session_start();
unset($_SESSION);
@session_destroy();
echo "<script>alert('คุณได้ออกจากส่วนของผู้แลระบบแล้ว');</script>";
header("location: index.php");
exit();
?>