<?php
$db= new mysqli('localhost','root','','db-content');
$user=$_REQUEST['username'];
if($_SERVER['REQUEST_METHOD']=="POST"){
   $txt=$_REQUEST['text'];
   $query="UPDATE content SET matn='$txt' where username='$user' ";
   $result=$db->query($query);
   if (false === $result) {
        echo $db->error;
        exit;
   }
   header("Location:content.php");
   exit;
}
$result=$db->query("SELECT *FROM content where username='$user' ");
if (false === $result) {
        echo $db->error;
        exit;
}
$cont=$result->fetch_assoc();
?><!DOCTYPE html>
<head>
  <title>add student page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
  <body>
    <div class="container">
          
      <table>

        <form method="POST"> 
         
        	<tr>
            	<td><input type="text" name="text" value="<?php echo $cont['matn']?>" style="width: 500px;height: 50px"></td><br>
        	</tr>
        	<tr>
        	   <td><input type="submit" name="send" value="save" style="width: 100px;background-color: yellow;border: none;"></td>
        	</tr>
        </form>
      </table> 
        <!-- <button><a href="index1.php">back to firstpage</a></button> -->
   </div>
</body>
</html>