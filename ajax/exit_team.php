<?php

include '../html/config.php';
session_start();


if (!isset($_SESSION['log']) || $_SESSION['log'] == false) {
    echo "
    <script>
    window.location.assign('../') </script>
    ";


}

$team_email = $_POST['email'];

$email = $_SESSION['who'];

$q = "DELETE FROM `teams_members` WHERE `email`='$email' AND `team_email`='$team_email'";

$r = mysqli_query($c, $q);

echo 'Done!';