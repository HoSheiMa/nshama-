<?php

session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin'])) {

    $q = "SELECT * FROM `web_info` WHERE `tag`='ads_html'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='ads_visable'";
    $r2 = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='ads_links'";
    $r3 = mysqli_fetch_array(mysqli_query($c, $q))['info'];
    $json = json_encode([$r, $r2, $r3]);
    echo $json;

}