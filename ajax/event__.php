<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log']) && $_SESSION['log'] == true || isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {
    $action_type = $_POST['action_type'];
    $seltype = $_POST['seltype'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $seltype = $seltype == 'v' ? 'active_v' : 'active_t';
    $action_type = $action_type == "true" ? '1' : '0';
    $q = "UPDATE `$seltype` SET `state`='$action_type' WHERE `email`='$email' AND `id`='$id'";
    mysqli_query($c, $q);
    echo $q;

}