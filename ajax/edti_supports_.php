<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {


    $id = $_POST['id'];
    $q = "SELECT * FROM `supporters` WHERE `id`='$id'";


    $r = mysqli_query($c, $q);

    $arr = [];
    $out = mysqli_fetch_array($r);
    
    echo json_encode([$out[0], $out[1], $out[2], $out[3]], JSON_UNESCAPED_UNICODE);




}