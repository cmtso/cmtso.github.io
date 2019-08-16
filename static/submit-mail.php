<?php
if(isset($_POST['url']) && $_POST['url'] == ''){

    if(($_POST['name'] == '') |
        ($_POST['email'] == '') |
        ($_POST['subject'] == '') |
        ($_POST['message'] == '')) {
        header("Location: ../contact_failed.html");
        exit;
        }
    else {
	$to = 'm.tso@lancaster.ac.uk';
    $subject = $_POST['subject'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = "Message from ".$name." (sent via Michael Tso's homepage'):\n\n";
    $body .= $_POST['message'];
    $from = "From: ".$email;
    mail($to, $subject, $body, $from);

    header("Location: ../contact_success.html");
    exit;
}}
?>
