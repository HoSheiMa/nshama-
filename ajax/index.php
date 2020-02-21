
<?php



session_start();

include 'html/config.php';

// close or open web
$web__work = "SELECT * FROM `web_info` WHERE `tag`='Stop___web'";
$web__work_R = mysqli_fetch_array(mysqli_query($c, $web__work))[1];
if ($web__work_R == "false") {
  echo "<script>window.location.assign('Error_page.php')</script>";

}
$q = "SELECT * FROM `info` WHERE `tag`='views'";

$r = mysqli_query($c, $q);

$new_views = +mysqli_fetch_array($r)[1] + 1;

$q = "UPDATE `info` SET `data`='$new_views' WHERE `tag`='views'";

$r = mysqli_query($c, $q);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <?php

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
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <?php

    $q = "SELECT * FROM `web_info` WHERE `tag`='meta-description'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<meta name='description' content='$r'>";
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="library/animate.css">
    <link rel="stylesheet" href="library/ico.css">
    <link rel="stylesheet" href="library/swiper.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">


</head>
<body>
    
<?php
// echo print_r($_SESSION['log']);
include 'html/uppage.php';

?>


<div id="carouselExampleIndicators" class="carousel slide costam-carousel" data-ride="carousel">
  <ol class="carousel-indicators">

  <button id="scroll-down"class="btn text-white  text-center" style="border-radius: 50%;height:40px;width:50px;background:transparent;border:1px solid #fff">
  <i class="material-icons">expand_more</i>

  </button>
    <!-- <?php


        include 'html/config.php';

        $q = "SELECT * FROM `topnews` WHERE 1";


        $r = mysqli_query($c, $q);

    // $row_n = $r->num_rows;
    // $active_once = "class=\"active\"";
    // for ($i = 0; $i < $row_n; $i++) {
      // echo " <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$i\" $active_once></li>";
      // $active_once = "";
    // }
        ?> -->
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  <div class="carousel-inner">
    <!-- <div class="caro)usel-item active">
      <img class="d-block w-100 costam-top-image" src="assets/1.jpg" alt="First slide">
<div class="carousel-caption d-none d-md-block">
    <h5>volunteer</h5>
    <p>volunteer</p>
  </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100 costam-top-image" src="assets/2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 costam-top-image" src="assets/3.jpg" alt="First slide">
    </div> -->

    <?php


    $active_once = 'active';
    while ($output = mysqli_fetch_array($r)) {


      echo "

<div class=\" carousel-item $active_once\">
      <img class=\"d-block w-100 costam-top-image\"src=\"{$output[0]}\" alt=\" First slide \">
      <div class=\"carousel-caption d-none d-md-block\" style=\"bottom: 30%;\">
     <h1>{$output[1]}</h1>
     <h5>{$output[2]}</h5>
   </div>
    </div>
    
    ";
      $active_once = '';
    }

    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>

<div class='row'>
<?php

$q = "SELECT * FROM `web_info` WHERE `tag`='ads_html'";
$r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

echo $r;
?>
</div>
<div style="background: #eee; border-top:10px solid #eee;">

<div class="col text-center" ><h3>
  أحدث الفرص التطوعية

</h3></div>
<div class=" container page-2 ">

<?php



include 'html/config.php';

$q = "SELECT * FROM `volunteer opportunities` WHERE 1";


$r = mysqli_query($c, $q);


while ($output = mysqli_fetch_array($r)) {

  $STATE_EVENT = '';
  if ($output[5] == "1") {
    $state_v = 'متاحة';
    $state_v_c = "#27AE60";
  } else {
    if ($output[5] == "0") {
      $state_v = 'مغلقة';
      $state_v_c = "#E74C3C";
      $STATE_EVENT = "disabled";
    } else {
      $state_v = "قريبا";
      $state_v_c = "#E67E22";
      $STATE_EVENT = "disabled";
    }
  }
  $found_email = (isset($_SESSION['log']) && $_SESSION['log'] != false) ? $_SESSION['who'] : '';
  $found_q = "SELECT * FROM `active_v` WHERE `id`='$output[1]' AND `email`='$found_email'";
  $found_r = mysqli_query($c, $found_q);
  $found_rows = $found_r->num_rows;

  $btn_join_msg = "تسجيل";
  $eventclick = "onclick='join_(\"$output[1]\",this, \"v\",\"$output[2]\")'";
  if ($found_rows > 0) {
    $btn_join_msg = "تم التسجيل";
    $STATE_EVENT = "disabled";
    $eventclick = "";
  }
  if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == "user") {
      $btn = "<button $eventclick class=\"btn btn-success \" $STATE_EVENT>$btn_join_msg</button>";

    } else {
      $btn = "";

    }
  } else {
    $btn = "<button onclick='window.location.assign(\"req.php?q=singin\")' class=\"btn btn-success \" $STATE_EVENT>$btn_join_msg</button>";

  }

  // = ($output[5] == "1") ? 'متاحة' : ($output[5] == 0) ? 'مغلقة' : 'قريبا';
  // $state_v_c = ($output[5] == "1") ? '#27AE60' : ($output[5] == 0) ? '#E74C3C;' : '#E67E22';

  echo "<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\"  >
  <div class=\"  costam-card \" >
  <img class=\"card-img-top\" width=300 height=250 src=\"$output[0]\" alt=\"Card image cap\">
  <div class=\"card-body  text-center\">
    <h5 class=\"card-title  text-info\">$output[2]</h5>
    <p class=\"card-text text-dark\">$output[3]</p>

      <p style='color : gray;margin-top: -15px;' >$output[4]</p>

              <div class=\"dropdown-divider\"></div>

          <span style=\"color : $state_v_c;\">
            <span style='position:relative;top:-2px;'>$state_v</span>
            <i class=\"material-icons\" style='font-size:1.1rem'>
