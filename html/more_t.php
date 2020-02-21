<!-- <div  style="height: 100px;"></div> -->

<div class="inside-page-banner" style="margin:0 !important;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">   الفرص التدريبية  </h2>
                  </div>
              </div>
          </div>
<!-- <div class="row text-center">
  <div style="padding-bottom:15px;"class='col align-self-center'>
  
<h1></h1>
</div>
</div> -->
<div class="row page-vw justify-content-center">



<?php



include 'html/config.php';

$q = "SELECT * FROM `training_courses` WHERE 1 ORDER BY `id` DESC";


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
</div>
";

}