<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KimYen's Projects</title>

        <link href="../img/favicon.ico" type="image/gif" rel="shortcut icon" />

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- For header and footer -->
        <link href="../css/sticky-footer-navbar.css" type="text/css" rel="stylesheet" />

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        
        <!-- javascript for projects -->
        <script src="../js/projects.js"></script>
            
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
                    <a class="navbar-brand" href="../index.php">KimYen.org</a>
                </div>
                <div class="collapse navbar-collapse">      
                    <ul class="nav navbar-nav">
                        <li><a href='../index.php'>Home</a></li>
                        <li><a href='../about.php'>About</a></li>
                        <li class="active"><a href='#'>Projects</a></li>
                        <li><a href='../blog'>Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Header-->
        
        <!-- Page Content -->
        <div class="container">
        
            <!-- Portfolio Item Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" id="project-header"></h1>
                </div>
            </div>
            <!-- /.row -->
            
            <!-- Portfolio Item Row -->
            <div class="row" id="item-details">

                <div class="col-md-8" >
                    <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                </div>

                <div class="col-md-4">
                    <h3>Project Description</h3>
                    <div id="project-description"></div>
                    <h3>Technology</h3>
                    <div id="technology"></div>
                    <h3>Source Code</h3>
                    <div id="source-code"></div>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <div class="row">

                <div class="col-lg-12">
                    <h3 class="page-header">Projects</h3>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive portfolio-item" id="dashboard" src="http://placehold.it/500x300" alt="dashboard">
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive portfolio-item" id="kubi" src="http://placehold.it/500x300" alt="Kubi">
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive portfolio-item" id="campusPath" src="http://placehold.it/500x300" alt="campus path">
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="#">
                        <img class="img-responsive portfolio-item" id="bj" src="http://placehold.it/500x300" alt="black jack">
                    </a>
                </div>

            </div>
            <!-- /.row --> 
            
            

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
