<?php

include '../html/config.php';
session_start();
$type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');
if (!isset($_SESSION['log_admin']) || $_SESSION['log_admin'] != true) {

  if (!isset($_SESSION['log']) || $_SESSION['log'] == false) {
    echo "
    <script>
    window.location.assign('../') </script>
    ";


  }
  if (!isset($_SESSION['type']) || $_SESSION['type'] == "user") {
    echo "
    <script>
    window.location.assign('../') </script>
    ";
  }
}
$email = (isset($_SESSION['who']) && isset($_SESSION['log']) && $_SESSION['log'] == true) ? $_SESSION['who'] : $_SESSION['log_admin'];


if (!isset($_SESSION['log_admin']) || $_SESSION['log_admin'] != true) {
  $table_acc = $type[$_SESSION['type']];

  $q = "SELECT * FROM `$table_acc` WHERE `email`='$email'";

  $r = mysqli_query($c, $q);

  $access = mysqli_fetch_array($r)['access'];
} else {
  $access = '1';

}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<style>

@media (max-width : 576px) {
.form-control {
    width: 100%;
}
 .main_form {
         width: 95% !important; 
    margin-left: 2.5% ;
   }
}
input::placeholder {
  text-align: right;
}

 

</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light   navbar-costam">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto costam-app2">

                <li class="nav-item active">
                    <a class="nav-link" href="../">الصفحة الرائسية <span class="sr-only">(current)</span></a>
                </li>

        </div>
        <a class="navbar-brand" href="../">
               <?php

              $q = "SELECT * FROM `web_info` WHERE `tag`='logo'";
              $url = mysqli_fetch_array(mysqli_query($c, $q))[1];

              echo "<img width=100 src='../$url'>";


              ?>
        </a>
    </nav>

<div class="row text-center">
   <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

   <div class="row justify-content-md-center">
   
    <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">إضافة دورة تدريبية</h2></div>
   </div>
  
</div>

