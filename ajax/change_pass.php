<?php

session_start();
include '../html/config.php';



// echo "No";

if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $pass = $_POST['pass'];
    $id = $_SESSION['log_id'];

    $q = "UPDATE `admins` SET `password`='$pass' WHERE `id`='$id'";

    // echo "$q";

    $r = mysqli_query($c, $q);


}