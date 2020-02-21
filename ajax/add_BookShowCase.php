<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $body = $_POST['body'];
    $tag = $_POST['tag'];
    $id = 'id' . uniqid('', true);
    $writer = $_POST['writer'];
    $d1 = null;
    if (isset($_FILES['source']) && $_FILES['source']['size'] > 0) {

        $img = $_FILES['source'];
        $types = ['pdf'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));
        if (in_array($imgtype, $types)) {
            if ($img['error'] == 0) {
                if ($img['size'] <= 10000000) {
                    $new_name = uniqid('', true) . "." . $imgtype;

                    $d1 = "assets/$new_name";

                    move_uploaded_file($img['tmp_name'], "../" . $d1);





                    // $q = "UPDATE `bookshowcase` SET `source`='assets/$new_name' WHERE `id`='$id'";



                    // mysqli_query($c, $q);
                }
            }
        }
    }
    $d2 = null;
    if (isset($_FILES['cover']) && $_FILES['cover']['size'] > 0) {

        $img = $_FILES['cover'];
        $types = ['jpg', 'png', 'jpeg'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));
        if (in_array($imgtype, $types)) {
            if ($img['error'] == 0) {
                if ($img['size'] <= 10000000) {
                    $new_name = uniqid('', true) . "." . $imgtype;

                    $d2 = "assets/$new_name";

                    move_uploaded_file($img['tmp_name'], "../" . $d2);





                    // $q = "UPDATE `bookshowcase` SET `cover`='assets/$new_name' WHERE `id`='$id'";



                    // mysqli_query($c, $q);
                }
            }
        }
    }

    if ($d1 != null && $d2 != null) {


        $q = "INSERT INTO `bookshowcase`(`id`, `writer`, `name`, `body`, `cover`, `source`, `tag`) 
    VALUES ('$id','$writer','$name','$body','$d2','$d1','$tag')";





        mysqli_query($c, $q);
    }


}
