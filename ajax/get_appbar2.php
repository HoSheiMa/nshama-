<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin']) {


    $q = "SELECT * FROM `dropdown-info`";
    $arr = mysqli_fetch_all(mysqli_query($c, $q));
    $arr = json_encode($arr, JSON_UNESCAPED_UNICODE);

    echo $arr;


}