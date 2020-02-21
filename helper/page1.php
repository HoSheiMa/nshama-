
<!-- <div class="" style="padding-top:100px;"> -->


<div class="col">
  <!-- <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft">

  <h3 style="margin-bottom:1.5rem">الرؤية و الرسالة والقيم
</h3>
</div>
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInRight">

<h5>الرؤية

مجتمع متكامل غني بثقافة العمل التطوعي
</h5></div>
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInLeft">

<h5>
الرسالة

تأسيس منظومة متكاملة متعددة الروافد للعمل التطوعي بالشراكة مع أفراد و مؤسسات المجتمع
</h5>
</div>
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center wow bounceInRight">

<h5>
الأهداف

إنشاء قاعدة بيانات للعمل التطوعي في الممكلة العربية السعودية 
بناء شراكات مع جميع القطاعات الحكومية والخاصة 
العمل على تنظيم سياسات وتشريعات الأعمال التطوعية وتذليل معوقاتها 
تنفيذ دورات تعريفية وتدريبية للأفراد ( المتطوعين ) والمنظمات التي تستقطب المتطوعين
رفع الوعي بالعمل التطوعي وتعزيزه 
 

قيم الجمعية : 

التميز في الأداء ، الشراكة ،  الشفافية ، العمل بروح الجماعة ، المهنية</h5>
</div> -->
<?php

$q = "SELECT * FROM `web_info` WHERE `tag`='info_web_system'";
$r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

echo $r;
?>
</div> 
</div>