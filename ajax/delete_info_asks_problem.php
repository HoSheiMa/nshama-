<?php


session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin'])) {


    $q = "SELECT * FROM `info` WHERE `tag`='asks'";

    $r = mysqli_query($c, $q);

    $new_views = +mysqli_fetch_array($r)[1] - 1;

    $q = "UPDATE `info` SET `data`='$new_views' WHERE `tag`='asks'";

    $r = mysqli_query($c, $q);



    $id = $_POST['id'];
    $q = "DELETE FROM `problem_ask` WHERE `id`='$id'";
    mysqli_query($c, $q);

}