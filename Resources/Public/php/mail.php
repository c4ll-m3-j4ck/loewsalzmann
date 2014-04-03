<?php
if($_POST)
{
        //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        //exit script outputting json data
        $output = json_encode(
            array(
                'type'=>'error',
                'text' => 'Request must come from Ajax'
            ));

        die($output);
    }

    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]) || !isset($_POST["userMessage"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Die Felder sind leer!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
    $user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
    $user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);

    //additional php validation
    if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Name ist zu kurz oder kein Name eingegeben!'));
        die($output);
    }
    if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Bitte geben Sie eine gültige Email-Adresse ein!'));
        die($output);
    }
    if(!strlen($user_Phone)<1) //check entered data is not empty
    {
        if(!is_numeric($user_Phone)) //check entered data is numbers
        {
            $output = json_encode(array('type'=>'error', 'text' => 'Nur Ziffern im Feld "Telefonnummer" erlaubt!'));
            die($output);
        }
    }
    if(strlen($user_Message)<5) //check emtpy message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Ihre Nachricht ist zu kurz - bitte geben Sie eine Nachricht ein!'));
        die($output);
    }

    $to_Email       = "info@innovative-design-solutions.de"; //Replace with recipient email address
    $subject        = 'Anfrage von '.$user_Name .' auf innovative-design-solutions.de'; //Subject line for emails

    //proceed with PHP email.
    $headers = 'From: '.$user_Email.'' . "\r\n" .
        'Reply-To: '.$user_Email.'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // send mail
    $sentMail = @mail($to_Email, $subject, $user_Message ."\n\n--------------------\nName: ".$user_Name ."\nTelefonnummer: ".$user_Phone, $headers);

    if(!$sentMail)
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Die Email konnte auf Grund eines technischen Fehlers nicht versendet werden.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hallo '.$user_Name .', vielen Dank für Ihre Anfrage!'));
        die($output);
    }
}
?>