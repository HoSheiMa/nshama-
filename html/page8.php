<div class="col-12 text-right p-4" style='margin-top:120px'>


<?php

$q = "SELECT * FROM `web_info` WHERE `tag`='web_info___v'";
$r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

echo $r;
?>
</div>