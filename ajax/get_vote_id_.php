<?php
session_start();
include '../html/config.php';


$q = "SELECT * FROM `web_info` WHERE `tag`='vote_id'";
$r = mysqli_query($c, $q);

$out = mysqli_fetch_array($r)['info'];

echo "[\"$out\"]"   ;

?>