donut_large
</i>
          </span>
              <div class=\"dropdown-divider\"></div>

    <div class=text-center>
$btn 
    <a href=\"readmore_.php?q=$output[1]&type=v\" class=\"btn btn-primary \">التفاصيل</a>
    </div>

  </div>
</div>
</div>";



}
?>







</div>
</div>
<?php

if (isset($_POST['subs_btn'])) {

  if (isset($_POST['subscribe'])) {
    $subscribe = $_POST['subscribe'];

    $q = "SELECT * FROM `info` WHERE `tag`='subs'";

    $r = json_decode(mysqli_fetch_array(mysqli_query($c, $q))['data']);

    array_push($r, $subscribe);

    $r = json_encode($r);

    $q = "UPDATE `info` SET `data`='$r' WHERE `tag`='subs'";
    mysqli_query($c, $q);
    echo "
    
    <div class='col-12 text-center p-2'>
    
    <div class=\"alert alert-success text-center\" role=\"alert\">
تم الاشتراك بنجاح</div>
    </div>
    ";

  }
}
?>
<div class="row page-shareupwithus" style="padding-top: 50px;">
          <div class="container">
            <div class="overlay"></div>
              <div class="row">
                  <div class="col-md-12 text-white">
                      <h3 class="title-heading text-center" style="font-weight:100;">الاشتراك بالنشرة البريدية</h3>
                      <p class="myp text-center">
                      اشترك بالنشرة البريدية لجمعية التطوع ليصلك جديد الفعاليات والدورات
                      </p>
                    </div>
                  </div>

                  <div class="row">
                      <form class="input-group" method="post" action="#" style="width:60%; margin:auto;">
                              <input style="border-radius:16px;" name="subscribe" type="email" class="form-control" placeholder="ادخل بريدك الالكتروني او رقم الجوال" required="">
                              <span class="input-group-btn">

                          <button type="submit" name='subs_btn' class="btn btn-primary" style="margin-left:20px;padding:6px;">تسجيل</button>
                        </span>
                      </form>
                  </div>

          </div>
</div>
<div style="background: #eee; border-top:10px solid #eee;">

<div class="col text-center" style="margin-top:10px;"><h3>
أحدث الدورات التدريبية

</h3></div>

<div class="container page-2 ">

<?php



include 'html/config.php';

$q = "SELECT * FROM `training_courses` WHERE 1";


$r = mysqli_query($c, $q);


