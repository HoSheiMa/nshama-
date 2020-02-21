<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $ico = $_POST['ico'];
    $id = $_POST['id'];



    $q = "UPDATE `statistics` SET `id`='$id',`icon_name`='$ico',`title`='$title',`num`='$text' WHERE `id`='$id'";



    mysqli_query($c, $q);
}
