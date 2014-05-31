<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>loew & salzmann GbR</title>
    <link rel="stylesheet" href="css/skin_main.css">
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Application.js"></script>
    <script src="js/viewport-units-buggyfill.js"></script>
    <script src="http://use.edgefonts.net/dosis:n2.js"></script>
</head>
<body>
<!--<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <span class="navbar-brand">Löw&Salzmann</span>

        <ul class="nav navbar-nav">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Wir</a>
            </li>
        </ul>
    </div>
</div>-->
<nav class="navbar-fixed-top floating-nav nav">
 <!--   <div class="navbar-header">
        <button type="button" class="navbar-toggle navbar-inverse" data-toggle="collapse" data-target="#collapse-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>-->
    <div class="floating-nav col-sm-1 schlaufe">
        <ul class="nav navbar-nav ">
            <li>
                <a href="#top">Top</a>
            </li>
            <li>
                <a href="#wir">Über Uns</a>
            </li>
            <li>
                <a href="#referenzen">Referenzen</a>
            </li>
            <li>
                <a href="#kontakt">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron" id="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-1">
                <div class="intro-left">
                    <h1>löw & salzmann GbR</h1>
                    <p>marktplatz 14</br>
                        64283 darmstadt</p>
                    <p>info@innovative-design-solutions.de</p>
                </div>
            </div>

            <a href="#wir" class="scroll-down"><img src="img/scroll-down.png" class="arrows"></a>
        </div>
    </div>
</div>

<div class="jumbotron white" id="wir">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="face-wrapper">
                    <img class="img img-responsive img-circle center-block" src="img/eddi_1.png">
                    <h2>edmund salzmann</h2>
                    <h3>form follows function</h3>
                    <p>Angefangen hat alles mit dem ersten Flyer für das Schulkonzert zu Teenagerzeiten - inzwischen habe ich ganze Magazine gesetzt, Logos designed und Webseiten gestaltet. Für mich im Fokus steht die für Sie individuell beste Lösung - je schlanker, desto besser.</p>
                    <h4>student des wirtschaftsingenieurwesens, TU Darmstadt</h4>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="face-wrapper">
                    <img class="img img-responsive img-circle center-block" src="img/michel_1.png">
                    <h2>jan-michael löw</h2>
                    <h3>beautiful concepts work better</h3>
                    <p>Mit Erfahrung im Bereich Print- und Webdesign sowie Photographie seit der frühen Teenagerzeit und einem technischen Grundverständnis aus dem Studium des Wirtschaftsingenieurwesens bin ich ihr perfekter Ansprechpartner für ihr Projekt.</p>
                    <h4>student des industriedesigns, hochschule_darmstadt</h4>
                </div>
            </div>
            <!--<div class="col-sm-11">
                <h2>individuell, aufgeschlossen und kreativ</h2>
                <p>Die löw & salzmann GbR ist Anfang 2013 aus der Idee heraus entstanden, die durch Studium und außer-universitärem Engagement erworbenen Fähigkeiten im Bereich Print- und Webdesign sowie Social Media zu bündeln und einen professionellen Rundum-Service anzubieten.<br></p>
            </div>-->

        </div>
    </div>
</div>

<div class="jumbotron no-padding" id="referenzen">
    <div class="container">

    </div>
</div>

<?php include_once("contact.php") ?>

<div class="navbar navbar-inverse navbar-static-top footer">
    <div class="container">
        <p>&copy 2014 löw & salzmann GbR</p>
    </div>
</div>
</body>
</html>