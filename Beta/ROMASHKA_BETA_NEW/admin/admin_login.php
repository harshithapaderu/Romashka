<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/15/2019
 * Time: 3:32 PM
 */

session_start();
include("../db/config.php");

if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
    header('location:dashboard.php');
}

$is_login_failed = FALSE;
$conn=db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "$username";
    echo "$password";

    $query = "SELECT * FROM user WHERE email='$username' AND password='$password' AND role='admin' LIMIT 1";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);

    if ($row != null) {
        $_SESSION['fname'] = $row[2];
        $_SESSION['lname'] = $row[3];
        $_SESSION['email'] = $row[8];
        $_SESSION['id'] = $row[0];
        $_SESSION['role'] = $row[1];
        mysqli_close($conn);
        header('location:dashboard.php');
    }else{
        $is_login_failed = TRUE;
        mysqli_close($conn);
    }
}

?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Romashka Russian Language School</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
<!--<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href="../CSS/style.css" rel="stylesheet">
    <style>
        input[type=text], input[type=password], input[type=email] {
            width: 30%;
            border-radius: 15px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

    </style>


</head>
<body>

<?php include("include/header.php");?>
<h2 class="userLogin">Admin Login</h2>
<?php if($is_login_failed){ ?>
    <div class="alert alert-danger alert-dismissible center-block" style="width: 30%;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p > Username or Password is incorrect!!!</p>
    </div>
<?php } ?>
<form action="admin_login.php" method="post">


    <div class="container_login">

        <input type="email" placeholder="Enter Username" name="username" required>
        <br>
        <input type="password" placeholder="Enter Password" name="password" required>

        <br>

        <button type="submit" class="loginBtn">Login</button>
    </div>


</form>

<?php include("include/footer.php");?>
</body>
