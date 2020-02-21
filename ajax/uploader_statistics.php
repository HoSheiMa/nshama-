<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $ico = $_POST['ico'];


    $random_id = "id" . rand(0, 99999999);


    $q = "INSERT INTO `statistics`(`id`, `icon_name`, `title`, `num`) VALUES ('$random_id','$ico','$title','$text')";


    mysqli_query($c, $q);
}
