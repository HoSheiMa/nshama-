
  <?php



    include 'html/config.php';

    $q = "SELECT * FROM `time__users` WHERE 1";


    $r = mysqli_query($c, $q);

    $time_V = 0;

    while ($output = mysqli_fetch_array($r)) {


        $time_V = (int)$time_V + $output['time_V'];
    }

    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">hourglass_empty</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$time_V</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">ساعة تطوعية</div>
  </div>  
  </div>
  
  ";

    ?>

    




  <?php



    include 'html/config.php';

    $q = "SELECT * FROM `time__users` WHERE 1";


    $r = mysqli_query($c, $q);

    $time_t = 0;

    while ($output = mysqli_fetch_array($r)) {


        $time_t = (int)$time_t + $output['time_T'];
    }

    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">history</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$time_t</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">ساعة تدريبية</div>
  </div>  
  </div>
  
  ";

    ?>





  <?php



    include 'html/config.php';

    $q = "SELECT * FROM `volunteer opportunities info`";


    $num = mysqli_query($c, $q)->num_rows;



    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">verified_user</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$num</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">فرصة تطوعية</div>
  </div>  
  </div>
  
  ";

    ?>


    
  <?php



    include 'html/config.php';

    $q = "SELECT * FROM `trainers info`";


    $num = mysqli_query($c, $q)->num_rows;



    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">work</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$num</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">دورة تدريبية</div>
  </div>  
  </div>
  
  ";

    ?>



  <?php



    include 'html/config.php';

    $q = "SELECT * FROM `users`";


    $num = mysqli_query($c, $q)->num_rows;



    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">accessibility</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$num</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">متطوع</div>
  </div>  
  </div>
  
  ";

    ?>


  <?php

    include 'html/config.php';

    $q = "SELECT * FROM `team_user`";


    $num = mysqli_query($c, $q)->num_rows;



    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">account_balance</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$num</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">فريق تطوعي</div>
  </div>  
  </div>
  
  ";
    ?>


  <?php

    include 'html/config.php';

    $q = "SELECT * FROM `trainers` ";


    $num = mysqli_query($c, $q)->num_rows;



    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">supervisor_account</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$num</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">المدربين</div>
  </div>  
  </div>
  
  ";
    ?>


     <?php

    include 'html/config.php';

    $q = "SELECT * FROM `supporters`";


    $num = mysqli_query($c, $q)->num_rows;



    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">business</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$num</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">جهة مستفيدة</div>
  </div>  
  </div>
  
  ";
    ?>


    
     <?php

    include 'html/config.php';

    $q = "SELECT * FROM `info` WHERE `tag`='views'";


    $num = mysqli_fetch_array(mysqli_query($c, $q))['data'];



    echo "
  
  
  <div style=\"display: inline-block;padding:6px\" class=\"col-sm-5 col-md-5 col-lg-3 col-xl-3  wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
  <div class=\"text-center\" >
  
  <i class=\"material-icons\" style=\"font-size:3rem\">remove_red_eye</i>
  </div>
  <div class=\"col text-center counter\"style=\"font-size:1.5rem\">$num</div>
  <div class=\"col text-center \"style=\"font-size:1rem\">الزوار</div>
  </div>  
  </div>
  
  ";
    ?>