
<?php
session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {


    $id = $_POST['id'];
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $q = "UPDATE `admins` SET `username`='$email',`name`='$name' WHERE `id`='$id'";
        mysqli_query($c, $q);

    }

    if (isset($_POST['pass']) && strlen($_POST['pass']) > 1) {
        $pass = $_POST['pass'];

        $q = "UPDATE `admins` SET `password`='$pass' WHERE `id`='$id'";
        // echo "$q";
        mysqli_query($c, $q);
    }

}