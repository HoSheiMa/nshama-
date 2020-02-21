

<?php
session_start();
include '../html/config.php';

if (isset($_POST['nu'])) {
    $nu = $_POST['nu'];

    $info = "SELECT * FROM `web_info` WHERE `tag`='vote_data'";

    $info = mysqli_fetch_array(mysqli_query($c, $info))['info'];
    $info = json_decode($info, true);

    $info[$nu] = +$info[$nu] + 1;

    $info = json_encode($info);


    $q = "UPDATE `web_info` SET `info`=\"$info\" WHERE `tag`='vote_data'";
    mysqli_query($c, $q);


    $q = "SELECT * FROM `web_info` WHERE `tag`='vote_id'";
    $r = mysqli_query($c, $q);

    $out = mysqli_fetch_array($r)['info'];

    echo "[\"$out\"]";
}