<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once 'vendor/autoload.php';

$email = $_POST['email'];
$type = $_POST['type'];


$tables = array('1' => 'users', '2' => '	trainers', '3' => '	team_user', '4' => 'supporters_users');

$table = $tables[$type];





include '../html/config.php';


$q = "SELECT * FROM `web_info` WHERE `tag`='web-title'";
$TITLE = mysqli_fetch_array(mysqli_query($c, $q))['info'];
$q = "SELECT * FROM `web_info` WHERE `tag`='logo'";
$LOGO = mysqli_fetch_array(mysqli_query($c, $q))['info'];

$q = "SELECT * FROM `$table` WHERE `email`='$email'";
$r = mysqli_query($c, $q);


// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
//     $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// } else {
//     $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// }

$actual_link = 'http://nshama.net';
$name = 'nshama';
$dom = 'net';

if ($r->num_rows != 0) {

    $q = "SELECT * FROM `recovery` WHERE `email`='$email' AND `type`='$table'";
    $r = mysqli_query($c, $q);
    if ($r->num_rows > 0) {
        $q = "DELETE FROM `recovery` WHERE `email`='$email' AND `type`='$table'";

        mysqli_query($c, $q);
    }

    $key = 'key' . uniqid('', true);
    $q = "INSERT INTO `recovery`(`email`, `type`, `key`) VALUES ('$email','$table','$key')";
    mysqli_query($c, $q);


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0;
        // Enable verbose debug output
        // $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->Username = 'qandilafa@gmail.com';
        $mail->Password = 'wadielnatrontv0181510877';                       // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

        //Recipients
        $mail->setFrom("$name@nshama.net", "$TITLE");
        $mail->addAddress("$email");    // Name is optional
        $mail->setLanguage('ar', '/optional/path/to/language/directory/');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'استرجاع الرقم السري';
        $mail->Body =
            "

        <div style=\"text-center\">
        <img src='$actual_link/$LOGO' width=500 height=300 /></div>
       <h3> هذا الرابط صالح مرة واحدة فقط</h3>" .
            " <a href='$actual_link/reset/redir.php?key=$key'>تغير الرقم السري</a> ";
        $mail->AltBody = '';

        $mail->send();
        echo 'true';
    } catch (Exception $e) {
        echo 'false';
    }
} else {
    echo 'false';
}
