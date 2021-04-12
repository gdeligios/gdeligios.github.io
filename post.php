<?php 
    $to = 'giodeligios@gmail.com'; // this is your Email address
    $from = $_POST['e_mail']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['subject'];
    $subject_2 = "Submission - Giovanni Deligios' Webpage";
    $message = $first_name . " " . $last_name . "wrote:" . "\n\n" . $_POST['message'];
    $message_2 = $first_name . ", here is a copy of your submission." . "\n\n" . $_POST['message'];

    $headers = "From: " . $first_name;
    
    if(mail($to,$subject,$message,$headers) && mail($from,$subject2,$message_2)) {
        echo header('Location: thank_you.html');
    } 
    else {
        echo header('Location: fail.html');
    }
?>
