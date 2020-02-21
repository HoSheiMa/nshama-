<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $info = $_POST['info'];
    $img = $_FILES['image'];

    $types = ['jpg', 'png', 'jpeg'];
    $imgtype = explode('.', $img['name']);
    $imgtype = strtolower(end($imgtype));
    $tag = $_POST['tag'];

    if (!isset($_POST['type']) || $_POST['type'] != "edit") {

        echo "insert";
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


                    $q = "INSERT INTO `supporters`(`id`, `name`, `info`, `img`, `tag`) VALUES ('$random_id','$name','$info','assets/$new_name', '$tag')";

                    $r = mysqli_query($c, $q);

                }
            }
        }
    } else {
        echo "edit";
        $id = $_POST['id'];




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


                    $q = "UPDATE `supporters` SET `name`='$name',`info`='$info',`img`='assets/$new_name'WHERE `id`='$id'";
                    $r = mysqli_query($c, $q);

                }
            }
        } else {

            $q = "UPDATE `supporters` SET `name`='$name',`info`='$info', `tag`='$tag' WHERE `id`='$id'";

            $r = mysqli_query($c, $q);
        }


    }
}