<?php

session_start();
include '../html/config.php';




if (isset($_SESSION['log_admin'])) {
    $id_old = $_POST['old_id'];
    $name = $_POST['name'];
    $code = $_POST['code'];

    if (isset($_FILES['img']) && $_FILES['img']['size'] > 0) {

        $img = $_FILES['img'];
        $types = ['jpg', 'png', 'jpeg'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));
        // echo "Hell";
        if (in_array($imgtype, $types)) {
            // echo "in arr";
            if ($img['error'] == 0) {
                echo $img['size'];
                if ($img['size'] <= 100000000000) {
                    // echo "size";
                    $new_name = uniqid('', true) . "." . $imgtype;

                    $d = "../assets/$new_name";

                    move_uploaded_file($img['tmp_name'], $d);




                        $q = "UPDATE `certificates` SET `id`='$code',`name`='$name',`img`='assets/$new_name' WHERE `id`='$id_old'";
mysqli_query($c, $q);
                }
            }
        }
    } else {

        
        $q = "UPDATE `certificates` SET `id`='$code',`name`='$name' WHERE `id`='$id_old'";
        
        
        
        
        mysqli_query($c, $q);
    }
}
