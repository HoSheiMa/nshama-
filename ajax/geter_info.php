<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {


    $type_ = $_POST['type'];
    $type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');
    $table = $type[$type_];
    $q = "SELECT * FROM `$table` WHERE 1";


    $r = mysqli_query($c, $q);

    $arr = [];

    while ($out = mysqli_fetch_array($r)) {
        if ($type_ == 'user') {
            $q_p = "SELECT * FROM `time__users` WHERE `email`='" . $out['email'] . "'";
            $r_p = mysqli_fetch_array(mysqli_query($c, $q_p));
            $p_v = $r_p[2];
            $p_t = $r_p[3];

            array_push($arr, [$out['email'], $out[$type_ != "trainer" ? 'name' : 'full_name'], $type_ != 'user' ? $out['access'] : '1', $p_v, $p_t, $out['national']]);

        } else {

            array_push($arr, [$out['email'], $out[$type_ != "trainer" ? 'name' : 'full_name'], $type_ != 'user' ? $out['access'] : '1']);
        }
    }

    echo json_encode($arr, JSON_UNESCAPED_UNICODE);




}