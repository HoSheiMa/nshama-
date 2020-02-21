<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {



    $q = "SELECT * FROM `web_info` WHERE `tag`='bookTags'";



    $r = mysqli_query($c, $q);
    $out = mysqli_fetch_array($r)['info'];
    echo $out;
}
