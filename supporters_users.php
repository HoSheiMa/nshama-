
<?php

include 'html/config.php';

// close or open web
$web__work = "SELECT * FROM `web_info` WHERE `tag`='Stop___web'";
$web__work_R = mysqli_fetch_array(mysqli_query($c, $web__work))[1];
if ($web__work_R == "false") {
    echo "<script>window.location.assign('Error_page.php')</script>";

}
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
    ?>    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   

    <link rel="stylesheet" href="library/animate.css">
    <link rel="stylesheet" href="library/ico.css">
    <link rel="stylesheet" href="library/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

<link rel="stylesheet" type="text/css" media="screen" href="./style/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./style/qstyle.css" />

</head>
<body>

<?php
include 'html/uppage.php';

if (!isset($_GET['q'])) {


    echo "<script> window.location.assign('index.php')</script>";
}

$q = $_GET['q'];

$qry = "SELECT * FROM `supporters_users` WHERE `email`='$q'";
$r = mysqli_query($c, $qry);

if ($r->num_rows == 0) {
    echo "<script> window.location.assign('index.php')</script>";
}

$out = mysqli_fetch_array($r);
?>
<div class="inside-page-banner" style="margin:0 !important;">
                <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                    <div class="col-md" style="top:45%;">
                        <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">  تفاصيل الجهة المستفيدة  </h2>
                    </div>
                </div>
            </div>


            <div class="">
                    <div class="container col-md-10" style="margin-top:50px; margin-bottom: 50px; background-color: #fff; padding-top: 30px;padding-bottom: 50px;">
                        <div class="row col-md">

                            <div class="col-md-7" style="text-align:right; margin-top:10px;">
                            <h4 style="margin-right: 10px; margin-bottom: 30px;"></h4>
                                <p class=""></p>
                                <!-- <p><strong>عدد أعضاء الفريق:</strong> <span style="color:red;"></span></p> -->
                                <h6><strong>:عن الجهة </strong></h6>
                                  <p><?php echo $out['about']; ?></p>
                                <h6 style="margin-top:30px;"><strong>:عنوان الجهة </strong></h6><h6>
                                <p><?php echo $out['address']; ?></p>
                                </h6><h6 style="margin-top:30px;"><strong>منسق الجهة </strong></h6><h6>
                                <p><?php echo $out['request_name']; ?></p>
                                </h6><h6 style="margin-top:30px;"><strong>جوال منسق الجهة </strong></h6><h6>
                                <p><?php echo $out['request_phone']; ?></p>
                            </h6></div>
                                                        <div class="col-md-5" style="height:400px; overflow:hidden; border: 1px solid #ccc; text-align:center;">
                                <img class="img-responsive" src="<?php echo "assets/" . $out['img']; ?>" height="100%" style="margin:0 !important;">                            </div>

                        </div>
                    </div>
                </div>

    <?php
    include 'html/endpage.php';

    ?>

    <script src="library/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="library/bootstrap.min.js"></script>
    <script src="library/nicescroll.js"></script>
     <script src='library/WOW.min.js'></script>
     <script src='library/swiper.min.js'></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script src="library/jquery.printElement.js"></script>
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
  </script>
    <script src="javascript/index.js?v=1"></script>
                </body>

                </html>