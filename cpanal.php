<?php
session_start();
include 'html/config.php';
if (isset($_POST['logout'])) {
  $_SESSION['log_admin'] = false;
  // header('Location : ../index.php');
}
if ($_SESSION['log_admin'] == true) {
?>
  <!DOCTYPE html>
  <html style='
overflow-x: hidden;'>

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    include 'html/config.php';
    $q = "SELECT * FROM `web_info` WHERE `tag`='web-title'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<title>$r</title>";
    ?>


    <?php

    $q = "SELECT * FROM `web_info` WHERE `tag`='web-title-img'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<link rel=\"shortcut icon\" type=\"image/png\" href=\"$r\">";
    ?>


    <?php

    $q = "SELECT * FROM `web_info` WHERE `tag`='meta-keywords'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<meta name='keywords' content='$r'>";
    ?>
    

    <?php

    $q = "SELECT * FROM `web_info` WHERE `tag`='meta-description'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<meta name='description' content='$r'>";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="library/animate.css">
    <link rel="stylesheet" href="library/ico.css">
    <link rel="stylesheet" href="library/swiper.min.css">
    <link rel="stylesheet" href="style/controller.css?v=6xxcvs">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>

    <?php
    $access__admin_ = $_SESSION['access_'];
    echo "<script>  const access__admin_= {

    access : $access__admin_
}
   const access___admin_ = Object.freeze(access__admin_);

   el = document.createElement('div');


