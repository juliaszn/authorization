<?php
session_start();
global $connection;
require_once('db.php');

 $email = $_POST['email'];
 $password = $_POST['password'];

if (empty($email) || empty($password)) {
    echo 'Empty field';
} else {
    $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
       header('location: /feedback/feedback.php');
    }
else {
    $_SESSION['error'] = 'Incorrect email or password';
    header('location: index.php?error=1');
    exit();
}}