<?php 

session_start();

include 'functions.php';
include 'validation.php';

$_SESSION['errors'] = [];
$_SESSION['submission'] = $_POST;

var_dump($_SESSION);


if (! array_key_exists('HTTP_REFERER', $_SERVER)) {
    die;
}

if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
}

$firstName = getPostData('first_name');
$lastName = getPostData('last_name');
$email = getPostData('email');

$comments = getPostData('comments');
$phone = getPostData('phone');

$firstNameValid = isFirstNameValid($firstName);
$lastNameValid = isLastNameValid($lastName);
$emailValid = isEmailValid($email);
$commentsValid = isMessageValid($comments);

//errors
if (! $firstNameValid) {
    $_SESSION['errors']['first_name'] = 'first name is not valid, less characters entered';
}

if (! $lastNameValid) {
    $_SESSION['errors']['last_name'] = 'last name is not valid, less characters entered';
}

if (! $emailValid) {
    $_SESSION['errors']['email'] = 'email is not valid, please check it again..';
}

if (! $commentsValid) {
    $_SESSION['errors']['comments'] = 'No message?';
}


if (! $firstNameValid || ! $lastNameValid || ! $emailValid || $commentsValid) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    $message = 'your data was submitted';
    
    die;
}

$to = "s_dimri108478@fanshaweonline.ca";
$subject = "New email from contact form";
$message = "<html><body>";
$message .= "First Name: " . $firstName . "<br>";
$message .= "Last Name: " . $lastName . "<br>";
$message .= "Email: " . $email . "<br>";
$message .= "</html></body>";

// mail($to, $subject, $message);

echo $message;

$_SESSION['submission'] = [];
// var_dump($firstName);
// var_dump($firstNameValid);
// var_dump($lastName);
// var_dump($lastNameValid);
// var_dump($email);
// var_dump($emailValid);
// var_dump($firstName);
// var_dump($lastName);
// var_dump($email);


header('Location: ' . '../public/contact.php');











