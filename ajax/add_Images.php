<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $tag = $_POST['tag'];
    $id = 'id' . uniqid('', true);
    if (isset($_FILES['cover']) && $_FILES['cover']['size'] > 0) {
        // echo 'hereeee';

        $img = $_FILES['cover'];
        $types = ['jpg', 'png', 'jpeg'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));
        if (in_array($imgtype, $types)) {
            if ($img['error'] == 0) {
                if ($img['size'] <= 10000000) {
                    $new_name = uniqid('', true) . "." . $imgtype;

                    $d1 = "../assets/$new_name";;
                    move_uploaded_file($img['tmp_name'], $d1);





                    $q = "INSERT INTO `images`(`id`, `img`, `title`, `tag`) 
                VALUES ('$id','assets/$new_name','$name','$tag')";
                    mysqli_query($c, $q);
                    // echo $q;
                }
            }
        }
    }






}
