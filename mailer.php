<?php
require 'vendor/autoload.php';
if(isset($_POST['name']) && isset($_POST['email'])){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $name = $_POST['name'];
        $userEmail = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("boconno9@lion.lmu.edu", $userEmail);
        $email->setSubject($subject);
        $email->addTo("bridgetocowebsite@gmail.com", $name);
        $email->addContent(
            "text/html", $message
        );
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            header("Location: index.php?sent=success#contact");
            exit();

        } catch (Exception $e) {
            $response = 'Caught exception: '. $e->getMessage() ."\n";
            header("Location: index.php?sent=failure#contact");
            exit();
        }
    }  
}
?>