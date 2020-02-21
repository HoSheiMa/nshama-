<?php 

session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin'])) {




    $id = $_POST['id'];

    $q = "SELECT * FROM `users` WHERE `id`='$id'";

    $r = mysqli_query($c, $q);

    $out = mysqli_fetch_array($r);



    $id = $out[0];
    $email = $out[1];
    $nu_id = $out[2];
    $name = $out[3];
    $date = $out[4];
    $address = $out[5];
    $type = $out[6];
    $arr = [$id, $email, $nu_id, $name, $date, $address, $type];



    echo json_encode($arr, JSON_UNESCAPED_UNICODE);



}
