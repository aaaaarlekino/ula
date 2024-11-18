<?php
$user = $_POST["user"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];

$user = htmlspecialchars($user);
$surname = htmlspecialchars($surname);
$email = htmlspecialchars($email);
$telephone = htmlspecialchars($telephone);

$mysqli = new mysqli('localhost', 'root', '', 'kafe');
$mysqli->query("INSERT INTO `reg`(`Id`,`user`,`surname`,`email`,`telephone`) VALUES (NULL, '$user','$surname','$email','$telephone')");


?>
