<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light   navbar-costam">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto costam-app2">

        <li class="nav-item active">
          <a class="nav-link" href="../">الصفخة الرائسية <span class="sr-only">(current)</span></a>
        </li>

    </div>
    <a class="navbar-brand" href="../">
      <img width=100 src="../assets/logo.jpg">
    </a>
  </nav>


  <?php

  if (

    session_status()
    != PHP_SESSION_ACTIVE
  ) {
    session_start();
  }
  include '../html/config.php';

  if (isset($_GET['type'])) {

    $type = array('user' => 'users', 'trainer' => 'trainers', 'team' => 'team_user', 'supporters' => 'supporters_users');


    if (isset($_POST['email']) && isset($_POST['pass'])) {
      $email = $_POST['email'];
      $pass = $_POST['pass'];

      $table = $type[$_GET['type']];

      $q = "SELECT * FROM `$table` WHERE `email`='$email' AND `pass`='$pass'";

      $r = mysqli_query($c, $q);

      $rows = $r->num_rows;

      if ($rows > 0) {
        $_SESSION['log'] = true;
        $_SESSION['who'] = $email;
        $_SESSION['type'] = $_GET['type'];
        echo "
    <script>
    window.location.assign('../')</script>
    ";
        echo "";
      } else {
        echo '<div class="alert alert-danger text-center" role="alert">
خطأ في تسجيل الدخول سيتم تحولك للصفحة الرائسية بعد 3 ثواني
</div><script>
        setTimeout(()=> {

            window.location.assign("../");
        },3000)
</script>';
      }
    } else {
      echo "
    <script>
    window.location.assign('../')</script>
    ";
    }
  } else {
    echo "
    <script>
    window.location.assign('../')</script>
    ";
  }


  ?>
</body>

</html>