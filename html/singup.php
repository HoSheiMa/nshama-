<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<?php
if (!session_id()) {

    session_start();
}

include 'config.php';

include './class/signUp.php';
$signUpData = new signUp($c);




?>

<script>
    function job_aval_(el) {
        if (el.value == 'نعم') {
            $(el).after(`
        <div class=row style="height:10px"></div> <input id="job_title" name="job_title" class="form-control" placeholder=" المسمى الوظيفي" type="text" required="" style="display:inline-block;">
            
            `)
        } else {
            $('#job_title').remove();
        }

    }

    function jobelse_(el) {
        if (el.value == '6') {
            $(el).after('<input id="jobelse" class="form-control text-right mt-1" placeholder="اكتب مهنتك" name="jobelse">')
        } else {
            $('#jobelse').remove();
        }

    }

    function expir11(e) {

        if (e.target.value == 'نعم') {
            $(e.target).after('<input id="expre_value" class="form-control text-right mt-1" placeholder="اكتب مضمون الخبرة" name="expre_value">')
        } else {
            $('#expre_value').remove();
        }

    }

    function show_hide_item_(el) {

        var t = el.value;

        if (t == '1') {
            $('#show_hide_item_recv').html(`
    
    <div class=row style="height:10px;"></div> <input name="name_vir" class="form-control" placeholder="اسم جهة الاعتماد "
type="text" required="" style="display:inline-block;">
<div class=row style="height:10px;"></div> <input name="num_vir" class="form-control" placeholder="رقم الاعتماد"
type="text" required="" style="display:inline-block;">
    
    `);
        } else $('#show_hide_item_recv').html(``);
    }
    var counterL = 1;

    function addInputMember(divName, limit) {
        if (counterL == limit) {
            alert("لقد تجاوزت الحد المسموح به لعدد الخانات في المرة الواحدة ");
        } else {
            var newdiv = document.createElement('div');
            newdiv.innerHTML = "<div><input name='creator[]' class='form-control' placeholder='المؤسس' type='text' required style='display:inline-block;'><input name='creator_phone[]' class='form-control' placeholder='جواله' type='text' required style='display:inline-block;'><input name='creator_email[]' class='form-control' placeholder='بريده' type='text' required style='display:inline-block;'></div><div class=row style=\"height:10px;\"></div><div class=row style=\"height:10px;\"></div>";
            document.getElementById(divName).appendChild(newdiv);
            counterL++;
        }
    }
</script>
<!-- <div style="height: 100px;"></div> -->
<div class="row text-center">
    <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

        <div class="row justify-content-md-center">

            <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">انشاء حساب جديد</h2>
        </div>
    </div>

</div>
<div class="row" style="height:50px;"></div>
<div class="container text-center">
    <div class="row justify-content-md-center">

        <div onclick="form.type=4;scroll_to_from()" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
            <div class="card border-0 text-center">
                <img class="card-img-top " style="height:50% !important;" src="./assets/enterprise.png" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-text text-center border-primary">جهة مستفيدة</h3>
                </div>
            </div>
        </div>

        <div onclick="form.type=3;scroll_to_from()" v-if="false" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
            <div class="card border-0">
                <img class="card-img-top" src="./assets/volunteer-team.png" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-text text-center border-primary">فريق</h3>
                </div>
            </div>
        </div>

        <div onclick="form.type=2;scroll_to_from()" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
            <div class="card border-0">
                <img class="card-img-top" src="./assets/volunteer-trainer.png" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-text text-center border-primary">مدرّب</h3>
                </div>
            </div>
        </div>
        <div onclick="form.type=1;scroll_to_from()" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
            <div class="card border-0">
                <img class="card-img-top" src="./assets/volunteer-indi.png" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-text text-center border-primary">متطوّع</h3>
                </div>
            </div>

        </div>

    </div>
