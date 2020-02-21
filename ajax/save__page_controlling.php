<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $id = $_POST['id'];
    $html = $_POST['html'];

    $type = $_POST['type'];

    $q = "DELETE FROM `pages_content` WHERE `id`='$id'";
    mysqli_query($c, $q);
    $q = "INSERT INTO `pages_content`(`id`, `html`) VALUES ('$id','$html')";
    mysqli_query($c, $q);

    $q = "UPDATE `appbar` SET`link`='req.php?q=pages_views&page=$id' WHERE `id_`='$id'";
    mysqli_query($c, $q);

    $q = "UPDATE `dropdown-info` SET`link`='req.php?q=pages_views&page=$id' WHERE `id_`='$id'";
    mysqli_query($c, $q);


    echo "Good";


}