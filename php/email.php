<?php 
    $message = $_POST['text-input'];
    $subject = "Vote on my site";
    $email = "timzschage@gmail.com";

    mail($email,$subject,$message);

?>