<?php
if ($access == "0") {

  echo "<div class='container' style= \"margin-top:15px;\">
    <div class=\"alert alert-danger text-center\"  role=\"alert\">
 <h3>غير مصرح لك بإضافة دورة تدريبية</h3>

</div>
    </div>";
} else { ?>
<?php


if (isset($_POST['post_'])) {
  $msg1 = "
  <div class='container' style='margin-top:15px;'>
  <div class=\"alert alert-danger text-center\" role=\"alert\">
  يجب ان تكمل البينات
</div>
  </div>
  ";
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
    $_POST['agree'] == 'off'
    ||
    !isset($_FILES['img'])) {
    echo $msg1;
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

  $img = $_FILES['img'];
  $types = ['jpg', 'png', 'jpeg'];
  $imgtype = explode('.', $img['name']);
  $imgtype = strtolower(end($imgtype));

  if (in_array($imgtype, $types)) {

    if ($img['error'] == 0) {

      if ($img['size'] <= 10000000) {

        $new_name = uniqid('', true) . "." . $imgtype;
        $id = uniqid('', true);

        $d = "../assets/$new_name";

        move_uploaded_file($img['tmp_name'], $d);

                // uploadinfo($name, $work, $new_name);

        $random_id = "id" . rand(0, 99999999);
        $email = (isset($_SESSION['who']) && isset($_SESSION['log']) && $_SESSION['log'] == true) ? $_SESSION['who'] : $_SESSION['log_admin'];
        $q = "INSERT INTO `training_courses`(`img`, `id`, `title`, `body`, `date`, `state`,`email`)
   VALUES ('assets/$new_name','$id','$title','$shortbody','$date','1','$email')";
        mysqli_query($c, $q);

        $q = "INSERT INTO `trainers info`(`id`, `team_email`, `state`, `last_time`, `creater_time`, `team_creater`, `person_creater`, `mobile_person_creater`, `type`, `sex`, `location`, `city`, `types_focus`, `item_needed`, `more_body_info`,`time_add`) 
      VALUES ('$id','$email','1','$date2','$date','$name1','$name2','$mobile','$waytype','$focus_type_sex','$location','$city','$focus_people_type','$item_needed','$info','$num_hours')";
        mysqli_query($c, $q);

        echo "
        <div class='container'>
          <div class=\"alert alert-success text-center\" role=\"alert\">
  تم النشر بنجاح
  
</div>
        </div>
        <script>
        window.location.assign('../cpanal.php');
        </script>
      ";

      }
    }
  }
}
?>
   <div class='container' style= "margin-top:15px;">
<div class='row justify-content-md-center'>
<form method='post' style='width:50%;text-center' class='main_form' enctype="multipart/form-data">
 
  <div class="form-group " >
    <input type="text" required="required" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="العنوان الرئيسي  للدورة">
  </div>
  <div class="form-group " >
    <input type="text"required="required" name="shortbody"class="form-control" id="exampleInputPassword1" placeholder="تعريف صغير عن الدورة">
  </div>
   <div class="form-group">
    <input type="shortbody"required="required"name="name1" class="form-control" id="exampleInputPassword1" placeholder="اسم المنظم">
  </div>
  <div class="form-group">
    <input type="shortbody"required="required" name="name2"class="form-control" id="exampleInputPassword1" placeholder="اسم المنسق">
  </div>
   <div class="form-group">
    <input type="shortbody" required="required"name="mobile"class="form-control" id="exampleInputPassword1" placeholder="جوال المنسق">
  </div>
   <div class="form-group">
    <input type="shortbody"required="required" name="waytype" class="form-control" id="exampleInputPassword1" placeholder="المسارات التدريبية">
  </div>
  <div class="form-group text-right">
    <label for="exampleFormControlSelect1">الفئة المستهدفة		</label>
    <select class="form-control"required="required" name="focus_type_sex" id="exampleFormControlSelect1">
      <option>رجال</option>
      <option>نساء</option>
      <option>الكل</option>
    </select>
  </div>
   <div class="form-group text-right">
    <label for="exampleFormControlSelect1">الجنسية المطلوبة	</label>
    <select class="form-control"required="required" name="focus_people_type" id="exampleFormControlSelect1">
      <option>سعودي</option>
      <option>غير سعودي</option>
      <option>الكل</option>
    </select>
  </div>
  <div class="form-group">
    <input type="shortbody" required="required"name="location"class="form-control" id="exampleInputPassword1" placeholder="مكان التنفيذ	">
  </div>
  <div class='text-right'>
    
  <input type="number" id="tentacles" name="num_hours"
  required="required"
        style='margin-right:30px'>
       <label>عدد الساعات</label>
  </div>

  <div class="form-group">
    <input type="shortbody" required="required"name="city"class="form-control" id="exampleInputPassword1" placeholder="المدينة">
  </div>
  <div class="form-group">
    <textarea type="shortbody"required="required"name="item_needed" class="form-control" id="exampleInputPassword1" placeholder="متطلبات الفرصة	"></textarea>
  </div><div class="form-group">
    <textarea type="shortbody"required="required" name="info"class="form-control" id="exampleInputPassword1" placeholder="تفاصيل الفرصة	"></textarea>
  </div>
  <div class="form-group text-right">
        <label for="exampleInputEmail1">تاريخ البدء </label>

<input name="date" placeholder=" تاريخ البدء " required="required"type="date" required="required" class="form-control" style="display: inline-block;">
 </div>
  
 <div class="form-group text-right">
       <label for="exampleInputEmail1">تاريخ الانتهاء</label>

<input name="date2" placeholder=" تاريخ الانتهاء "required="required" type="date" required="required" class="form-control" style="display: inline-block;">
 </div>
 <textarea class='form-group w-100' style='height:300px' disabled>
 <?php

$q = "SELECT * FROM `web_info` WHERE `tag`='bigtapinfo'";
$bigtapinfo = mysqli_fetch_array(mysqli_query($c, $q))['info'];
echo $bigtapinfo;
?>
 </textarea>
<div class="form-group form-check text-right">
    <input type="checkbox" name="agree" required="required"class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">أوافق علي شروط الموقع</label>
  </div>
  <div class='text-right'>
    <label class="form-check-label" style='margin-left:52%;' for="exampleCheck1">صورة للدورة</label>
  </div>
  <input type="file" name="img" required="required"style='width:auto;position:relative' class="form-check-input" id="exampleCheck1">

  <div>
    <button type="submit" name='post_' style='margin-top:25px;' class="btn btn-primary btn-lg btn-block">نشر الدورة</button>
  </div>
</form>

</div>

  </div>
  <?php

}
?>
    <script src="../library/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>