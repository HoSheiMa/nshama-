<?php
include '../helper/config.php';

if (

    session_status()
    != PHP_SESSION_ACTIVE
) {
    session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light   navbar-costam">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto costam-app2">

                <li class="nav-item active">
                    <a class="nav-link" href="../">الصفخة الرائسية <span class="sr-only">(current)</span></a>
                </li>

        </div>
        <a class="navbar-brand" href="../">
            <img width=100 src="../assets/logo.jpg">
        </a>
    </nav>


    <?php
    // GET
    // ?email=asf%40e.2as&name=asfasfasf&nu_id=fasfs&address=asffsa&date=2018-12-20&type_=ذكر

    function error($id = 'X404')
    {


        $arr = array(
            'X001' => 'يجب ان توافق علي حقوق الخصوصية',
            'X002' => "يجب  تسجيل بريدك الاكتروني",
            'X003' => "يجب تتاكد من ان كلمة المرور صحيحة",
            'X004' => 'يجب ان تكمل البينات الخاصة بك',
            'X005' => 'يجب ان ترفع لنا السيرة الذاتية لنتخقق منها',
            'X007' => 'البريد الاكتروني مستخدم من قبل!',
            'X008' => 'رقم الهوية مستخدم من قبل'
        );
        echo '<div class="container"><div class="alert alert-danger text-right" role="alert">
    ' . $arr[$id] . '
</div></div>';
    }
    // print_r($_POST)  ;

    function arabic_e2w($str)
    {
        $arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        $arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        return str_replace($arabic_eastern, $arabic_western, $str);
    }

    if (isset($_POST['type_process'])) {
        $type_process = $_POST['type_process'];

        if ($type_process == 'user') {

            // names

            $grand_name = isset($_POST['tname']) ? $_POST['tname'] : '';
            $family_name = isset($_POST['lname']) ? $_POST['lname'] : '';
            $name = isset($_POST['name']) ? $_POST['name'] : '';

            // id_
            $id_ = isset($_POST['no']) ? arabic_e2w($_POST['no']) : '';
            $q = "SELECT * FROM `users` WHERE `nu_id`='$id_'";
            $r = mysqli_query($c, $q);
            if ($r->num_rows != 0) {
                error('X008');
                return;
            }
            $profile_img = "";

            if (isset($_FILES['profile_img']) && $_FILES['profile_img']['size'] > 0) {

                $img = $_FILES['profile_img'];
                $types = ['jpg', 'png', 'jpeg'];
                $imgtype = explode('.', $img['name']);
                $imgtype = strtolower(end($imgtype));
                if (in_array($imgtype, $types)) {
                    if ($img['error'] == 0) {
                        if ($img['size'] <= 100000000000) {
                            $new_name = uniqid('', true) . "." . $imgtype;

                            $d = "../assets/$new_name";

                            move_uploaded_file($img['tmp_name'], $d);

                            $profile_img = "assets/$new_name";


                            mysqli_query($c, $q);
                        }
                    }
                }
            } else {
                if (isset($_POST['national'])) {

                    if ($_POST['national'] == "ذكر" || $_POST['national'] == "male") {
                        $profile_img = "/images/man-300x300.png";
                    } else {
                        $profile_img = "/images/girl-300x300.png";
                    }
                } else {
                    error('X004');
                    return;
                }
            }


            $id_img = "";

            if (isset($_FILES['id_img']) && $_FILES['id_img']['size'] > 0) {

                $img = $_FILES['id_img'];
                $types = ['jpg', 'png', 'jpeg'];
                $imgtype = explode('.', $img['name']);
                $imgtype = strtolower(end($imgtype));
                if (in_array($imgtype, $types)) {
                    if ($img['error'] == 0) {
                        if ($img['size'] <= 100000000000) {
                            $new_name = uniqid('', true) . "." . $imgtype;

                            $d = "../assets/$new_name";

                            move_uploaded_file($img['tmp_name'], $d);

                            $id_img = "assets/$new_name";


                            mysqli_query($c, $q);
                        }
                    }
                }
            } else {
                error('X004');

                return;
            }


            // nationalty
            $nationalty = isset($_POST['nationalty']) ? $_POST['nationalty'] : '';

            //national
            $national = isset($_POST['national']) ? $_POST['national'] : '';

            //date
            $date = isset($_POST['date']) ? arabic_e2w($_POST['date']) : '';

            // connections

            $phone = isset($_POST['phone']) ? arabic_e2w($_POST['phone']) : '';
            $tel_phone = isset($_POST['telphone']) ? arabic_e2w($_POST['telphone']) : '';
            $emr_phone = isset($_POST['emr_phone']) ? arabic_e2w($_POST['emr_phone']) : '';


            // lern level

            $level = isset($_POST['level']) ? $_POST['level'] : '';

            $expre_value = isset($_POST['expre_value']) ? $_POST['expre_value'] : "";
            $work = isset($_POST['special']) ? $_POST['special'] : '';

            $work_focus = isset($_POST['special-deep']) ? $_POST['special-deep'] : '';

            $jop_type = isset($_POST['job']) ? $_POST['job'] : '';

            $reqsInfo = isset($_POST['reqsInfo']) ? json_encode($_POST['reqsInfo'], JSON_UNESCAPED_UNICODE) : '[]';

            $jop_manger = isset($_POST['job_aval']) ? $_POST['job_aval'] : '';
            $job_else = isset($_POST['jobelse']) ? $_POST['jobelse'] : '';

            $job_title = isset($_POST['job_title']) ? $_POST['job_title'] : '';

            $job_place = isset($_POST['job_place']) ? $_POST['job_place'] : '';

            $track = isset($_POST['track']) ? $_POST['track'] : '';

            $vol_time = isset($_POST['vol_time']) ? $_POST['vol_time'] : '';
            $Governorate = isset($_POST['Governorate']) ? $_POST['Governorate'] : '';


            $expir = isset($_POST['expir']) ? $_POST['expir'] : '';


            if (!isset($_POST['agree']) || $_POST['agree'] != 'on') {
                error('X001');
                return;
            }
            if (!isset($_POST['email']) || $_POST['email'] == '') {
                error('X002');
                return;
            }
            $email = $_POST['email'];
            $q = "SELECT * FROM `users` WHERE `email`='$email'";
            $r = mysqli_query($c, $q);
            if ($r->num_rows != 0) {
                error('X007');
                return;
            }

            if (!isset($_POST['pass']) || !isset($_POST['cpass'])) {
                error('X004');
                return;
            }
            if ($_POST['pass'] != $_POST['cpass']) {
                error('X003');
                return;
            }

            if (!isset($_POST['fname'])) {
                error('X004');
                return;
            }
            if (!isset($_POST['sname'])) {
                error('X004');
                return;
            }
            $first_name = $_POST['fname'];
            $sec_name = $_POST['sname'];
            // pass
            $pass = $_POST['pass'];
            $c_pass = $_POST['cpass'];

            $agree = $_POST['agree'];
            $email = $_POST['email'];


            $id__ = "id" . uniqid('', true);
            $track = (string) json_encode($track);

            $q = "INSERT INTO `users`(
            `id`, `email`, `nu_id`, `name`,
             `date`, `full_name`, `pass`, `nationalty`,
              `national`, `mobile`, `telphone`, `emr_phone`,
               `level`, `work`, `work_focus`, `job_type`,
                `job_title`, `job_else`,  `job_place`, `track`, `expir`,
                 `jop_manger`, `profile_img`, `id_img`, `expre_value`,
                  `fname`, `sname`, `tname`, `lname`, `Governorate`, `reqsInfo`) 
        VALUES (
            '$id__','$email','$id_','$name',
            '$date','$first_name $sec_name','$pass','$nationalty',
            '$national','$phone','$tel_phone','$emr_phone',
            '$level','$work','$work_focus','$jop_type',
            '$job_title', '$job_else', '$job_place','$track','$expir',
            '$jop_manger','$profile_img', '$id_img', '$expre_value',
             '$first_name', '$sec_name',
             '$grand_name', '$family_name', '$Governorate', '$reqsInfo')";
           // echo $q;
            $r = mysqli_query($c, $q);

            $q = "INSERT INTO `time__users`(`email`, `full_time`, `time_V`,`time_T`) VALUES ('$email','0','0','0')";

            mysqli_query($c, $q);

            // echo $q;
            // print_r($r);
            $_SESSION['log'] = true;

            $_SESSION['who'] = "$email";
            $_SESSION['type'] = "user";
            echo '<div class="container"><div class="alert alert-success text-center" role="alert">
  تم التسجيل بنجاح يتم اعادة التوجية بعد 3 ثواني
</div></div>

<script>
        setTimeout(()=> {

            window.location.assign("../");
        },3000)
</script>

';
        }






        if ($type_process == 'trainer') {




            $grand_name = isset($_POST['tname']) ? $_POST['tname'] : '';
            $family_name = isset($_POST['lname']) ? $_POST['lname'] : '';


            // id_
            $id_ = isset($_POST['no']) ? $_POST['no'] : '';



            // nationalty
            $nationalty = isset($_POST['nationalty']) ? $_POST['nationalty'] : '';

            //national
            $national = isset($_POST['national']) ? $_POST['national'] : '';

            //date
            $date = isset($_POST['date']) ? $_POST['date'] : '';

            // connections

            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $tel_phone = isset($_POST['telphone']) ? $_POST['telphone'] : '';
            $emr_phone = isset($_POST['emr_phone']) ? $_POST['emr_phone'] : '';


            // lern level

            $level = isset($_POST['level']) ? $_POST['level'] : '';

            $work = isset($_POST['special']) ? $_POST['special'] : '';

            $work_focus = isset($_POST['special-deep']) ? $_POST['special-deep'] : '';

            $reqsInfo = isset($_POST['reqsInfo']) ? json_encode($_POST['reqsInfo'], JSON_UNESCAPED_UNICODE) : '[]';

            $jop_type = isset($_POST['job']) ? $_POST['job'] : '';

            $jop_manger = isset($_POST['job_aval']) ? $_POST['job_aval'] : '';

            $job_title = isset($_POST['job_title']) ? $_POST['job_title'] : '';

            $job_place = isset($_POST['job_place']) ? $_POST['job_place'] : '';

            $track = isset($_POST['track']) ? $_POST['track'] : '';

            $vol_time = isset($_POST['vol_time']) ? $_POST['vol_time'] : '';

            $expir = isset($_POST['expir']) ? $_POST['expir'] : '';


            $name_vir = isset($_POST['name_vir']) ? $_POST['name_vir'] : '';
            $num_vir = isset($_POST['num_vir']) ? $_POST['num_vir'] : '';


            $profile_img = "";

            if (isset($_FILES['profile_img']) && $_FILES['profile_img']['size'] > 0) {

                $img = $_FILES['profile_img'];
                $types = ['jpg', 'png', 'jpeg'];
                $imgtype = explode('.', $img['name']);
                $imgtype = strtolower(end($imgtype));
                // echo "Hell";
                if (in_array($imgtype, $types)) {
                    // echo "in arr";
                    if ($img['error'] == 0) {
                        // echo $img['size'];
                        if ($img['size'] <= 100000000000) {
                            // echo "size";
                            $new_name = uniqid('', true) . "." . $imgtype;

                            $d = "../assets/$new_name";

                            move_uploaded_file($img['tmp_name'], $d);

                            $profile_img = "assets/$new_name";


                            // mysqli_query($c, $q);
                        }
                    }
                }
            } else {
                error('X004');

                return;
            }
            if (!isset($_POST['agree']) || $_POST['agree'] != 'on') {
                error('X001');
                return;
            }
            if (!isset($_POST['email']) || $_POST['email'] == '') {
                error('X002');
                return;
            }
            if (!isset($_POST['pass']) || !isset($_POST['cpass'])) {
                error('X004');
                return;
            }
            if ($_POST['pass'] != $_POST['cpass']) {
                error('X003');
                return;
            }

            if (!isset($_POST['fname'])) {
                error('X004');
                return;
            }
            if (!isset($_POST['sname'])) {
                error('X004');
                return;
            }

            if (!isset($_FILES['attach']) || !$_FILES['attach']['size'] > 0) {
                error('X005');
                return;
            }

            $agree = $_POST['agree'];
            $email = $_POST['email'];
            $q = "SELECT * FROM `trainers` WHERE `email`='$email'";
            $r = mysqli_query($c, $q);
            if ($r->num_rows != 0) {
                error('X007');
                return;
            }

            // names
            $first_name = $_POST['fname'];
            $sec_name = $_POST['sname'];
            $pass = $_POST['pass'];
            $c_pass = $_POST['cpass'];

            $id__ = "idt" . uniqid('', true);
            $img = $_FILES['attach'];
            $types = ['jpg', 'png', 'jpeg'];
            $imgtype = explode('.', $img['name']);
            $imgtype = strtolower(end($imgtype));

            if (in_array($imgtype, $types)) {
                if ($img['error'] == 0) {
                    if ($img['size'] <= 10000000) {
                        $new_name = uniqid('', true) . "." . $imgtype;

                        $d = "../assets/$new_name";

                        move_uploaded_file($img['tmp_name'], $d);

                        // uploadinfo($name, $work, $new_name);

                        $random_id = "id" . rand(0, 99999999);

                        $track = (string) json_encode($track);

                        $q = "INSERT INTO `trainers`(
                        `id`, `cv`, `full_name`, `nu_id`, `pass`,
                    `nationalty`, `national`, `date`, `email`,
                     `phone`, `tel_phone`, `emr_phone`,`level`,
                      `work`,`work_focus`, `jop_type`, `jop_manger`,
                       `job_title`, `job_place`, `track`, `vol_time`,
                        `expir`,`access`,`profile_img`, `fname`,
                         `sname`, `tname`, `lname`, `reqsInfo`) 
                   VALUES (
                    '$id__','$new_name','$first_name $sec_name','$id_'
                   ,'$pass','$nationalty','$national','$date',
                   '$email','$phone','$tel_phone','$emr_phone',
                   '$level','$work','$work_focus','$jop_type',
                   '$jop_manger','$job_title','$job_place','$track',
                   '$vol_time','$expir','0','$profile_img',
                    '$first_name', '$sec_name', '$grand_name','$family_name', '$reqsInfo'
                    )";
                        $r = mysqli_query($c, $q);
                    }
                }
            }
            // echo $q; 
            // print_r($r);

            $_SESSION['log'] = true;
            $_SESSION['type'] = "trainer";

            $_SESSION['who'] = "$email";
            echo '<div class="container"><div class="alert alert-success text-center" role="alert">
  تم التسجيل بنجاح يتم اعادة التوجية بعد 3 ثواني
</div></div>

<script>
        setTimeout(()=> {

            window.location.assign("../");
        },3000)
</script>

';
        }

        if ($type_process == 'supporters') {
            if (!isset($_POST['agree']) || $_POST['agree'] != 'on') {
                error('X001');
                return;
            }

            if (!isset($_POST['name'])) {
                error('X004');
                return;
            }
            $name = $_POST['name'];
            if (!isset($_POST['email']) || $_POST['email'] == '') {
                error('X002');
                return;
            }
            $email = $_POST['email'];
            $q = "SELECT * FROM `supporters_users` WHERE `email`='$email'";
            $r = mysqli_query($c, $q);
            if ($r->num_rows != 0) {
                error('X007');
                return;
            }
            if (!isset($_POST['pass']) || !isset($_POST['cpass'])) {

                error('X004');
                return;
            }

            $reqsInfo = isset($_POST['reqsInfo']) ? json_encode($_POST['reqsInfo'], JSON_UNESCAPED_UNICODE) : '[]';

            if ($_POST['pass'] != $_POST['cpass']) {
                error('X003');
                return;
            }
            $pass = $_POST['pass'];
            if (!isset($_POST['address'])) {
                error('X004');
                return;
            }
            $address = $_POST['address'];


            if (!isset($_POST['about'])) {
                error('X004');
                return;
            }
            $about = $_POST['about'];

            if (!isset($_POST['officer'])) {
                error('X004');
                return;
            }
            $officer = $_POST['officer'];

            if (!isset($_POST['ophone'])) {
                error('X004');
                return;
            }
            $ophone = $_POST['ophone'];

            if (!isset($_POST['owork'])) {
                error('X004');
                return;
            }
            $owork = $_POST['owork'];

            if (!isset($_POST['oemail'])) {
                error('X004');
                return;
            }
            $oemail = $_POST['oemail'];

            if (!isset($_POST['request_name'])) {
                error('X004');
                return;
            }
            $request_name = $_POST['request_name'];

            if (!isset($_POST['request_phone'])) {
                error('X004');
                return;
            }
            $request_phone = $_POST['request_phone'];

            if (!isset($_POST['request_id'])) {
                error('X004');
                return;
            }
            $request_id = $_POST['request_id'];

            if (!isset($_FILES['img']) || !$_FILES['img']['size'] > 0) {
                // echo $_FILES['img']['size'];
                error('X005');
                return;
            }
            $img = $_FILES['img'];
            $types = ['jpg', 'png', 'jpeg'];
            $imgtype = explode('.', $img['name']);
            $imgtype = strtolower(end($imgtype));

            if (in_array($imgtype, $types)) {
                if ($img['error'] == 0) {
                    if ($img['size'] <= 10000000) {
                        $new_name = uniqid('', true) . "." . $imgtype;

                        $d = "../assets/$new_name";

                        move_uploaded_file($img['tmp_name'], $d);

                        // uploadinfo($name, $work, $new_name);

                        $random_id = "id" . rand(0, 99999999);


                        $q = "INSERT INTO `supporters_users`(`name`, `email`, `pass`, `address`, `about`,
                     `officer`, `ophone`, `owork`, `oemail`, `request_name`, `request_phone`, `request_id`, `img`,`access`, `reqsInfo`) 
                    VALUES ('$name','$email','$pass','$address','$about',
                    '$officer','$ophone','$owork','$oemail','$request_name','$request_phone','$request_id','$new_name','0', '$reqsInfo')";
                        $r = mysqli_query($c, $q);

                        $_SESSION['who'] = "$email";
                        $_SESSION['log'] = true;
                        $_SESSION['type'] = "supporters";
                        echo '<div class="container"><div class="alert alert-success text-center" role="alert">
  تم التسجيل بنجاح يتم اعادة التوجية بعد 3 ثواني
</div></div>

<script>
        setTimeout(()=> {

            window.location.assign("../");
        },3000)
</script>

';
                    }
                }
            }
        }
        if ($type_process == 'team') {




            if (!isset($_POST['agree']) || $_POST['agree'] != 'on') {
                error('X001');
                return;
            }

            if (!isset($_POST['email'])) {
                error('X004');
                return;
            }
            $email = $_POST['email'];
            $q = "SELECT * FROM `team_user` WHERE `email`='$email'";
            $r = mysqli_query($c, $q);
            if ($r->num_rows != 0) {
                error('X007');
                return;
            }
            if (!isset($_POST['pass']) || !isset($_POST['cpass'])) {
                error(('X004'));
                return;
            }
            $pass = $_POST['pass'];
            $c_pass = $_POST['cpass'];
            if (!isset($_POST['address'])) {
                error(('X004'));
                return;
            }
            $address = $_POST['address'];

            if ($pass != $c_pass) {
                error('X003');
                return;
            }

            if (!isset($_POST['name'])) {
                error(('X004'));
                return;
            }
            $name = $_POST['name'];

            if (!isset($_FILES['img']) || !$_FILES['img']['size'] > 0) {
                // echo $_FILES['img']['size'];
                error('X005');
                return;
            }
            $oemail = isset($_POST['oemail']) ? $_POST['oemail'] : '';
            $oid = isset($_POST['oid']) ? $_POST['oid'] : '';

            $about = isset($_POST['about']) ? $_POST['about'] : '';
            $track = isset($_POST['track']) ? (string) json_encode($_POST['track']) : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
            $telphone = isset($_POST['telphone']) ? $_POST['telphone'] : '';
            $facebook = isset($_POST['facebook']) ? $_POST['facebook'] : '';
            $twitter = isset($_POST['twitter']) ? $_POST['twitter'] : '';
            $reqsInfo = isset($_POST['reqsInfo']) ? json_encode($_POST['reqsInfo'], JSON_UNESCAPED_UNICODE) : '[]';

            $instagram = isset($_POST['instagram']) ? $_POST['instagram'] : '';

            $officer = isset($_POST['officer']) ? $_POST['officer'] : '';
            $ophone = isset($_POST['ophone']) ? $_POST['ophone'] : '';
            $owork = isset($_POST['owork']) ? $_POST['owork'] : '';
            $lemail = isset($_POST['lemail']) ? $_POST['lemail'] : '';
            $leader_name = isset($_POST['leader_name']) ? $_POST['leader_name'] : '';
            $leader_phone = isset($_POST['leader_phone']) ? $_POST['leader_phone'] : '';
            $leader_id = isset($_POST['leader_id']) ? $_POST['leader_id'] : '';
            $vision = isset($_POST['vision']) ? $_POST['vision'] : '';
            $message = isset($_POST['message']) ? $_POST['message'] : '';
            $goals = isset($_POST['goals']) ? $_POST['goals'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';

            // groups
            $creator = isset($_POST['creator']) ? (string) json_encode($_POST['creator']) : '';
            $creator_phone = isset($_POST['creator_phone']) ? (string) json_encode($_POST['creator_phone']) : '';
            $creator_email = isset($_POST['creator_email']) ? (string) json_encode($_POST['creator_email']) : '';

            $creator = "[$creator, $creator_phone, $creator_email]";

            $img = $_FILES['img'];
            // $profile_img = $_FILES['profile_img'];
            $types = ['jpg', 'png', 'jpeg'];
            $imgtype = explode('.', $img['name']);
            $imgtype = strtolower(end($imgtype));
            // $imgtype2 = explode('.', $profile_img['name']);
            // $imgtype2 = strtolower(end($imgtype2));
            if (in_array($imgtype, $types)) {
                if ($img['error'] == 0) {
                    if ($img['size'] <= 10000000) {
                        $new_name = uniqid('', true) . "." . $imgtype;
                        $d = "../assets/$new_name";
                        $date_now = isset($_POST['date']) ? $_POST['date'] : date("Y-n-j");
                        move_uploaded_file($img['tmp_name'], $d);

                        $q = "INSERT INTO `team_user`(`name`, `address`,`email`, `pass`, `img`, `about`, `track`,
                    `phone`, `telphone`, `facebook`, `twitter`, `instagram`, `officer`, `ophone`,
                    `owork`, `lemail`, `leader_name`, `leader_phone`, `leader_id`, `vision`, `message`, `goals`, `creator`,`access`,`date`,`oemail`,`oid`, `reqsInfo`) 
                    VALUES ('$name','$address','$email','$pass','assets/$new_name','$about','$track',
                    '$phone','$telphone','$facebook','$twitter','$instagram','$officer','$ophone',
                    '$owork','$lemail','$leader_name','$leader_phone','$leader_id','$vision','$message','$goals','$creator','0', '$date_now', '$oemail', '$oid', '$reqsInfo')";

                        $r = mysqli_query($c, $q);

                        $q_ = "INSERT INTO `teams_block`(`team_email`, `list`) VALUES ('$email','[]')";
                        $r = mysqli_query($c, $q_);

                        $_SESSION['who'] = "$email";
                        $_SESSION['log'] = true;
                        $_SESSION['type'] = "team";
                        // echo "$q";
                        echo '<div class="container"><div class="alert alert-success text-center" role="alert">
  تم التسجيل بنجاح يتم اعادة التوجية بعد 3 ثواني
</div></div>

<script>
        setTimeout(()=> {

            window.location.assign("../");
        },3000)
</script>

';
                    }
                }
            }
        }
    } else {
        echo '
    <script>            window.location.assign("../");
</script>
    ';
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>