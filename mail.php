<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "ugarba202@mail.com";

mail($recipient, $subject, $mailheader)
    or die("Errow!");

echo '


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN EMAIL WITH PHP</title>
    <link href="https://fonts.goggleapis.com/css2?family-playfair-Display:wght@600@family-poppins@display-swap">
    <link rel="stylesheet" href="Design.css">
</head>
<body>
     <div class="container">
        <h1>Thank you for contacting me. i will get back to you as soon as possible</h1>
        <p class="back">Go back to the <a href="form.html">homepage</a></p>

     </div>
</body>
</html>






';


?>