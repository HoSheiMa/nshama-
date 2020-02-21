<?php

session_start();


include '../html/config.php';


if (isset($_SESSION['log_admin']) || $_SESSION['log_admin'] != fasle) {
    $type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');

    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $table = $type[$_POST['type']];
    $q = "UPDATE `$table` SET `pass`='$pass' WHERE `email`='$email'";
    mysqli_query($c, $q);
}