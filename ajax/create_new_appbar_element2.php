<?php 


session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {


    $id_ = 'id' . uniqid('', true);
    $freeze = 'false';
    $title = $_POST['title'];
    $state = $_POST['state'];
    $link = isset($_POST['link']) ? $_POST['link'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : 'link';
    $link_id = $_POST['link_id'];
    if ($type != 'link') {
        $link = $id_;
    }



    $q = "INSERT INTO `dropdown-info`(`title`, `id`,`link`, `visable`, `freeze`, `id_`) 
        VALUES ('$title','$link_id','$link','$state','$freeze','$id_')";
    mysqli_query($c, $q);
    // echo $q;



}