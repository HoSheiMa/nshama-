<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $body = $_POST['body'];
    $tag = $_POST['tag'];
    $id = $_POST['id'];
    echo $_FILES['source']['size'];
    $type = $_POST['type'];
    if ($type == '0') {

        if (isset($_FILES['source']) && $_FILES['source']['size'] > 0) {

            $img = $_FILES['source'];
            $types = ['mp4'];
            $imgtype = explode('.', $img['name']);
            $imgtype = strtolower(end($imgtype));
            echo "Hell";
            if (in_array($imgtype, $types)) {
                echo "in arr";
                if ($img['error'] == 0) {
                    echo $img['size'];
                    if ($img['size'] <= 100000000000) {
                        echo "size";
                        $new_name = uniqid('', true) . "." . $imgtype;

                        $d = "../assets/$new_name";

                        move_uploaded_file($img['tmp_name'], $d);





                        $q = "UPDATE `videos` SET `source`='assets/$new_name' WHERE `id`='$id'";



                        mysqli_query($c, $q);
                    }
                }
            }
        }


        $q = "UPDATE `videos` SET `name`='$name',`body`='$body' ,`tag`='$tag' WHERE `id`='$id'";



        mysqli_query($c, $q);
        echo "$q";


    } else {
        $link = $_POST['link'];

        $q = "UPDATE `videos` SET `name`='$name',`body`='$body',`source`='$link' ,`tag`='$tag' WHERE `id`='$id'";

        mysqli_query($c, $q);
        echo "$q";


    }

}
