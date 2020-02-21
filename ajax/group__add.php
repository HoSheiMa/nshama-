<?php


session_start();
include '../html/config.php';





if (isset($_SESSION['log']) || $_SESSION['type'] == 'team') {

    $type = $_POST['type'];

    $email_person = $_POST['email_person'];

    $email = $_SESSION['who'];

    if ($type == 'true' || $type == true) {
        $type = '1';
    } else {
        $type = '0';
    }
    $today = date("j, n, Y");
    $q = "UPDATE `teams_members` SET `state`='$type',`date`='$today' WHERE `email`='$email_person' AND `team_email`='$email'";

    mysqli_query($c, $q);
    echo $q;

}