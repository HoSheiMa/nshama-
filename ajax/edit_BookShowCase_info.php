<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `bookshowcase` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $id = $out[0];
    $writer = $out[1];
    $name = $out[2];
    $body = $out[3];
    $source = $out[5];
    $tag = $out[6];
    $arr = [$writer, $name, $body, $source, $tag];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}