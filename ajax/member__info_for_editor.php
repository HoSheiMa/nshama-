<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $type = $_POST['type'];
    if ($type == 'members') {
        $q = "SELECT * FROM `members` WHERE `id`='$id'";
    } else {
        $q = "SELECT * FROM `creater` WHERE `id`='$id'";
    }
    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r);


    $id = $out[0];
    $name = $out[1];
    $work = $out[2];
    $img = $out[3];
    $ph = $out[4];
    $tw = $out[5];
    $arr = [$id, $name, $work, $img, $ph, $tw];

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);






}