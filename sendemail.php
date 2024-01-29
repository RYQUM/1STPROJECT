<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // $file = $_FILES['file']['name']; // Use $_FILES for file uploads

    // File handling
    $file = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'quintoryan33@gmail.com';
        $mail->Password = 'nzpf xlgr azph ecee';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->isHTML(true);


        $mail->setFrom('quintoryan33@gmail.com');
        $mail->addAddress('quintoryan33@gmail.com');
        $mail->Subject = ("$email ($subject)");
        $mail->Body = '<h3> Name : '.$name.'  <br> Email: '.$email.'<br> Message: '.$message.'<h3>';
        $mail->addAttachment($file, $filename);


        $mail->send();
        echo '<script> alert("Email send Successfully!"); </script>';
        header("Location: ./index.php?=email_sent!");

    } catch (Exception $e) {
        echo '<script> alert("Message could not be sent. Mailer Error: '.$mail->ErrorInfo.'"); </script>';

    }
}
?>







