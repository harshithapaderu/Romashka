
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: HP-->
<!-- * Date: 4/9/2019-->
<!-- * Time: 5:37 PM-->
<!-- */-->

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
	<link href="CSS/style.css" rel="stylesheet">

</head>
<body>

<!-- Navigation -->
<?php include("include/header.php");?>



<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>

	</ul>
	<div class="carousel-inner" style="height: 420px !important;">
		<div class="carousel-item active">
			<img class="img_slider"src="Images/header.png">
			<div class="carousel-caption">
				<h1 class="display-2">WELCOME TO THE RUSSUIAN LANGUAGE SCHOOL</h1>
				<h3>ROMASHKA</h3>
				<button type="button" class="btn btn-outline-light btn-lg">LEARN MORE</button>
			</div>
		</div>
		<div class="carousel-item">
			<img class="img_slider" src="Images/header2.png">
		</div>
	</div>
	</div>

<?php include("include/footer.php");?>

</body>
</html>
