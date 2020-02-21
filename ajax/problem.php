

<?php

include '../html/config.php';



$address = $_POST['address'];
$problem = $_POST['problem'];
$date = date("F j, Y, g:i a");
$id = "id" . rand(0, 99999999);
$q = "INSERT INTO `problem_ask`(`address`, `problem`, `date`, `id`) VALUES ('$address','$problem','$date', '$id')";




$r = mysqli_query($c, $q);

$q = "SELECT * FROM `info` WHERE `tag`='asks'";

$r = mysqli_query($c, $q);

$new_views = +mysqli_fetch_array($r)[1] + 1;

$q = "UPDATE `info` SET `data`='$new_views' WHERE `tag`='asks'";

$r = mysqli_query($c, $q);


?>