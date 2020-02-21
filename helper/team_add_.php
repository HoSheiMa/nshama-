<?php

include '../html/config.php';
session_start();
$type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');
$table_acc = $type[$_SESSION['type']];
if (!isset($_SESSION['log']) || $_SESSION['log'] == false) {
    echo "
    <script>
    window.location.assign('../') </script>
    ";


}
if (!isset($_SESSION['type']) || $_SESSION['type'] != "team") {
    echo "
    <script>
    window.location.assign('../') </script>
    ";
}
$email = $_SESSION['who'];

$q = "SELECT * FROM `$table_acc` WHERE `email`='$email'";

$r = mysqli_query($c, $q);

$data = mysqli_fetch_array($r);

$acces = $data['access'];
$name = $data['name'];

$q__ = "SELECT * FROM `teams_members` WHERE `team_email`='$email' AND `state`='2'";
$r__ = mysqli_query($c, $q__);

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

                <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">
                    <?php echo $name; ?>فريق </h2>
            </div>
        </div>

    </div>


    <div class="container col-md-10" style="margin-top:50px; margin-bottom: 50px; background-color: #fff; padding-top: 30px;padding-bottom: 50px;">
        
        <div class="row" style="margin-top:50px;">
            
            <div class="col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" style="text-align:center;"> أعضاء بإنتظار الموافقة للإنضمام </h4>
                    </div>
                    <div class="panel-body">
                        <table id="teamTable" class="table" style="margin-top: 20px; text-align:center;">
                            <tbody>
                                <tr>
                                    <th scope="row">الاجراءات</th>
                                    <th scope="row">اسم العضو</th>
                                    <th scope="row">الحالة</th>
                                </tr>
                                 <?php

                                while ($x = mysqli_fetch_array($r__)) {
                                    $x_name = $x['person_name'];
                                    $x_date = $x['date'];
                                    $x_email = $x['email'];
                                    echo "
                                         <tr>
                                         <th scope=\"row\">
                                         <button class='btn btn-danger' onclick='group__add(true,\"$x_email\")'>الرفض</button>
                                         <button class='btn btn-success' onclick='group__add(false,\"$x_email\")'>الموافقة</button>
                                         </th>
                                         <th scope=\"row\">$x_name</th>
                                    <th scope=\"row\">انتظار</th>
                                </tr>
                                        
                                        ";
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../library/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="helper_functions.js"></script>
    <script>



    </script>
</body>

</html>