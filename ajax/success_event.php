<?php
session_start();
include '../html/config.php';
// $type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');





if (isset($_SESSION['log']) && $_SESSION['log'] == true || isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {
    $seltype = $_POST['seltype'];
    $email = $_POST['email'];
    if (!isset($_POST['admin']) && $_POST['admin'] != 'true') {
        $id = $_POST['id']; // id post
    $table = $seltype == 'v' ? 'volunteer opportunities info' : 'trainers info';
    $table4 = $seltype == 'v' ? 'volunteer opportunities' : 'training_courses';

    $q = "SELECT * FROM `$table` WHERE `id`='$id'";
    // $type = $type[$_SESSION['type']];
    $r = mysqli_query($c, $q);
    $newhoues = (int)mysqli_fetch_array($r)['time_add'];
    } else {
        $newhoues = $_POST['time_add'];
    }

    $time_profile = "SELECT * FROM `time__users` WHERE `email`='$email'";

    $r_profile = mysqli_fetch_array(mysqli_query($c, $time_profile));

    $new_full_time = (int)$r_profile['full_time'] + $newhoues;
    $new_time_T = (int)$r_profile['time_T'];
    $new_time_V = (int)$r_profile['time_V'];



    if ($seltype == 'v') {

        $new_time_V = +$new_time_V + $newhoues;
    } else {

        $new_time_T = +$new_time_T + $newhoues;
    }

    $q_up = "UPDATE `time__users` SET `full_time`='$new_full_time',`time_V`='$new_time_V',`time_T`='$new_time_T' WHERE `email`='$email'";
    mysqli_query($c, $q_up);


    
    if ($seltype == "v") {
        $table2 = "active_v";
        $table3 = 'c_v_';
    } else {
        $table2 = "active_t";
        $table3 = 'c_t_';
        
    }
            if (!isset($_POST['admin']) && $_POST['admin'] != 'true') {

    $q = "UPDATE `$table2` SET `state`='3' WHERE`email`='$email'AND`id`='$id'";

    mysqli_query($c, $q);

    }
    // echo "$q";
    if (isset($_FILES['img'])) {
        $img = $_FILES['img'];
        $types = ['jpg', 'png', 'jpeg'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));

        if (in_array($imgtype, $types)) {
            echo "good type";
            if ($img['error'] == 0) {
                echo "no errors";
                if ($img['size'] <= 10000000) {
                    echo "Good size!";
                    $new_name = uniqid('', true) . "." . $imgtype;
                    $random_id = uniqid('', true);
                    $d = "../assets/$new_name";

                    move_uploaded_file($img['tmp_name'], $d);
                    
                    // uploadinfo($name, $work, $new_name);

                    $random_id = "id" . rand(0, 99999999);
    if (!isset($_POST['admin']) && $_POST['admin'] != 'true') {


                    $q = "SELECT * FROM `$table4` WHERE `id`='$id'";
                    $title = mysqli_fetch_array(mysqli_query($c, $q))['title'];
                    // echo "$q";
    } else {
        $title = $_POST['title'];
    }
                    $q = "INSERT INTO `$table3`(`name`, `img`, `id`, `email`) VALUES ('$title','../assets/$new_name','','$email')";

                    $r = mysqli_query($c, $q);



                }
            }
        }



    }

}