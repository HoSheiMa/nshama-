<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {


    $type_ = $_POST['type'];
    $type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');
    $table = $type[$type_];
    $email = $_POST['email'];
    if ($_POST['action'] == '1') {
        $access = '1';
    } else {
        $access = '0';
    }
    $q = "UPDATE `$table` SET `access`='$access' WHERE `email`='$email'";



    $r = mysqli_query($c, $q);

    echo "$q";




}