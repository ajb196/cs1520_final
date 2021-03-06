

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Austin Bagnato</title>
    <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="loading">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

    <div id="preload">
        <img src="img/dramatic.jpg">
        <img src="img/tower.jpg">
        <img src="img/bg1.jpg">
        <img src="img/bg2.jpg">
    </div>

    <main class="hidden-xs">

    <div class="sides">
        <div class="left"></div>
        <div class="right"></div>
    </div>

	<section id="splash" class="homeSlide slide">
        <div class="bcg"
            data-center="background-position: 50% 0px;"
            data-top-bottom="background-position: 50% -200px;"
            data-anchor-target="#splash"

        >
            <div class="hsContainer">
                <div class="hsContent"
                    data--300-top="opacity:0"
                    data-center-top="opacity:1"
                    
                >
                        <nav class="navbar navbar-trans" class="navbar-header">  
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbar1">
                                    <center>
                                        <ul class="nav navbar-nav">
                                            <li><a href="#bio">Bio</a></li>
                                            <li><a href="#resume">Resume</a></li>
                                            <li><a href="#contact">Contact Me</a></li>
                                            <li><a href="#list">Impossible List</a></li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                        </nav>

                        <h2 id="title">Austin Bagnato</h2>
                        <h2 id="sub1">University of Pittsburgh Student</h2>
                        <h2 id="sub2">Occasional Ember Developer</h2>
                        <h2 id="sub3">Professional Winner</h2>

                        <a target="_blank" href="https://www.linkedin.com/in/austin-bagnato-01b528117?trk=hp-identity-name"><img id="linkedin" src="img/linkedin.png" alt="LinkedIn"></a>
                        <a target="_blank" href="https://twitter.com/ajb196"><img id="twitter" src="img/twitter.png" alt="Twitter"></a>
                        <a target="_blank" href="https://www.facebook.com/austin.bagnato"><img id="facebook" src="img/facebook.png" alt="Facebook"></a>
                </div>

            </div>
        </div>
    </section>

    <section id="nav" class="slide">
        <nav class="navbar navbar-custom" class="navbar-header" data-anchor-target="#bio" data-500-top="opacity:0;" data-400-top="visibility:visible; top: -55px; opacity: 0.3;" data-150-top="opacity: 1; position: fixed; top: 0;">  
            <div class="container-fluid">
                <div >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AB</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="nav navbar-nav">
                        <li><a href="#bio">Bio</a></li>
                        <li><a href="#resume">Resume</a></li>
                        <li><a href="#contact">Contact Me</a></li>
                        <li><a href="#list">Impossible List</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="bio" class="slide" data-menu-offset="-50">   
        <div class="container-fluid" >
            <?php include "components/_bio.php" ?>
        </div>
    </section>

    <section id="bg1" data-menu-offset="-50" class="slide">
        <div class="bcg"
            data-top="background-position: 50% -100px;"
            data-bottom="background-position: 50% -50px;"
            data-anchor-target="#bg1"
        ></div>
    </section>

    <section id="resume" class="slide" data-menu-offset="-50">
        <div class="container-fluid" >
            <?php include "components/_resume.php" ?>
        </div>
    </section>

    <section id="bg2" data-menu-offset="-50" class="slide">
        <div class="bcg"
            data-top="background-position: 50% -100px;"
            data-bottom="background-position: 50% -50px;"
            data-anchor-target="#bg2"
        ></div>
    </section>

    <section id="contact" class="slide" data-menu-offset="-50">
        <div class="container-fluid" >
            <?php include "components/_contact.php"; ?>
        </div>
    </section>

    <section id="list" data-menu-offset="-50" class="slide">
        <div class="bcg"
            data-top="background-position: 50% -100px;"
            data-bottom="background-position: 50% -500px;"
            data-anchor-target="#list"
        ><?php include "components/_list.php"; ?></div>
    </section>
    
    </main>

    <div class="container-fluid visible-xs mobile" >
        <?php include "components/_bio.php" ?>
        <?php include "components/_resume.php" ?>
        <?php include "components/_mobileContact.php"; ?>
    </div>


    <footer>
        Created by Austin Bagnato
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/imagesloaded.js"></script>
    <script src="js/vendor/skrollr.js"></script>
    <script src="js/vendor/skrollr.menu.min.js"></script>
    <script src="js/_main.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
