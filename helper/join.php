<?php

include '../html/config.php';
session_start();


if (!isset($_SESSION['log']) || $_SESSION['log'] == false) {
    echo "
    <script>
    window.location.assign('../') </script>
    ";


}


$type = isset($_POST['type']) ? $_POST['type'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$table = null;
$email = $_SESSION['who'];
$date = date("Y-n-j");
if ($type != null || $id != null || $name != null) {

    if ($type == "v") {
        $table = "active_v";
    } elseif ($type == "t") {

        $table = "active_t";
    }

    if ($table != null) {

        $q_check = "SELECT * FROM `$table` WHERE `id`='$id' AND `email`='$email'";
        $r_check = mysqli_query($c, $q);
        if ($r_check->num_rows > 0) {

        } else {

            $q = "INSERT INTO `$table`(`id`, `email`, `name`, `state`, `date`) 
        VALUES ('$id','$email','$name','2', '$date')";
            $r = mysqli_query($c, $q);

        }
    }
}