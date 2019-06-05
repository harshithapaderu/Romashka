

<?php
session_start();
include("../db/config.php");
if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])) {
    header('location:admin/admin-login.php');
}
$conn=db_connect();

if (isset($_POST["submit"])) {
       $allowed_image_extension = array("png","jpg","jpeg");
    $fileName = $_FILES['file']['name'];
    $tempName = $_FILES['file']['tmp_name'];
    $caption = $_POST['caption'];
    $folder = "uploadedImage/" . $fileName;


    // Get image file extension
    $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG, JPG and JPEG are allowed."
        );

    }    // Validate image file size
    else if (($_FILES["file"]["size"] > 5000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 5MB"
        );
    }    // Validate image file dimension
     else {
        $target = "uploadedImage/" . basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
            $query = "INSERT INTO gallery(image_caption, image_dir)" . " VALUES('$caption','$folder')";
            $data = mysqli_query($conn, $query);
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
}
?>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href="../css/adminStyle.css"  rel="stylesheet" type="text/css">
    <script type="text/javascript" language="JavaScript">
        $(document).ready(function(){
            $('[data-toggle="offcanvas"]').click(function(){
                $("#navigation").toggleClass("hidden-xs");
            });
        });

    </script>
<style>

    .test{
        display: inline-block;
    }
    label {
        /* Other styling... */
        text-align: right;
        clear: both;
        float:left;
        margin-right:15px;
    }
    .uploadBtn {
        background-color: #05935d;
        border-radius: 15px;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        width: 120px;
        border: none;
        cursor: pointer;
    }

    .response {
        padding: 10px;
        margin-top: 10px;
        border-radius: 2px;
    }

    .error {
        background: #fdcdcd;
        border: #ecc0c1 1px solid;
    }

    .success {
        background: #c5f3c3;
        border: #bbe6ba 1px solid;
    }

</style>


</head>

<body class="home">
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation" style="background-color: #05935d !important;">

            <div class="navi" >
                <ul>
                    <li style="background-color: white;"><img src="../images/logo.png" style="height: 70px; width: 220px; padding: 10px;" ></li>
                    <li><a href="dashboard.php">Students Detail</a></li>
                    <li><a href="registeredTeachers.php">Teachers Detail</a></li>
                    <li  class="active"><a href="uploadImages.php">Add Images to Gallery</a></li>
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


                                    <button class="dropbtn"><img src="../images/userLogo.png" alt="user"></button>
                                    <div class="dropdown-content">

                                        <a href="logout.php">logout</a>

                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
            <div class="user-dashboard">
                <h1>Add Images to Gallery</h1>


                <form action="uploadImages.php" method="POST" enctype="multipart/form-data" id="image_form">
<!--                <div class="row">-->
<!--                    <div class="col-md-12 py-5">-->

                        <div class="uploadImages">
                           <label for="image"> Please select an image to upload: </label><input type="file" name="file"><br>
                          <label> Caption: </label><input type="text" name="caption"><br>
                            <input  class="uploadBtn" type="submit" value="Upload Image" name="submit">
                        </div>
<!--                    </div>-->
<!---->
<!--                </div>-->
                </form>
                <?php if(!empty($response)) { ?>
                    <div class="response <?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
                <?php }?>
            </div>
        </div>
    </div>

</div>
</body>