</div>
<div id="form_contant" v-if="type != 0" class="row text-right " style="background-image:url(assets/bg.svg);    background-repeat: no-repeat; min-height : 80vh;padding:25px;">
    <form v-if="type == 1" class="text-right form_1" method="post" action="ajax/singup.php" enctype="multipart/form-data">
        <input type="hidden" value="user" name="type_process">
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">المعلومات
            الشخصية</h5>
        <input name="fname" class="form-control" placeholder="الاسم الأول" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px"></div> <input name="sname" class="form-control" placeholder="اسم الأب" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px"></div> <input name="tname" class="form-control" placeholder="اسم الجد" type="text" required="" style="display:inline-block;">



        <div class=row style="height:10px"></div> <input name="lname" class="form-control" placeholder="اسم العائلة" type="text" required="" style="display:inline-block;">
        <input name="Governorate" class="form-control mt-2" placeholder="منطقة / محافظة" type="text" required="" style="display:inline-block;">
        <div class='dropdown-divider'></div>
        <div class=row style="height:10px"></div>
        <div class=row style="height:10px"></div> <input name="no" id="no" class="form-control" placeholder="رقم الهوية" onblur="checkId('user');" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px"></div> <input name="name" id="UserName" class="form-control" placeholder="اسم المستخدم" type="text" required="" style="display:inline-block;">
        <!-- <div id="id_status" class="checked" style="margin-right:230px">السجل المدني متاح</div> -->
        <div class=row style="height:10px"></div> <input name="pass" class="form-control" placeholder="كلمة المرور " type="password" required="" style="display:inline-block;">
        <div class=row style="height:10px"></div> <input name="cpass" class="form-control" placeholder=" تأكيد كلمة المرور" type="password" required="" style="display:inline-block;">
        <div class=row style="height:10px"></div> <select name="nationalty" required="" class="form-control" style="display:inline-block;">
            <option value="0">فضلا اختر جنسيتك ..</option>
            <option>سعودي</option>
            <option>غير سعودي</option>
        </select>
        <div class=row style="height:10px"></div>
        <select name="national" required="" class="form-control" style="display:inline-block;">
            <option value="0">فضلا اختر جنسك ..</option>
            <option>ذكر</option>
            <option>انثى</option>
        </select>
        <div class=row style="height:10px"></div>
        <label>تاريخ الميلاد</label>
        <input name="date" class="form-control" placeholder=" تاريخ الميلاد " type="date" required="" style="display:inline-block;">
        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            معلومات الاتصال </h5>

        <div id="email_status" class="checked"> البريد الإلكتروني </div>
        <div class=row style="height:10px"></div> <input name="email" id="email" class="form-control" placeholder="البريد الالكتروني" onblur="checkEmail('user');" type="email" required="">
        <div id="phone_status" class="checked"> رقم الجوال </div>
        <div class=row style="height:10px"></div> <input name="phone" id="phone" class="form-control" placeholder="رقم الجوال" onblur="checkPhone('user');" type="text" required="">
        <!-- <div class=row style="height:10px"></div> <input name="telphone" class="form-control" placeholder="رقم الهاتف"
            type="text"> -->
        <div class=row style="height:10px"></div> <input name="emr_phone" class="form-control" placeholder="رقم الطوارئ" type="text">

        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            المعلومات المهنية </h5>
        <div class=row style="height:10px"></div> <select name="level" required="" class="form-control" style="display:inline-block;">
            <option value="0">فضلا أختر المؤهل العلمي ..</option>
            <option value="1">متوسط</option>
            <option value="2">ثانوي</option>
            <option value="3">دبلوم</option>
            <option value="4">جامعي</option>
            <option value="5">ماجستير</option>
            <option value="6">دكتوراه</option>
            <option value="7">أخرى</option>
        </select>
        <div class=row style="height:10px"></div> <input name="special" class="form-control" placeholder="التخصص" type="text" required="" style="display:inline-block;">

        <div class='row' style="height:10px"></div> <select onchange="jobelse_(this)" name="job" required="" class="form-control" style="display:inline-block;">
            <option value="0">فضلا اختر مهنتك ..</option>
            <option value="1">حكومي</option>
            <option value="2">عسكري</option>
            <option value="3">قاطع خاص</option>
            <option value="4">خيري</option>
            <option value="5">طالب</option>
            <option value="6">أخرى</option>
        </select>
        <div class=row style="height:10px"></div> <select onchange="job_aval_(this)" name="job_aval" required="" class="form-control" style="display:inline-block;">
            <option value="0">هل أنت على رأس العمل</option>
            <option>نعم</option>
            <option>لا</option>
        </select>

        <div class=row style="height:10px"></div> <input name="job_place" class="form-control" placeholder=" جهة العمل" type="text" required="" style="display:inline-block;">
        <?php
        echo $signUpData->reqsInputs('User');
        ?>

        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            معلومات التطوّع </h5>
        <div style="padding:10px 60px;">
            <input type="checkbox" name="track[]" id="box-1" value="1">
            <label style="margin-right:30px;" class='float-right' for="box-1"> إداري</label>
            <input type="checkbox" name="track[]" id="box-2" value="2">
            <label style="margin-right:30px;" class='float-right' for="box-2"> إعلامي</label>
            <input type="checkbox" name="track[]" id="box-3" value="3">
            <label style="margin-right:30px;" class='float-right' for="box-3"> صحي</label>
            <input type="checkbox" name="track[]" id="box-4" value="4">
            <label style="margin-right:30px;" class='float-right' for="box-4"> اجتماعي</label>
            <input type="checkbox" name="track[]" id="box-5" value="5">
            <label style="margin-right:30px;" class='float-right' for="box-5"> تقني</label>
            <input type="checkbox" name="track[]" id="box-6" value="6">
            <label style="margin-right:30px;" class='float-right' for="box-6"> أدبي</label>
            <input type="checkbox" name="track[]" id="box-7" value="7">
            <label style="margin-right:30px;" class='float-right' for="box-7"> ترفيهي</label>
            <input type="checkbox" name="track[]" id="box-8" value="8">
            <label style="margin-right:30px;" class='float-right' for="box-8"> ثقافي</label>
            <input type="checkbox" name="track[]" id="box-9" value="9">
            <label style="margin-right:30px;" class='float-right' for="box-9"> رياضي</label>
            <input type="checkbox" name="track[]" id="box-10" value="10">
            <label style="margin-right:30px;" class='float-right' for="box-10"> إغاثي</label>
            <input type="checkbox" name="track[]" id="box-11" value="11">
            <label style="margin-right:30px;" class='float-right' for="box-11"> قانوني</label>
            <input type="checkbox" name="track[]" id="box-12" value="12">
            <label style="margin-right:30px;" class='float-right' for="box-12"> تدريبي</label>
            <input type="checkbox" name="track[]" id="box-13" value="13">
            <label style="margin-right:30px;" class='float-right' for="box-13"> هندسي</label>
            <input type="checkbox" name="track[]" id="box-14" value="14">
            <label style="margin-right:30px;" class='float-right' for="box-14"> تنظيمي</label>
        </div>

        <div class=row style="height:10px"></div>
        <select name="vol_time" required="" class="form-control" style="display:inline-block;">
            <option value="0"> أختر الوقت المناسب لك </option>
            <option>صباحًا</option>
            <option>مساءًا</option>
            <option>كلاهما</option>
        </select>

        <div class=row style="height:10px"></div> <select name="expir" id='expir' required="" onchange="expir11(event)" class="form-control" style="display:inline-block;">
            <option value="0">هل لديك خبرة في المجال التطوعي</option>
            <option>نعم</option>
            <option>لا</option>
        </select>

        <div id="name_status" class="checked" style="margin-right:50px"> الصورة الشخصية</div>
        <div class=row style="height:10px"></div> <input name="profile_img" class="form-control" placeholder="اسم الجد" type="file" style="display:inline-block;">
        <div class='dropdown-divider'></div>
        <div id="name_status" class="checked" style="margin-right:50px">صورة الأحوال / الإقامة </div>

        <div class=row style="height:10px"></div> <input name="id_img" class="form-control" placeholder="اسم الجد" type="file" required="" style="display:inline-block;">
        <div class='dropdown-divider'></div>

        <div class=row style="height:10px"></div>
        <textarea class="form-control text-right dostor" rows="15" disabled="">
