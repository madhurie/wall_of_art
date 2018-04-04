<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$msg='';
 if(array_key_exists('email',$_POST)){
    date_default_timezone_set('Etc/UTC');

//Load composer's autoloader
require '../../tutorials/phpmailer/vendor/autoload.php';

$mail = new PHPMailer;                              // Passing `true` enables exceptions

    //Server settings
                                             // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'madhuriedala25@gmail.com';                 // SMTP username
    $mail->Password = 'Venkataramadevi@1970';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('madhuriedala25@gmail.com', 'Madhuri');
    $mail->addAddress('madhuriedala25@gmail.com', 'madhuri');
   // $mail->addAddress('githika.cs@gmail.com', 'githika');
         // Add a recipient
  /*  $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
   /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
    <link href="../css/CSSNav.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#contact").addClass('active');
        });
    </script>
</head>

<body class= "background" style="background-image:url('../images/grey_brick_wall.jpg')">


<div>
 <ul>
    
    <li><a href="../index.html">Home</a></li>
    <li><a href="page_1.html">Gallery</a><li>
    <li><a id="contact" href="page_contact.php">Contact</a></li>
    <li><a href="page_about.html">About Us</a></li>
 
 </ul>      
 </div>

<h1> Contact us</h1> -->
<?php if(!empty($msg)){
    echo"<h2>$msg</h2>";    
} ?>   

<!-- <form method = "POST">
  <div id=contact_div>
    <table>
     <tr>
     <td>Name</td>
     <td><input type="text" name="name" id="name"></td>
     </tr>
     <tr>
     <td>Email Address</td>  
     <td><input type="email" name="email" id="email"></td>
     </tr>
     <tr>
     <td>Message</td>
     <td><textarea name="message" id="message" rows="8" cols="20"></textarea></td>
     </tr>
 </table>
     <p><input type="submit" value="Send" id="send_button"></p>
 </div>
 </form>
 </body>
 </html>    -->
