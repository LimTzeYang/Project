<?php

$localhost = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'poodle';

// Check connection
$conn = mysqli_connect($localhost, $user, $passwd, $dbname);

if (mysqli_connect_errno()) {
    die('<script>alert("Connection failed: Please check your SQL connection!");</script>');
}
echo "<script>alert('Successfully connected!');</script>";



?>