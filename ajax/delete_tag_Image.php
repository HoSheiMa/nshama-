<?php
session_start();
include '../html/config.php';




if (isset($_SESSION['log_admin'])) {

    $name = $_POST['name'];
    $q = "SELECT * FROM `web_info` WHERE `tag`='ImagesTags'";



    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r)['info'];

    // $arr = json_encode(($out), JSON_UNESCAPED_UNICODE, true);
    // echo $out;
    $array = json_decode($out, JSON_UNESCAPED_UNICODE);
    // $array = json_decode($arr, true);
    echo print_r($array);
    // echo $q;


    for ($i = 0; $i < sizeof($array); $i++) {
        if ($array[$i] == $name) {
            echo "Found";
            array_splice($array, $i, 1);
            // unset($array[$i]);
            $array = json_encode($array, JSON_UNESCAPED_UNICODE);
            $q = "UPDATE `web_info` SET `info`='$array' WHERE `tag`='ImagesTags'";
            mysqli_query($c, $q);
        } else {
            continue;
        }

    }




}