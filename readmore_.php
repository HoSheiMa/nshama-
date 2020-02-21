<?php

include 'html/config.php';
session_start();

if (!isset($_GET['q'])) {
    echo "
    <script>
    window.location.assign('../') </script>
    ";
}
if (!isset($_GET['type'])) {
    echo "
    <script>
    window.location.assign('../') </script>
    ";
}

if ($_GET['type'] == 'v') {
    $table = 'volunteer opportunities info';
    $table2 = "volunteer opportunities";
    $table3 = "active_v";
} else if ($_GET['type'] == 't') {
    $table = 'trainers info';
    $table2 = "training_courses";
    $table3 = "active_t";
} else {
    echo "
    <script>
    window.location.assign('../') </script>
    ";
}

$id_info = $_GET['q'];


$q = "SELECT * FROM `$table` WHERE `id`='$id_info'";

$r = mysqli_fetch_array(mysqli_query($c, $q));

$q_ = "SELECT * FROM `$table2` WHERE `id`='$id_info'";

$r_ = mysqli_fetch_array(mysqli_query($c, $q_));

$q__ = "SELECT * FROM `$table3` WHERE `id`='$id_info' AND `state`='2'";

$waiting_people = mysqli_query($c, $q__);

$q__ = "SELECT * FROM `$table3` WHERE `id`='$id_info' AND `state`='1'";

$active_people = mysqli_query($c, $q__);

                                                                            // echo print($r);
