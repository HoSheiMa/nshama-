<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `volunteers` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $id = $out[0];
    $name = $out[1];
    $work = $out[2];
    $img = $out[3];
    $arr = [$id, $name, $work, $img];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}