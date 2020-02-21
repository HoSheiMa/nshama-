<?php

session_start();
include '../html/config.php';





// if (isset($_SESSION['log_admin'])) {

$q = "SELECT * FROM `web_info` WHERE `tag`='vote'";

$r = mysqli_query($c, $q);
$r = mysqli_fetch_array($r)['info'];


if ($r == "true") {
    $q = "SELECT * FROM `web_info` WHERE `tag`='vote_q'";
    $a = "SELECT * FROM `web_info` WHERE `tag`='vote_a'";
    $info = "SELECT * FROM `web_info` WHERE `tag`='vote_data'";

    $q = mysqli_fetch_array(mysqli_query($c, $q))['info'];
    $a = mysqli_fetch_array(mysqli_query($c, $a))['info'];
    $info = mysqli_fetch_array(mysqli_query($c, $info))['info'];
    $out = json_encode([$q, $a, $info], JSON_UNESCAPED_UNICODE);

    echo $out;


} else {
    echo "null";
}

// }