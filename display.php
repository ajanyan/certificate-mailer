<!DOCTYPE html>
<html>
<head>

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

	<title>View Certificate</title>
</head>
<body>
	<?php
$db = mysqli_connect("localhost","root","root","sports");

$sql="SELECT * FROM certificate";
$res=mysqli_query($db,$sql);
//$num=mysqli_num_rows($res);
while($row=mysqli_fetch_assoc($res))
{
  $name = $row["Name"];
  $class = $row["Class"];
  $email = $row["Email"];
	 ?>
	 <script>
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {



        var xmlhttp1 = new XMLHttpRequest();
                xmlhttp1.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {



            /*      swal({
                    title: "Success",
                    text: "Mail Sent",
                    type: "success",
                    }, function(){
                        window.location.href = "index.php";
                    });*/


                    }
                };
                xmlhttp1.open("GET", "mail.php?name=<?php echo $name ?>&class=<?php echo $class ?>&email=<?php echo $email ?>" , true);
                xmlhttp1.send();



            }
        };
        xmlhttp.open("GET", "generate.php?name=<?php echo $name ?>&class=<?php echo $class ?>&email=<?php echo $email ?>" , true);
        xmlhttp.send();


 </script>
 <?php
}
echo "Completed";

  ?>
</body>
</html>
