<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
 
 <meta charset="utf-8">
  
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>Romashka Russian Language School</title>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  
<link rel="stylesheet" href="CSS/Resisstyles.css" type="text/css">
</head>


<body onLoad="run_first()">



<!-- Navigation -->


<?php include("include/header.php");?>
<div id="slides" class="carousel slide" data-ride="carousel">
 
 <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
  
  <li data-target="#slides" data-slide-to="1"></li>
   
 
  </ul>

<div class="simple-form">

<form action="register.php" method="post">
 
 <input type="text" name="Fname" id="button" placeholder="First Name" required>
<br><br>
  
<input type="text" name="Sname" id="button" placeholder="Surname" required>
<br><br>
 
 <input type="text" name="Pnum" id="button" placeholder="Phone Number" required>
<br><br>
 
 <input type="email" name="email" id="button" placeholder="Email" required>
<br><br>
  
<input type="text" name="zip" id="button" placeholder="ZIP" required>
<br><br>
 
 <input type="text" name="street" id="button" placeholder="Street" required>
<br><br>

  <input type="text" name="state" id="button" placeholder="State" required>
<br><br>
  
<input type="Submit" value="Register" id="but">

</form>

</div>

    <?php include("include/footer.php");?>
</body>

</html>