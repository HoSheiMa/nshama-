<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php



session_start(); ?>
<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
input[type=checkbox] {
    display: none;
}

input[type=checkbox]+label:before {
    font-family: FontAwesome;
    display: inline-block;
}

input[type=checkbox]+label:before {
    content: "\f096";
}

input[type=checkbox]+label:before {
    letter-spacing: 10px;
}


input[type=checkbox]:checked+label:before {
    content: "\f046";
}

input[type=checkbox]:checked+label:before {
    letter-spacing: 5px;
}

input::placeholder {
    text-align: right;
} 


</style>

<?php

include '../config.php';

if (!isset($_GET['email']) || !isset($_GET['type']) || !isset($_GET['print'])) {
    echo "<script> window.location.href='/index.php'</script>";
}
$get_email = $_GET['email'];

$get_type = 'users';

$get_print = $_GET['print'];


$get_q = "SELECT * FROM `$get_type` WHERE `email`='$get_email'";
$r_get = mysqli_query($c, $get_q);

$r_get = mysqli_fetch_array($r_get);


$btn_change_password = '<button type="button" class="btn btn-default" onclick=\'change_password()\' data-toggle="modal" data-target="#myModal2"
                style="margin-top:10px;">
                تغيير كلمة ا لمرور
            </button>';
if ($get_print == 'true') {
    $btn_change_password = '';
}

if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {
    $btn_change_password = '';
}


?>


