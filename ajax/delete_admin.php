<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $id = $_POST['id'];
    $q = "DELETE FROM `admins` WHERE `id`='$id'";
    mysqli_query($c, $q);

    echo "Done!";


}