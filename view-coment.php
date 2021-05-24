<?php
$db = new mysqli('localhost', 'root', '', 'db-content');
$user=$_REQUEST['username'];
$result=$db->query("SELECT * from coment  where username='$user' ");
if (false === $result) {
        echo $db->error;
        exit;
}
$conts=$result->fetch_all(MYSQLI_ASSOC);
if ($result->num_rows == 0) {
  echo "There are no comments to display!!!";
}

?><!DOCTYPE html>
<head>
  <title>view-coment page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="UTF-8">
  <body>   
      <div class="container">    
        <?php
              foreach ($conts as $cont) {  
                  echo"<table>
                        <tr>
                            <th>name</th>
                            <th>content</th>
                        </tr>
                        <tr>
                            <td>$cont[username]</td>
                            <td>$cont[coment]</td>
                        </tr>
                      </table>";
              } 
        ?>
      </div>
</body>
</html>