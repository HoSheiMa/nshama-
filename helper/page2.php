
<div class="inside-page-banner" style="margin:0 !important;    width: 100%;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">   المؤسسين  </h2>
                  </div>
              </div>
          </div>
<div class="row page-vw justify-content-center">
<script>
function showfullinfo(el) {
  console.log($($(el).find('.full-info')[0]));
  
  $($(el).find('.full-info')[0]).show();
  $($(el).find('.short-info')[0]).hide();
  
}
function hidefullinfo2(el) {

  $(el).hide();
  $(el).next().next().show();
  }
  

</script>
<?php



include 'html/config.php';

$q = "SELECT * FROM `creater` WHERE 1";


$r = mysqli_query($c, $q);


while ($output = mysqli_fetch_array($r)) {




// 	echo "
			
// 					<figure class=\"effect-zoe\">
// 						<img src=\"{$output[3]}\" style='width:100%;height:100%' alt=\"img25\"/>
// 						<figcaption>
// 							<h2 ><span>{$output[4]}</span></h2>
// 							<p class=\"icon-links\">
// 								 <a href='{$output[5]}' target='_blank'>
//    <img src='./assets/twitter-icon-logo.png' width=50>
//   </a>
// 							</p>
// 							<p class=\"description text-right\"><span>{$output[1]} -</span><br /> {$output[2]} -</p>
// 						</figcaption>			
// 					</figure>
				
// 			";

	echo "

<div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft \" >
  <div class=\"  costam-card border-0\"  style='background:transparent;'>
  <div class='col-12 text-center p-0' onmouseover=\"showfullinfo(this)\" >
 
  <div class='pr-5 pt-3 text-fade full-info' style='display:none;' onmouseout=\"hidefullinfo2(this)\">
  <h4 class='text-right text-white'><a href='{$output[5]}'  target='_blank'><img style='border-radius: 50%;
    margin: 10px;' width=20 src='./assets/twitter.png'></a>{$output[1]}  </h4>
  <h6 class='text-right' style='color :#9da4aa'>{$output[2]} -</h6>
  <h6 class='text-right' style='color :#9da4aa'>{$output[4]} -</h6>
  </div>
  <img class=\" w-100 \" src=\"{$output[3]}\" style='min-height:400px;max-height:400px;'alt=\"Card image cap\">
  
  <div class='pr-5 pt-3 text-fade short-info' style=''>
  <h4 class='text-right text-white'>{$output[1]}</h4>
  <h6 class='text-right' style='color :#9da4aa'>{$output[2]} -</h6>
  </div>
</div>
</div></div>";


}
?>





</div>