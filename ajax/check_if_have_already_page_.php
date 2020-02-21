<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

    $id = $_POST['id'];
    $q = "SELECT * FROM `pages_content` WHERE `id`='$id'";
    $r = mysqli_query($c, $q);
    if ($r->num_rows == 0) {
        echo "false";

    }

}
