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

$get_type = 'team_user';

$get_print = $_GET['print'];


$get_q = "SELECT * FROM `$get_type` WHERE `email`='$get_email'";
$r_get = mysqli_query($c, $get_q);

$r_get = mysqli_fetch_array($r_get);


?>
<div class="container" style="margin-top:50px; margin-bottom: 50px; background-color: #fff; padding: 30px 30px 40px 30px; text-align:right; direction:rtl;">
    <div class="row">
        <form class="panel-body" action="?do=updateProfileTeam" method="post" style="margin:20px;">
            <div class="form-group">
                <div class="row" style="margin: 20px auto;">
                    <h4 class="col-md-12">البيانات الأساسية </h4>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-4">
                        <label class=" control-label">اسم الفريق </label>
                        <input disabled="" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['name'] ?>">
   <?php echo ($get_print == 'false') ? '<button type="button" class="btn btn-default" onclick=\'change_password()\' data-toggle="modal" data-target="#myModal2"
                style="margin-top:10px;">
                تغيير كلمة ا لمرور
            </button>' : '' ?>  
                    </div>
                    
                    <div class="col-md-4">
                        <label class=" control-label">عنوان أو مقر الفريق </label>
                        <input name="address" required="" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>type="text" class="form-control" value="<?php echo $r_get['address'] ?>">

                    </div>
                    <div class="col-md-2">
                        <label class="control-label">تاريخ الإنشاء</label>
                        <input name="date" type="date" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['date'] ?>">
                    </div>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-12">
                        <label class="control-label">نبذة مختصرة عن الفريق</label>
                        <textarea name="about"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> class="form-control" rows="4" maxlength="140"><?php echo $r_get['about'] ?></textarea>
                    </div>
                </div>

                <div class="row" style="margin: 20px auto;">
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
                    <div class="col-md-12">
                        <label class="control-label">المسار التطوعي</label>
                        <br> <br>
                        <input type="checkbox" name="track[]" id="box-1" value="1">
                        <label style="margin-right:30px;" for="box-1"> إداري</label> <input type="checkbox" name="track[]"
                            id="box-2" value="2">
                        <label style="margin-right:30px;" for="box-2"> إعلامي</label> <input type="checkbox" name="track[]"
                            id="box-3" value="3">
                        <label style="margin-right:30px;" for="box-3"> صحي</label> <input type="checkbox" name="track[]"
                            id="box-4" checked="" value="4">
                        <label style="margin-right:30px;" for="box-4"> اجتماعي</label> <input type="checkbox" name="track[]"
                            id="box-5" checked="" value="5">
                        <label style="margin-right:30px;" for="box-5"> تقني</label> <input type="checkbox" name="track[]"
                            id="box-6" checked="" value="6">
                        <label style="margin-right:30px;" for="box-6"> أدبي</label> <input type="checkbox" name="track[]"
                            id="box-7" checked="" value="7">
                        <label style="margin-right:30px;" for="box-7"> ترفيهي</label> <input type="checkbox" name="track[]"
                            id="box-8" value="8">
                        <label style="margin-right:30px;" for="box-8"> ثقافي</label> <input type="checkbox" name="track[]"
                            id="box-9" value="9">
                        <label style="margin-right:30px;" for="box-9"> رياضي</label> <input type="checkbox" name="track[]"
                            id="box-10" value="10">
                        <label style="margin-right:30px;" for="box-10"> إغاثي</label> <input type="checkbox" name="track[]"
                            id="box-11" value="11">
                        <label style="margin-right:30px;" for="box-11"> قانوني</label> <input type="checkbox" name="track[]"
                            id="box-12" value="12">
                        <label style="margin-right:30px;" for="box-12"> تدريبي</label> <input type="checkbox" name="track[]"
                            id="box-13" value="13">
                        <label style="margin-right:30px;" for="box-13"> هندسي</label> <input type="checkbox" name="track[]"
                            id="box-14" value="14">
                        <label style="margin-right:30px;" for="box-14"> تنظيمي</label> </div>
                </div>
            </div>

            <hr style="color: #ccc;">
            <div class="form-group">
                <div class="row" style="margin: 20px auto;">
                    <h4 class="col-md-12">معلومات الإتصال</h4>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-4">
                        <label class="control-label">رقم الجوال </label>
                        <input name="phone" type="text"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> maxlength="12" class="form-control" value="<?php echo $r_get['phone'] ?>">

                    </div>
                    <div class="col-md-4">
                        <label class="control-label">البريد الإلكتروني</label>
                        <input disabled="" type="email" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['email'] ?>">

                    </div>
                    <div class="col-md-4">
                        <label class="control-label">رقم الهاتف </label>
                        <input name="telephone" type="text" maxlength="12"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> class="form-control" value="<?php echo $r_get['telphone'] ?>">
                    </div>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-4">
                        <label class="control-label">الفيسبوك </label>
                        <input name="facebook" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['facebook'] ?>">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">تويتر </label>
                        <input name="twitter" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['twitter'] ?>">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label">انستقرام </label>
                        <input name="instagram" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['instagram'] ?>">
                    </div>
                </div>
            </div>
            <hr style="color: #ccc;">


            <div class="form-group">
                <div class="row" style="margin: 20px auto;">
                    <h4 class="col-md-12">بيانات المنسق</h4>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-6">
                        <label class="control-label">اسم المنسق</label>
                        <input name="officer" type="text"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['officer'] ?>">
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">رقم الجوال المنسق</label>
                        <input name="ophone" type="text" maxlength="12"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> class="form-control" value="<?php echo $r_get['ophone'] ?>">
                    </div>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-6">
                        <label class="control-label">عمله في الفريق</label>
                        <input name="owork" type="text"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> class="form-control" value="<?php echo $r_get['owork'] ?>">
                    </div>

                    <div class="col-md-6">
                        <label class="control-label">البريد الإلكتروني</label>
                        <input name="oemail" type="email"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> class="form-control" value="<?php echo $r_get['oemail'] ?>">
                    </div>
                </div>
            </div>
            <hr style="color: #ccc;">


            <div class="form-group">
                <div class="row" style="margin: 20px auto;">
                    <h4 class="col-md-12">بيانات قائد الفريق</h4>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-4">
                        <label class="control-label">اسم القائد</label>
                        <input name="leader_name" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" value="<?php echo $r_get['leader_name'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label class="control-label">رقم الجوال القائد</label>
                        <input name="leader_phone" type="text" maxlength="12"<?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?> class="form-control" value="<?php echo $r_get['leader_phone'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label class="control-label">رقم هوية القائد</label>
                        <input name="leader_id" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>maxlength="10" class="form-control" value="<?php echo $r_get['leader_id'] ?>">
                    </div>
                </div>
            </div>
            <hr style="color: #ccc;">


            <div class="form-group">
                <div class="row" style="margin: 20px auto;">
                    <h4 class="col-md-12">الرؤية والرسالة والأهداف</h4>
                </div>

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-12">
                        <label class="control-label">الرؤية</label>
                        <input name="vision" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" maxlength="140" placeholder="لا تزيد عن ١٤٠ حرف"
                            required="" value="JETIOJIO">
                        <span class="require" style="font-size:18px;">*</span>
                    </div>
                </div>
                <hr style="color: #ccc;">

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-12">
                        <label class="control-label">الرسالة</label>
                        <input name="message" type="text" <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" maxlength="250" placeholder="لا تزيد عن 250 حرف"
                            required="" value="<?php echo $r_get['message'] ?>">
                        <span class="require" style="font-size:18px;">*</span>
                    </div>
                </div>
                <hr style="color: #ccc;">

                <div class="row" style="margin: 20px auto;">
                    <div class="col-md-12">
                        <label class="control-label">الأهداف</label>
                        <textarea <?php echo ($get_print == 'true') ? 'style="border:none"' : '' ?>class="form-control" rows="7" name="goals" required=""><?php echo $r_get['goals'] ?></textarea>
                        <span class="require" style="font-size:18px;">*</span>
                    </div>
                </div>
            </div>


        </form>
    </div>
</div>