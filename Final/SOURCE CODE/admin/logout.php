
///**
// * Created by PhpStorm.
// * User: HP
// * Date: 5/10/2019
// * Time: 10:58 AM
// */

<?php
session_start();
session_destroy();
unset($_SESSION['lname']);
unset($_SESSION['fname']);
unset($_SESSION['email']);
unset($_SESSION['id']);
unset($_SESSION['role']);
header('location:index.php');

?>