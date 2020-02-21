<?php


session_start();
include '../html/config.php';


$id_test = $_POST['id_test'];
$type = $_POST['type'];

if ($type == 'user') {

    $q = "SELECT * FROM `users` WHERE `nu_id`='$id_test'";

    $r = mysqli_query($c, $q);

    if ($r->num_rows > 0) {
        echo "found";
    } else {
        echo 'not found';
    }

}
