<?php


session_start();
include '../html/config.php';





if (isset($_SESSION['log'])) {



    $type = $_POST['type'];
    $gmail = $_SESSION['who'];
    $id = $_POST['id'];
    $type_ = $_POST['type_'];

    if ($type_ == 't') {
        $type_ = "training_courses";
        $type__ = "trainers info";
    } else {
        $type_ = "volunteer opportunities";
        $type__ = "volunteer opportunities info";
    }

    if ($type == "3") {
        $q = "DELETE FROM `$type_` WHERE `id`='$id' AND `email`='$gmail'";
        echo "Hello $q";
        mysqli_query($c, $q);

    }

    if ($type == "2") {
        $q = "UPDATE `$type_` SET `state`='0' WHERE `id`='$id' AND `email`='$gmail'";
        mysqli_query($c, $q);
        $q = "UPDATE `$type__` SET `state`='0' WHERE `id`='$id' AND `team_email`='$gmail'";
        mysqli_query($c, $q);

    }
}