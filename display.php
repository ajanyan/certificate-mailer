<!DOCTYPE html>
<html>
<head>
	<title>View Certificate</title>
</head>
<body>
	<?php 
   	  $name = $_POST["name"];
      $sem = $_POST["sem"];
      $branch=$_POST["branch"];
      $event = $_POST["event"];
      $email = $_POST["email"];
      echo"<img src='generate.php?name=$name &sem=$sem&branch=$branch&event=$event' width=1000 height=600";
      echo "<br>";
	  require("mail.php");      

	 ?>
	 
 
</body>
</html>