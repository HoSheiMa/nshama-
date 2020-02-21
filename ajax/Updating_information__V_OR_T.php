<?php
session_start();
include '../html/config.php';





if (isset($_SESSION['log_admin'])) {

    if (!isset($_POST['title'])
        ||
        !isset($_POST['shortbody'])
        ||
        !isset($_POST['name1'])
        ||
        !isset($_POST['name2'])
        ||
        !isset($_POST['mobile'])
        ||
        !isset($_POST['waytype'])
        ||
        !isset($_POST['focus_type_sex'])
        ||
        !isset($_POST['focus_people_type'])
        ||
        !isset($_POST['location'])
        ||
        !isset($_POST['city'])
        ||
        !isset($_POST['item_needed'])
        ||
        !isset($_POST['info'])
        ||
        !isset($_POST['date'])
        ||
        !isset($_POST['date2'])
        ||
        !isset($_POST['num_hours'])
        ||
        !isset($_POST['agree'])
        ||
        $_POST['agree'] == 'off') {
        echo "Error1!";
        return;
    }
    $title = $_POST['title'];
    $shortbody = $_POST['shortbody'];
    $name1 = $_POST['name1'];
    $num_hours = $_POST['num_hours'];
    $name2 = $_POST['name2'];
    $mobile = $_POST['mobile'];
    $waytype = $_POST['waytype'];
    $focus_type_sex = $_POST['focus_type_sex'];
    $focus_people_type = $_POST['focus_people_type'];
    $location = $_POST['location'];
    $city = $_POST['city'];
    $item_needed = $_POST['item_needed'];
    $info = $_POST['info'];
    $date = $_POST['date'];
    $date2 = $_POST['date2'];
    $new_name = null;
    $id_ = $_POST['id_'];
    $type = $_POST['type_'];
    if ($type == "v") {
        $table = "volunteer opportunities";
        $table2 = "volunteer opportunities info";
    } else {
        $table = "training_courses";
        $table2 = "trainers info";
    }
    if (isset($_FILES['img'])) {


        $img = $_FILES['img'];
        $types = ['jpg', 'png', 'jpeg'];
        $imgtype = explode('.', $img['name']);
        $imgtype = strtolower(end($imgtype));


        echo "HEre";
        if (in_array($imgtype, $types)) {
            echo "HEre";

            if ($img['error'] == 0) {
                echo "HEre";

                if ($img['size'] <= 10000000) {
                    echo "HEre";

                    $new_name = uniqid('', true) . "." . $imgtype;
                    $id = uniqid('', true);

                    $d = "../assets/$new_name";

                    move_uploaded_file($img['tmp_name'], $d);

                    echo "Done! Uploading";


                }
            }
        }

    }

    if ($new_name == null) {
        $q = "UPDATE `$table` SET  `title`='$title', `body`='$shortbody', `date`='$date'WHERE`id`='$id_'";
        mysqli_query($c, $q);
        echo "Done $q";

        $q = "UPDATE `$table2` SET 
        `last_time`='$date2',`creater_time`='$date',
        `team_creater`='$name1',`person_creater`='$name2',`mobile_person_creater`='$mobile',
        `type`='$waytype',`sex`='$focus_type_sex',`location`='$location',`city`='$city',`types_focus`='$focus_people_type',
        `item_needed`='$item_needed',`more_body_info`='$info',`time_add`='$num_hours' WHERE `id`='$id_'";

        mysqli_query($c, $q);

        echo "Done $q";
    } else {
        $q = "UPDATE `$table` SET  `img`='assets/$new_name',`title`='$title', `body`='$shortbody', `date`='$date'WHERE`id`='$id_'";
        mysqli_query($c, $q);
        echo "Done $q";

        $q = "UPDATE `$table2` SET 
        `last_time`='$date2',`creater_time`='$date',
        `team_creater`='$name1',`person_creater`='$name2',`mobile_person_creater`='$mobile',
        `type`='$waytype',`sex`='$focus_type_sex',`location`='$location',`city`='$city',`types_focus`='$focus_people_type',
        `item_needed`='$item_needed',`more_body_info`='$info',`time_add`='$num_hours' WHERE `id`='$id_'";

        mysqli_query($c, $q);

        echo "Done $q";
    }


} else {
    echo "Error1!";
}
