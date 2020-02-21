<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin']) {


    $q = "SELECT * FROM `appbar` WHERE `freeze`<>'true' AND `type`='link'";

    $arr = json_encode(mysqli_fetch_all(mysqli_query($c, $q)), JSON_UNESCAPED_UNICODE);




    $q = "SELECT * FROM `dropdown-info`  WHERE `freeze`<>'true' ";

    $arr = "[" . json_encode(mysqli_fetch_all(mysqli_query($c, $q)), JSON_UNESCAPED_UNICODE) . ',' . $arr . ']';

    echo $arr;


}