<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log'])) {

    $type = $_POST['type'];
    $id = $_POST['id'];
    $me = $_SESSION['who'];
    if ($type == 'v') {
        $table = 'active_v';
    } else {

        $table = 'active_t';
    }


    $q = "SELECT * FROM `$table` WHERE `id`='$id' AND `email`='$me'";

    $today = explode('-', date("Y-n-j"));
    $r = mysqli_fetch_array(mysqli_query($c, $q));
    $date = explode('-', $r[4]);

    $to_d = (int)$today[2];
    $to_m = (int)$today[1];
    $to_y = (int)$today[0];

    $_d = (int)$date[2];
    $_m = (int)$date[1];
    $_y = (int)$date[0];



    if ($to_y > $_y || $to_y == $_y && $to_m > $_m || $to_y == $_y && $to_m == $_m && $to_d > $_d) {

        $q = "DELETE FROM `$table` WHERE `id`='$id' AND `email`='$me'";

        mysqli_query($c, $q);
        echo 'removed';
    } else {
        echo 'false';
    }






}