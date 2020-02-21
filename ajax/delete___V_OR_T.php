<?php


session_start();
include '../html/config.php';




if (isset($_SESSION['log_admin'])) {


    $type = $_POST['type'];
    $id = $_POST['id'];

    if ($type == 't') {
        $table = "training_courses";
    } else {
        $table = "volunteer opportunities";
    }



    $q = "DELETE FROM `$table` WHERE `id`='$id'";
    mysqli_query($c, $q);
    $q = "DELETE FROM `$table` WHERE`id`='$id'";
    mysqli_query($c, $q);
    echo 'Done!';

}