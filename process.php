<?php

$name = $_POST["name"];
$nic = $_POST["nic"];
$mobile = $_POST["mobile"];
$city = $_POST["city"];
$gender = $_POST["gender"];

$connection = new  mysqli("localhost", "root", "kumara703", "db001", "3306");

$q = "INSERT INTO `user` (`nic`,`name`,`mobile`,`city`,`gender`) VALUES('" . $nic . "','" . $name . "','" . $mobile . "','" . $city . "','" . $gender . "')";

$connection->query($q);

echo "Success";
