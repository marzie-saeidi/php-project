<?php
session_start();
$db = new mysqli('localhost', 'root', '', 'db-content');
$user=$_REQUEST['username'];
echo "$user";
$result=$db->query("SELECT * from content INNER JOIN user on  content.username=user.username");
if (false === $result) {
        echo $db->error;
        exit;
}
$conts=$result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>content page</title>
  <body>
    <div class="container">
          
         <table>
            <tr>
                <th>number</th>
                <th>title</th>
                <th>time&date</th>
                <th>writer</th>
                <th>new content</th>
            </tr>
            <?php
             $i=1;
              foreach ($conts as $cont) {
                echo "<tr>
                       <td>$i</td>
                       <td><a href='detail.php?username=$cont[username]'>$cont[title]</a></td>
                       <td>$cont[time]</td>
                       <td>$cont[firstname] $cont[lastname]</td>
                       <td><h1><a href='new-content.php?username=$cont[username]'>مطلب جدید </a></h1></td> 
                     </tr>";
                      
               $i++;
              }
              echo "اگر هنوز مطلب  جدیدی برای نوشتن قرار نداده اید از طریق لینک زیر اقدام فرمایید.";
              echo "<br><a href='new-content.php?username=$user'>مطلب جدید </a>"
            ?>
        </table>
    <button><a href="logout.php">sign out</a></button>
</body>
</html>