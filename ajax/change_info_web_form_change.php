<?php

session_start();
include '../html/config.php';



// echo "No";

if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {



    $title = $_POST['title'];

    $q = "UPDATE `web_info` SET `info`='$title' WHERE `tag`='web-title'";
    mysqli_query($c, $q);
    $keywords = $_POST['keywords'];
    $q = "UPDATE `web_info` SET `info`='$keywords' WHERE `tag`='meta-keywords'";
    mysqli_query($c, $q);
    $description = $_POST['description'];
    $q = "UPDATE `web_info` SET `info`='$description' WHERE `tag`='meta-description'";
    mysqli_query($c, $q);

    $bigtapinfoUser = $_POST['bigtapinfoUser'];
    $q = "UPDATE `web_info` SET `info`='$bigtapinfoUser' WHERE `tag`='bigtapinfoUser'";
    mysqli_query($c, $q);

    $bigtapinfoTrainer = $_POST['bigtapinfoTrainer'];
    $q = "UPDATE `web_info` SET `info`='$bigtapinfoTrainer' WHERE `tag`='bigtapinfoTrainer'";
    mysqli_query($c, $q);

    $bigtapinfoTeam = $_POST['bigtapinfoTeam'];
    $q = "UPDATE `web_info` SET `info`='$bigtapinfoTeam' WHERE `tag`='bigtapinfoTeam'";
    mysqli_query($c, $q);

    $bigtapinfoEstiblshment = $_POST['bigtapinfoEstiblshment'];
    $q = "UPDATE `web_info` SET `info`='$bigtapinfoEstiblshment' WHERE `tag`='bigtapinfoEstiblshment'";
    mysqli_query($c, $q);
}