<?php


$q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoUser'";
$bigtapinfoUser = mysqli_fetch_array(mysqli_query($c, $q))['info'];
echo $bigtapinfoUser;
?>
            </textarea>
        <div style="padding:10px 60px;">
            <input type="checkbox" name="agree" id="agree">
            <label for="agree">
                اوافق علي الشروط
            </label>
        </div>
        <button class="btn primary-button" style="text-align:left; margin: auto; margin-top:10px; background-color:#008ba3; color:#fff; padding-right:30px; padding-left:30px; display: block;">تسجيل</button>
    </form>


    <form v-if="type == 2" class="text-right form_1" method="post" action="ajax/singup.php" enctype="multipart/form-data">
        <input type="hidden" value="trainer" name="type_process">
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">المعلومات
            الشخصية</h5>
        <div class=row style="height:10px;"></div> <input name="fname" class="form-control" placeholder="الاسم الأول" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="sname" class="form-control" placeholder="اسم الأب" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="tname" class="form-control" placeholder="اسم الجد" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="lname" class="form-control" placeholder="اسم العائلة" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="no" id="no" class="form-control" placeholder="رقم الهوية" type="text" required="" style="display:inline-block;">
        <div id="id_status" class="checked"></div>
        <div class=row style="height:10px;"></div> <input name="pass" class="form-control" placeholder="كلمة المرور " type="password" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="cpass" class="form-control" placeholder=" تأكيد كلمة المرور" type="password" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <div class=row style="height:10px;"></div> <select name="nationalty" required="" class="form-control" style="display:inline-block;">
            <option value="سعودي">فضلا اختر جنسيتك ..</option>
            <option>سعودي</option>
            <option>غير سعودي</option>
        </select>
        <div class=row style="height:10px;"></div> <select name="national" required="" class="form-control" style="display:inline-block;">
            <option value="ذكر">فضلا اختر جنسك ..</option>
            <option>ذكر</option>
            <option>انثى</option>
        </select>
        تاريخ الميلاد
        <div class=row style="height:10px;"></div> <input name="date" class="form-control" placeholder=" تاريخ الميلاد " type="date" required="" style="display:inline-block;">
        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            معلومات الاتصال </h5>
        <div class=row style="height:10px;"></div> <input name="email" class="form-control" placeholder="البريد الالكتروني" type="email" required="">
        <div class=row style="height:10px;"></div>
        <div class=row style="height:10px;"></div> <input name="phone" class="form-control" placeholder="رقم الجوال" type="text" required="">
        <!-- <div class=row style="height:10px;"></div> <input name="telphone" class="form-control" placeholder="رقم الهاتف"
            type="text"> -->
        <div class=row style="height:10px;"></div> <input name="emr_phone" class="form-control" placeholder="رقم الطوارئ" type="text">
        <?php
        echo $signUpData->reqsInputs('Training');
        ?>
        <hr>

        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            المعلومات المهنية </h5>
        <div class=row style="height:10px;"></div> <select name="level" required="" class="form-control" style="display:inline-block;">
            <option value="7">فضلا أختر المؤهل العلمي ..</option>
            <option value="1">متوسط</option>
            <option value="2">ثانوي</option>
            <option value="3">دبلوم</option>
            <option value="4">جامعي</option>
            <option value="5">ماجستير</option>
            <option value="6">دكتوراه</option>
            <option value="7">أخرى</option>
        </select>
        <div class=row style="height:10px;"></div> <input name="special" class="form-control" placeholder="التخصص" type="text" required="" style="display:inline-block;">
        <!-- <div class=row style="height:10px;"></div> <input name="special-deep" class="form-control" placeholder="التخصص الدقيق"
            type="text" required="" style="display:inline-block;"> -->
        <div class=row style="height:10px;"></div> <select name="job" required="" class="form-control" style="display:inline-block;">
            <option value="0">فضلا اختر مهنتك ..</option>
            <option value="1">حكومي</option>
            <option value="3">قطاع خاص</option>
            <option value="6">أخرى</option>
        </select>
        <div class=row style="height:10px;"></div> <select name="job_aval" required="" class="form-control" style="display:inline-block;">
            <option value="0">هل أنت على رأس العمل</option>
            <option>نعم</option>
            <option>لا</option>
        </select>
        <div class=row style="height:10px;"></div> <input name="job_title" class="form-control" placeholder=" المسمى الوظيفي" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="job_place" class="form-control" placeholder=" جهة العمل" type="text" required="" style="display:inline-block;">

        <div class=row style="height:10px;"></div>
        <select onchange='show_hide_item_(this)' required="" class="form-control" style="display:inline-block;">
            <option value="0">هل انت مدرب معتمد </option>
            <option value='1'>نعم</option>
            <option value='0'> لا</option>

        </select>
        <div id='show_hide_item_recv'></div>

        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            معلومات التطوّع </h5>
        <div style="padding:10px 60px;width:100%; min-height: 150px">
            <input type="checkbox" name="track[]" id="box-1" value="1">
            <label style="margin-right:30px;" class='float-right' for="box-1"> إداري</label>
            <input type="checkbox" name="track[]" id="box-2" value="2">
            <label style="margin-right:30px;" class='float-right' for="box-2"> إعلامي</label>
            <input type="checkbox" name="track[]" id="box-3" value="3">
            <label style="margin-right:30px;" class='float-right' for="box-3"> صحي</label>
            <input type="checkbox" name="track[]" id="box-4" value="4">
            <label style="margin-right:30px;" class='float-right' for="box-4"> اجتماعي</label>
            <input type="checkbox" name="track[]" id="box-5" value="5">
            <label style="margin-right:30px;" class='float-right' for="box-5"> تقني</label>
            <input type="checkbox" name="track[]" id="box-6" value="6">
            <label style="margin-right:30px;" class='float-right' for="box-6"> أدبي</label>
            <input type="checkbox" name="track[]" id="box-7" value="7">
            <label style="margin-right:30px;" class='float-right' for="box-7"> ترفيهي</label>
            <input type="checkbox" name="track[]" id="box-8" value="8">
            <label style="margin-right:30px;" class='float-right' for="box-8"> ثقافي</label>
            <input type="checkbox" name="track[]" id="box-9" value="9">
            <label style="margin-right:30px;" class='float-right' for="box-9"> رياضي</label>
            <input type="checkbox" name="track[]" id="box-10" value="10">
            <label style="margin-right:30px;" class='float-right' for="box-10"> إغاثي</label>
            <input type="checkbox" name="track[]" id="box-11" value="11">
            <label style="margin-right:30px;" class='float-right' for="box-11"> قانوني</label>
            <input type="checkbox" name="track[]" id="box-12" value="12">
            <label style="margin-right:30px;" class='float-right' for="box-12"> تدريبي</label>
            <input type="checkbox" name="track[]" id="box-13" value="13">
            <label style="margin-right:30px;" class='float-right' for="box-13"> هندسي</label>
            <input type="checkbox" name="track[]" id="box-14" value="14">
            <label style="margin-right:30px;" class='float-right' for="box-14"> تنظيمي</label>
        </div>
        <!-- <div class=row style="height:10px;"></div><select name="vol_time" required="" class="form-control" style="display:inline-block;">
            <option value="0"> أختر الوقت المناسب لك </option>
            <option>صباحًا</option>
            <option>مساءًا</option>
        </select>
        <div class=row style="height:10px;"></div> <select name="expir" required="" class="form-control" style="display:inline-block;">
            <option value="0">هل لديك خبرة في المجال التطوعي</option>
            <option>نعم</option>
            <option>لا</option>
        </select> -->
        <div class="col-sm-12">
            <label class=" control-label">الصورة الشخصية</label>
            <input name="profile_img" type="file" class="form-control">
            <span class="require">*</span>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <p>فقط أنواع الملفات التالية : JPG ,JPEG , PNG , PDF , DOC , DOCX </p>
            </div>
        </div>
        <div class='dropdown-divider'></div>
        <div class="col-sm-12">
            <label class=" control-label">العرض التدريبي</label>
            <input name="attach" type="file" class="form-control" required="">
            <span class="require">*</span>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <p>فقط أنواع الملفات التالية : JPG ,JPEG , PNG , PDF , DOC , DOCX </p>
            </div>
        </div>

        <textarea class="form-control dostor" rows="15" disabled=""><?php


                                                                    $q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoTrainer'";
                                                                    $bigtapinfoTrainer = mysqli_fetch_array(mysqli_query($c, $q))['info'];
                                                                    echo $bigtapinfoTrainer;
                                                                    ?>

            </textarea>
        <div style="padding:10px 60px;">
            <input type="checkbox" name="agree" id="agreetrainer">
            <label for="agreetrainer">
                اوفق علي شروط الموقع
            </label>
        </div>
        <button class="btn primary-button" style="text-align:left; margin: auto; margin-top:10px; background-color:#008ba3; color:#fff; padding-right:30px; padding-left:30px; display: block;">تسجيل</button>

    </form>


    <form v-if="type == 3" class="text-right form_1" method="post" action="ajax/singup.php" enctype="multipart/form-data">
        <input type="hidden" value="team" name="type_process">
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">البيانات
            الأساسية</h5>
        <input name="name" class="form-control placeholder-right" placeholder="اسم الفريق" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="pass" class="form-control" placeholder="كلمة المرور" type="password" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>

        <input name="cpass" class="form-control" placeholder="تأكيد كلمة المرور" type="password" required="" style="display:inline-block;"><br>
        <div class=row style="height:10px;"></div>

        <input name="address" class="form-control" placeholder="عنوان الفريق" type="text" required="" style="display:inline-block;width: 70%;">
        <div class=row style="height:10px;"></div>

        <input name="date" class="form-control" placeholder="تاريخ الإنشاء" type="date" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>


        <textarea name="about" required="" class="form-control placeholder-right" rows="3" maxlength="140" placeholder="نبذة عن الفريق" style="display:inline-block;width: 95%;"></textarea>
        <div style="padding:10px 60px;" class="border border-primary rounded">
            <input type="checkbox" name="track[]" id="boxtm-1" value="1"><label for="boxtm-1"> إداري</label> <input type="checkbox" name="track[]" id="boxtm-2" value="2"><label for="boxtm-2"> إعلامي</label> <input type="checkbox" name="track[]" id="boxtm-3" value="3"><label for="boxtm-3"> صحي</label> <input type="checkbox" name="track[]" id="boxtm-4" value="4"><label for="boxtm-4"> اجتماعي</label> <input type="checkbox" name="track[]" id="boxtm-5" value="5"><label for="boxtm-5"> تقني</label> <input type="checkbox" name="track[]" id="boxtm-6" value="6"><label for="boxtm-6"> أدبي</label> <input type="checkbox" name="track[]" id="boxtm-7" value="7"><label for="boxtm-7">
                ترفيهي</label> <input type="checkbox" name="track[]" id="boxtm-8" value="8"><label for="boxtm-8"> ثقافي</label>
            <input type="checkbox" name="track[]" id="boxtm-9" value="9"><label for="boxtm-9"> رياضي</label> <input type="checkbox" name="track[]" id="boxtm-10" value="10"><label for="boxtm-10"> إغاثي</label> <input type="checkbox" name="track[]" id="boxtm-11" value="11"><label for="boxtm-11"> قانوني</label> <input type="checkbox" name="track[]" id="boxtm-12" value="12"><label for="boxtm-12"> تدريبي</label> <input type="checkbox" name="track[]" id="boxtm-13" value="13"><label for="boxtm-13"> هندسي</label> <input type="checkbox" name="track[]" id="boxtm-14" value="14"><label for="boxtm-14"> تنظيمي</label>
        </div>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            معلومات الاتصال </h5>
        <input name="email" class="form-control" placeholder="البريد الالكتروني" type="text" required="">
        <div class=row style="height:10px;"></div>
        <input name="phone" class="form-control" placeholder="رقم الجوال" type="text" required="">
        <div class=row style="height:10px;"></div>
        <!-- <input name="telphone" class="form-control" placeholder="رقم الهاتف" type="text">
        <div class=row style="height:10px;"></div> -->
        <input name="facebook" class="form-control" placeholder="الفيسبوك" type="text">
        <div class=row style="height:10px;"></div>
        <input name="twitter" class="form-control" placeholder="تويتر" type="text">
        <div class=row style="height:10px;"></div>
        <input name="instagram" class="form-control" placeholder="انستقرام" type="text">
        <div class=row style="height:10px;"></div>

        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">بيانات
            مسؤولي الفريق </h5>
        <input name="leader_name" class="form-control" placeholder="اسم قائد الفريق" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="leader_phone" class="form-control" placeholder="جوال القائد" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="lemail" class="form-control" placeholder=" بريده الإلكتروني" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="leader_id" class="form-control" placeholder=" رقم هوية القائد" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="officer" class="form-control" placeholder="اسم المنسق" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="owork" class="form-control" placeholder="عمل المنسق بالفريق " type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="ophone" class="form-control" placeholder="جوال المنسق" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="oemail" class="form-control" placeholder="البريد الإلكتروني " type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>
        <input name="oid" class="form-control" placeholder="رقم الهوية " type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div>

        <?php
        echo $signUpData->reqsInputs('Team');
        ?>

        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">الرؤوية
            والرسالة والأهداف</h5>
        <input name="vision" class="form-control" placeholder=" الرؤوية" type="text" maxlength="140" required="" style="display:inline-block;width: 70%;">
        <div class=row style="height:10px;"></div>
        <input name="message" class="form-control" placeholder="الرسالة " type="text" maxlength="250" required="" style="display:inline-block;width: 95%;">
        <div class=row style="height:10px;"></div>
        <textarea name="goals" required="" class="form-control" rows="15" placeholder="الاهداف" style="display:inline-block;width: 95%;"></textarea>
        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">المؤسسون</h5>
        <div id="member">
            <div>
                <input name="creator[]" class="form-control" placeholder="المؤسس" type="text" required="" style="display:inline-block;">
                <div class=row style="height:10px;"></div>
                <input name="creator_phone[]" class="form-control" placeholder="جواله" type="text" required="" style="display:inline-block;">
                <div class=row style="height:10px;"></div>
                <input name="creator_email[]" class="form-control" placeholder="بريده" type="text" required="" style="display:inline-block;">
            </div>
            <div class=row style="height:10px;"></div>

            <div class=row style="height:10px;"></div>
        </div>

        <button class="btn btn-warning" onclick="addInputMember('member',6);"><i class="material-icons">add</i><span>انقر
                هنا لإضافة مؤسس آخر</span></button>
        <hr>
        <h6 style="text-align:right;margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            شعار الفريق
        </h6>
        <input name="img" required="" type="file" class="form-control" style="display:inline-block;width: 95%;margin:8px;">
        <div class=row style="height:10px;"></div>
        <div class="alert alert-danger">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p>فقط امتدادات الصور JPG ,JPEG ,PNG </p>
        </div>
        <textarea class="form-control dostor" rows="15" disabled=""><?php


                                                                    $q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoTeam'";
                                                                    $bigtapinfoTeam = mysqli_fetch_array(mysqli_query($c, $q))['info'];
                                                                    echo $bigtapinfoTeam;
                                                                    ?>
            </textarea>
        <div style="padding:10px 60px;">
            <input type="checkbox" name="agree" id="agreeteam">
            <label for="agreeteam">
                موافق علي شروط الخصوصية
            </label>
        </div>
        <button class="btn primary-button" style="text-align:left; margin: auto; margin-top:10px; background-color:#008ba3; color:#fff; padding-right:30px; padding-left:30px; display: block;">تسجيل</button>
    </form>

    <form v-if="type == 4" class="text-right form_1" method="post" action="ajax/singup.php" enctype="multipart/form-data">
        <input type="hidden" value="supporters" name="type_process">
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">البيانات
            الأساسية</h5>
        <input name="name" class="form-control" placeholder="اسم الجهة المستفيدة" type="text" required="" style="display:inline-block;width: 45%;">
        <div class=row style="height:10px;"></div><input name="pass" class="form-control" placeholder="كلمة المرور" type="password" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="cpass" class="form-control" placeholder="تأكيد كلمة المرور" type="password" required="" style="display:inline-block;"><br>
        <div class=row style="height:10px;"></div> <input name="address" class="form-control" placeholder="عنوان الجهة المستفيدة" type="text" required="" style="display:inline-block;width: 50%;">
        <div class=row style="height:10px;"></div> <input name="email" class="form-control" placeholder="البريد الالكتروني" type="text" required="">
        <div class=row style="height:10px;"></div> <textarea name="about" required="" class="form-control" rows="3" maxlength="140" placeholder="نبذة عن الجهة المستفيدة" style="display:inline-block;width: 95%;"></textarea>
        <hr>
        <h5 style="text-align:right; color: #008ba3; margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">بيانات
            مسؤولي الجهة </h5>
        <div class=row style="height:10px;"></div> <input name="officer" class="form-control" placeholder="اسم المنسق" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="ophone" class="form-control" placeholder="جوال المنسق" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="owork" class="form-control" placeholder="عمله في الجهة" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="oemail" class="form-control" placeholder=" بريده الإلكتروني" type="email" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="request_name" class="form-control" placeholder="اسم مقدم الطلب" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="request_phone" class="form-control" placeholder="جوال مقدم الطلب" type="text" required="" style="display:inline-block;">
        <div class=row style="height:10px;"></div> <input name="request_id" class="form-control" placeholder=" رقم هوية مقدم الطلب" type="text" required="" style="display:inline-block;">

        <?php
        echo $signUpData->reqsInputs('estblishment');
        ?>
        <hr>
        <h6 style="text-align:right;margin-bottom:10px; margin-top:30px !important; margin-right: 15px;">
            شعار الجهة المستفيده
        </h6>
        <input name="img" required="" type="file" class="form-control" style="display:inline-block;width: 95%;">

        <div class=row style="height:10px;"></div>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p>فقط امتدادات الصور JPG ,JPEG ,PNG </p>
        </div>
        <textarea class="form-control dostor" rows="15" disabled=""><?php


                                                                    $q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfoEstiblshment'";
                                                                    $bigtapinfoEstiblshment = mysqli_fetch_array(mysqli_query($c, $q))['info'];
                                                                    echo $bigtapinfoEstiblshment;
                                                                    ?>
            </textarea>
        <div style="padding:10px 60px;">
            <input type="checkbox" name="agree" id="agreeentity">
            <label for="agreeentity">
                موافق علي قوانين الخصوصية </label>
        </div>
        <button class="btn primary-button" style="text-align:left; margin: auto; margin-top:10px; background-color:#008ba3; color:#fff; padding-right:30px; padding-left:30px; display: block;">تسجيل</button>


    </form>
</div>


<script>
    window.form = new Vue({
        el: '#form_contant',
        data: {
            type: 0,
        }
    })
</script>