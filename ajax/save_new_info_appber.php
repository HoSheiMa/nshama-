<?php 


session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {


    $id = $_POST['id'];
    $title = $_POST['title'];
    $state = $_POST['state'];
    $link = isset($_POST['link']) ? $_POST['link'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : 'link';


    // check if state of freeze
    $q = "SELECT * FROM `appbar` WHERE `id_`='$id'";

    $r = mysqli_query($c, $q);

    $out = mysqli_fetch_array($r);

    if ($out[4] == 'true') {
        $q = "UPDATE `appbar` SET `title`='$title',`visable`='$state' WHERE `id_`='$id'";
        mysqli_query($c, $q);
    } else {
        $q = "UPDATE `appbar` SET `title`='$title',`visable`='$state',`link`='$link', `type`='$type' WHERE `id_`='$id'";
        mysqli_query($c, $q);
    }



}