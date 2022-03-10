<?php

include 'db_config.php';

$province = $_GET['province'] ?? '';


$query = "SELECT * FROM districts";

if ($province != '') {
    $query .= " WHERE `province`='$province'";
}

$result = mysqli_query($con, $query);

$return_arr = mysqli_fetch_all($result, MYSQLI_ASSOC);


echo json_encode($return_arr);
