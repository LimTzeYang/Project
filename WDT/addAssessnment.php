<?php
$QuizID = $_POST['QuizID'];
$Answer = $_POST['Answer_Results'];

$localhost = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'poodle';

// Check connection
$conn = mysqli_connect($localhost, $user, $passwd, $dbname);

if (mysqli_connect_errno()) {
    die('<script>alert("Connection failed: Please check your SQL connection!");</script>');
}

$sql = "INSERT INTO `Quiz_records` (QuizID, Answer_Results) VALUES ('$QuizID', '$Answer')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Submission Updated!');window.location.href = 'assessgment.php';</script>";
} else {
    echo "<script>alert('Fail: unable to insert new subject!');window.history.go(-1);</script>";
}

$conn->close();
?>
