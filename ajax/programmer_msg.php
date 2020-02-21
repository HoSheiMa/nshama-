<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    if (isset($_POST['delete']) && $_POST['delete'] == 'true') {
        $q = "UPDATE `web_info` SET `info`='false' WHERE `tag`='programmer_msg'";
        mysqli_query($c, $q);
    } else {

        $q = "SELECT * FROM `web_info` WHERE `tag`='programmer_msg'";
        $state = mysqli_fetch_array(mysqli_query($c, $q))['info'];

        if ($state == 'true') {
            $q = "SELECT * FROM `web_info` WHERE `tag`='msg_p'";
            $value = mysqli_fetch_array(mysqli_query($c, $q))['info'];
            echo "$value";
        } else {
            echo "null";
        }
    }

} else {
    echo "null";
}