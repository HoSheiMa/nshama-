<?php

session_start();
include '../html/config.php';




if (isset($_SESSION['log_admin'])) {
    $ads_visable = $_POST['visable'];
    $link = $_POST['link'];

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




                    $q = "UPDATE `web_info` SET `info`='assets/$new_name' WHERE `tag`='ads_html'";
                    mysqli_query($c, $q);

                    $q = "UPDATE `web_info` SET `info`='$ads_visable' WHERE `tag`='ads_visable'";

                    mysqli_query($c, $q);

                    $q = "UPDATE `web_info` SET `info`='$link' WHERE `tag`='ads_links'";

                    mysqli_query($c, $q);
                }
            }
        }
    } else {


        $q = "UPDATE `web_info` SET `info`='$ads_visable' WHERE `tag`='ads_visable'";
        // echo "$q";




        mysqli_query($c, $q);


        $q = "UPDATE `web_info` SET `info`='$link' WHERE `tag`='ads_links'";
        // echo "$q";




        mysqli_query($c, $q);
    }
}
