

<!-- <div class="row"style="height: 100px"></div> -->

    <div class="row text-center p-0 m-0">
        <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

            <div class="row justify-content-md-center">

                <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">معرض الكتب</h2>
            </div>
        </div>

    </div>
    
        <div class="row p-0 m-0 BookShowCase">
        <?php
        function tamp1($title, $content, $nom_rows)
        {

          $r_content = '';
          if ($nom_rows != 0) {
            while ($x_c = mysqli_fetch_array($content)) {


              $r_content = $r_content . "<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card \" >
  <img class=\"card-img-top\" src=\"{$x_c[3]}\" height=300 alt=\"Card image cap\">
  <div class=\"card-body text-right\">
    <h5 class=\"card-title text-right text-info\">{$x_c[1]}</h5>
    <p class=\"card-text text-dark\">{$x_c[2]}</p>
  </div>
</div>
</div>";


            }
          } else {
            $r_content = "<div class='row justify-content-md-center p-5 w-100'>
                    <div class=\"alert alert-warning text-center w-100\" role=\"alert\">
                                هذا القسم فارغ
                    </div>
                </div>";
          }


          $out = "
            <div class='col-12 m-0 p-0 rounded '>
                     <div class='col-12 text-right bg-info text-light p-2 text-center'><h3>$title</h3></div>
                    <div class='row w-100 m-0 bg-light p-1 '>
                    
                    $r_content
                    </div>
             </div>";

          return $out;


        }
        include 'html/config.php';

        $q = "SELECT * FROM `web_info` WHERE `tag`='tags_sup'";
        $string_tags = (mysqli_fetch_array(mysqli_query($c, $q))['info']);
        $arr_tags = json_decode($string_tags, true, JSON_UNESCAPED_UNICODE);
        // JSON_UNESCAPED_UNICODE
        for ($i = 0; $i < sizeof($arr_tags); $i++) {
          $tag = $arr_tags[$i];
          $q_c = "SELECT * FROM `supporters` WHERE `tag`='$tag'";

          $arr_r = mysqli_query($c, $q_c);

          echo tamp1($tag, $arr_r, $arr_r->num_rows);

        }

        ?>
        </div>
    </div>