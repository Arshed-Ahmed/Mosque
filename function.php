<?php

$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "mosque");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$pNo = $_POST['pNo'];
$occupantsNo = $_POST['occupantsNo'];


$query = "INSERT INTO `residenceData` (`name`, `email`, `address`, `pNo`, `occupantsNo`) VALUES ('$name', '$email', '$address', '$pNo', '$occupantsNo')";
$query_run = mysqli_query($conn, $query);
if ($query_run) {
    echo "success";
} else {
    echo $conn->error;
}
$conn->close();
