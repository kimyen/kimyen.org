<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KimYen Truong</title>

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

        <link href="./css/puzzle.css" type="text/css" rel="stylesheet" />

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
            
        <script src="./js/puzzle.js" type="text/javascript"></script>
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
                    <a class="navbar-brand" href="index.php">KimYen Truong</a>
                </div>
                <div class="collapse navbar-collapse">      
                    <ul class="nav navbar-nav">
                        <li class="active"><a href='index.php'>Home</a></li>
                        <li><a href='about.php'>About</a></li>
                        <li><a href='./projects'>Projects</a></li>
                        <li><a href='./blog'>Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Header-->
        
        <!-- Page Content -->
        <div class="container">
            <div class="page-header">
            </div>

            <div id="puzzleintro">
                <p class="lead">Please solve this puzzle to continue
                <br><small>I'm kidding. You can <a href="about.php">skip</a> this.</small></p>
            </div>

            <!-- this area holds the actual fifteen puzzle pieces -->
            <div id="puzzlearea"></div>
        
            <div id="output"></div>
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
