<?php


session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin'])) {
    $type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');

    $email = $_POST['email'];

    $table = $type[$_POST['type']];
    $q = "DELETE FROM `$table` WHERE `email`='$email'";
    mysqli_query($c, $q);

}