if (isset($r['state'])) {
    // $s___ = ($r['state'] == 1) ? 'مفتوح' : 'مغلق';
    // $s__c = ($r['state'] == 1) ? '#27AE60' : '#E74C3C';
    if ($r['state'] == 1) {
        $s___ = "مفتوح";
        $s__c = "#27AE60";
    } else {
        if ($r['state'] == 0) {
            $s___ = "مغلق";
            $s__c = '#E74C3C';
        } else {
            $s___ = "قريبا";
            $s__c = "#E67E22";
        }
    }

} else {
    $s___ = 'غير معرف!';
    $s__c = '#E74C3C';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <?php
        $qmeta = "SELECT * FROM `web_info` WHERE `tag`='web-title'";
        $rmeta = mysqli_fetch_array(mysqli_query($c, $qmeta))['info'];

        echo "<title>$rmeta</title>";
        ?>


 <?php

$qmeta = "SELECT * FROM `web_info` WHERE `tag`='web-title-img'";
$rmeta = mysqli_fetch_array(mysqli_query($c, $qmeta))['info'];

echo "<link rel=\"shortcut icon\" type=\"image/png\" href=\"$rmeta\">";
?>


<?php

$qmeta = "SELECT * FROM `web_info` WHERE `tag`='meta-keywords'";
$rmeta = mysqli_fetch_array(mysqli_query($c, $qmeta))['info'];

echo "<meta name='keywords' content='$rmeta'>";
?>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <?php

    $qmeta = "SELECT * FROM `web_info` WHERE `tag`='meta-description'";
    $rmeta = mysqli_fetch_array(mysqli_query($c, $qmeta))['info'];

    echo "<meta name='description' content='$rmeta'>";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link rel="stylesheet" href="./style/index.css" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="library/ico.css">
</head>

<body>

 <?php
include 'html/uppage.php';

?>

    <div class="row text-center p-0 m-0">
        <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

            <div class="row justify-content-md-center">

                <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">معلومات اكثر</h2>
            </div>
        </div>

    </div>
    <?php
    if (isset($_SESSION['who']) || isset($_SESSION['log_admin'])) {
        if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true || isset($_SESSION['who']) && $r_['email'] == $_SESSION['who']) {

            ?>
    <div class='container' style='margin-top: 25px;'>
        <div class="row ">

            <div class="col-sm-12 col-md-4 col-lg-4 col-4-xl border " style='height:300px;    overflow-y: scroll;'>
                <div class='row text-success  '>
                    <div class="col text-center">
                        <h3>لائجة القبول</h3>
                    </div>
                </div>
                <?php

                $q_controller = "SELECT * FROM `$table3` WHERE `state`='1' AND `id`='$id_info'";
                $r_contrller = mysqli_query($c, $q_controller);

                while ($x_controller = mysqli_fetch_array($r_contrller)) {
                    $name_ = $x_controller['name'];
                    $email_ = $x_controller['email'];
                    $user_get_fullname = "SELECT * FROM `users` WHERE `email`='$email_'";
                    $fullname = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['full_name'];
                    $mobile = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['mobile'];
                    $seltype = $table3 == "active_t" ? 't' : 'v';

                    echo "
                 <div class=' row bg-light text-dark text-center' style='padding:8px;'>
                 <div class=\"col\">
                 <div class=\"col \"> <h6>$fullname</h6></div>
                 <div class=\"col \"> <h6>$mobile</h6></div>
                 </div>
                <div class=\"col text-right\">
            <button onclick='success_event(this, \"$seltype\",\"$email_\",\"$id_info\")' class='btn btn-white text-success btn-sm'>
                <i class=\"material-icons\">
                school
                    </i>
                </button>
                <button onclick='event__(false, this, \"$seltype\",\"$email_\",\"$id_info\")' class='btn btn-danger btn-sm'>
                <i class=\"material-icons\">
                close
                    </i>
                </button>
                </div>
                </div>
                ";
                }

                ?>

            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-4-xl border " style='height:300px;    overflow-y: scroll;'>
                <div class='row text-danger  '>
                    <div class="col text-center">
                        <h3>لائحة الرفض </h3>
                    </div>
                </div>
                <?php

                $q_controller = "SELECT * FROM `$table3` WHERE `state`='0' AND `id`='$id_info'";
                $r_contrller = mysqli_query($c, $q_controller);

                while ($x_controller = mysqli_fetch_array($r_contrller)) {
                    $name_ = $x_controller['name'];
                    $email_ = $x_controller['email'];
                    $user_get_fullname = "SELECT * FROM `users` WHERE `email`='$email_'";
                    $fullname = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['full_name'];
                    $mobile = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['mobile'];
                    $seltype = $table3 == "active_t" ? 't' : 'v';

                    echo "
                 <div class=' row bg-light text-dark text-center' style='padding:8px;'>
                 <div class=\"col\">
                 <div class=\"col \"> <h6>$fullname</h6></div>
                 <div class=\"col \"> <h6>$mobile</h6></div>
                 </div>
                <div class=\"col text-right\">
                <button onclick='event__(true, this, \"$seltype\",\"$email_\",\"$id_info\")' class='btn btn-success btn-sm'>
                <i class=\"material-icons\">
                    done
                </i>
                </button>
                
                </div>
                </div>
                ";
                }

                ?>

            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-4-xl border " style='height:300px;    overflow-y: scroll;'>
                <div class='row text-warning '>
                    <div class="col text-center">
                        <h3>لائحة الانتظار</h3>
                    </div>
                </div>
                <?php

                $q_controller = "SELECT * FROM `$table3` WHERE `state`='2' AND `id`='$id_info'";
                $r_contrller = mysqli_query($c, $q_controller);

                while ($x_controller = mysqli_fetch_array($r_contrller)) {
                    $name_ = $x_controller['name'];
                    $email_ = $x_controller['email'];
                    $user_get_fullname = "SELECT * FROM `users` WHERE `email`='$email_'";
                    $fullname = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['full_name'];

                    $mobile = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['mobile'];
                    $seltype = $table3 == "active_t" ? 't' : 'v';

                    echo "
                 <div class=' row bg-light text-dark text-center' style='padding:8px;'>
                 <div class=\"col\">
                 <div class=\"col \"> <h6>$fullname</h6></div>
                 <div class=\"col \"> <h6>$mobile</h6></div>
                 </div>
                 <div class=\"col\">
                <button onclick='event__(true, this, \"$seltype\",\"$email_\",\"$id_info\")' class='btn btn-success btn-sm'>
                <i class=\"material-icons\">
                    done
                </i>
                </button>
                <button onclick='event__(false, this, \"$seltype\",\"$email_\",\"$id_info\")' class='btn btn-danger btn-sm'>
                <i class=\"material-icons\">
                close
                    </i>
                </button>
                </div>
                </div>
                </div>
                ";
                }

                ?>
            </div>
            <div class="col-12 border " style='height:300px;    overflow-y: scroll;'>
                <div class='row text-dark '>
                    <div class="col text-center">
                        <h3>لائحة الناجحين في الفرصة</h3>
                    </div>
                </div>
                <?php

                $q_controller = "SELECT * FROM `$table3` WHERE `state`='3' AND `id`='$id_info'";
                $r_contrller = mysqli_query($c, $q_controller);

                while ($x_controller = mysqli_fetch_array($r_contrller)) {
                    $name_ = $x_controller['name'];
                    $email_ = $x_controller['email'];
                    $user_get_fullname = "SELECT * FROM `users` WHERE `email`='$email_'";
                    $fullname = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['full_name'];

                    $mobile = mysqli_fetch_array(mysqli_query($c, $user_get_fullname))['mobile'];
                    $seltype = $table3 == "active_t" ? 't' : 'v';

                    echo "
                 <div class='row bg-light text-dark ' style='padding:8px;'>
              
                <div class=\"col-9\">
                <button onclick='event__(false, this, \"$seltype\",\"$email_\",\"$id_info\")' class='btn btn-danger btn-sm'>
                <i class=\"material-icons\">
                close
                    </i>
                </button>
                <button onclick='event__w(false, this, \"$seltype\",\"$email_\",\"$id_info\")' class='ml-1 btn btn-warning text-white btn-sm'>
                <i class=\"material-icons\">
                donut_small
                    </i>
                </button>
                </div>
                <div class=\"col align-self-end\">
                <div class=\"col \"> <h6>$fullname</h6></div>
                <div class=\"col \"> <h6>$mobile</h6></div>
                </div>
                </div>
                
                </div>
                ";
                }

                ?>
            </div>
        </div>
    </div>

    </div>
    </div>

    <?php

}
}

