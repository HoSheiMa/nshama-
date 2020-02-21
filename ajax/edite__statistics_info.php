<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `statistics` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $id = $out[0];
    $ico = $out[1];
    $title = $out[2];
    $num = $out[3];
    $arr = [$id, $ico, $title, $num];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}