<?php

include '../html/config.php';

$code = $_POST['code'];

$q = "SELECT * FROM `cards` WHERE `id`='$code'";

$r = mysqli_query($c, $q);

if ($r->num_rows > 0) {
    $out = mysqli_fetch_array($r);
    $code = $out[0];
    $name = $out[1];
    $img = $out[2];
    $found = true;
    $json_arr = [$code, $name, $img, $found];
    echo json_encode($json_arr);



} else {
    $json_arr = [null, null, null, null];
    echo json_encode($json_arr);

}
