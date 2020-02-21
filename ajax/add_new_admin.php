<?php

session_start();


include '../html/config.php';


if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {



    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $id = uniqid('', true);

    $q = "INSERT INTO `admins`(`id`, `username`, `password`, `name`, `access`) 
    VALUES ('$name','$email','$pass','$name','[]')";
    mysqli_query($c, $q);

}