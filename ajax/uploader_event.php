<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $text2 = $_POST['info'];
    $img = $_FILES['image'];
    $state = $_POST['state'];
    $types = ['jpg', 'png', 'jpeg'];
    $imgtype = explode('.', $img['name']);
    $imgtype = strtolower(end($imgtype));
    $date = date("j, n, Y");
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



                $q = "INSERT INTO `topnews2`(`img`,  `id`,`title`, `body`,  `state`)  VALUES ('assets/$new_name','$random_id','$title','$text', '$state')";

                $r = mysqli_query($c, $q);

                $q = "INSERT INTO `event_txt`(`id`, `title`, `text`, `date`) VALUES ('$random_id','$title','$text2', '$date')";

                $r = mysqli_query($c, $q);

            }
        }
    }
}