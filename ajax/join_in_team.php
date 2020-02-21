<?php

session_start();
include '../html/config.php';


if (isset($_SESSION['log']) && isset($_SESSION['type']) && $_SESSION['type'] == 'user') {

    $team_name = $_POST['team_name'];
    $team_email = $_POST['team_email'];
    $email = $_SESSION['who'];
    $q = "SELECT * FROM `users` where `email`='$email'";
    $name = mysqli_fetch_array(mysqli_query($c, $q))[3];
    $state = '2';
    $date = date("j, n, Y");

    $q = "INSERT INTO `teams_members`(`email`, `team_email`, `team_name`, `person_name`, `state`, `date`)
    VALUES ('$email','$team_email','$team_name','$name','$state','$date')";
    mysqli_query($c, $q);



}