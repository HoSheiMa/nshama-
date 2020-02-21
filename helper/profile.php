<?php

include '../html/config.php';
session_start();
$type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');


// if (!isset($_SESSION['log']) || $_SESSION['log'] == false ) {
//     echo "
//     <script>
//     window.location.assign('../') </script>
//     ";


// }
if (isset($_SESSION['who'])) {
    $email = $_SESSION['who'];
} else if (isset($_GET['email'])) {

    $email = $_GET['email'];
} else {
    echo "
    <script>
    window.location.assign('../') </script>
    ";
}
if (isset($_SESSION['type'])) {
    $type = $_SESSION['type'];
} else if (isset($_GET['type'])) {

    $type = $_GET['type'];
} else {
    echo "
    <script>
    window.location.assign('../') </script>
    ";
}
// $type = $type[$_SESSION['type']]
//     or $type[$_GET['type']];


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php
    $q = "SELECT * FROM `web_info` WHERE `tag`='web-title'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<title>$r</title>";
    ?>


 <?php

$q = "SELECT * FROM `web_info` WHERE `tag`='web-title-img'";
$r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

echo "<link rel=\"shortcut icon\" type=\"image/png\" href=\"$r\">";
?>


<?php

$q = "SELECT * FROM `web_info` WHERE `tag`='meta-keywords'";
$r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

echo "<meta name='keywords' content='$r'>";
?>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <?php

    $q = "SELECT * FROM `web_info` WHERE `tag`='meta-description'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo "<meta name='description' content='$r'>";
    ?>    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">

</head>
<body>
<?php
// include 'html/uppage.php';

?>
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
   
    <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">الملف الشخصي</h2></div>
   </div>
  
</div>


</div>
    <script src="../library/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>

<?php
if (isset($_SESSION['log_admin']) && $_SESSION['log_admin'] == true && isset($_GET['email']) && isset($_GET['type'])) {
    echo '$.ajax({url : "profile_sources/user.php",
    type: "get",
    data : {
        type: "' . $_GET['type'] . '",
        email: "' . $_GET['email'] . '",
        print:false,
    },
    success : (data) => $("body").append(data)});';

} elseif ($_SESSION['type'] == "user") {
    echo '$.ajax({url : "profile_sources/user.php",
    type: "get",
    data : {
        type: "' . $type . '",
        email: "' . $email . '",
        print:false,
    },
    success : (data) => $("body").append(data)});';
} elseif ($_SESSION['type'] == "team") {
    echo '$.ajax({url : "profile_sources/team.php",
    type: "get",
    data : {
        type: "' . $type . '",
        email: "' . $email . '",
        print:false,
    },
    success : (data) => $("body").append(data)});';
} elseif ($_SESSION['type'] == "trainer") {
    echo '$.ajax({url : "profile_sources/trainer.php",
    type: "get",
    data : {
        type: "' . $type . '",
        email: "' . $email . '",
        print:false,
    },
    success : (data) => $("body").append(data)});';
} elseif ($_SESSION['type'] == "supporters") {
    echo '$.ajax({url : "profile_sources/supporters.php",
    type: "get",
    data : {
        type: "' . $type . '",
        email: "' . $email . '",
        print:false,
    },
    success : (data) => $("body").append(data)});';
}
?>
function change_password(){
    $.confirm({
    title: '',
    content: '' +
    '<form action="" class="formName">' +
    '<div class="form-group">' +
    '<label>كلمة السر الجديدة</label>' +
    '<input type="password" placeholder="كلمة السر" class="name form-control" required />' +
    '</div>' +
    '</form>',
    buttons: {
        formSubmit: {
            text: 'تغير',
            btnClass: 'btn-blue',
            action: function () {
                var name = this.$content.find('.name').val();
                if(!name){
                    $.alert('provide a valid name');
                    return false;
                }
                $.ajax({
                    url: '../ajax/change_password.php',
                    type: 'post',
                    data : {
                        new_password : name
                    },
                        success: (d) => {
                            console.log(d);
                            
                            $.alert('تم التغير بنجاح');
                        }
                })
            }
        },
        cancel: function () {
            //close
        },
    },
    onContentReady: function () {
        // bind to events
        var jc = this;
        this.$content.find('form').on('submit', function (e) {
            // if the user submits the form by pressing enter in the field.
            e.preventDefault();
            jc.$$formSubmit.trigger('click'); // reference the button and click it
        });
    }
});
}

</script>
</body>
</html>