<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $body = $_POST['body'];
    $tag = $_POST['tag'];
    $type = $_POST['type'];
    $id = 'id' . uniqid('', true);

    if ($type == "0") {


        if (isset($_FILES['source']) && $_FILES['source']['size'] > 0) {

            $img = $_FILES['source'];
            $types = ['mp4'];
            $imgtype = explode('.', $img['name']);
            $imgtype = strtolower(end($imgtype));
            if (in_array($imgtype, $types)) {
                if ($img['error'] == 0) {

                    $new_name = uniqid('', true) . "." . $imgtype;

                    $d1 = "../assets/$new_name";

                    move_uploaded_file($img['tmp_name'], $d1);




                    $q = "INSERT INTO `videos`(`id`, `name`, `body`, `source`, `tag`) 
    VALUES ('$id','$name','$body','assets/$new_name','$tag')";



                    mysqli_query($c, $q);
                // echo "$q";




                }
            }
        }



    } else {
        $link = $_POST['link'];
        $q = "INSERT INTO `videos`(`id`, `name`, `body`, `source`, `tag`) 
    VALUES ('$id','$name','$body','$link','$tag')";



        mysqli_query($c, $q);
        // echo "$q";
    }


}
