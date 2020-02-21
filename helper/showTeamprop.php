<?php

if (!isset($_GET['id']) || $_GET['id'] == '') {
    echo '<script> window.location.assign("../") </script>';
}
$id = $_GET['id'];
$q = "SELECT * FROM `team_user` WHERE `email`='$id'";

$out = mysqli_fetch_array(mysqli_query($c, $q));

$q_ = "SELECT * FROM `teams_members` WHERE `team_email`='$id' AND `state`='1'";
$r_ = mysqli_query($c, $q_);

$h__ = 0;

while ($hours = mysqli_fetch_array($r_)) {

    $q_h__ = "SELECT * FROM `time__users` WHERE `email`='{$hours['email']}'";
    // echo $q_h__;
    $h__ = (int)$h__ + +mysqli_fetch_array(mysqli_query($c, $q_h__))[2];
}



$q_ = "SELECT * FROM `teams_members` WHERE `team_email`='$id' AND `state`='1'";
$r_ = mysqli_query($c, $q_);

$h__2 = 0;

while ($hours = mysqli_fetch_array($r_)) {

    $q_h__2 = "SELECT * FROM `time__users` WHERE `email`='{$hours['email']}'";
    // echo $q_h__;
    $h__2 = (int)$h__2 + +mysqli_fetch_array(mysqli_query($c, $q_h__2))[3];
}


$types = array("1" => 'إداري', "2" => 'إعلامي', "3" => 'صحي', "4" => 'اجتماعي', "5" => 'تقني', "6" => 'أدبي', "7" => 'ترفيهي', "8" => 'ثقافي', "9" => 'رياضي', "10" => 'إغاثي', "11" => 'قانوني', "12" => 'تدريبي', "13" => 'هندسي', "14" => 'تنظيمي');

$json_types = json_decode($out['track'], true);
$types_html = '';
for ($js = 0; $js < sizeof($json_types); $js++) {
    $types_html = $types_html . '<br />' . $types[$json_types[$js]];
}

?>

                
<div class='' style="margin-top: 12rem;">
<div class="container col-md-10" style="margin-top:50px; margin-bottom: 50px; background-color: #fff; padding-top: 30px;padding-bottom: 50px;">
                    <div class="row" style="text-align:right;">
                  
                        <div class="col-sm-6">
                            <br>
                            <h1><?php echo $out[0]; ?></h1>
                            <p class="justfy">
                            <?php echo $out[5]; ?>
                            </p>
                            <p><strong>أنشئ في :</strong><span><?php echo $out['date']; ?></span></p>
                            <p><span><?php echo $out[1]; ?><strong> :عنوان الفريق  </strong></span></p>
                            <p><span><?php echo $out['leader_name']; ?><strong> :قائد الفريق </strong></span></p>
                            <p><span><?php echo $out['leader_phone']; ?><strong>:رقم جوال قائد الفريق  </strong></span></p>
                                                        <p><strong>  :المسارات التطوعية</strong><span> <?php echo $types_html; ?></span></p>
                                                </div>
                                                      <div class="col-sm-6 text-center">
                            <img src="<?php echo $out['img']; ?>" width="70%" height=400>                        </div>
                    </div>

                </div>
                <div class="row p-0 m-0" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; min-height: 200px; padding:0 !important;">
        <div class="col-md-3 text-center" style="margin:auto;">
            <div class="oss">
                <i class="fa fa-users fa-4x" aria-hidden="true" style="color:#f1f1f1;"></i><br>
                <h2 class="timer"><?php

                                    $q = "SELECT * FROM `teams_members` WHERE `team_email`='$id'";
                                    $r = mysqli_query($c, $q)->num_rows;
                                    echo $r;

                                    ?></h2>
                <p> أعضاء الفريق</p>    
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin:auto;">
            <div class="oss">
                <i class="fa fa-clock fa-3x" aria-hidden="true" style="color:#f1f1f1;"></i><br>
                <h2 class="timer"><?php echo $h__; ?></h2>
                <p>الساعات التطوعية</p>    
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin:auto;">
            <div class="oss">
                <i class="fa fa-suitcase fa-3x" aria-hidden="true" style="color:#f1f1f1;"></i><br>
                <h2 class="timer"><?php echo $h__2; ?></h2>
                <p>الساعات التدريبية</p>    
            </div>
        </div>

      
    </div>

</div>