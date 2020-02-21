
<?php
session_start();
include '../html/config.php';

if (isset($_SESSION['log_admin'])) {
    $id = $_POST['id'];

    $q = "SELECT * FROM `problem_ask` WHERE `id`='$id'";

    $r = mysqli_query($c, $q);

    $out = mysqli_fetch_array($r);

    $address = $out[0];
    $name = $out[1];
    $problem = $out[2];
    $problem_type = $out[3];
    $title = $out[4];
    $date = $out[5];
    $id = $out[6];
    $arr = [$address, $name, $problem, $problem_type, $title, $date, $id];
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);


}