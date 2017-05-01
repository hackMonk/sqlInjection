<?php

include 'dbh.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user (username, password)
VALUES ('$username', '$password')";
$result = $conn->query($sql);

header("Location: index.php");