el.className = \"bluecover text-center\";
el.style = \"padding-top: 20vh\"
img = document.createElement('img');
img.src = \"assets/loading.gif\"
img.width = 300;
img.height = 300;
el.appendChild(img)
document.body.appendChild(el);

  </script>"
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-5">

          <li class="nav-item dropdown access-not_found ">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              الإجراءات
            </a>
            <div class="dropdown-menu text-right " aria-labelledby="navbarDropdown">

              <?php

              $web__work = "SELECT * FROM `web_info` WHERE `tag`='Stop___web'";
              $web__work_R = mysqli_fetch_array(mysqli_query($c, $web__work))[1];

              if ($web__work_R == "true") {
              ?>

                <a class="dropdown-item text-white bg-danger access-30" onclick='Stop___WEB("false")' href="#">الغاء تفعيل الموقع</a>

              <?php

              } else {
              ?>
                <a class="dropdown-item text-white bg-success access-30" onclick='Stop___WEB("true")' href="#"> تفعيل الموقع</a>

              <?php

              }

              ?>
              <a class="dropdown-item text-white bg-warning access-31" onclick='window.location.assign("ajax/backup.php")' href="#">نسخة
                احتياطية من قاعدة البيانات </a>


            </div>
          </li>

        </ul>

        <a class="navbar-brand text-light" href="#">

          <?php echo $_SESSION['log_name'] . " " ?>مرحبا بك
        </a>
        <a class="navbar-brand text-light" href="#" id="toolbar_hideShow" style="color : #fff; cursor : pointer;" onclick="HideShowToolsBar(this)">إِخْفاء</a>
      </div>
    </nav>
    <div class="row page1">

      <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 costam-size mh-100 over_flow_scroll" id="contant">

        <div class="row  align-items-center  costam-bg ">
          <div class="col text-center">
            <h1 class="text-info">اهلا بك في قاعده التحكم</h1>
          </div>
        </div>


      </div>

      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 bg-dark mh-100 ">

        <ul class="list-group " style="    margin-right: 15px;">
          <li permission="1" class="list-group-item text-right " onclick="system_(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">النظام</h5>
            <i class="material-icons">account_balance</i>
          </li>
          <!-- <li class="list-group-item text-right " onclick="system_2(this);active(this);" style="cursor:pointer">
          <h5 style="display:inline-block;">احصئيات</h5>
          <i class="material-icons">pie_chart</i>
        </li> -->
          <li permission="32" class="list-group-item text-right " onclick="active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">المدخلات</h5>
            <i class="material-icons">pie_chart</i>

            <div class="dropShow">
              <i class="material-icons" style="position: absolute;left: 168px;color:#212529">
                play_arrow
              </i>
              <div onclick="show_inputs('reqsForUser')" class="dropShowiItem"><span>مدخلات المتطوع</span></div>
              <div onclick="show_inputs('bigtapinfoTeam')" class="dropShowiItem"><span>مدخلات الفريق</span></div>
              <div onclick="show_inputs('reqsForTraining')" class="dropShowiItem"><span>مدخلات مدرّب</span></div>
              <div onclick="show_inputs('reqsForestblishment')" class="dropShowiItem"><span>مدخلات جهة مستفيدة</span></div>
            </div>
          </li>
          <li permission="2" class="list-group-item text-right " onclick="show_contanet('t');active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الدورات التدريبية</h5>
            <i class="material-icons">event</i>
          </li>
          <li permission="3" class="list-group-item text-right " onclick="show_contanet('v');active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الفرص التطوعية</h5>
            <i class="material-icons">event</i>
          </li>
          <li permission="4" class="list-group-item text-right " onclick="system_3(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;"> الأخبار</h5>
            <i class="material-icons">fiber_new</i>
          </li>
          <li permission="5" class="list-group-item text-right " onclick="system_4(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;"> الأحداث </h5>
            <i class="material-icons">fiber_new</i>
          </li>
          <li permission="6" class="list-group-item text-right " onclick="BookShowCase(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;"> المكتبة</h5>
            <i class="material-icons">book</i>
          </li>
          <li permission="7" class="list-group-item text-right " onclick="Images(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;"> الصور</h5>
            <i class="material-icons">movie</i>
          </li>
          <li permission="8" class="list-group-item text-right " onclick="Videos(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;"> الفيديوهات</h5>
            <i class="material-icons">movie</i>
          </li>
          <li permission="9" class="list-group-item text-right " onclick="system_5(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">أعضاء الإدارة</h5>
            <i class="material-icons">accessibility</i>
          </li>
          <li permission="10" class="list-group-item text-right " onclick="system_5_v(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">المتطوعين الموثقين</h5>
            <i class="material-icons">accessibility</i>
          </li>
          <li permission="11" class="list-group-item text-right " onclick="system_6(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">داعمين</h5>
            <i class="material-icons">location_city</i>
          </li>
          <li permission="12" class="list-group-item text-right " onclick="get_info(this, 'user');active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">متطوعين</h5>
            <i class="material-icons">perm_identity</i>
          </li>
          <li permission="13" class="list-group-item text-right " onclick="get_info(this, 'team');active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الفرق</h5>
            <i class="material-icons">groups</i>
          </li>
          <li permission="14" class="list-group-item text-right " onclick="get_info(this, 'trainer');active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">المدربين</h5>
            <i class="material-icons">assignment_ind</i>
          </li>
          <li permission="15" class="list-group-item text-right " onclick="get_info(this, 'supporters');active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الجهات المستفادة </h5>
            <i class="material-icons">perm_identity</i>
          </li>
          <li permission="16" class="list-group-item text-right " onclick="Vote(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الإستفتاء</h5>
            <i class="material-icons">
              insert_chart
            </i>
          </li>
          <li permission="17" class="list-group-item text-right " onclick="ads(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الإعلانات</h5>
            <i class="material-icons">attach_money</i>
          </li>
          <li permission="18" class="list-group-item text-right " onclick="system_8(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">شهادات</h5>
            <i class="material-icons">local_play</i>
          </li>
          <li permission="19" class="list-group-item text-right " onclick="system_9(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">بطاقات العضوية</h5>
            <i class="material-icons">layers</i>
          </li>
          <li permission="20" class="list-group-item text-right " onclick="info_web(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">من نحن</h5>
            <i class="material-icons">layers</i>
          </li>
          <li permission="21" class="list-group-item text-right " onclick="info_web_2(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">خدماتنا</h5>
            <i class="material-icons">layers</i>
          </li>
          <li permission="22" class="list-group-item text-right " onclick="info_web_3(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">العضويات </h5>
            <i class="material-icons">layers</i>
          </li>
          <li permission="23" class="list-group-item text-right " onclick="info_web_4(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">تواصل معنا </h5>
            <i class="material-icons">layers</i>
          </li>
          <li permission="24" class="list-group-item text-right " onclick="system_10(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">المؤسسين</h5>
          </li>
          <li permission="25" class="list-group-item text-right " onclick="admins_controlling(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الإدارة </h5>
          </li>
          <li permission="26" class="list-group-item text-right" onclick="top_appbar(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">شريط التطبيق العلوي</h5>
            <!-- <i class="material-icons">settings</i> -->
          </li>
          <li permission="27" class="list-group-item text-right" onclick="top_appbar2(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">شريط التطبيق العلوي الفرعي</h5>
            <!-- <i class="material-icons">settings</i> -->
          </li>
          <li permission="28" class="list-group-item text-right" onclick="controlling_pages(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">التحكم في الصفحات</h5>
            <!-- <i class="material-icons">settings</i> -->
          </li>
          <li permission="29" class="list-group-item text-right not" onclick="system_end(this);active(this);" style="cursor:pointer">
            <h5 style="display:inline-block;">الاعدادات</h5>
            <i class="material-icons">settings</i>
          </li>

        </ul>
      </div>

    </div>


    <script src="https://unpkg.com/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="library/jquery-3.3.1.min.js"></script>
    <script language="javascript" type="text/javascript" src="edit_area/edit_area_full.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js'></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <script src="library/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <!--<script src="library/nicescroll.js"></script>-->
    <script src='library/WOW.min.js'></script>
    <script src='library/swiper.min.js'></script>
    <script src="javascript/controller.js?v=6cz121"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.pkgd.min.js"></script>

    <script>
      new WOW().init();

      var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: '.swiper-pagination',
        },
      });
    </script>
  </body>

  </html>






<?php

} else {
  header('Location: ./');
}


?>