<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `videos` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $id = $out[0];
    $name = $out[1];
    $body = $out[2];
    $source = $out[3];
    $tag = $out[4];
    $arr = [$name, $body, $source, $tag];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}