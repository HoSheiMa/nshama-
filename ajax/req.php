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
<body >
<!-- As a link -->
<nav class="navbar navbar-expand-lg navbar-light   navbar-costam">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto costam-app2">
      
       <li class="nav-item active">
        <a class="nav-link" href="./">الصفخة الرائسية <span class="sr-only">(current)</span></a>
      </li>
      
    </div>
      <a class="navbar-brand" href="#">
      <?php

        $q = "SELECT * FROM `web_info` WHERE `tag`='logo'";
        $url = mysqli_fetch_array(mysqli_query($c, $q))[1];

        echo "<img width=100 src='$url'>";


        ?>
    </a>
</nav>
<?php

if (isset($_GET['q'])) {
    $q = $_GET['q'];
    if ($q == "page1") {
        include 'html/page1.php';
    } else if ($q == "page2") {
        include 'html/page2.php';

    } else if ($q == "page3") {
        include 'html/page3.php';

    } else if ($q == "page4") {
        include 'html/page4.php';

    } else if ($q == "page5") {
        include 'html/page5.php';

    } else if ($q == "page6") {
        include 'html/page6.php';

    } else if ($q == "page7") {
        include 'html/page7.php';

    } else if ($q == "page8") {
        include 'html/page8.php';

    } else if ($q == "page9") {
        include 'html/page9.php';

    } else if ($q == "pagecallus") {
        include 'html/pagecallus.php';

    } else if ($q == "check1") {
        include 'html/check1.php';

    } else if ($q == "check2") {
        include 'html/check2.php';

    } else if ($q == "singup") {
        include 'html/singup.php';
    } else if ($q == "donepage") {
        include 'html/Donepage.php?msg=11';// . $_GET['msg'];
    } else if ($q == "singin") {
        include 'html/singin.php';// . $_GET['msg'];
    } else if ($q == "BookShowCase") {

        include 'html/BookShowCase.php';
    } else if ($q == "ImagesShowCase") {
        include 'html/ImagesShowCase.php';
    } else if ($q == "Videos") {
        include 'html/Videos.php';
    } else {
        include 'html/error.php';

    }
    // 
} else {
    include 'html/error.php';
}

?>

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