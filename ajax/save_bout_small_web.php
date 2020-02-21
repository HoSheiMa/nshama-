<?php

session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $val = $_POST['val'];
    $q = "UPDATE `web_info` SET`info`='$val' WHERE `tag`='about_web'";
    mysqli_query($c, $q);
}