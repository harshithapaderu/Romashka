<?php
	//must appear BEFORE the <html> tag
	session_start();
	include_once('include/config.php');	
	
 echo "Your Login Name or Password is invalid. Please Try Again.";
  echo "<p><a href=\"login.php\"> LOGIN </a></p>";
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
	
<link href="CSS/loginstyles.css" rel="stylesheet">

</head>
<body onLoad="run_first()">


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

	<div class="container-fluid">
	
	<a class="navbar-brand" href="index.html"><img src="logo.png"></a>
	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	
		<span class="navbar-toggler-icon">
				

			</span> 
			
	
		</button>
		
	<div class="collapse navbar-collapse" id="navbarResponsive">
	
			<ul class="navbar-nav ml-auto">
	
				<li class="nav-item active">
	
					<a class="nav-link" href="index.html">HOME</a>
	
				</li>
				
	<li class="nav-item">
				
		<a class="nav-link" href="#">WHY US?</a>
	
				
				
	</li>

					<li class="nav-item">
	
					<a class="nav-link" href="#">CONTACT US</a>
	
				</li>
			
		<li class="nav-item">
		
				<a class="nav-link" href="#">BLOG</a>

					</li>
	
				<li class="nav-item">
	
					<a class="nav-link" href="#">GALLERY</a>

					</li>
		
		</ul>
		
	</div>
	
		</div>

	
		</nav>



<div id="slides" class="carousel slide" data-ride="carousel">

	<ul class="carousel-indicators">
		
<li data-target="#slides" data-slide-to="0" class="active"></li>

		<li data-target="#slides" data-slide-to="1"></li>

		
	</ul>
	


<!--- Welcome Section -->


<!--- Connect -->
<div class="content">
  
  <footer id="myFooter">
    
    <div class="container-fluid">
     
       <div class="row">
             
   <div class="col-sm-3 myCols">
           
         <h4>RUSSIAN LANGUAGE SCHOOL</h4>
	
				<h5>ROMAKSHA</h5>
		
			<h6>6 Lawson St, Southport</h6>
       
           </div>
		
		<div class="col-sm-6 myCols">
       
          </div>
                               
     
           <div class="col-sm-3 myCols1">
       
             <h5>GET IN TOUCH</h5>
              
    	 <a href="#"><i class="fab fa-facebook"></i></a>
	
				<a href="#"><i class="fab fa-linkedin"></i></a>
	
				<a href="#"><i class="fab fa-instagram"></i></a>
    
            </div>
            </div>
        </div>
		</div>    
		

		<style>
	
	#myFooter {
	background-color: #ffffff;
	color:black;
}



#myFooter ul{
	list-style-type: none;
    padding-left: 0;
    line-height: 1.2;

}


#myFooter h5{
	font-size: 20px;
    color: black;
    font-weight: bold;
    margin-top: 5px;
}
			

#myFooter h4{
	font-size: 22px;
    color: black;
    font-weight: bold;
    margin-top: 5px;
}
	
#myFooter h6{
	font-size: 18px;
    color: black;
    font-weight: bold;
    margin-top: 5px;
}		
			
			

#myFooter a{
	color:#d2d1d1;
	text-decoration: none;
}


#myFooter a:hover,
 #myFooter a:focus{
	text-decoration: none;
	color:black;
}


#myFooter .myCols{
	text-align: left;
	font-size: 28px;
}


#myFooter .myCols1{
	text-align: right;
	font-size: 28px;
}

@media screen and (max-width: 767px)
{
	#myFooter {
		text-align: center;
	}
}


html{
	height: 100% !important;
}


</style>


</body>

</html>