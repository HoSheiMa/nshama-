<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
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

                $random_id = "id" . rand(0, 99999999);


                $q = "INSERT INTO `topnews`(`img`, `title`, `smalltitle`, `id`)  VALUES ('assets/$new_name','$title','$text','$random_id')";

                $r = mysqli_query($c, $q);

            }
        }
    }
}