<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
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
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <?php

    $q = "SELECT * FROM `web_info` WHERE `tag`='meta-description'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<meta name='description' content='$r'>";
    ?>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   

    <link rel="stylesheet" href="library/animate.css">
    <link rel="stylesheet" href="library/ico.css">
    <link rel="stylesheet" href="library/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

<link rel="stylesheet" type="text/css" media="screen" href="./style/index.css?v=12c" />
    <link rel="stylesheet" type="text/css" media="screen" href="./style/qstyle.css?v=1vc" />

</head>
<body style="background-color:#eee">
<?php
include 'html/uppage.php';

?>
 <div class="row text-center">
        <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

            <div class="row justify-content-md-center">

                <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">تفاصيل الخبر</h2>
            </div>
        </div>

    </div>
    <?php
    include 'html/config.php';

    if (isset($_GET['q']) && $_GET['q'] != '') {

      $q = "SELECT * FROM `event_txt` WHERE `id`='{$_GET["q"]}'";

      $r = mysqli_query($c, $q);

      $out = mysqli_fetch_array($r);
      $q = "SELECT * FROM `topnews2` WHERE `id`='{$_GET["q"]}'";

      $out2 = mysqli_fetch_array(mysqli_query($c, $q))[0];
      if (mysqli_fetch_array(mysqli_query($c, $q))['state'] == 'false') {
        echo "
        <script>
        window.location.assign('index.php');
        </script>
        ";
      }

      echo "
      <div class=\"container  mb-5 p-5 p-sm-0 text-center bg-white no-padding\" style='margin-top:100px;'>
      <div class=\"wow bounceInLeft p-3\"><img style='width: 50%;
  height: 60vh;border-radius:8px;'class='w-sm-100' src=\"$out2\"></div>
        
        <div class=\" col  wow bounceInRight text-center  \">
        <h1 style=';margin-bottom:25px;'>$out[1]</h1></div>" .
        "<div class='col-12 text-right mb-3' style='color: #ddd'>$out[3] : حرر بتاريخ </div>" .
        "<div class=\"col p-3 wow bounceIn text-center no-padding\"><h6 style=\"word-break: break-word;\">$out[2]</h6>
        
        </div>
        
        </div></div></div>";
    } else {
      header('Location: ./');
      echo "<script>window.loaction.assign(\"./\")</script>";
    }

    include 'html/endpage.php';

    ?>
       <script src="library/jquery-3.3.1.min.js"></script>
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
    <script src="javascript/index.js?v=1cs"></script>
</body>
</html>

