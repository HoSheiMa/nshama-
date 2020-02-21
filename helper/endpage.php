<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


<div class="row page-5 bg-dark ">
  <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 text-right wow bounceInLeft">
    <h3 class="text-white mb-2">روابط التحقق</h3>
  

    <a href="req.php?q=check1">
      <h5 class="text-white costam_link"> التحقق من شهادات الفرد</h5>
    </a>
    <a href="req.php?q=check2">
      <h5 class=" text-white costam_link"> التحقق من بطاقات العضوية </h5>
    </a>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 text-right wow bounceInLeft">
    <h3 class="text-white mb-2">روابط اخري</h3>
    <a href="req.php?q=pagecallus">
      <h5 class=" text-white costam-margin-right costam_link">اتصل بنا</h5>
    </a>
    <a href="req.php?q=page8">
      <h5 class=" text-white costam-margin-right costam_link">ميثاق العمل التطوعي </h5>
    </a>
    <a href="req.php?q=page9">
      <h5 class=" text-white costam-margin-right costam_link">حقوق وواجبات المتطوعين</h5>
    </a>

  </div>
  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right wow bounceInRight text-light">
    <h3 class="text-white mb-2">عن الموقع</h3>
   <?php
  $q = "SELECT * FROM `web_info` WHERE `tag`='about_web'";
  $about_web = mysqli_fetch_array(mysqli_query($c, $q))['info'];
  echo $about_web;
  ?>
  </div>

  <div style="width:100%;height:1px;margin:3% 10%;" class="bg-danger"></div>

  <div class="container">
    <div class='col text-white text-center'>صنع بحب<i class="material-icons text-danger">
        favorite
      </i> بواسطة فريقنا التطوعي</div>
          <div class="col text-center" style="padding:15px;">

    <p class="text-white">جميع الحقوق محفوظة © 2018</p>
    </div>
    <div class="col text-center" style="padding:15px;">

      <?php
      include 'config.php';

      $q = "SELECT * FROM `links` WHERE `visable`='true'";

      $r = mysqli_query($c, $q);

      while ($link = mysqli_fetch_array($r)) {
        $link_access = $link['link'];
        $link_img = $link['img-link'];
        echo "
        <a href=\"$link_access\" style=\"margin:5px;\" target=\"_blank\">
        <img src='$link_img' width=50 height=50>

        </a>
        
        ";


      }


      ?>
      <!-- <a href="#" style="margin:5px;">
      <i class="fab fa-twitter" style="font-size:52px;color:#6c757d"></i>
      </a><a href="#"style="margin:5px;">
      <i class="fab fa-facebook " style="font-size:52px;color:#6c757d"></i>
      </a><a href="#"style="margin:5px;">
      <i class="fab fa-instagram " style="font-size:52px;color:#6c757d"></i>
      </a><a href="#"style="margin:5px;">
      <i class="fab fa-linkedin" style="font-size:52px;color:#6c757d"></i>
      </a> -->

    </div>
  </div>
</div>