<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $tag = $_POST['tag'];
    $id = $_POST['id'];

    if (isset($_FILES['cover']) && $_FILES['cover']['size'] > 0) {

        $img = $_FILES['cover'];
        $types = ['jpg', 'png', 'jpeg'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));
        if (in_array($imgtype, $types)) {
            if ($img['error'] == 0) {
                if ($img['size'] <= 10000000) {
                    $new_name = uniqid('', true) . "." . $imgtype;

                    $d = "../assets/$new_name";

                    if (move_uploaded_file($img['tmp_name'], $d)) {
                        echo "success";
                    } else {
                        echo 'failed';
                    }





                    $q = "UPDATE `images` SET `img`='assets/$new_name' WHERE `id`='$id'";



                    mysqli_query($c, $q);
                }
            }
        }
    }

    $q = "UPDATE `images` SET `title`='$name',`tag`='$tag' WHERE `id`='$id'";



    mysqli_query($c, $q);


}
