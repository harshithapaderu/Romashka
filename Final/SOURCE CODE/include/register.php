<?php

session_start();

include_once('config.php');



if(isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phone'], $_POST['street'], $_POST['zip'], $_POST['state'])) 

{

    //make the database connection

    $conn  = db_connect();

    

    $fname = $conn -> real_escape_string($_POST['fname']);

    $lname = $conn -> real_escape_string($_POST['lname']);

    $email = $conn -> real_escape_string($_POST['email']);

    $phone = $conn -> real_escape_string($_POST['phone']);

    $street = $conn -> real_escape_string($_POST['street']);

    $zip = $conn -> real_escape_string($_POST['zip']);

    $state = $conn -> real_escape_string($_POST['state']);

    $email_exists = "SELECT * FROM user where email='$email'";
    $phone_exists = "SELECT * FROM user where phone='$phone'";
    $unique_email = mysqli_query($conn, $email_exists);
    $unique_phone = mysqli_query($conn, $phone_exists);  
              
    if(mysqli_num_rows($unique_email)>0) 
      {
        mysqli_close($conn);
        echo "<script>
        alert('Email already registered. Please try again!');
        window.location.href='http://romashka.ictatjcub.com/registration.php';  
        </script>";
      } 

    if(mysqli_num_rows($unique_phone)>0) 
      {
        mysqli_close($conn);
        echo "<script>
        alert('Phone number already registered. Please try again!');
        window.location.href='http://romashka.ictatjcub.com/registration.php';  
        </script>";
      } 
    

   

    //create an insert query

    $sql = "insert into user (fname, lname, email, phone, street, zip, state)

			VALUES ('$fname', '$lname', '$email', '$phone', '$street', '$zip', '$state')";

   //execute the query

    if($conn -> query($sql))

    {

     echo "<script>
     alert('REGISTRATION SUCCESSFUL! We will contact you soon regarding your login details. You will now be redirected to our Home Page. Thank You!');
     window.location.href='http://romashka.ictatjcub.com/index.php';  
     </script>";

    }

    $conn -> close();

}



else {

    die("REGISTRATION UNSUCCESSFUL. PLEASE TRY AGAIN");

}

?>
