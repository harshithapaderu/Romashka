<?php
	//must appear BEFORE the <html> tag
	session_start();
	include_once('include/config.php');	
	
	if (isset($_SESSION['valid_user'])) {
		header("location:success.php");
	}	
	//make the database connection
	$conn  = db_connect();
	     
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $username = $conn -> real_escape_string($_POST['username']);
      $password = $conn -> real_escape_string($_POST['password']); 
     	  
	  //make a query to check if user login successfully
	  $sql = "select * from login where username='$username' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;
	  $row = $result -> fetch_assoc();
	  if ($numOfRows == 1) {
         $_SESSION['valid_user'] = $username;         
         header("location: login.php");
      }
else {
		  header("location:validate.php");
      }
   }
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
    <link href="CSS/style.css" rel="stylesheet">

</head>
<body onLoad="run_first()" >


<!-- Navigation -->

<?php include("include/header.php");?>



<div class="outer">
<div id="login-box" >
 
<form action="login.php" method="post">
     <div class="left-box">

        <h1> Login Into Your Account</h1>
    
      
          <input type="text" name="username" placeholder="Username"/>
   
       <input type="password" name="password" placeholder="Password"/>
        

          
          <input type="submit" name="login-button" value="Login"/>
       
 
        </div>
   
     <div class="right-box">
     
     <li><a href="registration.php"><span class="glyphicon glyphicon-log-in">
</span> Don't have an account? Sign up with us!!</a>
</li>
        
     
   <button class="social facebook">Sign In with Facebook</button>    
 
       <button class="social twitter">Sign In with Twitter</button> 
  
      <button class="social google">Sign In with Google+</button> 
            
   
     
        </div>
    
    <div class="or">OR</div>
 
   </div>
</div>

<!--- Welcome Section -->


<!--- Connect -->
<!--<div class="content">-->
<!--  -->
<!--  <footer id="myFooter">-->
<!--    -->
<!--    <div class="container-fluid">-->
<!--     -->
<!--       <div class="row">-->
<!--             -->
<!--   <div class="col-sm-3 myCols">-->
<!--           -->
<!--         <h4>RUSSIAN LANGUAGE SCHOOL</h4>-->
<!--	-->
<!--				<h5>ROMASHKA </h5>-->
<!--		-->
<!--			<h6>6 Lawson St, Southport</h6>-->
<!--       -->
<!--           </div>-->
<!--		-->
<!--		<div class="col-sm-6 myCols">-->
<!--       -->
<!--          </div>-->
<!--                               -->
<!--     -->
<!--           <div class="col-sm-3 myCols1">-->
<!--       -->
<!--             <h5>GET IN TOUCH</h5>-->
<!--              -->
<!--    	 <a href="https://www.facebook.com/schoolromashka/"><i class="fab fa-facebook"></i></a>-->
<!--	-->
<!--				<a href="#"><i class="fab fa-linkedin"></i></a>-->
<!--	-->
<!--				<a href="#"><i class="fab fa-instagram"></i></a>-->
<!--    -->
<!--            </div>-->
<!--            </div>-->
<!--        </div>-->
<!--		</div>    -->
<!--		-->
<!---->
<!--		<style>-->
<!--	-->
<!--	#myFooter {-->
<!--	background-color: #ffffff;-->
<!--	color:black;-->
<!--}-->
<!---->
<!---->
<!---->
<!--#myFooter ul{-->
<!--	list-style-type: none;-->
<!--    padding-left: 0;-->
<!--    line-height: 1.2;-->
<!---->
<!--}-->
<!---->
<!---->
<!--#myFooter h5{-->
<!--	font-size: 20px;-->
<!--    color: black;-->
<!--    font-weight: bold;-->
<!--    margin-top: 5px;-->
<!--}-->
<!--			-->
<!---->
<!--#myFooter h4{-->
<!--	font-size: 22px;-->
<!--    color: black;-->
<!--    font-weight: bold;-->
<!--    margin-top: 5px;-->
<!--}-->
<!--	-->
<!--#myFooter h6{-->
<!--	font-size: 18px;-->
<!--    color: black;-->
<!--    font-weight: bold;-->
<!--    margin-top: 5px;-->
<!--}		-->
<!--			-->
<!--			-->
<!---->
<!--#myFooter a{-->
<!--	color:#d2d1d1;-->
<!--	text-decoration: none;-->
<!--}-->
<!---->
<!---->
<!--#myFooter a:hover,-->
<!-- #myFooter a:focus{-->
<!--	text-decoration: none;-->
<!--	color:black;-->
<!--}-->
<!---->
<!---->
<!--#myFooter .myCols{-->
<!--	text-align: left;-->
<!--	font-size: 28px;-->
<!--}-->
<!---->
<!---->
<!--#myFooter .myCols1{-->
<!--	text-align: right;-->
<!--	font-size: 28px;-->
<!--}-->
<!---->
<!--@media screen and (max-width: 767px)-->
<!--{-->
<!--	#myFooter {-->
<!--		text-align: center;-->
<!--	}-->
<!--}-->
<!---->
<!---->
<!--html{-->
<!--	height: 100% !important;-->
<!--}-->
<!---->
<!---->
<!--</style>-->
    <?php include("include/footer.php");?>

</body>

</html>