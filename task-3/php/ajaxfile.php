<?php

include 'db_config.php';

$ip = $_GET['ip'];
$city = $_GET['city'];
$now = date('Y-m-d H:i:s');

$query = "INSERT INTO visits (ip, city, date) VALUES ('$ip', '$city', '$now')";



$result = mysqli_query($con, $query);



