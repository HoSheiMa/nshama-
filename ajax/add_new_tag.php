<?php
session_start();
include '../html/config.php';




if (isset($_SESSION['log_admin'])) {


    if ($_POST['table'] == "book") {
        $name = $_POST['name'];
        $q = "SELECT * FROM `web_info` WHERE `tag`='bookTags'";
        $r = mysqli_query($c, $q);
        $out = mysqli_fetch_array($r)['info'];

        $arr = json_decode(($out), JSON_UNESCAPED_UNICODE);
        // $arr = json_decode(($arr), JSON_UNESCAPED_UNICODE, true);
        // $array = json_decode($arr, true);

        array_push($arr, $name);
        $array = json_encode($arr, JSON_UNESCAPED_UNICODE);
        $q = "UPDATE `web_info` SET `info`='$array' WHERE `tag`='bookTags'";
        mysqli_query($c, $q);

    } else if ($_POST['table'] == 'video') {
        $name = $_POST['name'];
        $q = "SELECT * FROM `web_info` WHERE `tag`='VideosTags'";
        $r = mysqli_query($c, $q);
        $out = mysqli_fetch_array($r)['info'];

        $arr = json_decode(($out), JSON_UNESCAPED_UNICODE);
        // $arr = json_decode(($arr), JSON_UNESCAPED_UNICODE, true);
        // $array = json_decode($arr, true);

        array_push($arr, $name);
        $array = json_encode($arr, JSON_UNESCAPED_UNICODE);
        $q = "UPDATE `web_info` SET `info`='$array' WHERE `tag`='VideosTags'";
        mysqli_query($c, $q);
        // echo $q;
    } else if ($_POST['table'] == 'sup') {
        $name = $_POST['name'];
        $q = "SELECT * FROM `web_info` WHERE `tag`='tags_sup'";
        $r = mysqli_query($c, $q);
        $out = mysqli_fetch_array($r)['info'];

        $arr = json_decode(($out), JSON_UNESCAPED_UNICODE);
        // $arr = json_decode(($arr), JSON_UNESCAPED_UNICODE, true);
        // $array = json_decode($arr, true);

        array_push($arr, $name);
        $array = json_encode($arr, JSON_UNESCAPED_UNICODE);
        $q = "UPDATE `web_info` SET `info`='$array' WHERE `tag`='tags_sup'";
        mysqli_query($c, $q);
        // echo $q;


    } else {
        $name = $_POST['name'];
        $q = "SELECT * FROM `web_info` WHERE `tag`='ImagesTags'";
        $r = mysqli_query($c, $q);
        $out = mysqli_fetch_array($r)['info'];

        // $arr = json_encode(($out), JSON_UNESCAPED_UNICODE, true);
        $arr = json_decode(($out), JSON_UNESCAPED_UNICODE);
        // $array = json_decode($arr, true);

        array_push($arr, $name);
        $array = json_encode($arr, JSON_UNESCAPED_UNICODE);
        $q = "UPDATE `web_info` SET `info`='$array' WHERE `tag`='ImagesTags'";
        mysqli_query($c, $q);
        // echo $q;

    }




}