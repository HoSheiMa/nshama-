<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $q = "DELETE FROM `bookshowcase` WHERE `id`='$id'";
    mysqli_query($c, $q);

    echo "Done!";


}