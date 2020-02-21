<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>




    <?php
    session_start();
    include '../html/config.php';


    if (isset($_GET['key'])) {

        $key = $_GET['key'];

        $q = "SELECT * FROM `recovery` WHERE `key`='$key'";


        $r = mysqli_query($c, $q);

        $types = array('users' => 'user', 'trainers' => 'trainer', 'team_user' => 'team', 'supporters_users' => 'supporters');
        if ($r->num_rows > 0) {
            $out = mysqli_fetch_array($r);

            $email = $out['email'];
            $type = $types[$out['type']];
            $log = true;


            if (isset($_POST['ClickToReset'])) {

                if (isset($_POST['Password']) && isset($_POST['REPassword']) && $_POST['Password'] == $_POST['REPassword']) {

                    $new_password = $_POST['Password'];

                    $_SESSION['who'] = $email;
                    $_SESSION['type'] = $type;
                    $_SESSION['log'] = $log;
                    $table = $out['type'];

                    $q = "DELETE FROM `recovery` WHERE `key`='$key'";
                    mysqli_query($c, $q);


                    $q = "UPDATE `$table` SET `pass`='$new_password' WHERE `email`='$email'";
                    mysqli_query($c, $q);

                    echo "
                    <script>
                    setTimeout(() => window.location.assign('../'), 1);
                    </script>
                    
                    ";
                } else {
                    echo "<div style='text-align:center'><h2 style='color: #dc3545'>  الرقم السري غير متساوي!</h2></div>
                  
                    ";
                }
            }


    ?>


            <div class="row text-center">
                <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

                    <div class="row justify-content-md-center">

                        <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">اعادة تعين رقم سري جديد</h2>
                    </div>
                </div>

            </div>
            <div class="col text-right">
                <form method="POST">
                    <div class='col text-center'>
                        <input type="password" name="Password" class='form-control w-50 text-right m-3 d-inline-block password' placeholder='الرقم السري الجديد' required>
                    </div>
                    <div class='col text-center'>

                        <input type="password" name="REPassword" class='form-control text-right w-50 m-3 d-inline-block' placeholder='تاكيد الرقم السري ' required>
                    </div>
                    <div class="col text-center m-1">
                        <button type="submit" name="ClickToReset" class="btn btn-primary w-50">تحديث</button>
                    </div>
                </form>
            </div>

    <?php

        } else {
            echo "<div style='text-align:center'><h2 style='color: #dc3545'>  خطأ يتم تحويلك الي الصفحة الرئسية بعد 3 ثواني</h2></div>
        <script>
        
        setTimeout(() => window.location.assign('../'), 3000);
        </script>
        
        ";
        }
    }

    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>

</html>