<?php
session_start();
include_once('include/config.php');

if(isset($_POST['Fname'], $_POST['Sname'], $_POST['Pnum'], $_POST['email'], $_POST['zip'], $_POST['street'], $_POST['state'])) 
{
    //make the database connection
    $conn  = db_connect();

    $Fname = $conn -> real_escape_string($_POST['Fname']);
    $Sname = $conn -> real_escape_string($_POST['Sname']);
    $Pnum = $conn -> real_escape_string($_POST['Pnum']);
    $email = $conn -> real_escape_string($_POST['email']);
    $zip = $conn -> real_escape_string($_POST['zip']);
    $street = $conn -> real_escape_string($_POST['street']);
    $state = $conn -> real_escape_string($_POST['state']);
    //create an insert query
    $sql = "insert into registration (Fname, Sname, Pnum, email, zip, street, state)
			VALUES ('$Fname', '$Sname', '$Pnum', '$email', '$zip', '$street', '$state')";
   //execute the query
    if($conn -> query($sql))
    {
     //echo "<h1><center>Registration Successful!</center></h1>";
    }


    $conn -> close();
}

else {
    die("Input error");
}
?>

<html>
<title> Registration Successful </title>
<body>
<br><br><br>
<h1><center>Registration Successful!</center></h1>
<br><br><br>
<br><br><br>
<h3><center><a href="login.php"> You can login here! </a></center></h3>
<br><br><br>
<br><br><br>

<h1> <center> PAGE UNDER CONSTRUCTION... PLEASE COME BACK LATER! :) </center> </h1>
<br><br><br>
<h2> <right> <a href="index.html"> Go back to Home Page </a> <right> </h2>

</body>
</html>