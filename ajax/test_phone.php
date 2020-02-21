<?php


session_start();
include '../html/config.php';


$phone = $_POST['phone'];
$type = $_POST['type'];

if ($type == 'user') {

    $q = "SELECT * FROM `users` WHERE `mobile`='$phone'";

    $r = mysqli_query($c, $q);

    if ($r->num_rows > 0) {
        echo "found";
    } else {
        echo 'not found';
    }

}
