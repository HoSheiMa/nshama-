<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $img = $_FILES['image'];
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

                $random_id = $_POST['code'];


                $q = "INSERT INTO `certificates`(`id`, `name`,  `img`) VALUES ('$random_id','$name','assets/$new_name')";

                $r = mysqli_query($c, $q);

            }
        }
    }
}