<?php


$type = $_POST['type'];

if ($type == "v") {
    $table = "volunteer opportunities";
    $add_new = "helper/add_new_v.php";
} else {
    $table = "training_courses";
    $add_new = "helper/add_new_t.php";

}
include '../html/config.php';

$q = "SELECT * FROM `$table` WHERE 1 ORDER BY `id` DESC";


$r = mysqli_query($c, $q);

echo "

<div class=\"col-12 text-right m-3\">
<button class=\"btn btn-info btn-bg\" onclick=\"window.location.assign('{$add_new}')\">اضافه جديدة</button>
</div>
<table class=\"table\">
  <thead>
    <tr>
    <th scope=\"col\">الاجرءات</th>
    <th scope=\"col\">الحالة</th>
    <th scope=\"col\">تاريخ</th>
    <th scope=\"col\">تعريف</th>
    <th scope=\"col\">الاسم</th>
    <th scope=\"col\">الصورة</th>

    </tr>
  </thead>
  <tbody>";
while ($output = mysqli_fetch_array($r)) {

    $STATE_EVENT = '';
    if ($output[5] == "1") {
        $state_v = 'متاحة';
        $state_v_c = "#27AE60";
    } else {
        if ($output[5] == "0") {
            $state_v = 'مغلقة';
            $state_v_c = "#E74C3C";
            $STATE_EVENT = "disabled";
        } else {
            $state_v = "قريبا";
            $state_v_c = "#E67E22";
            $STATE_EVENT = "disabled";
        }
    }
    $found_email = (isset($_SESSION['log']) && $_SESSION['log'] != false) ? $_SESSION['who'] : '';
    $found_q = "SELECT * FROM `active_t` WHERE `id`='$output[1]' AND `email`='$found_email'";
    $found_r = mysqli_query($c, $found_q);

    echo " <tr>
    <td>
        <a onclick=\"window.location.assign('readmore_.php?q=$output[1]&type=$type')\" href=\"#\" class=\"card-link\">
    <i class=\"material-icons\">

rate_review
</i>
    </a>
    <a onclick=\"edite_information__V_OR_T(this,'$type','$output[1]')\" href=\"#\" class=\"card-link\">
    <i class=\"material-icons\">

create
</i>
    </a>
    <a onclick=\"edite___V_OR_T(this,'$type','$output[1]')\" href=\"#\" class=\"card-link\">
    <i class=\"material-icons\">

donut_large
</i>
    </a>
    <a href=\"#\" onclick=\"delete___V_OR_T(this,'$type','$output[1]')\" class=\"card-link\"><i class=\"material-icons text-danger\">
delete
</i></a></td>
    <td style='color :$state_v_c'> $state_v<i class=\"material-icons\" style='font-size:1.1rem'>
 donut_large
</i></td>
    <td>$output[4]</td>
    <td>$output[3]</td>
    <td>$output[2]</td>
    <th ><img src='$output[0]' width=200 height=200></th>
      </tr>";
//     echo "<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\"  >
//   <div class=\"  costam-card \" >
//   <img class=\"card-img-top\"  width=300 height=250 src=\"$output[0]\" alt=\"Card image cap\">
//   <div class=\"card-body  text-center\">
//     <h5 class=\"card-title  text-info\">$output[2]</h5>
//     <p class=\"card-text text-dark\">$output[3]</p>
//     <div class=text-center>
//  <span class='card-text '>
//       <p style='color : gray'>$output[4]</p>
//     </span>
//               <div class=\"dropdown-divider\"></div>

//           <span style=\"color : $state_v_c;\">
//             <span style='position:relative;top:-2px;'>$state_v</span>
//             <i class=\"material-icons\" style='font-size:1.1rem'>
// donut_large
// </i>
//           </span>
//           <div></div>
    
//               <div class=\"dropdown-divider\"></div>
             
//     </div>
//   </div>
// </div>
// </div>";

}
echo '</tbody>
</table>';
?>


<!-- <a onclick=\"edite___V_OR_T(this,'$type','$output[1]')\" href=\"#\" class=\"card-link\">
    <i class=\"material-icons\">
create
</i>
    </a>
    <a href=\"#\" onclick=\"delete___V_OR_T(this,'$type','$output[1]')\" class=\"card-link\"><i class=\"material-icons text-danger\">
delete
</i></a> -->