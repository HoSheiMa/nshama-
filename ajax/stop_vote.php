<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $q = "UPDATE `web_info` SET `info`='false' WHERE `tag`='vote'";
    mysqli_query($c, $q);
}