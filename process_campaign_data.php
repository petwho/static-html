<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
session_start();

$config = require('./.env.php');

$dbhost = $config['DB_HOST'];
$dbuser = $config['DB_USER'];
$dbpass = $config['DB_PASS'];
$dbname = $config['DB_NAME'];


// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Error connecting to database: " . $conn->connect_error);
} 

$genderList = ['male', 'female'];
$locationList = ['Hà Nội', 'Hồ Chí Minh'];

// set parameters and execute
$fullname = @$_POST['fullname'];
$phone = @$_POST['phone'];
$email = @$_POST['email'];
$child_age = (int) @$_POST['child_age'];
$child_gender = @$_POST['child_gender'];
$location = @$_POST['location'];


if (!empty($fullname) && !empty($phone) && filter_var($email, FILTER_VALIDATE_EMAIL)
    && is_int($child_age) && in_array($child_gender, $genderList) && in_array($location, $locationList)) {
    $stmt = $conn->prepare("INSERT INTO customers (fullname, phone, email, child_age, child_gender, location) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssss", $fullname, $phone, $email, $child_age, $child_gender, $location);

    $stmt->execute();
    $stmt->close();
}

$conn->close();
