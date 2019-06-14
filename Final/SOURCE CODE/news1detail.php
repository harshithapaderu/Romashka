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

    <meta name="viewport" content="width=80%, initial-scale=1">
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

            width: 100%;
            height: auto;
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
            padding: 20px;
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
            margin-left: 10%;
            margin-right: 10%;


            align: center
        }
    </style>

</head>
<body>

<!-- Navigation -->
<?php include("include/header.php");?>
<section class="whyus">
    <div class="content1" >
        
        <div class="row" >
            <div class="column">
                <div class="card">
                                    <div class="container" style="text-align: left;">

                     <h3 style="text-align: center;">HEALTH NEWS</h3>
                        <h5 class="title" style="text-align: center;"><i class="fa fa-calendar" ></i> 24-04-2019
        					
      					</h5> 

		
                    <img src="images/health_news.jpg" alt="Jane" style="width:100%;height:500px;margin-bottom: 10px;">
                        <p class="title">NEWS DEATIL</p>
                        <p class="title1"><h3>BE YOU</h3>
Be You (previously Kids Matter) is a national initiative for educators and school communities, aimed at promoting and protecting positive mental health in children and young people.
Our vision at Bull Creek Primary School is that our learning community is positive, inclusive and resilient, and where every child, young person, staff member and family can achieve their best possible mental health.
The core of Be You is to build mentally healthy communities. This includes working on family partnerships, providing early support, responding together and learning resilience. Through our PATHS program, teaching mindfulness, building strong positive values and providing the community with mental health knowledge and skills, Bull Creek Primary school aims to promote positive mental health in our community.
                    <img src="images/pathways.jpg" alt="Jane" style="width:100%;height:500px;margin-bottom: 10px;">

<h3>PATHS</h3>
As a Kids Matter school we teach PATHS across all year levels. PATHS is a social and emotional learning program that has been shown through research to improve children’s social and emotional competence.
During first term the PATHS whole school program places an emphasis on establishing a positive classroom environment. Rules and rights are taught explicitly. Values such as respect and responsibility are explored and students are equipped with strategies for cooperating, playing fairly and listening to others. Classes also celebrate a PATHS kid in their classrooms and students learn the skill of giving and receiving compliments.
Children learn social and emotional skills most effectively when they are reinforced at home. Working together to help children develop these skills can make a really positive difference for children’s mental health.
So, what can you do at home?
Be involved, be a model, be a guide. Find out about the program your child’s school is using. Use some of the same language and ideas at home. Talk about feelings and help your child talk about their feelings. Turn difficulties into learning opportunities. Provide praise and compliments.
                    <img src="images/smiling_mind.jpg" alt="Jane" style="width:100%;height:500px;margin-bottom: 10px;">

<h3>Smiling Minds</h3>
The staff and students have been introduced to the foundational skills of mindfulness as we aim to provide our school community with life-long tools that support healthy minds. This term, these skills are centred around awareness, attention and the senses.
When we are mindful, we are present and focussed on what we are doing. However, staying focussed can be tricky because there are often lots of things going on around you that can be very distracting.
Practicing mindfulness gives you the skills to focus your attention on one thing and keep it there. When you do this you can achieve better outcomes in school, sport, music and anything else you put your mind to. Like any skill, the more you practice focussing your attention, the better you will get at it.
One strategy that the students have been introduced to is using breath to focus their attention.
If you are interested in practicing this foundational mindfulness skill at home, and want to experience the many health and wellbeing benefits that mindfulness can bring, download the free Smiling Minds app or visit the Smiling Minds website and explore the many guided meditations available.
  </p>
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