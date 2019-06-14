<?php
session_start();
include("../db/config.php");
if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])) {
    header('location:admin/admin-login.php');
}
$conn= db_connect();
$query = "SELECT * FROM user WHERE role='student'";
$result = mysqli_query($conn, $query);


?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="../css/adminStyle.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href="../css/adminStyle.css"  rel="stylesheet" type="text/css">
    <script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').click(function(){
            $("#navigation").toggleClass("hidden-xs");
        });
    });

</script>




</head>

<body class="home">

<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation" style="background-color: #05935d !important;">

            <div class="navi" >

                <ul>
                    <li style="background-color: white;"><a href="../index.php"><img src="../images/logo.png" style="height: 70px; width: 220px; padding: 10px;" ></a></li>
                    <li class="active"><a href="dashboard.php">Students Detail</a></li>
                    <li><a href="registeredTeachers.php">Teachers Detail</a></li>
                    <li><a href="uploadImages.php">Add Images to Gallery</a></li>
                    <li><a href="deleteImages.php">Delete Images from Gallery</a></li>
                    <li><a href="message.php">Message</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">

            <div class="row">
                <header>
                    <div class="col-md-7">
                        <nav class="navbar-default pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>
                        <div>
                            <h3>Welcome Admin</h3>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside">
                            <ul class="list-inline header-top pull-right">

                                <li class="dropdown">


                                        <img src="../images/userLogo.png" alt="user">
                                        <div class="dropdown-content">

                                            <a href="logout.php" >logout</a>

                                        </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
            <div class="user-dashboard">
                <h1>Details of Registered Students</h1>

                <div class="row">
                    <div class="col-md-12 py-5">
                        <table class="table">
                            <thead id="table-header">
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Street</th>
                                <th scope="col">State</th>
                                <th scope="col">zip</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?= $row["fname"] ?></td>
                                        <td><?= $row["lname"] ?></td>
                                        <td><?= $row["phone"] ?></td>
                                        <td><?= $row["email"] ?></td>
                                        <td><?= $row["street"] ?></td>
                                        <td><?= $row["state"] ?></td>
                                        <td><?= $row["zip"] ?></td>
                                    </tr>
                                <?php } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



</div>

</body>