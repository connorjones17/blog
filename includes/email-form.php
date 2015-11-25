<?php

$content = '';

if (isset($_POST['name'], $_POST['subject'], $_POST['email'], $_POST['content'])) {

    if (empty($_POST['name'])) {
        $errors[] = "Name field is empty";
    } else {
        $name = htmlentities($_POST['name']);
    }

    if (empty($_POST['subject'])) {
        $errors[] = "Subject field is empty";
    } else {
        $subject = htmlentities($_POST['subject']);
    }

    if (empty($_POST['email'])) {
        $errors[] = "Email field is empty";
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = "Email is invalid";
    } else {
        $visitorEmail = htmlentities($_POST['email']);
    }

    if (empty($_POST['content'])) {
        $errors[] = "Message field is empty";
    } else {
        $content = htmlentities($_POST['content']);
    }
}
?>