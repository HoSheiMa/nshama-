
<div class="inside-page-banner" style="margin:0 !important;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">   الفرق التطوعية  </h2>
                  </div>
              </div>
          </div>
<div class=' container ' style='display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;'>

<?php


include 'html/config.php';

$q = "SELECT * FROM `team_user` WHERE `access`='1'";


$r = mysqli_query($c, $q);





while ($output = mysqli_fetch_array($r)) {

    if (isset($_SESSION['who'])) {
        $foudn_q = "SELECT * FROM `teams_members` WHERE `email`='" . $_SESSION['who'] . "' AND `team_email`='$output[2]'";
        $found = mysqli_query($c, $foudn_q);
        if ($found->num_rows > 0) {
            $btn = "<a   class=\"btn btn-danger text-white disabled\">منضم</a>";

        } else {

            if (isset($_SESSION['log']) && isset($_SESSION['type']) && $_SESSION['type'] == 'user') {

                $btn = "<a onclick='join_team(this,\"$output[2]\", \"$output[0]\")' class=\"btn btn-primary text-white  btn-block m-1\">انضم للفريق</a>";
            } else {
                $btn = "<a   class=\"btn btn-danger text-white disabled btn-block m-1\">سجل كا عضو اولا</a>";

            }
        }
    } else {
        $btn = "<a   class=\"btn btn-danger text-white disabled btn-block m-1\">سجل كا عضو اولا</a>";

    }
    echo "<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\"  >
  <div class=\"  costam-card \" >
  <img class=\"card-img-top\" width=300 height=250 src=\"$output[4]\" alt=\"Card image cap\">
  <div class=\"card-body  text-center\">
    <h5 class=\"card-title  text-info\">$output[0]</h5>
    <p class=\"card-text text-dark\">$output[5]</p>


              <div class=\"dropdown-divider\"></div>

    <div class=text-center>
    $btn
    <a   class=\"btn btn-info text-white btn-block m-1\" href='req.php?q=showTeamprop&id={$output[2]}'>المزيد</a>
    </div>

  </div>
</div>
</div>";



}
?>
</div>
