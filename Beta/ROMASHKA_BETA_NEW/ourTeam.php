<!---->
<!--///**-->
<!--// * Created by PhpStorm.-->
<!--// * User: HP-->
<!--// * Date: 4/26/2019-->
<!--// * Time: 12:44 PM-->
<!--// */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Romashka Russian Language School</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <link href="css/style.css" rel="stylesheet">

    <meta name="viewport" content="width=60%, initial-scale=1">
    <style>

        .column1 {
            float: left;

            width: 100%;

            margin-bottom: 6px;
            padding: 10px 8px;
        }
        .row1 {

            width: 100%;
            margin-bottom: 6px;

            padding: 10px 10px;
        }

        .column {

            width: 33.33%;
            height: 400px;
            margin-bottom: 1px;
            padding: 10px 8px;
        }
        .row {
            width: 100%;
            margin-left: 1px;

            margin-bottom: 2px;
            padding: 10px 10px;

        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 10px;
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        .right {
            float: right;
            width: 300px;
            border: 3px solid #555555;
            padding: 10px;
        }
        .button:hover {
            background-color: #555;
        }

        .content1 {
            max-width: 100%;
            margin-left: 15%;
            margin-right: 15%;

            background-color: #eee;

            border: 4px solid #555555;

            align: center
        }
    </style>

</head>
<body>

<!-- Navigation -->
<?php include("include/header.php");?>
<section class="whyus">
    <div class="content1" >
        <div class="row1" >
            <div class="column1">
                <div class="card">
                    <div class="row">

                        <div class="container" style="width:100% ; text-align:center;">
                            <h2>Meet Our Team</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="column">
                <div class="card">
                    <img src="images/img1.jpg" alt="Jane" style="width:100%;height:130px;margin-bottom: 10px;">
                    <div class="container">
                        <h4>Jane Doe</h4>
                        <p class="title">Math Teacher</p>
                        <p class="title1">She is 30 year old very experienced teacher.</p>
                        <small>Jane@example.com</small>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/img2.jpg" alt="Mike" style="width:100%;height:130px;margin-bottom: 10px;">
                    <div class="container">
                        <h4>Mike Ross</h4>
                        <p class="title">Art Teacher</p>
                        <p class="title1">Experienced with unique teaching style</p>
                        <small>Mike@example.com</small>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/img3.jpg" alt="John" style="width:100%;height:130px;margin-bottom: 10px;">
                    <div class="container">
                        <h4>John Doe</h4>
                        <p class="title">Science Teacher</p>
                        <p class="title1">30 year old very experienced teacher.</p>
                        <small>John@example.com</small>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="column">
                <div class="card">
                    <img src="images/img1.jpg" alt="Jane" style="width:100%;height:130px;margin-bottom: 10px;">
                    <div class="container">
                        <h4>Jane Doe</h4>
                        <p class="title">Math Teacher</p>
                        <p class="title1">32 year old very experienced teacher.</p>
                        <small>Jane@example.com</small>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/img2.jpg" alt="Mike" style="width:100%;height:130px;margin-bottom: 10px;">
                    <div class="container">
                        <h4>Mike Ross</h4>
                        <p class="title">Art Teacher</p>
                        <p class="title1">30 year old very experienced teacher..</p>
                        <small>Mike@example.com</small>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/img3.jpg" alt="John" style="width:100%;height:130px;margin-bottom: 10px;">
                    <div class="container">
                        <h4>John Doe</h4>
                        <p class="title">Science Teacher</p>
                        <p class="title1">30 year old very experienced teacher.</p>
                        <small>John@example.com</small>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>


<?php include("include/footer.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>