<?php

session_start();
include '../html/config.php';




if (isset($_SESSION['log_admin'])) {
    $name = $_POST['name'];
    $work = $_POST['work'];
    $id = $_POST['id'];
    $type = $_POST['type'];
    $ph = $_POST['ph'];
    $tw = $_POST['tw'];
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




                    if ($type == 'members') {

                        $q = "UPDATE `members` SET `img`='assets/$new_name' WHERE `id`='$id'";
                    } else {
                        $q = "UPDATE `creater` SET `img`='assets/$new_name' WHERE `id`='$id'";


                    }


                    mysqli_query($c, $q);
                }
            }
        }
    }

    if ($type == 'members') {

        $q = "UPDATE `members` SET `name`='$name',`work`='$work', `phone`='$ph', `twitter`='$tw' WHERE `id`='$id'";
    } else {
        $q = "UPDATE `creater` SET `name`='$name',`work`='$work', `phone`='$ph', `twitter`='$tw' WHERE `id`='$id'";

    }



    mysqli_query($c, $q);
}
