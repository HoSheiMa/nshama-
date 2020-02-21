
<?php
session_start();

include '../html/config.php';


if ($_SESSION['log_admin'] == true) {
    $q = "SELECT * FROM `info` WHERE `tag`='views'";
    $r = mysqli_query($c, $q);
    $views = mysqli_fetch_array($r)[1];

    $q = "SELECT * FROM `info` WHERE `tag`='asks'";
    $r = mysqli_query($c, $q);
    $asks = mysqli_fetch_array($r)[1];

    $q = "SELECT * FROM `info` WHERE `tag` = 'users_signup' ";
    $r = mysqli_query($c, $q);
    $erros = mysqli_fetch_array($r)[1];

    $q = "SELECT * FROM `info` WHERE `tag` = 'subs' ";
    $r = mysqli_query($c, $q);
    $subs = mysqli_fetch_array($r)[1];

    $q = "SELECT * FROM `web_info` WHERE `tag`='web-title'";
    $title = mysqli_fetch_array(mysqli_query($c, $q))['info'];


    $q = "SELECT * FROM `web_info` WHERE `tag`='meta-keywords'";
    $keywords = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='meta-description'";
    $description = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='about_web'";
    $about_web = mysqli_fetch_array(mysqli_query($c, $q))['info'];


    $q = "SELECT * FROM `links`";
    $links = json_encode(mysqli_fetch_all(mysqli_query($c, $q)));

    $q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoUser'";
    $bigtapinfoUser = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoTrainer'";
    $bigtapinfoTrainer = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoTeam'";
    $bigtapinfoTeam = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoEstiblshment'";
    $bigtapinfoEstiblshment = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $bigtapinfo = [$bigtapinfoUser, $bigtapinfoTrainer, $bigtapinfoTeam, $bigtapinfoEstiblshment];

    $q = "SELECT * FROM `web_info` WHERE `tag`='web_info___v'";
    $bigtapinfo2 = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $q = "SELECT * FROM `web_info` WHERE `tag`='web_info___w_v'";
    $bigtapinfo3 = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    $info = [$views, $asks, $erros, $title, $keywords, $description, $links, $about_web, $subs, $bigtapinfo, $bigtapinfo2, $bigtapinfo3];

    echo (json_encode($info));
}
