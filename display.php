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
   	  $name = $_POST["name"];
      $sem = $_POST["sem"];
      $branch=$_POST["branch"];
      $event = $_POST["event"];
      $email = $_POST["email"];

	 ?>
	 <script>
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {

				

        var xmlhttp1 = new XMLHttpRequest();
                xmlhttp1.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {



                    swal({
                    title: "Success",
                    text: "Mail Sent",
                    type: "success",
                    }, function(){
                        window.location.href = "index.php";
                    });
                    
                        
                    }
                };
                xmlhttp1.open("GET", "mail.php?name=<?php echo $name ?>&sem=<?php echo $sem ?>&branch=<?php echo $branch ?>&event=<?php echo $event ?>&email=<?php echo $email ?>" , true);
                xmlhttp1.send();


                
            }
        };
        xmlhttp.open("GET", "generate.php?name=<?php echo $name ?>&sem=<?php echo $sem ?>&branch=<?php echo $branch ?>&event=<?php echo $event ?>&email=<?php echo $email ?>" , true);
        xmlhttp.send();

	 
 </script>
</body>
</html>
