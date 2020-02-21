
<div class="inside-page-banner" style="margin:0 !important;    width: 100%;">
              <div class="col-md-12" style="background:url('https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg') no-repeat center center fixed; background-size: cover; height: 300px; padding:0 !important;">
                  <div class="col-md" style="top:45%;">
                      <h2 class="col-md-4" style="text-align:center; background-color: #f1f1f1; padding: 5px; margin:auto;">   الساعات التطوعية والتدريبية  </h2>
                  </div>
              </div>
          </div>

          <div class="row page-vw justify-content-center">


              <div class=" row grid col text-center">

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

  function img_error_replace(image) {
    image.onerror = "";
    image.src = "assets/5c0c608643cf72.76407581.png";
    return true;
}
  

</script>


        <?php



        include 'html/config.php';


        $q = "SELECT * FROM `time__users` ORDER BY `full_time`";


        $r = mysqli_query($c, $q);


        while ($output = mysqli_fetch_array($r)) {
            $q_person = "SELECT * FROM `users` WHERE `email`='{$output['email']}'";
            $r_person = mysqli_query($c, $q_person);

            if ($r_person->num_rows == 0) {
                continue;
            }
            $r_person = mysqli_fetch_array($r_person);

    //         echo "
			
	// 				<figure class=\"effect-zoe\">
	// 					<img src=\"{$r_person['profile_img']}\" onerror='img_error_replace(this)' style='width:100%;
    // height:100% ' alt=\"img25\"/>
    //         <figcaption>
            
	// 						<h1 class=' badge badge-primary ' 
    // > ساعة تطوعية   {$output[2]}</h1>
					
	// 						<h1 class=' badge badge-success '
    // > ساعة تدريبية   {$output[3]}</h1>
							
    //           <p class=\"description text-center\">
              
    //           <span>{$r_person['name']}</span> <br /> {$r_person['full_name']}</p>
	// 					</figcaption>			
	// 				</figure>
				
    // 		";
    
    echo "
    
    <div class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft \" >
    <div class=\"  costam-card border-0\"  style='background:transparent;'>
    <div class='col-12 text-center p-0' onmouseover=\"showfullinfo(this)\" >
    
    <div class='pr-5 pt-3 text-fade full-info' style='display:none;' onmouseout=\"hidefullinfo2(this)\">
    <h4 class='text-right text-white'>{$r_person['full_name']}  </h4>
    <h6 class='text-right mt-1' style='color :#9da4aa'> <span>{$output[2]}</span>  ساعة تطوعية-</h6>
    <h6 class='text-right mt-1' style='color :#9da4aa'> <span>{$output[3]}</span>  ساعة تدريبية- </h6>
    </div>
    <img class=\" w-100 \"  onerror='img_error_replace(this)' src=\"{$r_person['profile_img']}\" style='min-height:400px;max-height:400px;'alt=\"Card image cap\">
    
    <div class='pr-5 pt-3 text-fade short-info' style=''>
    <h4 class='text-right text-white'>{$r_person['full_name']}</h4>
    </div>
    </div>
    </div></div>
        ";
        

        }
        ?>
        </div>

</div>