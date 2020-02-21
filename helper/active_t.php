<?php

include '../html/config.php';
session_start();


if (!isset($_SESSION['log']) || $_SESSION['log'] == false) {
    echo "
    <script>
    window.location.assign('../') </script>
    ";


}
$email = $_SESSION['who'];

$q = "SELECT * FROM `active_t` WHERE `email`='$email'";

$r = mysqli_query($c, $q);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Time</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light   navbar-costam">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto costam-app2">

                <li class="nav-item active">
                    <a class="nav-link" href="../">الصفحة الرائسية <span class="sr-only">(current)</span></a>
                </li>

        </div>
        <a class="navbar-brand" href="../">
               <?php

                $q = "SELECT * FROM `web_info` WHERE `tag`='logo'";
                $url = mysqli_fetch_array(mysqli_query($c, $q))[1];

                echo "<img width=100 src='../$url'>";


                ?>
        </a>
    </nav>
<div class="row text-center">
   <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

   <div class="row justify-content-md-center">
   
    <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">الفرص التطوعية المشترك بها</h2></h2></div>
   </div>
  
</div>

<div class="row">

<div class="col text-center">
    <h3>عدد الفرص التطوعية المشترك بها</h3>
   <h3>
        <?php

        echo ($r->num_rows);

        ?>
   </h3>

   <?php


    $html = "<table class=\"table\">
  <thead>
    <tr>
    <th >التفاصيل</th>
      <th scope=\"col\">الاسم</th>
    </tr>
  </thead>
  <tbody>";
    while ($x = mysqli_fetch_array($r)) {

        $name = $x['name'];
        $id = $x['id'];
        if ($x['state'] == '1') {
            $state = 'تمت المشاركة';
        } else if ($x['state'] == "0") {
            $state = 'مرفوض';
        } else if ($x['state'] == "2") {
            $state = 'انتظار';

        } else {
            $state = 'تمت المشاركة';

        }
        $addhtml = "<tr>
      <td><a onclick=\"remove_me_from('$id', 't')\"class='btn btn-danger text-white'>انسحاب</a> 
      <a href=\"../readmore_.php?q=$id&type=t\" class='btn btn-primary'>التفصيل</a></td>
      <td>$state</td>
      <td>$name</td>
    </tr>
   ";
        $html = $html . $addhtml;;


    }
    $html = $html . "</tbody>
</table>";
    echo $html;
    ?>
</div>
</div>



    <script src="../library/jquery-3.3.1.min.js"></script>
    
<script>

    function remove_me_from(id, type) {
        $.ajax({
            url : '../ajax/remove_me_from.php',
            type : 'post',
            data : {
                id : id, 
                type : type,
            },
            success : (d) => {
                d = d.replace(/\s+/g,' ').trim();
                if (d != 'false') {
                    window.location.reload();
                    // console.log(d);

                } else {
                    $.alert('لا يمكن الانسحاب قبل 24 ساعة');
                }
                
            }
        })
        
    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>