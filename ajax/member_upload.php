<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $work = $_POST['work'];
    $img = $_FILES['image'];
    $type = $_POST['type'];
    $ph = $_POST['ph'];
    $tw = $_POST['tw'];
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

                $d = "../assets/$new_name";

                move_uploaded_file($img['tmp_name'], $d);

                // uploadinfo($name, $work, $new_name);

                $random_id = "id" . rand(0, 99999999);

                if ($type == 'members') {

                    $q = "INSERT INTO `members`(`id`, `name`, `work`, `img`, `phone`, `twitter`) VALUES ('$random_id','$name','$work','assets/$new_name', '$ph', '$tw')";
                } else {
                    $q = "INSERT INTO `creater`(`id`, `name`, `work`, `img`, `phone`, `twitter`) VALUES ('$random_id','$name','$work','assets/$new_name', '$ph', '$tw')";


                }
                // echo "$q";
                $r = mysqli_query($c, $q);

            }
        }
    }
}