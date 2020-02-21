<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $body = $_POST['body'];
    $tag = $_POST['tag'];
    $id = $_POST['id'];
    $writer = $_POST['writer'];
    if (isset($_FILES['source']) && $_FILES['source']['size'] > 0) {

        $img = $_FILES['source'];
        $types = ['pdf'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));
        if (in_array($imgtype, $types)) {
            if ($img['error'] == 0) {
                if ($img['size'] <= 10000000) {
                    $new_name = uniqid('', true) . "." . $imgtype;

                    $d = "../assets/$new_name";

                    move_uploaded_file($img['tmp_name'], $d);





                    $q = "UPDATE `bookshowcase` SET `source`='assets/$new_name' WHERE `id`='$id'";



                    mysqli_query($c, $q);
                }
            }
        }
    }
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

                    move_uploaded_file($img['tmp_name'], $d);





                    $q = "UPDATE `bookshowcase` SET `cover`='assets/$new_name' WHERE `id`='$id'";



                    mysqli_query($c, $q);
                }
            }
        }
    }

    $q = "UPDATE `bookshowcase` SET `name`='$name',`body`='$body' ,`tag`='$tag', `writer`='$writer' WHERE `id`='$id'";



    mysqli_query($c, $q);


}
