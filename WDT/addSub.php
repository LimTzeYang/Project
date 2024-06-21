<?php

$SubjectID = $_POST['SubjectID'];

include "connadd.php";

$sql = "INSERT INTO studentdb (SubjectID) VALUES ('$SubjectID')";

mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) <= 0) {
    die("<script>alert('Fail: unable to insert new subject!');window.history.go(-1);</script>");
}

echo "<script>alert('New Subject Updated!');window.location.href = 'add.html';</script>";

$conn->close();
?>


