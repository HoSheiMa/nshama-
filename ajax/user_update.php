
<?php

session_start();
include '../html/config.php';
include '../class/user.php';

$userControl = new user($c);

function error($id = 'X404')
{


    $arr = array(
        'X001' => 'يجب ان توافق علي حقوق الخصوصية', 'X002' => "يجب  تسجيل بريدك الاكتروني", 'X003' => "يجب تتاكد من ان كلمة المرور صحيحة", 'X004' => 'يجب ان تكمل البينات الخاصة بك',
        'X005' => 'يجب ان ترفع لنا السيرة الذاتية لنتخقق منها',
        'X007' => 'البريد الاكتروني مستخدم من قبل!',
    );
    echo '<div class="container"><div class="alert alert-danger text-right" role="alert">
    ' . $arr[$id] . '
</div></div>';
}

if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true || isset($_SESSION['type']) && $_SESSION['type'] == "user") {





    //date
    $date = isset($_POST['date']) ? $_POST['date'] : '';

    // connections

    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    $tel_phone = isset($_POST['telphone']) ? $_POST['telphone'] : '';

    $emr_phone = isset($_POST['emr_phone']) ? $_POST['emr_phone'] : '';


    // lern level

    $level = isset($_POST['level']) ? $_POST['level'] : '';

    $work = isset($_POST['special']) ? $_POST['special'] : '';

    $jop_type = isset($_POST['job']) ? $_POST['job'] : '';

    $reqsInfo = isset($_POST['reqsInfo']) ? json_encode($_POST['reqsInfo'], JSON_UNESCAPED_UNICODE) : '[]';


    $Governorate = isset($_POST['Governorate']) ? $_POST['Governorate'] : '';

    $nationalty = isset($_POST['nationalty']) ? $_POST['nationalty'] : '';

    $national = isset($_POST['national']) ? $_POST['national'] : '';

    $job_title = isset($_POST['job_title']) ? $_POST['job_title'] : '';

    $job_place = isset($_POST['job_place']) ? $_POST['job_place'] : '';

    $track = isset($_POST['track']) ? $_POST['track'] : '[]';

    $no = isset($_POST['no']) ? $_POST['no'] : '';

    $fname = $_POST['fname'];

    $sname = $_POST['sname'];

    $tname = $_POST['tname'];

    $lname = $_POST['lname'];

    $full_name = "$fname $lname";




    $track = (string) json_encode($track);

    if (!isset($_SESSION['log']) || $_SESSION['log'] != true) {

        $email = isset($_POST['email']) ? $_POST['email'] : '';
    } else {
        $email = $_SESSION['who'];
    }

    if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {
        $old_email = $_POST['old_email'];
        $q = "UPDATE `users` SET `nu_id`='$no' , `reqsInfo`='$reqsInfo',  `email`='$email', `date`='$date',`mobile`='$phone',
        `telphone`='$tel_phone',`national`='$national',`nationalty`='$nationalty',`Governorate`='$Governorate', `full_name`='$fname $lname',`fname`='$fname',`sname`='$sname',`tname`='$tname',`lname`='$lname', `level`='$level',`emr_phone`='$emr_phone',`work`='$work',`job_type`='$jop_type',`job_title`='$job_title',`job_place`='$job_place',`track`='$track' WHERE `email`='$old_email'";
    } else {
        $q = "UPDATE `users` SET  `date`='$date',`mobile`='$phone',
        `telphone`='$tel_phone',`reqsInfo`='$reqsInfo',`national`='$national',`nationalty`='$nationalty',`full_name`='$fname $lname',`Governorate`='$Governorate',`fname`='$fname',`sname`='$sname',`tname`='$tname',`lname`='$lname',`level`='$level',`emr_phone`='$emr_phone',`work`='$work',`job_type`='$jop_type',`job_title`='$job_title',`job_place`='$job_place',`track`='$track' WHERE `email`='$email'";
    }

    $userControl->updateImage($email, $_FILES['profile_img'], 'profile_img');
    $userControl->updateImage($email, $_FILES['id_img'], 'id_img');

    mysqli_query($c, $q);
    // echo "$q";

    if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

        echo "
        <script>
               window.location.assign('../helper/profile.php?type=user&email=$email');
        </script>
        ";
    } else {
        echo "
       <script>
       history.go(-1)
       </script>
       ";
    }
}
