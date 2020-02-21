<?php
session_start();


include '../html/config.php';

if (isset($_POST['id'])) {

    $id = $_POST['id'];

    $q = "SELECT * FROM `bookshowcase` WHERE `id`='$id'";

    $r = mysqli_query($c, $q);

    $date = json_encode(mysqli_fetch_array($r), JSON_UNESCAPED_UNICODE);

    echo $date;



} else {
    echo 'null';
}