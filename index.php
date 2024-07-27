<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Website</title>
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- custom cursors  -->
  <section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="row">

        <form action="" method="post">

            <input type="text" name="name" placeholder="Name" class="box">
            <input type="email" name="email" placeholder="Email" class="box">
            <input type="number" name="phone" placeholder="Phone Number" class="box">

            <textarea name="message" placeholder="Message" id="" cols="30" rows="10"></textarea>

            <input type="submit" class="btn" name="submit" value="Send Message">

        </form>
    </div>
</section>

<?php

    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if  (isset($_POST['submit'])) {
  $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];




//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sneha.pandey1208@gmail.com';                     //SMTP username
    $mail->Password   = 'vmov exxe uady qvry';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sneha.pandey1208@gmail.com', 'snehaportfolio');
    $mail->addAddress('sneha.cloud1208@gmail.com', 'Joe User');     //Add a recipient

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Message - $message <br>";
    

    $mail->send();
    echo "<div class ='success'> Message has been sent </div>";
} catch (Exception $e) {
    echo "<div class ='alert'> Message could not sent Error: {$mail->ErrorInfo} </div>";
}
}
?>

  </body>
</html>





