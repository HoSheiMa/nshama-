<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {
    $link = $_POST['link'];
    $id = $_POST['id'];
    $visable = $_POST['visable'];

    if (isset($_FILES['image'])) {
        $img = $_FILES['image'];
        $types = ['jpg', 'png', 'jpeg', 'gif'];
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


                    $random_id = "id" . rand(0, 99999999);


                    $q = "INSERT INTO `links`(`img-link`, `link`, `visable`, `id`) 
                    VALUES ('assets/$new_name','$link','$visable','id$new_name')";
                    $r = mysqli_query($c, $q);
                }
            }
        }
    }




}