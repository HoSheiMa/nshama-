<?php 


session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {


    $id = $_POST['id'];
    $title = $_POST['title'];
    $state = $_POST['state'];
    $link = isset($_POST['link']) ? $_POST['link'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : 'link';

    $link_id = $_POST['link_id'];

    $q = "UPDATE `dropdown-info` SET `id`='$link_id',`title`='$title',`visable`='$state',`link`='$link' WHERE `id_`='$id'";
    mysqli_query($c, $q);
    echo $q;



}