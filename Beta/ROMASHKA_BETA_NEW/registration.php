
<!--///**-->
<!--// * Created by PhpStorm.-->
<!--// * User: HP-->
<!--// * Date: 4/24/2019-->
<!--// * Time: 12:46 PM-->
<!--// */-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Romashka Russian Language School</title>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
<!--    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
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
<div class="regBackImg">
<h2 class="userReg" style="color: white">User Registration</h2>

<form action="registration.php" method="post">

    <div class="container">

        <input type="text" placeholder="Enter First Name" name="fname" required>
        <br>
        <input type="text" placeholder="Enter Last Name" name="lname" required>
        <br>
        <input type="email" placeholder="Enter Email Address" name="psw" required>
        <br>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
        <input type="password" placeholder="Enter Confirm password" name="confirmpsw" required>
        <br>

        <input type="text" placeholder="Enter Phone Number" name="phn" maxlength="10" required>
        <br>
        <input type="text" placeholder="Enter Street Address" name="streetAdd" required>
        <br>

<!--        <input type="text" placeholder="Enter State" name="state" required>-->

        <select name="state" class="dropdown_form">
            <option value="">Please Select State</option>
            <option value="qld">QLD</option>
            <option value="nsw">NSW</option>
            <option value="saustralia">SA</option>
            <option value="vic">VIC</option>
            <option value="wa">WA</option>
        </select>
        <br>



    <button  class="regBtn" type="submit">Sign Up</button>
    </div>


</form>
</div>
<?php include("include/footer.php");?>
</body>
