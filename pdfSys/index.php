<?php




require_once './../class/AdminClass/Inputs.php';
include '../class/admin.php';
include '../class/user.php';
include '../html/config.php';
require_once './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

session_start();

$adminC = new admin($c);
$userC = new user($c);


if ($adminC->isAdmin() && isset($_GET['e'])) {
    $e = $_GET['e'];
} else {
    $e = $_SESSION['who'];
}

$dataLevel = [
    'متوسط',
    'ثانوي',
    'دبلوم',
    'جامعي',
    'ماجستير',
    'دكتوراه',
    'أخرى',
];
$dataJobTitle = [
    'حكومي',
    'عسكري',
    'قاطع خاص',
    'خيري',
    'طالب',
    'أخرى',
];

$data = $userC->getProfileData($e);
$title = array(
    "email" => 'البريد',
    "nu_id" => 'رقم الهوية',
    "name" => 'الاسم',
    "date" => 'تاريخ الميلاد',
    "full_name" => "الاسم بالكامل",
    "nationalty" => "الجنسية",
    "national" => 'الجنس',
    "mobile" => 'الجوال',
    "emr_phone" => 'جوال الطوارئ',
    "level" => "المؤهل العلمي",
    "work" => "العمل",
    "job_place" => "جهة العمل",
    "track" => "المسار التطوعي",
    "expir" => "خبرة في المجال التطوعي",
    "jop_manger" => "رأس العمل",
    "profile_img" => "الصورة الشخصية",
    "id_img" => "صورة الهوية",
    "fname" => "الاسم الاول",
    "sname" => "الاسم الثاني",
    "tname" => "اسم العائلة",
    "lname" => "الاسم بالكامل",
    "Governorate" => "منطقة / محافظة",
    "job_title" => "المهنة",
);

$types = array("1" => 'إداري', "2" => 'إعلامي', "3" => 'صحي', "4" => 'اجتماعي', "5" => 'تقني', "6" => 'أدبي', "7" => 'ترفيهي', "8" => 'ثقافي', "9" => 'رياضي', "10" => 'إغاثي', "11" => 'قانوني', "12" => 'تدريبي', "13" => 'هندسي', "14" => 'تنظيمي');


$text = "";

foreach ($data as $key => $value) {
    if ($key == "pass" || $key == "id" || $key == "work_focus" || $key == 'job_type' ||  $key == "" || $value == "") continue;
    if ($key == "track") {
        $json_types = json_decode($value, true);
        $types_html = '';
        for ($js = 0; $js < sizeof($json_types); $js++) {
            $types_html = $types_html . '-' . $types[$json_types[$js]];
        }
        $text =  $text . "  
        <tr>
        <td style='text-align:center;'>{$types_html}</td>
        <td style='text-align:center;'>{$title[$key]}</td>
    </tr>";

        continue;
    }
    if ($key == "reqsInfo") {
        $value = json_decode($value, JSON_UNESCAPED_UNICODE);
        $titles = $adminC->inputsFunction('get', "reqsForUser", "*");

        for ($vc = 0; $vc < sizeof($value); $vc++) {

            $text =  $text . "  
        <tr>
        <td style='text-align:center;'>{$value[$vc]}</td>
        <td style='text-align:center;'>{$titles[$vc][1]}</td>
    </tr>";
        }
        continue;
    }
    if ($key == "profile_img" || $key == "id_img") {
        $text =  $text . "  
        <tr>
        <td style='text-align:center;'><img src='../$value' width='400' height='400' /></td>
        <td style='text-align:center;'>$title[$key] </td>
      </tr>
      ";
        continue;
    }
    if ($key == "level") {
        $value = $dataLevel[(int) $key];
    }
    if ($key == "job_title") {
        $value = $dataJobTitle[(int) $key];
    }

    $text =  $text . "  
    <tr>
    <td style='text-align:center;'>$value</td>
    <td style='text-align:center;'>$title[$key] </td>
  </tr>
  ";
}

// echo $text;
// return;
try {
    $html2pdf = new HTML2PDF('P', array($width_in_mm, $height_in_mm), 'en', true, 'UTF-8', array(0, 0, 0, 0));

    $content =
        "<page style=\"font-family: freeserif;width:100%;\"><br />
           
            <style>
            table {
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              padding: 8px;
            }
            
            .center {
                margin: auto;
                width: 50%;
              }
            tr:nth-child(even) {
              background-color: #dddddd;
            }
            </style>
            
            <div style='text-align:center'>
                <h3>بينات المستخدم</h3>   
            </div>             
            <div class='center' style='text-align:center'>
                <table>
                    <tr>
                        <th style='text-align:center;'>المحتوي</th>
                        <th style='text-align:center;'>الاسم</th>
                    </tr>
                    $text
                </table>
                </div>
              
            
        </page>";
    $html2pdf->pdf->SetDisplayMode('real');
    $html2pdf->writeHTML($content);
    ob_end_clean();
    $html2pdf->output('info.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
