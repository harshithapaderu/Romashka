<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: HP-->
<!-- * Date: 4/26/2019-->
<!-- * Time: 12:48 PM-->
<!-- */-->

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
        .row5 {
            width: 100%;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            margin-left: 1px;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 1px;
        }

        .container {
            padding: 0 16px;
        }
        .container5 {
            padding: 0 1px;
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
            margin-left: 12%;
            margin-right: 12%;

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
                            <h2>Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="col-sm-6 col-ms-6 col-xs-12 myCols">

                <div class="card">

                    <div class="row">
                        <div class="col-sm-5 col-ms-5 col-xs-12 myCols">

                            <img src="images/aa2.jpeg" alt="Jane" style="width:100%;height:200px;">
                        </div>

                        <div class="col-sm-7 col-ms-7 col-xs-12 myCols">


                            <div class="container5">
                                <h4>Russian Math</h4>
                                <p class="title1">Mathematics includes the study of such topics as quantity, structure, space, and change. Mathematicians seek and use....</p>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-ms-6 col-xs-12 myCols">

                <div class="card">

                    <div class="row">
                        <div class="col-sm-5 col-ms-5 col-xs-12 myCols">

                            <img src="images/science.png" alt="Jane" style="width:100%;height:200px;">
                        </div>

                        <div class="col-sm-7 col-ms-7 col-xs-12 myCols">


                            <div class="container5">
                                <h4>Russian Science</h4>
                                <p class="title1">The strength of Science and its online journal sites rests with the strengths of its community of authors, who provide....</p>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-sm-6 col-ms-6 col-xs-12 myCols">

                <div class="card">

                    <div class="row">
                        <div class="col-sm-5 col-ms-5 col-xs-12 myCols">

                            <img src="images/iucyrillic.png" alt="Jane" style="width:100%;height:200px;">
                        </div>

                        <div class="col-sm-7 col-ms-7 col-xs-12 myCols">


                            <div class="container5">
                                <h4>Russian Language</h4>
                                <p class="title1">Russian is the largest native language in Europe and the most geographically widespread language in Eurasia. It is the ....</p>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-ms-6 col-xs-12 myCols">

                <div class="card">

                    <div class="row">
                        <div class="col-sm-5 col-ms-5 col-xs-12 myCols">

                            <img src="images/lit.jpg" alt="Jane" style="width:100%;height:200px;">
                        </div>

                        <div class="col-sm-7 col-ms-7 col-xs-12 myCols">


                            <div class="container5">
                                <h4>Russian Literature</h4>
                                <p class="title1">Literature, a body of written works. The name has traditionally been applied to those imaginative works of poetry and prose....</p>
                                
                            </div>
                        </div>

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