while ($output = mysqli_fetch_array($r)) {

  $STATE_EVENT = '';
  if ($output[5] == "1") {
    $state_v = 'متاحة';
    $state_v_c = "#27AE60";
  } else {
    if ($output[5] == "0") {
      $state_v = 'مغلقة';
      $state_v_c = "#E74C3C";
      $STATE_EVENT = "disabled";
    } else {
      $state_v = "قريبا";
      $state_v_c = "#E67E22";
      $STATE_EVENT = "disabled";
    }
  }
  $found_email = (isset($_SESSION['log']) && $_SESSION['log'] != false) ? $_SESSION['who'] : '';
  $found_q = "SELECT * FROM `active_t` WHERE `id`='$output[1]' AND `email`='$found_email'";
  $found_r = mysqli_query($c, $found_q);
  $found_rows = $found_r->num_rows;
  $btn_join_msg = "تسجيل";
  $eventclick = "onclick='join_(\"$output[1]\",this, \"t\",\"$output[2]\")'";

  if ($found_rows > 0) {
    $btn_join_msg = "تم التسجيل";
    $STATE_EVENT = "disabled";
    $eventclick = "";

  }
  if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == "user") {
      $btn = "<button $eventclick class=\"btn btn-success \" $STATE_EVENT>$btn_join_msg</button>";

    } else {
      $btn = "";

    }
  } else {
    $btn = "<button onclick='window.location.assign(\"req.php?q=singin\")' class=\"btn btn-success \" $STATE_EVENT>$btn_join_msg</button>";

  }


  echo "<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card \" >
  <img class=\"card-img-top\"  width=300 height=250 src=\"$output[0]\" alt=\"Card image cap\">
  <div class=\"card-body  text-center\">
    <h5 class=\"card-title  text-info\">$output[2]</h5>
    <p class=\"card-text text-dark\">$output[3]</p>
    <p style='color : gray;margin-top: -15px;' >$output[4]</p>
    <div class=text-center>
   
              <div class=\"dropdown-divider\"></div>

          <span style=\"color : $state_v_c;\">
            <span style='position:relative;top:-2px;'>$state_v</span>
            <i class=\"material-icons\" style='font-size:1.1rem'>
donut_large
</i>
          </span>
              <div class=\"dropdown-divider\"></div>
              $btn
    <a href=\"readmore_.php?q=$output[1]&type=t\" class=\"btn btn-primary \">التفاصيل</a>

    </div>
  </div>
</div>
</div>";

}
?>






</div>
</div>
<div class="row page-3">

<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center"> 

  
<?php


include 'html/counter.php';
?>
  
</div> 

<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 hide-under-md">
  <div class="container">

    <div class="row align-items-center">
      <div class="col text-center" style="color: white;
    padding-top: 35%;">
        <h1> احصائيات نفخر بها </h1>
      </div>
    </div>
  </div>
</div>
</div>

<!-- 
  <div class="col text-center" style="
  background: #4e54c8;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #8f94fb, #4e54c8);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */"><h3 style="margin:0;">الاعضاء</h3></div> -->
<!-- 
<div class="col page-4 wow bounceInLeft">

  <div class="swiper-container">
    <div class="swiper-wrapper"> -->
    
<!--     
     
      <div class="swiper-slide">
         <img class="img-box" src="assets/1.jpg">
         <div class="info-box">
           <h5 class="text-white">someone</h5>
            <h3>work name</h4>
        </div>
      </div> -->
      <?php

      // include 'html/config.php';

      // $q = "SELECT * FROM `members` WHERE 1";


      // $r = mysqli_query($c, $q);


      // while ($output = mysqli_fetch_array($r)) {

      //   echo "<div class=\"swiper-slide\">
      //    <img class=\"img-box\" src=\"{$output[3]}\">
      //    <div class=\"info-box\">
      //      <h5 class=\"text-white\">{$output[1]}</h5>
      //       <h3>{$output[2]}</h4>
      //   </div>
      // </div>";



      // }

      ?>


    <!-- </div> -->
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


</div>
<div style="background: #eee; border-top:10px solid #eee;">
<div class="col text-center" ><h3>آخر الأخبار
</h3></div>
<div class="container page-2 " style='border-bottom: 15px solid #eee;'>

<?php



include 'html/config.php';

$q = "SELECT * FROM `topnews2` WHERE 1";


$r = mysqli_query($c, $q);


while ($output = mysqli_fetch_array($r)) {


  echo "<div class=\"col-sm-12 col-md-6 col-lg-4 col-xl-4 wow bounceInLeft   \"  >
  <div class=\"  costam-card border border-muted \" >
  <img class=\"card-img-top\" width=300 height=250 src=\"$output[0]\" alt=\"Card image cap\">
  <div class=\"card-body  text-right\">
    <h5 class=\"card-title text-info\">$output[2]</h5>
    <p class=\"card-text text-dark\">$output[3]</p>
        <div class=\"dropdown-divider\"></div>

    <div class=text-left><a href=\"read.php?q=$output[1]\" class=\"btn btn-link \">قراءة المزيد </a></div>
  </div>
</div>
</div>";

}
?>






</div>
</div>
<?php
include 'html/endpage.php';

?>





    <script src="library/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script> -->
<script src="sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="library/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="library/bootstrap.min.js"></script>

    <script src="library/nicescroll.js"></script>
     <script src='library/WOW.min.js'></script>
      <script src='library/swiper.min.js'></script>
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
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
    $('.counter').counterUp({
    delay: 10,
    time: 3000
})
  </script>
    <script src="javascript/index.js?v=1"></script>
</body>
</html>
