<?php

session_start();


include '../html/config.php';


if (isset($_SESSION['log']) && $_SESSION['log'] == true) {
    $type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');

    $new_password = $_POST['new_password'];
    $email = $_SESSION['who'];

    $table = $type[$_SESSION['type']];
    $q = "UPDATE `$table` SET `pass`='$new_password' WHERE `email`='$email'";
    mysqli_query($c, $q);
}