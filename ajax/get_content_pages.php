<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $id = $_POST['id'];


    $q = "SELECT * FROM `pages_content` WHERE `id`='$id'";
    $r = json_encode(mysqli_fetch_array(mysqli_query($c, $q)), JSON_UNESCAPED_UNICODE);

    echo $r;
}