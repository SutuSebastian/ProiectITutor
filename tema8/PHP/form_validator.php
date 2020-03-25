<?php

if (empty($_POST)) {
    header('location: ./');
}

function general_sanatize($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
// sanatize string
function sanatize_string($string)
{
    $string = general_sanatize($string);
    return filter_var($string, FILTER_SANITIZE_STRING);
}
// filter sanatize email
function sanatize_email($email)
{
    $email = general_sanatize($email);
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
// sanatize URL
function sanatize_url($url)
{
    $url = general_sanatize($url);
    return filter_var($url, FILTER_VALIDATE_URL);
}

if (isset($_POST['submit_form']) && !empty($_POST)) {
    $first_name = sanatize_string($_POST['first_name']);
    $last_name = sanatize_string($_POST['last_name']);
    $email = sanatize_email($_POST['email']);
    $website = sanatize_url($_POST['website']);

    if (empty($first_name)) {
        die('First name is required');
    }
    if (empty($last_name)) {
        die('Last name is required');
    }
    if (empty($email)) {
        die('Email address is invalid or empty');
    }
    if (empty($website)) {
        die('Website is required');
    }

    $full_user_details = "Welcome $first_name $last_name! <br /> I see your email is $email and your favorite website is $website.";

    echo $full_user_details;
}
