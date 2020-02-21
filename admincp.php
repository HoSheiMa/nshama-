<?php

include 'html/config.php';
session_start();

if (isset($_POST['login'])) {

  $name = $_POST['user'];
  $pass = $_POST['pass'];
  $q = "SELECT * FROM `admins` WHERE `username`='$name' AND `password`='$pass'";
  $r = mysqli_query($c, $q);
  $out = mysqli_fetch_array($r);
  if ($r->num_rows == 0) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">
    Error[404] : Not found this admin info
    </div>";
  } else {
    $_SESSION['log_admin'] = true;
    $_SESSION['log_name'] = $out[3];
    $_SESSION['log_id'] = $out[0];
    $_SESSION['access_'] = $out[4];
    unset($_SESSION['log']);
    unset($_SESSION['who']);
    unset($_SESSION['type']);

    //  = undefined;
    // $_SESSION['who'] = undefined;
    // $_SESSION['type'] = undefined;
    // echo gettype($r->num_rows);
    // header('Location: ./cpanal.php');
  }
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
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="library/animate.css">
  <link rel="stylesheet" href="library/ico.css">
  <link rel="stylesheet" href="library/swiper.min.css">
  <link rel="stylesheet" href="style/controller.css">
  <style>
    .placeholder {}

    .placeholder::placeholder {
      text-align: right;

    }
  </style>
</head>

<body>

  <?php


  if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true) {
    // header('Location: ./cpanal.php');
    echo "
    <div class='col-12 text-center p-1'>
      <div class=\"alert alert-success\" role=\"alert\">
  سيتم تحويلك بعد 3 ثواني
</div>
    </div>
    <script>setTimeout( () => window.location.assign('./cpanal.php'), 3000)</script>";
  } else {
    $_SESSION['log_admin'] = false;
  ?>
    <div class="container  admincp-bg">

      <div class="col " style="padding-top: 30vh;">
        <div class='col text-center'>
          <h3 class='text-dark'>صفحة تسجبل الادمن</h3>
          <div class='row bg-danger' style='width:60%; height:3px;margin:1% 10% 1% 10%;'></div>
        </div>
      </div>
      <div class="col " style="display: flex;
    justify-content: center;
    align-items: center; ">
        <form method="POST" id="form_11">
          <div class="form-group text-right">
            <label for="exampleInputEmail1">الاسم</label>
            <input type="email" name="user" class="form-control placeholder" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الاسم">
          </div>
          <div class="form-group text-right">
            <label for="exampleInputPassword1">الرقم السري</label>
            <input type="password" name="pass" class="form-control placeholder" id="exampleInputPassword1" placeholder="الرقم السري">
          </div>
          <button type="submit" name="login" class="btn btn-primary">تسجيل</button>
        </form>

      </div>
    </div>

    </div>
  <?php

  }

  ?>





  <script src="library/jquery-3.3.1.min.js"></script>
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
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>

</html>