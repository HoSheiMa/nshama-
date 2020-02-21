<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $img = $_FILES['logo'];
    $types = ['png', 'PNG'];
    $imgtype = explode('.', $img['name']);
    $imgtype = strtolower(end($imgtype));

    if (in_array($imgtype, $types)) {
        echo "good type";
        if ($img['error'] == 0) {
            echo "no errors";
            if ($img['size'] <= 10000000) {
                echo "Good size!";
                $new_name = uniqid('', true) . "." . $imgtype;

                $d = "../assets/$new_name";

                move_uploaded_file($img['tmp_name'], $d);

                // uploadinfo($name, $work, $new_name);

                $random_id = "id" . rand(0, 99999999);


                $q = "UPDATE `web_info` SET `info`='assets/$new_name' WHERE `tag`='web-title-img'";
                $r = mysqli_query($c, $q);

            }
        }
    }
}