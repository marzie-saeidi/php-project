<?php
$db = new mysqli('localhost', 'root', '', 'db-content');
session_start();
setcookie('user', null, time() + 1);
setcookie('password', null, time() + 1);
header("Location:signin.php");
 exit;
?>