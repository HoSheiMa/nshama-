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
$q = "SELECT * FROM `teams_members` WHERE `email`='$email'";
$r = mysqli_query($c, $q);



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
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

                <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">الفرق المشترك بها</h2>
            </div>
        </div>

    </div>

    <div class="container" style="margin-top:50px; margin-bottom: 50px; background-color: #fff; padding-top: 30px;padding-bottom: 50px;">
        <div class="row">
            <div class="col-md-8" style="margin:auto;">

                <div class="row">

                </div>
                <table class="table" style="margin-top: 50px; text-align:center;">
                    <tbody>
                        <tr>
                            <th scope="row" style="width:40%;">الإجراءات</th>
                            <th scope="row" style="width:40%;">اسم الفريق </th>
                            <th scope="row" style="width:20%;">#</th>
                        </tr>
                        <?php
                        $html = "";
                        while ($x = mysqli_fetch_array($r)) {
                            $team_name = $x['team_name'];
                            $team_email = $x['team_email'];
                            $html = $html . "<tr>

                                                <td  style=\"width:40%;\">
                                                <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
  <button type=\"button\" onclick='Exit_team(\"$team_email\",this)' class=\"btn btn-danger\">خروج</button>
  <!-- button type=\"button\" class=\"btn btn-primary \">تفاصيل</button -->
</div>
                                                </th>  
                                                <td  style=\"width:40%;\">$team_name</th>
                                                <td style=\"width:20%;\">#</td>
                                            </tr>";
                        }
                        echo $html;

                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="../library/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script>
        function Exit_team(email, el) {
            $.ajax({
                url: '../ajax/exit_team.php',
                type: 'post',
                data: {
                    email: email,

                },
                success: (d) => {
                    console.log(d);
                    $(el).parent().parent().parent().fadeOut();


                }
            })
        }
    </script>
</body>

</html>