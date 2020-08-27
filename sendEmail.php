<?php

 use PHPMailer\PHPMailer\PHPmailer;

 if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail -> isSMTP();
    $mail -> Host = "smtp.gmail.com";
    $mail -> SMTPAuth = true;
    $mail -> Username = "bridgetocowebsite@gmail.com";
    $mail -> Password = '';
    $mail -> Port = 465;
    $mail -> SMTPSecure = "ssl";

    //email settings

    $mail -> isHTML(true);
    $mail -> setFrom($email, $name);
    $mail -> addAddress("bridgetocowebsite@gmail.com");
    $mail -> Subject = ("$email ($subject)");
    $mail -> Body = $message;

    if($mail -> send()){
        $status = "success";
        $response = "Email sent";
    }
    else 
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
 }

?>