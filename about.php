<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About KimYen</title>

        <link href="./img/favicon.ico" type="image/gif" rel="shortcut icon" />
       
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- For header and footer -->
        <link href="./css/sticky-footer-navbar.css" type="text/css" rel="stylesheet" />
 
        <link href="./css/about.css" type="text/css" rel="stylesheet" />

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
            
        <script src="./js/about.js" type="text/javascript"></script>
    </head>

    <body>
        <!--Header-->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="botton" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toogle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">KimYen.org</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href='index.php'>Home</a></li>
                        <li class="active"><a href='about.php'>About</a></li>
                        <li><a href='./projects'>Projects</a></li>
                        <li><a href='./blog'>Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Header-->i

        <!-- Page Content -->
        <div class="container">
            <div class="page-header">
                <h1>KimYen Truong</h1>
            </div>
            
            <div id="content"> 
                <div class="img">
                    <img src="./img/profile.jpg" alt="Kimyen's profile picture" id="profile_picture">
                </div>        

                <div id='rotating-box'>
           
                     <div class = "frame">  
                         <div class='content-post'>
                            <h3 class='title'>Hello there,</h3>
                            <p class="lead">I'm <strong>Kimyen Truong</strong>, a Computer Science student at the University of Washington.
                            I'm passionate about making software that makes life easier. 
                            This site is where I practice my web programming skills.</p>
                            <p class="lead">Thank you for stopping by!</p>
                        </div>
                    </div> 
               
                    <div class = "frame hidden">
                        <div class='content-post'>
                            <h3 class='title'>Background</h3>
                            <p class="lead">I was born and grew up in Vietnam. I love Vietnamese culture, food, and holidays.</p>
                            <p class="lead">I started progamming in Pascal when I was in 7th grade. 
                            In 2009, when I was studying Computer Science at Hochiminh University of Industry, 
                            my family decided to move to the US.</p>
                            <p class="lead">I was accepted to the CSE major at the University of Washington in March 2013. I started my Undergraduate Research in March 2014. I started my internship at Sage BioNetwork in June 2014. </p>
                        </div>
                    </div>
 
                    <div class = "frame hidden">  
                        <div class='content-post'>
                            <h3 class='title'>Hobby</h3>
                            <p class="lead">I love sewing and card making. Even though school takes most of my time,
                           I always try to make a card or two a week.</p>
                            <p class="lead">I'm also an amateur photographer. I love taking pictures of almost everything.
                           Editing pictures makes me feel happy.</p>
                        </div>
                    </div> 

                    <div class = "frame hidden">
                        <div class='content-post'>
                            <h3 class='title'>Volunteer at V.E.Y.S.</h3>
                            <p class="lead">On Saturday and/or Sunday, I spend time volunteer at a Vietnamese Catholic Church.
                           I'm a teacher at Vietnamese Eucharistic Youth Society in Seattle.</p>
                            <p class="lead">The purposes of our organization is to teach youths to be virtuous people and good Christians. 
                           We have about 320 kids last year from 6 yrs old to 18 yrs old. We have a few camps, picnic, and
                           retreats every year. I'm so proud to be a part of it.</p>
                        </div>
                    </div>

                </div> <!-- rotating box ends here -->

                <div id="buttons">
                    <div id="zero" class="button shown"></div>
                    <div id="one" class="button"></div>
                    <div id="two" class="button"></div>
                    <div id="three" class="button"></div>
                </div>
            </div> <!-- content ends here -->
        </div>
        <!-- Page Content -->

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <p class="text-muted"> &copy; September 2014 - KimYen Truong </p>
            </div>
        </div>
        <!-- Footer -->
    </body>
</html>
