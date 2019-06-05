<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: HP-->
<!-- * Date: 4/26/2019-->
<!-- * Time: 12:48 PM-->
<!-- */-->

<?php
include("db/config.php");

$conn = db_connect();
$query = "SELECT * FROM gallery ORDER BY uploaded_date DESC ";
$result = mysqli_query($conn, $query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Romashka Russian Language School</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <link href="css/style.css" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .uploadedImg{
            height: 220px;
            width:260px;
            padding: 10px;
            margin-left: 0.2em;


        }
        .column1 {

            width: 100%;

            padding-top: 15px;
            padding-bottom: 20px;
        }
        .row1 {

            width: 100%;
            margin-bottom: 6px;

        }

        .column {
            width: 100%;
            padding: 10px 8px;

        }
        .row {
            width: 100%;
            margin-left: 1px;

            padding: 10px 10px;

        }
        /*@media screen and (max-width: 1690px) {*/
            /*height: 220px;*/
            /*width: 260px;*/
        /*}*/




        @media screen and (min-width: 400px) {
            .uploadedImg{
                width: 150px;
                height: 150px;

            }
            .column{
                width: 100%;
                display: block;
            }
        }

        @media screen and (min-width: 800px) {
            .uploadedImg{
                width: 260px;

                height: 220px;
            }
            .column{
                width: 100%;
                display: block;
            }
        }



        .card {

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 1px 1px;

        }

        .boxShadow{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 1px 1px;
            background-color: white;

            border-radius: 3px;
        }

        .container {
            padding: 0 6px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }



        .content1 {
            max-width: 100%;
            margin-left: 10%;
            margin-right: 10%;



            align: center
        }

        .imgTbl{
            width: 100%;
            table-layout: fixed;
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

                        <div class="container" style="width:100% ; text-align:center; ">
                            <h2>Romashka Picture Gallery</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="boxShadow">
            <div class="table-responsive">
        <table class="imgTbl" ">
            <?php
            $i=0;
            while ($row = mysqli_fetch_assoc($result)){
                if ($i%4==0){
                    echo "<tr>";

                }

                echo "<td style='width: 100%'><a  href='admin/{$row['image_dir']}'><img src='admin/{$row['image_dir']}' class='uploadedImg'></a></td>";


                if($i%4==3){
                    echo "</tr>";
                }
                $i++;

            }


            ?>
        </table>

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