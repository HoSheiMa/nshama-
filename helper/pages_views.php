
<?php

$id = $_GET['page'];

$q = "SELECT * FROM `pages_content` WHERE `id`='$id'";

$r = mysqli_query($c, $q);

$contant = mysqli_fetch_array($r);
$q = "SELECT * FROM `appbar` WHERE `id_`='$contant[0]'";
$r = mysqli_query($c, $q);

if ($r->num_rows == 0) {
    $q = "SELECT * FROM `dropdown-info` WHERE `id_`='$contant[0]'";
    $r = mysqli_query($c, $q);

    if ($r->num_rows == 0) {
        echo "<script>window.location.asssign('../')</script>";

    }
    $title = mysqli_fetch_array($r)[2];

} else {
    $title = mysqli_fetch_array($r)[0];
}







?>

<div class="inside-page-banner" style="margin:0 !important;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">   <?php echo $title; ?>  </h2>
                  </div>
              </div>
          </div>
<div class="row  justify-content-center m-0">

          <?php
            echo $contant[1];
            ?>
            </div>