?>
    <div class="container col-md-10" style="margin-top:50px; margin-bottom: 50px; background-color: #fff; padding-top: 30px;padding-bottom: 50px;">
        <div class="row col-md">

            <div class="col-md-7" style="text-align:right; margin-top:10px;">
                <h4 style="margin-right: 10px; margin-bottom: 30px;">
                    <?php echo isset($r_['title']) ? $r_['title'] : 'غير معرف!'; ?>
                </h4>
                <p class=""></p>
                <h6 style="margin-right: 10px; display:inline;">حالة التسجيل :</h6>
                <p class="" style="color:<?php echo $s__c; ?>;display:inline;">
                    <?php echo $s___; ?>
                </p>

                <table class="table" style="margin-top: 20px;">
                    <tbody>
                        <tr>
                            <td>
                                <?php echo isset($r['last_time']) ? $r['last_time'] : 'غير معرف!'; ?>
                            </td>
                            <th scope="row">تاريخ إغلاق التسجيل</th>
                        </tr>
                        <tr>
                            <td>
                                <?php echo isset($r['creater_time']) ? $r['creater_time'] : 'غير معرف!'; ?>
                            </td>
                            <th scope="row">تاريخ بداية الفرصة</th>
                        </tr>
                        <tr>
                            <td>
                                <?php echo isset($r['creater_time']) ? $r['creater_time'] : 'غير معرف!'; ?>

                            </td>
                            <th scope="row">تاريخ نهاية الفرصة</th>
                        </tr>
                        <tr>
                            <td> <a href="#" style="color: #008ba3;">
                                    <?php echo isset($r['team_creater']) ? $r['team_creater'] : 'غير معرف!'; ?>

                                </a></td>
                            <th scope="row">المنظم</th>
                        </tr>
                        <tr>
                            <td> <a href="#" style="color: #008ba3;">
                                    <?php echo isset($r['person_creater']) ? $r['person_creater'] : 'غير معرف!'; ?>
                                </a></td>
                            <th scope="row">المنسق</th>
                        </tr>
                        <tr>
                            <td> <a href="#" style="color: #008ba3;">
                                    <?php echo isset($r['mobile_person_creater']) ? $r['mobile_person_creater'] : 'غير معرف!'; ?>

                                </a></td>
                            <th scope="row">جوال المنسق</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5" style="height:400px; overflow:hidden;">
                <img class="img-responsive" src="<?php echo isset($r_['img']) ? $r_['img'] : 'غير معرف!'; ?>" height="90%"
                    style="margin:0 !important; border: 1px solid #ccc;"> </div>
        </div>

        <hr>
        <div class="row col-md-12">
            <h4 class="col-md" style="text-align:center; margin-top: 30px; margin-bottom: 50px;"> تفاصيل أكثر </h4>
        </div>

        <div class="row col-md-12" style="direction:rtl; text-align:right; padding-bottom: 50px;">
            <div class="col-md-6">
                <table class="table">
                    <tbody>
                        <!-- <tr>
                        <th scope="row" style="width:40%">رقم جوال المنسق</th>
                        <td>058804486</td>
                      </tr> -->
                        <tr>
                            <th scope="row">عدد المتطوعين</th>
                            <td>

                                <?php echo ($active_people->num_rows); ?>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">عدد الإنتظار</th>
                            <td>

                                <?php echo ($waiting_people->num_rows); ?>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">المسارات التطوعية</th>
                            <td>
                                <?php echo isset($r['type']) ? $r['type'] : 'غير معرف!'; ?>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">الفئة المستهدفة</th>
                            <td>
                                <?php echo isset($r['sex']) ? $r['sex'] : 'غير معرف!'; ?>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row" style="width:40%">الجنسية المطلوبة</th>
                            <td>

                                <?php echo isset($r['types_focus']) ? $r['types_focus'] : 'غير معرف!'; ?>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">مكان التنفيذ</th>
                            <td>
                                <?php echo isset($r['location']) ? $r['location'] : 'غير معرف!'; ?>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">المدينة</th>
                            <td>
                                <?php echo isset($r['city']) ? $r['city'] : 'غير معرف!'; ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">متطلبات الفرصة</th>
                            <td>
                                <?php echo isset($r['item_needed']) ? $r['item_needed'] : 'غير معرف!'; ?>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">تفاصيل الفرصة</th>
                            <td>
                                <?php echo isset($r['more_body_info']) ? $r['more_body_info'] : 'غير معرف!'; ?>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr>
        <div class="row col-md-12">
            <h4 class="col-md" style="text-align:center; margin-top: 30px; margin-bottom: 50px;"> موقع الفعالية على
                الخريطة </h4>
        </div>

        <div class="row col-md">
            <div id="event-map" style="width:100%;height:400px;">

            </div>
        </div>

        <div class="col-sm-12" style="padding: 0 40%;">
        </div>
    </div>

    <script src="library/jquery-3.3.1.min.js"></script>
    <script src='javascript/index.js?v=2'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script>
    </script>
</body>

</html>