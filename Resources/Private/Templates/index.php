<html>
<head>
    <meta charset="UTF-8">
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
<div class="floating-nav nav col-sm-1">
    <ul class="nav">
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
            <div class="col-sm-3">
                <div class="intro-right">
                    <div class="face-wrapper">
                        <img class="img img-responsive img-circle" src="img/face1.png">
                        <!--<div class="face-addition">
                            <h2>edmund salzmann</h2>
                        </div>-->
                    </div>
                    <div class="face-wrapper">
                        <img class="img img-responsive img-circle" src="img/face2.png">
                        <!--<div class="face-addition">
                            <h2>jan-michael löw</h2>
                        </div>-->
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <a href="#wir"><img class="img center-block" src="img/scroll-down.png"></a>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron white" id="wir">
    <div class="container">
        <div class="col-sm-offset-1">
            <h2>individuell, aufgeschlossen und kreativ</h2>
            <p>Die loew&salzmann GbR ist Anfang 2013 aus der Idee heraus entstanden, die durch Studium und außer-universitärem Engagement erworbenen Fähigkeiten im Bereich Print- und Webdesign sowie Social Media zu bündeln und einen professionellen Rundum-Service anzubieten.<br></p>

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
            <div id="result"></div>
                <form id="contact" method="post" target="php/mail.php">
                <fieldset>
                <div class="form-group" id="name">
                    <label for="InputName">Ihr Name:</label>
                    <input type="text" class="form-control" name="userName" id="userName" placeholder="Geben Sie Ihren Namen ein">
                </div>
                <div class="form-group" id="email">
                    <label for="InputEmail">Ihre Email-Adresse:</label>
                    <input type="text" class="form-control" name="userEmail" id="userEmail" placeholder="Geben Sie Ihre Email-Adresse ein">
                </div>
                <div class="form-group" id="phone">
                    <label for="InputPhone">Ihre Telefonnummer: (optional)</label>
                    <input type="text" class="form-control" name="userPhone" id="userPhone" placeholder="Geben Sie Ihre Telefonnummer ein">
                </div>
                <div class="form-group" id="message">
                    <label for="InputMessage">Ihre Nachricht an uns:</label>
                    <textarea class="form-control" rows="5" name="userMessage" id="userMessage"></textarea>
                </div>

                <button type="submit" class="btn btn-primary submit" id="submit">Abschicken</button>
                </fieldset>
                </form>
            </div>
    </div>
</div>

<div class="navbar navbar-inverse navbar-static-top footer">
    <div class="container">
        <p>&copy 2014 löw & salzmann GbR</p>
    </div>
</div>
</body>
</html>