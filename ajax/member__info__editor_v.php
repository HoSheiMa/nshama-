<?php

session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $work = $_POST['work'];
    $id = $_POST['id'];


    if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

        $img = $_FILES['img'];
        $types = ['jpg', 'png', 'jpeg'];
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





                    $q = "UPDATE `volunteers` SET `img`='assets/$new_name' WHERE `id`='$id'";



                    mysqli_query($c, $q);
                }
            }
        }
    }
    $q = "UPDATE `volunteers` SET `name`='$name',`work`='$work' WHERE `id`='$id'";



    mysqli_query($c, $q);
}
