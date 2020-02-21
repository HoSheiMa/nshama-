<?php


session_start();
include '../html/config.php';
if (isset($_SESSION['log_admin']) && isset($_POST['type'])) {
    $type = $_POST['type'];

    if ($type == "true") {

        $q = "UPDATE `web_info` SET`info`='true' WHERE `tag`='Stop___web'";
    } else {
        $q = "UPDATE `web_info` SET`info`='false' WHERE `tag`='Stop___web'";

    }

    echo $q;
    mysqli_query($c, $q);

}