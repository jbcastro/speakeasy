<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
//$secretKey = 6LfjN6sUAAAAAC8C__pFW_Q_iT12DlAhA1Bx2N6K
$secretKey = '6Lf2OKsUAAAAAAJZQgyexBVI0fb8wS2vzlFhV8iv';
        $captcha = $_POST['g-recaptcha-response'];
if(!$captcha){?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please Click ReCaptcha');
        window.location = 'index.html#contact';
    </script>
       <?php }
else{



$formcontent="From: $name \n Email: $email \n Subject: $subject \n Message: $message \n";
$recipient = "aaron@speakeasycomedy.com";
    $mailheader = "From: contact@speakeasycomedy.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
?>