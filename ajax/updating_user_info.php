<?php

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

$jop_type = isset($_POST['job']) ? $_POST['job'] : '';

$jop_manger = isset($_POST['job_aval']) ? $_POST['job_aval'] : '';

$job_title = isset($_POST['job_title']) ? $_POST['job_title'] : '';

$job_place = isset($_POST['job_place']) ? $_POST['job_place'] : '';

$track = isset($_POST['track']) ? $_POST['track'] : '';

$vol_time = isset($_POST['vol_time']) ? $_POST['vol_time'] : '';

$expir = isset($_POST['expir']) ? $_POST['expir'] : '';

if (!isset($_POST['email']) || $_POST['email'] == '') {
    return;
}
$email = $_POST['email'];
$q = "SELECT * FROM `users` WHERE `email`='$email'";
$r = mysqli_query($c, $q);
if ($r->num_rows != 0) {
    return;

}
$full_nume = $_POST['full_name'];
$email = $_POST['email'];

$track = (String)json_encode($track);

$q = "INSERT INTO `users`(`id`, `email`, `nu_id`, `name`, `date`, `full_name`, `pass`, `nationalty`, `national`, `mobile`, `telphone`, `emr_phone`, `level`, `work`, `work_focus`, `job_type`, `job_title`, `job_place`, `track`, `expir`, `jop_manger`) 
        VALUES ('$id__','$email','$id_','$name','$date','$first_name $sec_name','$pass','$nationalty','$national','$phone','$tel_phone','$emr_phone','$level','$work','$work_focus','$jop_type','$job_title','$job_place','$track','$expir','$jop_manger')";

$r = mysqli_query($c, $q);

?>