<!-- As a link -->
<?php
include 'config.php';
if (!isset($_SESSION['log_admin']) || $_SESSION['log_admin'] != true) {


  ?>
  <a onclick='$(".nav_log2").toggleClass("d-none").toggleClass("d-sm-block")' class="btn btn-dark p-1 nav_log collapse d-block d-sm-none rounded-0" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    اعداداتي
  </a>

  <div class=" nav_log2 collapse d-none d-sm-block" id="collapseExample" >
  <div class="container">
 <?php
if (!isset($_SESSION['log']) || $_SESSION['log'] == false) {
  echo ' <a href="req.php?q=singin" class="costam_nav_font"> دخول</a>
  <span style="color:#4c555f">|</span>
  <a href="req.php?q=singup" class="costam_nav_font">تسجيل جديد</a>
';
} else {
  if ($_SESSION['type'] == 'user') {

    ?>
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
face
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/profile.php">الملف الشخصي</a> 
    <a class="dropdown-item" href="helper/logout.php">تسجيل خروج</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
ساعاتي
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/time_V.php">سااعات التطوعية</a> 
    <a class="dropdown-item" href="helper/time_T.php">سااعات التدربية</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
شهاداتي
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/c_v_.php">شهاداتي التطوعية</a> 
    <a class="dropdown-item" href="helper/c_t_.php">شهاداتي التدربية</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
  الفرص المشترك بها   
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/active_v.php">  فرص تطوعية </a> 
    <a class="dropdown-item" href="helper/active_t.php"> دورات تدريبية </a>
  </div>
</div>
<button onclick="window.location.assign('helper/own_teams.php')"class="btn btn-sm btn-dark"> الفرق المشترك بها</button>

    <?php

  } elseif ($_SESSION['type'] == "trainer") {
    ?>

<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
face
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/profile.php">الملف الشخصي</a> 
    <a class="dropdown-item" href="helper/logout.php">تسجيل خروج</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
 الدورات التدريبية
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">الدورات</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/add_new_t.php">إضافة دورة تدريبية</a> 
    <a class="dropdown-item" href="helper/see_own_t.php">عرض الدورات التدريبية</a>
  </div>
</div>
  </div>
<?php

} elseif ($_SESSION['type'] == "team") {
  ?>
  
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
face
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/profile.php">الملف الشخصي</a> 
    <a class="dropdown-item" href="helper/logout.php">تسجيل خروج</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
الدورات
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">
      الدورات التدريبية

    </span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/add_new_t.php">إضافة دورة تدريبية</a> 
    <a class="dropdown-item" href="helper/see_own_t.php">عرض الدورات التدريبية</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
الفرص التطوعية</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">الفرص التطوعية</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/add_new_v.php">إضافة الفرص التطوعية</a> 
    <a class="dropdown-item" href="helper/see_own_v.php">عرض الفرص التطوعية</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
ادوات الفريق
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">ادوات الفريق
</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/team_profile.php">صفحة الفريق</a> 
    <a class="dropdown-item" href="helper/team_add_.php">طلبات الانضمام</a>
    <a class="dropdown-item" href="helper/team_controlling.php">إدارة الأعضاء</a>
  </div>
</div>
  </div>
  <?php

} elseif ($_SESSION['type'] == "supporters") {
  ?>

<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
face
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" onclick='change_password()'>تغير الباسورد</a> 
    <a class="dropdown-item" href="helper/logout.php">تسجيل خروج</a>
  </div>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
الدورات
</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">
      الدورات التدريبية

    </span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/add_new_t.php">إضافة دورة تدريبية</a> 
    <a class="dropdown-item" href="helper/see_own_t.php">عرض الدورات التدريبية</a>
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-sm btn-dark ">

  <i class="material-icons" style="font-size:13px;">
الفرص التطوعية</i>
  </button>
  <button type="button" class="btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">الفرص التطوعية</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="helper/add_new_v.php">إضافة الفرص التطوعية</a> 
    <a class="dropdown-item" href="helper/see_own_v.php">عرض الفرص التطوعية</a>
  </div>
</div>
  </div>
  <?php

}
}
} else {
  ?>
    <a onclick='$(".nav_log2").toggleClass("d-none").toggleClass("d-sm-block")' class="btn btn-dark p-1 nav_log collapse d-block d-sm-none rounded-0" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    اعداداتي
  </a>
  
  <div class=" nav_log2 collapse d-none d-sm-block" id="collapseExample" >
  <div class="">
<a href='cpanal.php' class='btn btn-sm btn-dark d-block d-sm-inline-block'>
  <i class="material-icons" style='font-size:13px;'>
keyboard_return
</i>

الرجوع لقاعدة التحكم
</a>
</div>
</div>
  <?php

}

