<?php

session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin'])) {

    $q = "SELECT * FROM `web_info` WHERE `tag`='info_web_2'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo $r;

}