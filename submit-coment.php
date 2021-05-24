<?php
$db = new mysqli('localhost', 'root', '', 'db-content');
$user=$_REQUEST['username'];
if ($_SERVER['REQUEST_METHOD']=="POST") {
  $coment=$_REQUEST['coment'];
  $query="INSERT INTO coment SET  username='$user' ,coment='$coment' ";
  $result=$db->query($query);
  if (false===$result) {
    echo $db->error;
    exit;
  }
}
?><!DOCTYPE html>
<head>
  <title>submit-coment page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
  <body>   
      <form method="POST">
        <table>
          <tr>
             <br><br><br><br><br><td><label>coment :</label></td><td><input type="text" name="coment" style="width: 250px;height: 100px;background-color:#b7c8d9 "></td>
            <td><input type="submit" name="send" value="ثبت " ></td>
         </tr>
         </table>
      </form>
      <a href="content.php">back to content page</a>
</body>
</html>