?>

</div>

  </div>
<nav id="nav-bar-controller" class="navbar navbar-expand-lg navbar-dark   navbar-costam">
<a class="navbar-brand d-none d-lg-block" href="#">
      <?php

      $q = "SELECT * FROM `web_info` WHERE `tag`='logo'";
      $url = mysqli_fetch_array(mysqli_query($c, $q))[1];

      echo "<img width=100 src='$url'>";


      ?>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">


 <ul class="navbar-nav mr-auto costam-app">
   
  <?php

  $q_appber = "SELECT * FROM `appbar` WHERE `visable`='true'";

  $r_appber = mysqli_query($c, $q_appber);

  $appbar_data = mysqli_fetch_all($r_appber);
  $appbar_data = array_reverse($appbar_data);
  for ($i = 0; $i < sizeof($appbar_data); $i++) {
    $type = $appbar_data[$i][3];
    $title = $appbar_data[$i][0];
    $link = $appbar_data[$i][1];


    if ($type == 'link') {
      echo "   <li class=\"nav-item \">
      <a class=\"nav-link\" href=\"$link\">$title</a>
      </li>";
    } else if ($type == "dropdown") {
      $dropDown_html = '<li class="nav-item dropdown  costam-dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ' . $title . '
        </a>
        <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">';

      $q_dropdown_get_links = "SELECT * FROM `dropdown-info` WHERE `visable`='true' AND `id`='$link'";
      $r_dropdown_get_links = mysqli_fetch_all(mysqli_query($c, $q_dropdown_get_links));
      // $r_dropdown_get_links = array_reverse($r_dropdown_get_links);

      for ($ii = 0; $ii < sizeof($r_dropdown_get_links); $ii++) {
        $dropDown_html = $dropDown_html . '<a class="dropdown-item" href="' . $r_dropdown_get_links[$ii][1] . '">' . $r_dropdown_get_links[$ii][2] . '</a>';
      }

      $dropDown_html = $dropDown_html . '  </div>
      </li>';

      echo $dropDown_html;
    }
  }


  ?>
   <!--
      <li class="nav-item ">
        <a class="nav-link" href="req.php?q=pagecallus">اتصل بنا</a>
      </li>
      
       <li class="nav-item dropdown  costam-dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          المعارض
        </a>
        <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="req.php?q=BookShowCase">معرض الكتب</a>
          <a class="dropdown-item" href="req.php?q=ImagesShowCase">معرض الصور</a>
          <a class="dropdown-item" href="req.php?q=Videos">معرض الفيديهات</a>
          </div>
      </li>
      <li class="nav-item ">
      </li>
          <li class="nav-item ">
              <a class="nav-link" href="req.php?q=page6">شركاء و داعمين</a>
            </li>   
     <li class="nav-item ">
        <a class="nav-link" href="req.php?q=page5">العضويات</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="req.php?q=page4">المتطوعين</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="req.php?q=page7">خدماتنا</a>
      </li>
       <li class="nav-item dropdown  costam-dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          عن المجموعة
        </a>
        <div class="dropdown-menu text-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="req.php?q=page1">الرؤية و الرساله و القيم</a>
          <a class="dropdown-item" href="req.php?q=page2">المؤسسين</a>
          <a class="dropdown-item" href="req.php?q=page3">اعضاء مجلس الادارة و الموظفين</a>

        <a class="dropdown-item" href="req.php?q=team_views">الفرق التطوعية</a>

        <a class="dropdown-item" href="req.php?q=support_____">الجهات المستفيده</a>

          <a class="dropdown-item" href="#">السياسات</a>
          <a class="dropdown-item" href="#">القوائم المالية</a>
          <a class="dropdown-item" href="#">النموذج الشامل</a>
          <a class="dropdown-item" href="#">النماذج والإجراءات</a>


        </div>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="index.php">الصفخة الرائسية <span class="sr-only">(current)</span></a>
      </li>
       -->
</ul>
    </div>
    <a class="navbar-brand" href="#">
      <?php

      $q = "SELECT * FROM `web_info` WHERE `tag`='logo-left'";
      $url = mysqli_fetch_array(mysqli_query($c, $q))[1];

      echo "<img width=100 src='$url'>";


      ?>
    </a>
</nav>
