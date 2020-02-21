<?php


session_start();
include '../html/config.php';


$email = $_POST['email'];
$type = $_POST['type'];

if ($type == 'user') {

    $q = "SELECT * FROM `users` WHERE `email`='$email'";

    $r = mysqli_query($c, $q);

    if ($r->num_rows > 0) {
        echo "found";
    } else {
        echo 'not found';
    }

}
