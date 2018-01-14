<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

	<title>Certificate Mailer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body background="images/bg.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<br>
				<div class="jumbotron">

		<h1 align="center">MAIL CERTIFICATE</h1><br>
<form action="display.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputName4">Name</label>
      <input type="text" class="form-control" id="inputName4" placeholder="Name" name="name" required="">
    </div>
 
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required="">
    </div>
     </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputSemester">Semester</label>
       <select id="inputSemester" class="form-control" name="sem">
        <option selected>S1</option>
        <option>S2</option>
        <option>S3</option>
        <option>S4</option>
        <option>S5</option>
        <option>S6</option>
        <option>S7</option>
        <option>S8</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputBranch">Branch</label>
      <select id="inputBranch" class="form-control" name="branch">
        <option selected>CSE</option>
        <option>EEE</option>
        <option>ME</option>
        <option>EC</option>
        <option>CE</option>
        <option>IC</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEvent">Event</label>
      <select id="inputEvent" class="form-control" name="event">
        <option selected>100m</option>
        <option>200m</option>
        <option>400m</option>
        <option>800m</option>
        <option>1500m</option>
        <option>5000m</option>
        <option>High Jump</option>
        <option>Long Jump</option>
        <option>Triple Jump</option>
        <option>Shotput</option>
        <option>Discus Throw</option>
        <option>Hammer Throw</option>
        <option>Javalin Throw</option>
        <option>1500m Walk</option>
      </select>
    </div>
  </div>

 
  <button type="submit" class="btn btn-primary">Send Mail</button>

</form>




					
				</div>
				
			</div>
			<div class="col-md-2"></div>
		</div>
		
	</div>




<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>