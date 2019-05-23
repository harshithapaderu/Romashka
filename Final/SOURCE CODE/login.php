<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/15/2019
 * Time: 3:32 PM
 */

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Romashka Russian Language School</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <link href="css/style.css" rel="stylesheet">



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
<h2 class="userLogin">User Login</h2>

<form action="admin_login.php" method="post">


    <div class="container_login">

        <input type="text" placeholder="Enter Username" name="uname" required>
<br>
        <input type="password" placeholder="Enter Password" name="psw" required>

<br>

    <button type="submit" class="loginBtn">Login</button>
    </div>


</form>

<?php include("include/footer.php");?>
</body>
