<?php
$db = new mysqli('localhost', 'root', '', 'db-content');
$user=$_REQUEST['username'];
$result=$db->query("SELECT * from content  where username='$user' ");
if (false === $result) {
        echo $db->error;
        exit;
}
$conts=$result->fetch_all(MYSQLI_ASSOC);
?><!DOCTYPE html>
<head>
  <title>detail page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
 
  
  <body>   
      <div class="container" style="width: 400px;height: 150px;background-color:#b7c8d9">    
        <?php
              foreach ($conts as $cont) {
                  echo "<tr>
                        <td>$cont[matn]</td>
                        <br>
                        <td><a onclick='return confirm(\"Are you sure?\");' href='delete.php?username=$cont[username]'>حذف </a>
                        <a href='edit.php?username=$cont[username]'>ویرایش </a></td>
                        <td><a href='submit-coment.php?username=$cont[username]'>درج نظر </a></td>
                        <td><a href='view-coment.php?username=$cont[username]'>مشاهده نظرات </a></td> 
                      </tr>";
                  
              } 

        ?>
      </div>
</body>
</html>
