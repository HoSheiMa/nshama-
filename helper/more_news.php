<!-- <div  style="height: 100px;"></div> -->
<div class="inside-page-banner" style="margin:0 !important;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">    الأخبار  </h2>
                  </div>
              </div>
          </div>

<!-- <div class="row text-center">
  <div style="padding-bottom:15px;"class='col align-self-center'>
  
<h1>الفرص التدريبية</h1>
</div>
</div> -->
<div class="row page-vw justify-content-center">



<?php


$q = "SELECT * FROM `topnews2` WHERE `state`='true' ORDER BY `id` DESC";


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