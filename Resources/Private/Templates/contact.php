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