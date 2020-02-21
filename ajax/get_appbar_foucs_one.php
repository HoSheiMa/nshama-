<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin']) {

    if (!isset($_POST['type'])) {

        $id = $_POST['id'];
        $q = "SELECT * FROM `appbar` WHERE `id_`='$id'";

        $arr = json_encode(mysqli_fetch_array(mysqli_query($c, $q)), JSON_UNESCAPED_UNICODE);

        echo $arr;
    } else {
        $id = $_POST['id'];
        $q = "SELECT * FROM `appbar` WHERE `link`='$id'";

        $arr = json_encode(mysqli_fetch_array(mysqli_query($c, $q)), JSON_UNESCAPED_UNICODE);

        echo $arr;
    }


}