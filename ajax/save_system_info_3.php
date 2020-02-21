<?php

session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin'])) {

    if (isset($_POST['code'])) {
        $code = $_POST['code'];
        $q = "UPDATE `web_info` SET `info`='$code' WHERE `tag`='info_web_3'";
        $r = mysqli_query($c, $q);

    }





}