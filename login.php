<?php

include 'dbh.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);


if(!$row = $result->fetch_assoc()) {
  echo "Yousr user name or password is incorrect";
}
else {
  echo "You are logged in!";
}
