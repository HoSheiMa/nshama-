<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $text2 = $_POST['info'];
    $state = $_POST['state'];
    $id = $_POST['id'];




    if (!$_FILES['image']['size'] > 0) {
        $noimg = true;
    } else {
        $noimg = false;
    }
    if ($noimg == false) {

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



                    $q = "UPDATE `topnews2` SET `img`='assets/$new_name',`title`='$title',`state`='$state',`body`='$text' WHERE `id`='$id'";



                    mysqli_query($c, $q);

                    $q = "UPDATE `event_txt` SET `title`='$title',`text`='$text2' WHERE `id`='$id'";



                    mysqli_query($c, $q);
                }
            }
        }
    } else {
        $q = "UPDATE `topnews2` SET `title`='$title',`body`='$text', `state`='$state' WHERE `id`='$id'";



        mysqli_query($c, $q);

        $q = "UPDATE `event_txt` SET `title`='$title',`text`='$text2' WHERE `id`='$id'";



        mysqli_query($c, $q);
    }

}
