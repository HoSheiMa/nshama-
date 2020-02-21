<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $q = "SELECT * FROM `admins` WHERE 1";

    $r = mysqli_query($c, $q);

    $r = mysqli_fetch_all($r);
    for ($i = 0; $i < sizeof($r); $i++) {

        if ($r[$i][0] == $_SESSION['log_id']) unset($r[$i]);
        unset($r[$i][2]);
    }
    $r = json_encode($r);

    echo ($r);


}