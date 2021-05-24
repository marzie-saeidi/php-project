<?php
$db = new mysqli('localhost', 'root', '', 'db-content');
if ($_SERVER['REQUEST_METHOD']=="POST") {
	
		$firstname=$_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
        $user=$_REQUEST['username'];
        $hash=sha1($password);
        $query="INSERT INTO user SET firstname='$firstname',lastname='$lastname',email='$email',password='$hash',username='$user'";
        $result1=$db->query($query);
        if (false===$result1) {
            echo $db->error;
             exit;
        }
}
?><!DOCTYPE html>
<head>
  <title>sign up page</title>
  <meta charset="UTF-8">
  <body>
    <div class="container">
          
          <a href="index.php">back to home</a>
      <table>
        <form method="POST"> 
        	<tr>
            	<td><LABEL>NAME : </LABEL></td><td><input type="text" name="firstname" required></td><br>
        	</tr>
        	<tr>
        		<td><LABEL>FAMILY : </LABEL></td><td><input type="text" name="lastname" required></td><br>
        	</tr>
        	<tr>
        	    <td><LABEL>EMAIL : </LABEL></td><td><input type="email" name="email" required></td><br>
        	</tr>
            <tr>
                <td><LABEL>USER NAME : </LABEL></td><td><input type="text" name="username" required></td><br>
            </tr>
        	<tr>
        	    <td><LABEL>PASSWORD : </LABEL></td><td><input type="password" name="password" required></td><br>
        	</tr>
        	<tr>
        	   <td><input type="submit" name="save" value="save" style="width: 100px;background-color: yellow;border: none;"></td>
        	</tr>
        </form>
      </table> 
       
   </div>
</body>
</html>