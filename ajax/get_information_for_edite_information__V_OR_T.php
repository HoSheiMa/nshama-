<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    $id = $_POST['id'];
    $type = $_POST['type'];

    if ($type == "v") {
        $table = "volunteer opportunities";
        $table2 = "volunteer opportunities info";
    } else {
        $table = "training_courses";
        $table2 = "trainers info";
    }

    $q1 = "SELECT * FROM `$table` WHERE `id`='$id'";
    $q2 = "SELECT * FROM `$table2` WHERE `id`='$id'";

    $r1 = mysqli_query($c, $q1);
    $r2 = mysqli_query($c, $q2);

    $r1 = mysqli_fetch_array($r1);
    $r2 = mysqli_fetch_array($r2);
    $title = $r1['title'];
    $body = $r1['body'];
    $date = $r1['date'];
    $last_time = $r2['last_time'];
    $creater_time = $r2['creater_time'];
    $team_creater = $r2['team_creater'];
    $person_creater = $r2['person_creater'];
    $mobile_person_creater = $r2['mobile_person_creater'];
    $type = $r2['type'];
    $location = $r2['location'];
    $city = $r2['city'];
    $item_needed = $r2['item_needed'];
    $more_body_info = $r2['more_body_info'];
    $time_add = $r2['time_add'];
    $arr = [
        $title, $body, $date, $last_time, $creater_time,
        $team_creater, $person_creater, $mobile_person_creater, $type, $location,
        $city, $item_needed, $more_body_info, $time_add
    ];

    $json_arr = json_encode($arr, JSON_UNESCAPED_UNICODE);

    echo $json_arr;




}