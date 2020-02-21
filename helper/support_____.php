<div class="inside-page-banner" style="margin:0 !important;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">   الجهات المستفيدة  </h2>
                  </div>
              </div>
          </div>
<div class='row m-0'>
<?php



include 'html/config.php';

$q = "SELECT * FROM `supporters_users` WHERE `access`='1'";


$r = mysqli_query($c, $q);



while ($output = mysqli_fetch_array($r)) {



    echo "<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\"  >
  <div class=\"  costam-card \" >
  <img class=\"card-img-top\" width=300 height=250 src=\"assets/$output[12]\" alt=\"Card image cap\">
  <div class=\"card-body  text-center\">
    <h5 class=\"card-title  text-info\">$output[0]</h5>
    <p class=\"card-text text-dark\">$output[4]</p>


              <div class=\"dropdown-divider\"></div>

    <div class=text-center>

    <a href=\"supporters_users.php?q=$output[1]\" class=\"btn btn-primary \">التفاصيل</a>
    </div>

  </div>
</div>
</div>";



}


?>
</div>