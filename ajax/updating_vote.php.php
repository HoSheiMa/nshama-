<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {
    $ans = $_POST['ans'];
    $q = $_POST['q'];
    $a = $_POST['a'];


     // echo $a;
    $data = '[';
    for ($i = 0; $i < sizeof($a); $i++) {
        if (array_key_exists($i, $ans)) {
            $data = $data . $ans[$i];
        } else {
            $data = $data . '1';

        }
        if ($i == +sizeof($a) - 1) break;
        $data = $data . ',';
    }
    $data = $data . ']';


    $a = json_encode($a, JSON_UNESCAPED_UNICODE);
    $start = "UPDATE `web_info` SET `info`='true' WHERE `tag`='vote'";
    mysqli_query($c, $start);
    $start = "UPDATE `web_info` SET `info`='$q' WHERE `tag`='vote_q'";
    mysqli_query($c, $start);
    $start = "UPDATE `web_info` SET `info`='$a' WHERE `tag`='vote_a'";
    mysqli_query($c, $start);
    $start = "UPDATE `web_info` SET `info`='$data' WHERE `tag`='vote_data'";
    mysqli_query($c, $start);
    $new_id = "id" . rand(10000, 100000);
    $start = "UPDATE `web_info` SET `info`='$new_id' WHERE `tag`='vote_id'";
    mysqli_query($c, $start);




}