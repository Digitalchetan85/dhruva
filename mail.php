<?php
    
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $mobile = @trim(stripslashes($_POST['mobile'])); 
    $comment = @trim(stripslashes($_POST['comment'])); 
    
    $email_from = $email;
    $email_to = 'info@dhruvadevelopers.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Mobile: ' . $mobile. "\n\n" . 'Comment: ' . $comment ;
     $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    
    header("Location: contact.php");
    die;