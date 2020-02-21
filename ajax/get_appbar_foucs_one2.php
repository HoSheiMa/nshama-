<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin']) {


    $id = $_POST['id'];
    $q = "SELECT * FROM `dropdown-info` WHERE `id_`='$id'";

    $arr = json_encode(mysqli_fetch_array(mysqli_query($c, $q)), JSON_UNESCAPED_UNICODE);

    echo $arr;


}