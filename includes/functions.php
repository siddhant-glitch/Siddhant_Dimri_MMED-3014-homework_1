<?php

function shouldShowSubmissionData()
{
    return count($_POST) > 0;
}

function getPostData($key)
{
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }

    return "";
}

function getErrorMessageFromSession($key)
{
    if (! isset($_SESSION)){
        return "";
    }

    if (! array_key_exists('errors', $_SESSION)) {
        return "";
    }

    if (! array_key_exists($key, $_SESSION['errors'])) {
        return "";
    }

    return $_SESSION['errors'][$key];
}

function getSubmissionFromSession($key)
{
    if (! isset($_SESSION)){
        return "";
    }

    if (! array_key_exists('submission', $_SESSION)) {
        return "";
    }

    if (! array_key_exists($key, $_SESSION['submission'])) {
        return "";
    }

    return $_SESSION['submission'][$key];
}

function displayPhoto($myImages, $desc) {

    for($i=0; $i<6; ++$i) {
    echo "<img class=\"list\" src=\"images/$myImages[$i]\">"; 
    echo "<span class=\"desc\">$desc[$i]</span>";
    //width=\"525\" max-height=\"194\"
}
    
}
