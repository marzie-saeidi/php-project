<?php
$db = new mysqli('localhost', 'root', '', 'db-content');
$user=$_REQUEST['username'];
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$first=$_REQUEST['firstname'];
	$last=$_REQUEST['lastname'];
	$title=$_REQUEST['title'];
	$user=$_REQUEST['username'];
	$category=$_REQUEST['category'];
	$text=$_REQUEST['matn'];
	$query="INSERT INTO content SET firstname='$first',lastname='$last',title='$title',matn='$text',category='$category',username='$user' ";
		$result=$db->query($query);
		if (false===$result) {
			echo $db->error;
			exit;
	    }
	    header("location:detail.php?username=$user");
	    exit;
	
}
?><!DOCTYPE html>
<head>
  <title>new content page</title>
  <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style.css">
  <body>
    <div class="container">
         
      <table>
        <form method="POST"> 
        	<tr>
            	<td><LABEL>name : </LABEL></td><td><input type="text" name="firstname" ></td><br>
        	</tr>
        	<tr>
            	<td><LABEL>family : </LABEL></td><td><input type="text" name="lastname" ></td><br>
        	</tr>
        	<tr>
            	<td><LABEL>title : </LABEL></td><td><input type="text" name="title" ></td><br>
        	</tr>
        	<tr>
            	<td><LABEL>username : </LABEL></td><td><input type="text" name="username" ></td><br>
        	</tr>
        	<tr>
            	<td><LABEL>category : </LABEL></td><td><input type="text" name="category" ></td><br>
        	</tr>
        	<tr>
            	<td><LABEL>text : </LABEL></td><td><input type="text" name="matn" ></td><br>
        	</tr>
        	<tr>
        	   <td><input type="submit" name="save" value="save" style="width: 100px;background-color: yellow;border: none;"></td>
        	</tr>
        </form>
      </table> 
       
   </div>
</body>
</html>