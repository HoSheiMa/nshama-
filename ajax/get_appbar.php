<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin']) {


    $q = "SELECT * FROM `appbar`";

    $arr = json_encode(mysqli_fetch_all(mysqli_query($c, $q)), JSON_UNESCAPED_UNICODE);

    echo $arr;


}