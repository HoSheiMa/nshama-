<?php

session_start();


include '../html/config.php';


if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $access_arr = $_POST['access_arr'];

    $access_arr = json_encode($access_arr);

    $id = $_POST['id'];


    $q = "UPDATE `admins` SET`access`='$access_arr' WHERE `id`='$id'";

    mysqli_query($c, $q);

}