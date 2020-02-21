<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `topnews2` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $img = $out[0];
    $id = $out[1];
    $title = $out[2];
    $body = $out[3];
    $state = $out[4];
    $q = "SELECT * FROM `event_txt` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);
    $text = $out[2];
    $arr = [$img, $id, $title, $body, $text, $state];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}