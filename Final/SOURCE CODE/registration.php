
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
    input[type=text], input[type=password], input[type=email]
 {            width: 30%;            border-radius: 15px;            padding: 12px 20px;            margin: 8px 0;            display: inline-block;            border: 2px solid #05935d;            box-sizing: border-box;        } 
       .card {            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);            /*padding: 1px 1px;*/        }      
  .content1 {            max-width: 50%;            margin-left: 25%;            margin-right: 10%;            align: center        }    
    .column1 {            width: 100%;            /*padding-top: 15px;*/            padding-bottom: 20px;        }       
 .row1 {            width: 100%;            margin-bottom: 6px;        }        .row {            width: 100%;            margin-left: 1px;            /*padding: 10px 10px;*/        }	
	.boxShadow{            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);            padding: 1px 1px;            background-color: white;            border-radius: 3px;        }  
  </style>


</head>
<body><?php include("include/header.php");?><section class="whyus">  
  <div class="content1" >    
    <div class="row1" >     
       <div class="column1">         
       <div class="card">            
        <div class="row">               
         <div class="container" style="width:75% ; text-align:center; ">                 
           <h2>User Registration</h2>            
            </div>        
            </div>   
             </div>        
    </div>    
    </div>
<div class="boxShadow">
<form action="include/register.php" method="post">  
  <div class="container">     
   <input type="text" placeholder="Enter First Name" name="fname" required>    
    <br>    
    <input type="text" placeholder="Enter Last Name" name="lname" required>     
   <br>      
  <input type="email" placeholder="Enter Email Address" name="email" required unique>   
     <br>    
    <input type="text" placeholder="Enter Phone Number" name="phone" maxlength="10" required unique>  
      <br>   
     <input type="text" placeholder="Enter Street Address" name="street" required>      
  <br>     
   <input type="text" placeholder="Enter Zip Code" name="zip" required>   
     <br>
<!--        <input type="text" placeholder="Select State" name="state" required>-->   
     <select name="state" class="dropdown_form" style="border:2px solid #05935d;">      
      <option value="">Select your State</option>    
        <option value="qld">QLD</option>       
     <option value="nsw">NSW</option>      
      <option value="saustralia">SA</option>    
        <option value="vic">VIC</option>    
        <option value="wa">WA</option>      
  </select>  
      <br> 

<br><h6><b> I have read and fully understand the <a href="privacyPolicy.php" target="_blank">Privacy Policy</a> at Romashka</b></h6>
 <br>
  <button  class="regBtn" type="submit">Sign Up</button> 
   </div>
</form>
</div></div>
</section>
<?php include("include/footer.php");?>
</body>