<?php
$db=new mysqli('localhost','root','','db-content');
$user= $_REQUEST['username'];
$result=$db->query("SELECT *FROM content inner join coment on content.username=coment.username ");
if (false===$result) {
	echo $db->error;
	exit;
}

$result=$db->query("DELETE FROM content WHERE username='$user' ");
if (false===$result) {
	echo $db->error;
	exit;
}
$result=$db->query("DELETE FROM coment WHERE username='$user' ");
if (false===$result) {
	echo $db->error;
	exit;
}
header("Location:content.php");
exit;