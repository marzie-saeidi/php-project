<?php
$db = new mysqli('localhost', 'root', '', 'db-content');
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST") {
	
		  $pass=$db->real_escape_string($_REQUEST['password']);
      $user=$db->real_escape_string($_REQUEST['username']);
      $remember=isset($_POST['remember']);
      $hash=sha1($pass);
	    $query=" SELECT *FROM user WHERE username='$user' AND password='$hash'";
	    $result=$db->query($query);
	    if ($result===false) {
		    echo $db->error;
		    exit;
	    }	
      if($result->num_rows > 0){
        $users=$result->fetch_all(MYSQLI_ASSOC);
        setcookie('user', $user, time() +10);
        setcookie('password', $pass, time() +10);
        header("Location:content.php?username=$user"); 
        exit;
       }
      else{
      echo "invalid password or username";
      exit;  
      }
        
}
?><!DOCTYPE html>
<head>
  <title>sign in page</title>
  <meta charset="UTF-8">
  <style>
    .container{
        width: 100%;
        text-align: center;
        background-color: white;
        margin-top: 20px;
        position: relative;
       
    }
    table{
        border: 2px  solid black;
        text-align: center;
        margin-left: 10px;

    }
    td,th{
      border: 1px solid black;
      width: 120px;
    }
    a{
      text-decoration: none;
      color: black;
    }

  </style>
  <body>
    <div class="container">
        
      <table>
        <form method="POST"> 
        	
            <tr>
                <td><LABEL>USER NAME : </LABEL></td><td><input type="text" id="username" name="username" required></td><br>
            </tr>
        	<tr>
        	    <td><LABEL>PASSWORD : </LABEL></td><td><input type="password" id="password" name="password" required></td><br>
        	</tr>
        	<tr>
        	   <td><input type="submit" name="login" value="login" style="width: 120px;height:25px;background-color: black;color:white;border: none;"></td><td><label>Remember me </label><input type="checkbox" name="remember" value="1"></td>
        	</tr>
          <tr>
            <td></td><td><label><a href="forgertpass.php">forget password</a></label></td>
          </tr>
        </form>
      </table> 
   </div>
</body>
</html>