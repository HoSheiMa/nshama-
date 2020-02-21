<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `topnews` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $img = $out[0];
    $title = $out[1];
    $stitle = $out[2];
    $id = $out[3];
    $arr = [$img, $title, $stitle, $id];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}