<div class="container" style="margin-top:50px; margin-bottom: 50px; background-color: #fff; padding: 30px 30px 40px 30px; text-align:right; direction:rtl;">
    <div class="row">


        <h3 class="col-md" style="float:right; text-align:right; margin:auto 0;">

            <?php echo $r_get['full_name']; ?>
            <span class="badge" style="background:#4CB96E; color: #fff; font-size: 16px; margin-right: 10px; padding:5px 10px;">فعّال</span>
            <!-- <span style="position:absolute;bottom:25px;color:red;font-size16px;font-size: 16px;right: 70px;">تعديل</span> -->
            <br>
            <?php echo $btn_change_password ?>
        </h3>
    </div>
    <hr>
    <form class="panel-body" action="../ajax/user_update.php"  method="post"enctype="multipart/form-data">
        <label class='d-block'>الصورة الشخصية</label>
        <img width=300 height=300 onclick="window.location.assign('../<?php echo $r_get['profile_img']; ?>')" src='../<?php echo $r_get['profile_img']; ?>'>
 <div class="form-group">
   <label for=""></label>
   <input type="file" name='profile_img' class="form-control-file"  id="" placeholder="" aria-describedby="fileHelpId">
   <small id="fileHelpId" class="form-text text-muted">تغير الصورة الشخصية</small>
 </div>

        <div class='dropdown-divider'></div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                    <label class=" control-label">رقم الهوية</label>
                    <input name="no" required="" type="text" maxlength="30" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['nu_id']; ?>"
                        <?php if (!isset($_SESSION['log_admin']) || !$_SESSION['log_admin'] == true) echo 'disabled' ?> <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>>
                </div>
                <div class="col-md-4">
                    <label class="control-label">تاريخ الميلاد</label>
                    <input name="date" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>type="date" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['date']; ?>">
                </div>
                <div class="col-md-4">
                    <label class="control-label">الاسم الاول</label>
                    <input name="fname" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>type="" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['fname']; ?>">
                </div> <div class="col-md-4">
                    <label class="control-label">اسم الاب</label>
                    <input name="sname" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>type="" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['sname']; ?>">
                </div> <div class="col-md-4">
                    <label class="control-label">اسم الجد</label>
                    <input name="tname" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>type="" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['tname']; ?>">
                </div>
                 <div class="col-md-4">
                    <label class="control-label">اسم العائلة</label>
                    <input name="lname" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>type="" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['lname']; ?>">
                </div>
            </div>

            <hr style="color: #ccc;">
            <h4 class="col-sm-12" style="margin: 40px 0 40px 0; padding-right:0;">معلومات المهنة</h4>
            <div class="row">
                <div class="col-md-3">
                    <label class="control-label">المهنة</label>
                    <select <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>name="job" required="" id="list4" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>>
                        <?php 


                        echo "<script>$('select[name=job]').children()[" . $r_get['job_type'] . "].selected = true;</script>";


                        ?>">
                        <option value="1">حكومي</option>
                        <option value="2">عسكري</option>
                        <option value="3">قاطع خاص</option>
                        <option value="4">خيري</option>
                        <option value="5">طالب</option>
                        <option value="6">أخرى</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="control-label">المستوى التعليمي</label>
                    <select name="level" required="" id="list4" class="form-control" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>>
                        <?php

                        echo "<script>$('select[name=level]').children()[" . $r_get['level'] . "].selected = true;</script>";

                        ?>
                        <option value="1">متوسط</option>
                        <option value="2">ثانوي</option>
                        <option value="3">دبلوم</option>
                        <option value="4">جامعي</option>
                        <option value="5">ماجستير</option>
                        <option value="6">دكتوراه</option>
                        <option value="7">أخرى</option>
                    </select>

                </div>
                <div class="col-md-3">
                    <label class="control-label">التخصص</label>
                    <input name="special" type="text" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['work']; ?>">
                </div>
                <div class="col-md-3">
                    <label class="control-label">المسمى الوظيفي</label>
                    <input name="job_title" type="text" class="form-control" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>value="<?php echo $r_get['job_title']; ?>">
                </div>
                <div class="col-md-3">
                    <label class="control-label">جهة العمل</label>
                    <input name="job_place" type="text" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['job_place']; ?>">
                </div>
            </div>
        </div>

        <hr style="color: #ccc;">
        <h4 class="col-sm-12" style="margin: 40px 0 40px 0; padding-right:0;">معلومات الإتصال </h4>

        <div class="row">
            <div class="col-md-3">
                <label class="control-label">البريد الإلكتروني</label>
                <?php
                if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {

                    $old_email = $r_get["email"];
                    echo " <input type='hidden' name='old_email' value='$old_email'>";

                }

                ?>
                <input type="email" <?php if (!isset($_SESSION['log_admin']) || !$_SESSION['log_admin'] == true) echo 'disabled' ?> name="email" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['email']; ?>">
                <!-- <span class="email-active" style="background:#E16146; color: #fff; padding: 2px 5px;">غير نشط</span>  -->
            </div>

            <div class="col-md-3">
                <label class="control-label">رقم الجوال</label>
                <input name="phone" type="text" maxlength="12" class="form-control" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>value="<?php echo $r_get['mobile']; ?>">
            </div>
            <div class="col-md-3">
                <label class="control-label">رقم الهاتف</label>
                <input name="telphone" type="text" maxlength="12" class="form-control" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>value="<?php echo $r_get['telphone']; ?>">
            </div>
            <div class="col-md-3">
                <label class="control-label">رقم الطوارئ</label>
                <input name="emr_phone" type="text" maxlength="12" class="form-control"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> value="<?php echo $r_get['emr_phone']; ?>">
            </div>
        </div>

        <hr style="color: #ccc;">
        <h4 class="col-sm-12" style="margin: 40px 0 40px 0; padding-right:0;">معلومات التطوع </h4>

        <div class="col-md-10">
            <div class="row">
                <h6 class="control-label" style="margin-bottom:30px; padding-right:0; font-weight: bold; margin-right:0;">المسار
                    التطوعي</h6>
                    
            </div>
                    <div class='dropdown-divider'></div>
    <label class='d-block'>بطاقه الهوية</label>
        <img width=300  height=300 onclick="window.location.assign('../<?php echo $r_get['id_img']; ?>')"  src='../<?php echo $r_get['id_img']; ?>'>

            <div class="row">
            <?php
            $tracks = (array)json_decode($r_get['track']);
            for ($i = 0; $i < sizeof($tracks); $i++) {
                $track_focus = $tracks[$i];
                echo "<script>
                
                //$('input[type=checkbox]').each((e) =>{
                     $('input[type=checkbox]')[$track_focus].checked=true  
                //    });
                </script>";
            }
            // print_r($tracks);



            ?>
                <input type="checkbox" name="track[]" id="box-1" value="0">
                <label style="margin-right:30px;" for="box-1"> إداري</label>
                <input type="checkbox" name="track[]" id="box-2" value="1">
                <label style="margin-right:30px;" for="box-2"> إعلامي</label>
                <input type="checkbox" name="track[]" id="box-3" value="2">
                <label style="margin-right:30px;" for="box-3"> صحي</label>
                <input type="checkbox" name="track[]" id="box-4"  value="3">
                <label style="margin-right:30px;" for="box-4"> اجتماعي</label>
                <input type="checkbox" name="track[]" id="box-5"
                     value="4">
                <label style="margin-right:30px;" for="box-5"> تقني</label>
                <input type="checkbox" name="track[]" id="box-6"
                    value="5">
                <label style="margin-right:30px;" for="box-6"> أدبي</label>
                <input type="checkbox" name="track[]" id="box-7"
                  value="6">
                <label style="margin-right:30px;" for="box-7"> ترفيهي</label>
                 <input type="checkbox" name="track[]" id="box-8"
                    value="7">
                <label style="margin-right:30px;" for="box-8"> ثقافي</label>
                 <input type="checkbox" name="track[]" id="box-9"
                     value="8">
                <label style="margin-right:30px;" for="box-9"> رياضي</label>
                 <input type="checkbox" name="track[]" id="box-10"
                    value="9">
                <label style="margin-right:30px;" for="box-10"> إغاثي</label> 
                <input type="checkbox" name="track[]" id="box-11"
                    value="10">
                <label style="margin-right:30px;" for="box-11"> قانوني</label>
                 <input type="checkbox" name="track[]" id="box-12"
                    value="11">
                <label style="margin-right:30px;" for="box-12"> تدريبي</label>
                 <input type="checkbox" name="track[]" id="box-13"
                    value="12">
                <label style="margin-right:30px;" for="box-13"> هندسي</label>
                 <input type="checkbox" name="track[]" id="box-14"
                     value="13">
                <label style="margin-right:30px;" for="box-14"> تنظيمي</label>
                 </div>
        </div>

        <button class='btn btn-lg btn-block bg-info text-white mt-5' type='sublime' name='update_info'>تحديث المعلومات</button>
    </form>
</div>
</body>
</html>
