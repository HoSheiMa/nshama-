<?php 


session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {


    $id_ = 'id' . uniqid('', true);
    $freeze = 'false';
    $title = $_POST['title'];
    $state = $_POST['state'];
    $link_type = $_POST['link_type'];
    $link = isset($_POST['link']) ? $_POST['link'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : 'link';

    if ($type != 'link') {
        $link = $id_;
    } 
    // check if state of freeze
    $q = "SELECT * FROM `appbar` WHERE `id_`='$id'";

    $r = mysqli_query($c, $q);

    $out = mysqli_fetch_array($r);


    $q = "INSERT INTO `appbar`(`title`, `link`, `visable`, `type`, `freeze`, `id_`) 
        VALUES ('$title','$link','$state','$type','$freeze','$id_')";
    mysqli_query($c, $q);




}