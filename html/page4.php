<div class="row p-0 m-0" style='margin-top:100px'>



<div class="inside-page-banner" style="margin:0 !important;    width: 100%;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">   المتطوعين  </h2>
                  </div>
              </div>
          </div>
<div class="row page-vw justify-content-center">

<!-- <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
  <div class="  costam-card " >
  <img class="card-img-top" src="assets/man.jpg" height=300 alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-right text-info">اسم</h5>
    <p class="card-text text-dark">تعريف للشخص تعريف للشخص تعريف للشخص تعريف للشخص تعريف للشخص </p>
  </div>
</div>
</div> -->
<?php



include 'html/config.php';

$q = "SELECT * FROM `volunteers` WHERE 1";


$r = mysqli_query($c, $q);


while ($output = mysqli_fetch_array($r)) {


  echo "

<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card \" >
  <img class=\"card-img-top\" src=\"{$output[3]}\" height=300 alt=\"Card image cap\">
  <div class=\"card-body text-right\">
    <h5 class=\"card-title  text-info\">{$output[1]}</h5>
    <p class=\"card-text text-dark\">{$output[2]}</p>
  </div>
</div>
</div>";

}
?>





</div>