<?php

error_reporting(E_ALL);
ini_set("display_errors", 0);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['msg'];



if (!$fullname || !$email || !$number || !$msg) {
    $info = 'error';
    $correction = 'All informations are required';
    include('contact.php');
    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $info = 'error';
    $correction = 'Please input a valid email';
    include('contact.php');
    exit;
}


?>