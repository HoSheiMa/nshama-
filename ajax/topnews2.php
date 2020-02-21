<?php 


session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $q = "SELECT * FROM `topnews2` WHERE 1 ORDER BY `id` DESC";

    $r = mysqli_query($c, $q);

    $arr = [];

    while ($out = mysqli_fetch_array($r)) {
        array_push($arr, [$out[0], $out[1], $out[2], $out[3]]);
    }

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}

