<?php

include '../html/config.php';
session_start();
$type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');


if (!isset($_SESSION['log']) || $_SESSION['log'] == false) {
  echo "
    <script>
    window.location.assign('../') </script>
    ";


}
$email = $_SESSION['who'];
$type = $type[$_SESSION['type']];
$q = "SELECT * FROM `$type` WHERE `email`='$email'";
$r = mysqli_query($c, $q);

$r = mysqli_fetch_array($r);


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
   
    <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">الفرص التطوعية</h2></div>
   </div>
  
</div>
<div class="col text-center" style="margin-top:10px;"><h3>
الفرص التطوعية المتاحة</h3></div><div class='container text-center'>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">اجرءات</th>
      <th scope="col">الاسم</th>
    </tr>
  </thead>
  <tbody>

    

    <?php
    $gmail = $_SESSION['who'];
    $q = "SELECT * FROM `volunteer opportunities` WHERE `email`='$gmail' AND `state`='1'";
    $r = mysqli_query($c, $q);

    while ($x = mysqli_fetch_array($r)) {
      $id = $x['id'];
      $title = $x['title'];
      echo "
                <tr>
                <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <button onclick='window.location.assign(\"../readmore_.php?q=$id&type=v\")' type=\"button\" class=\"btn btn-success\">التحكم</button>
                    <button onclick='actions__t(2,this,\"$id\",\"v\")' type=\"button\" class=\"btn \">اغلاق</button>
                    <button onclick='actions__t(3,this,\"$id\",\"v\")' type=\"button\" class=\"btn btn-danger\">مسح</button>
                    </div>
                </td>
                <td>$title</td>
                </tr>
                ";
    }
    ?>
    </tr>
  </tbody>
</table>

<div class="col text-center" style="margin-top:10px;"><h3>
الفرص التطوعية المغلقة
</h3></div><div class='container text-center'>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">اجرءات</th>
      <th scope="col">الاسم</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $gmail = $_SESSION['who'];
    $q = "SELECT * FROM `volunteer opportunities` WHERE `email`='$gmail' AND `state`='0'";
    $r = mysqli_query($c, $q);

    while ($x = mysqli_fetch_array($r)) {
      $id = $x['id'];
      $title = $x['title'];
      echo "
                <tr>
                <td>
                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                    <button onclick='window.location.assign(\"../readmore_.php?q=$id&type=v\")' type=\"button\" class=\"btn btn-success\">التحكم</button>
                    <button onclick='actions__t(3,this,\"$id\",\"v\")' type=\"button\" class=\"btn btn-danger\">مسح</button>
                    </div>
                </td>
                <td>$title</td>
                </tr>
                ";
    }
    ?>
    <!-- <tr>
      <td></td>
      <td></td>
    </tr> -->
  </tbody>
</table>

</div>
    <script src="../library/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="helper_functions.js"></script>
<script>



</script>
</body>
</html>