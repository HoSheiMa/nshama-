<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `images` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $id = $out[0];
    $img = $out[1];
    $name = $out[2];
    $tag = $out[3];

    $arr = [$id, $name, $img, $tag];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}