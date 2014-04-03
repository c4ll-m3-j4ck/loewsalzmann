<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/skin_main.css">
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Application.js"></script>
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
<div class="floating-nav nav">
    <ul class="nav">
        <li>
            <a href="#">Top</a>
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

<div class="jumbotron">
    <div class="container">
        <div class="col-sm-8 col-sm-offset-1">
            <div class="intro-left">
                <h1>löw & salzmann GbR</h1>
                <p>marktplatz 14</br>
                64283 darmstadt</p>
                <p>+49 (0) 174 2630690</p>
                <p>info@innovative-design-solutions.de</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="intro-right">
                <div class="face-wrapper">
                    <img class="img-circle img-face" src="img/face1.png">
                    <div class="face-addition">
                        <h2>edmund salzmann</h2>
                    </div>
                </div>
                <div class="face-wrapper">
                    <img class="img-circle img-face" src="img/face2.png">
                </div>

            </div>
        </div>
    </div>
</div>
<div class="jumbotron white" id="wir">
    <div class="container">
        <div class="col-sm-offset-1">
            <h2>wer wir so den ganzen tag über sind</h2>
        </div>
    </div>
</div>
<div class="jumbotron" id="referenzen">
    <div class="container">
        <div class="col-sm-offset-1">
            <h2>was wir so den ganzen tag über machen</h2>
        </div>
    </div>
</div>

<div class="jumbotron white last" id="kontakt">
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <h2>wie sie uns erreichen</h2>

            <p>Kontaktieren sie uns einfach über das untenstehende Formular oder per Telefon:</p>
            <p style="text-align: center;">
                +49 177 1484638
            </p>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
            <form role="form" action="mail.php" method="POST">
                <div class="form-group">
                    <label for="InputName">Ihr Name:</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Geben Sie Ihren Namen ein">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Ihre Email-Adresse:</label>
                    <input type="text" class="form-control" id="InputEmail" placeholder="Geben Sie Ihre Email-Adresse ein">
                </div>
                <div class="form-group">
                    <label for="InputMessage">Ihre Nachricht an uns:</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>

                <button type="button" class="btn btn-primary">Abschicken</button>
            </form>
        </div>
    </div>
</div>
<div class="panel-footer">
    &copy 2014 low & salzmann GbR
</div>
</body>
</html>