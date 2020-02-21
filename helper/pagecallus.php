<div style='background-color:#ddd;'>
<div class="row text-right m-0" style="padding:20px;padding-top:150px;">
<div class=col>
   <?php

    $q = "SELECT * FROM `web_info` WHERE `tag`='Contact_us'";
    $r = mysqli_fetch_array(mysqli_query($c, $q))['info'];

    echo $r;

    if (isset($_POST['btn_send'])) {
        $id = "id" . rand(0, 99999999);

        $date = date("F j, Y, g:i a");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $q = "INSERT INTO `problem_ask` (`address`, `name`, `problem`, `problem_type`, `title`, `date`, `id`) 
    VALUES('$email', '$name', '$content', '$type', '$title', '$date', '$id')";
        mysqli_query($c, $q);

        echo "
    
    <div class=\"alert alert-success\" role=\"alert\">
    تم الارسال سيتم الرد عليك ف اقرب وثت ممكن 
</div>

    <div class='col-12 text-center p-1'>
      <div class=\"alert alert-warning\" role=\"alert\">
  سيتم تحويلك بعد 3 ثواني
</div>
    </div>
    <script>setTimeout( () => window.location.assign('./index.php'), 3000)</script>
    
    ";

        $q = "SELECT * FROM `info` WHERE `tag`='asks'";

        $r = mysqli_query($c, $q);

        $new_views = +mysqli_fetch_array($r)[1] + 1;

        $q = "UPDATE `info` SET `data`='$new_views' WHERE `tag`='asks'";

        $r = mysqli_query($c, $q);
    }


    ?>
   <div class="container" style="margin-top:50px; margin-bottom:50px; direction:rtl; text-align:right;">
            <div class="col-md-8" style="margin:auto; background-color:#fff; padding: 30px 10px 50px 10px;">
                            <form class="panel-body" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <div class="col-sm-12" style="margin-bottom:30px;">
                                    <label class=" control-label">اسم المرسل </label>
                                    <input name="name" required="" type="text" class="form-control" style="border-radius:3px;">
                                    <span class="require" style="font-size:18px;">*</span>
                                </div>
                                <div class="col-sm-12" style="margin-bottom:30px;">
                                    <label class=" control-label">البريد الإلكتروني</label>
                                    <input name="email" required="" type="text" class="form-control" style="border-radius:3px;">
                                    <span class="require" style="font-size:18px;">*</span>
                                </div>
                                  <div class="col-sm-12" style="margin-bottom:30px;">
                                    <label class="control-label">نوع الرسالة</label>
                                    <select name="type" required="" class="form-control" style="border-radius:3px;">
                                        <option>فضلا أختر نوع الرسالة</option>
                                        <option>اقتراح</option>
                                        <option>استفسار</option>
                                        <option>شكوى</option>
                                        <option>بلاغ</option>
                                        <option>اعتراض</option>
                                    </select>
                                      <span class="require" style="font-size:18px;">*</span>
                                </div>
                                <div class="col-sm-12" style="margin-bottom:30px;">
                                    <label class=" control-label">عنوان الرسالة</label>
                                    <input name="title" required="" type="text" class="form-control" style="border-radius:3px;">
                                    <span class="require" style="font-size:18px;">*</span>
                                </div>
                                <div class="col-sm-12" style="margin-bottom:30px;">
                                    <label class=" control-label">محتوى الرسالة</label>
                                    <textarea name="content" required="" rows="10" class="form-control" style="border-radius:3px;"></textarea>
                                    <span class="require" style="font-size:18px;">*</span>
                                </div>
                              </div>
                              <div class="col-sm-12" style="text-align:center; margin:auto;">
                              <button type="submit" name='btn_send' class="btn btn-info" style="padding-left:40px; padding-right:40px;">ارسال</button>
                            </div>
                            </form>
                        </div>
                    </div>
</div>
</div>
</div>