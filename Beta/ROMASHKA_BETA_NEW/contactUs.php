<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Romashka Russian Language School</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <link href="css/style.css" rel="stylesheet">

    <meta name="viewport" content="width=60%, initial-scale=1">
    <style>

        .contact_form {
            padding: 15px 18px;
            text-align: left;
            width: 100%;
            float: none;
            background-color: white;
            margin: auto;
        }
        .row {
            width: 100%;
            margin-left: 1px;

            margin-bottom: 2px;
            padding: 10px 10px;

        }

        .contact_form2 {
            text-align: left;
            width: 100%;
            float: left;
        }
        .caption-container2 {
            text-align: center;
            background-color: #444s;
            padding: 4px 20px;
            color: white;
        }
        .work_hd{
            width: 100%;
            float: left;
            color: #000;
            padding: 30px 15px 0px;
        }

    </style>

</head>
<body >

<!-- Navigation -->
<?php include("include/header.php");?>

<section class="contact_us">
    <div class="container">

        <h1 class="cont_hd">GET IN TOUCH</h1>

        <div class="contact_form row" style="width:94%">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contactform_box">
                    <form method="post" class="contact_form2">
                        <div class="form-group">
                            <label class="control-label">Full Name</label>
                            <input type="text" class="form-control" id="" name="" required />
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Business Email (<a href="#">Privacy Policy</a>)</label>
                            <input type="text" class="form-control" name="" required />
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Company</label>
                            <input type="text" class="form-control" name="" required />
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tell us about yourself</label>
                            <textarea type="text" class="form-control" name="" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Would you like to subscribe to our Customer Experience Blog?</label>
                            <div class="radio">
                                <label><input type="radio" name="optradio" checked> Yes</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio" checked> No</label>
                            </div>
                        </div>
                        <button class="btn-success btn submitbtn">Send Message</button>

                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">

                <div id="map">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%"  id="gmap_canvas" src="https://maps.google.com/maps?q=cracker%20jack%20bulimba&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div>
                        <style>.mapouter{text-align:right;height:419px;width:100%;}
                            .gmap_canvas {overflow:hidden;background:none!important;height:419px;width:100%;padding-left: 100px;}
                            #gmap_canvas{
                                height: 100%;
                                width: 100%;
                            }
                        </style></div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->



<?php include("include/footer.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>