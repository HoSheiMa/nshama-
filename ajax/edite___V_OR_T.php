<?php


session_start();
include '../html/config.php';




if (isset($_SESSION['log_admin'])) {


    $type = $_POST['type'];
    $id = $_POST['id'];
    $state = $_POST['state'];
    if ($type == 't') {
        $table = "training_courses";
        $table2 = "trainers info";
    } else {
        $table = "volunteer opportunities";
        $table2 = "volunteer opportunities info";

    }



    $q = "UPDATE  `$table` SET `state`='$state' WHERE `id`='$id'";
    mysqli_query($c, $q);
    $q = "UPDATE  `$table2` SET `state`='$state' WHERE `id`='$id'";
    mysqli_query($c, $q);
    // echo $q;

}