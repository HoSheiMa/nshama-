<!-- <div class="row" style="height : 100px"></div> -->

<div class="row text-center">
    <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

        <div class="row justify-content-md-center">

            <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">معرض الفيديهات</h2>
        </div>
    </div>

</div>

<div class="row BookShowCase">
    <?php
    function tamp1($title, $content, $nom_rows)
    {
        if ($nom_rows > 1) {
            $r_content = "";
            while ($x_c = mysqli_fetch_array($content)) {

                $name = $x_c['name'];
                $body = $x_c['body'];
                $id = $x_c['id'];
                $source = $x_c['source'];
                $r_content = $r_content . "
                    <div style='display: inline-block;' class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center wow bounceInLeft\"><div class=\"card\" style=\"width: 18rem;\">
                <video width=285>
                <source src='$source' type='video/mp4'>
                </video>
                <div class=\"card-body text-center\">
                <h5 class=\"card-title\">$name</h5>
                                <a href='$source' class='btn btn-sm btn-outline-warning'  target=\"_blank\">تحميل</a>
                                <button onclick='content_show_Video(\"$id\")' class='btn btn-sm btn-outline-info'>تفصيل</button>

                            </div>
                            </div></div>";


            }
        } else if ($nom_rows == 1) {
            $content = mysqli_fetch_array($content);
            $name = $content['name'];
            $body = $content['body'];
            $id = $content['id'];
            $source = $content['source'];
            $r_content = "<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center wow bounceInLeft\"><div class=\"card\" style=\"width: 18rem;\">
                <video width=285>
                <source src='$source' type='video/mp4'>
                </video>
                <div class=\"card-body text-center\">
                <h5 class=\"card-title\">$name</h5>
                                <a href='$source' class='btn btn-sm btn-outline-warning'  target=\"_blank\">تحميل</a>
                                <button onclick='content_show_Video(\"$id\")' class='btn btn-sm btn-outline-info'>تفصيل</button>

                            </div>
                            </div></div>";
        } else {
            $r_content = "<div class='row justify-content-md-center p-5'>
                    <div class=\"alert alert-warning text-center w-100\" role=\"alert\">
                                هذا القسم فارغ
                    </div>
                </div>";
        }

        $out = "
            <div class='col-12 m-1 rounded '>
                     <div class='col-12 text-right bg-info text-light p-2 text-center'><h3>$title</h3></div>
                    <div class='col-12 bg-light p-1'>
                    
                    $r_content
                    </div>
             </div>";

        return $out;
    }

    include 'html/config.php';

    $q = "SELECT * FROM `web_info` WHERE `tag`='VideosTags'";
    $string_tags = (mysqli_fetch_array(mysqli_query($c, $q))['info']);
    $arr_tags = json_decode($string_tags, true, JSON_UNESCAPED_UNICODE);
        // JSON_UNESCAPED_UNICODE
    for ($i = 0; $i < sizeof($arr_tags); $i++) {
        $tag = $arr_tags[$i];
        $q_c = "SELECT * FROM `videos` WHERE `tag`='$tag'";

        $arr_r = mysqli_query($c, $q_c);

        echo tamp1($tag, $arr_r, $arr_r->num_rows);

    }

    ?>
</div>
</div>