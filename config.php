<?php
define('host', '127.0.0.1');
define('user', 'diwdow');
define('pass', '123456');
define('name', 'systemtime');
$conn = mysqli_connect(host, user, pass, name);
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>