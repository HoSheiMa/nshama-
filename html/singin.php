

 <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<!-- <div  style="height: 100px;"></div> -->
<div class="row text-center">
   <div class="col text-center text-black" style="background-size:cover;background-repeat:no-repeat;;padding:100px;background-image:url(https://more-impact.com/wp-content/uploads/2015/04/Header_5_Home_1210x520.jpg)">

   <div class="row justify-content-md-center">
   
    <h2 class="col-sm-12 col-lg-3 col-xl-3  bg-white" style="padding:8px;">تسجيل الدخول</h2></div>
   </div>
  
</div>
<div class="row" style="height:50px;"></div>
<div class="container text-center">
<div class="row justify-content-md-center">

<div onclick="form.type=4;form.action = 'ajax/signin.php?type=supporters';scroll_to_from()" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
  <div class="card border-0 text-center" >
  <img class="card-img-top "  style="height:50% !important;" src="./assets/enterprise.png"alt="Card image cap">
  <div class="card-body">
    <h3  class="card-text text-center border-primary">جهة مستفيدة</h3>  </div>
</div>
  </div>
  
  <div onclick="form.type=3;form.action = 'ajax/signin.php?type=team';scroll_to_from()" v-if="false" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
  <div class="card border-0" >
  <img class="card-img-top" src="./assets/volunteer-team.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-text text-center border-primary">فريق</h3>
  </div>
</div>
  </div>
  
  <div onclick="form.type=2;form.action = 'ajax/signin.php?type=trainer';scroll_to_from()" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
  <div class="card border-0">
  <img class="card-img-top" src="./assets/volunteer-trainer.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-text text-center border-primary">مدرّب</h3>
  </div>
</div>
  </div>
  <div onclick="form.type=1;form.action = 'ajax/signin.php?type=user';scroll_to_from()" class="col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft">
  <div class="card border-0" >
  <img class="card-img-top" src="./assets/volunteer-indi.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-text text-center border-primary">متطوّع</h3>
  </div>
</div>
  
  </div>
  
</div>
</div>

<div  id="form_contant" v-if="type != 0" class= "container text-right"style="background-image:url(assets/bg.svg);    background-repeat: no-repeat; min-height : 80vh;padding:25px;">
<div class="row justify-content-center" >


    <form method="post" v-bind:action="action" class="form_signin">
            <div class="form-group" >
                <label for="exampleInputEmail1">البريد الاكتروني</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="البريد الاكتروني">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">كلمة السر</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="كلمة السر">
            </div>
            <button type="submit" class="btn btn-primary">دخول</button>
    <div class="row" style="height:10px"></div>
            <a href="req.php?q=singup"><h5>تسجيل جديد</h5></a>
                        <a href="#"onclick="resetEmail()"><h5>نسيت كلمة السر</h5></a>

        </form>
    </div>

</div>
<script>
  function resetEmail() {
    type = form.type;

    if (type == 0) return;

    $.confirm({
    title: '<div class="col text-right">نسيت كلمة السر</div>',
    content: '' +
    '<form action="" class="formName">' +
    '<div class="form-group text-right">' +
    '<label>سوف تصلك رسالة نصية الي البريد الخاص بك تحتوي  علي رابط فتح لحسابك موقتا لتغير كلمة السر و استرجاعة</label>' +
    '<input type="gmail" placeholder="البريد" class="name form-control" required />' +
    '</div>' +
    '</form>',
    buttons: {
        formSubmit: {
            text: 'ارسال',
            btnClass: 'btn-blue',
            action: function (d) {
                var name = this.$content.find('.name').val();
                if(!name){
                    $.alert('بريد خطأ');
                    return false;
                }
                $.ajax({
                  url : './reset/reset_acc.php',
                  type : 'post',
                  data: {
                    email : name,
                    type: type,
                  },
                  success : (d) => {
                    state = d.replace(/\s+/g,' ').trim();
                    console.log(state);
                    
                    if (state == 'true') {
                      Swal(
                        'تم المعالجة بنجاح',
                        'تم ارسال الرسالة الي البريد الخاص بك',
                        'success'
                      )
                    } else {
                      Swal({
                        type: 'error',
                        title: 'تم المعالجة بنجاح',
                        text: 'لم ناجد هذا البريد في موقعنا تاكد منه',
                        footer: '<a href="req.php?q=pagecallus">اذا كونت تواجة مشكلة تواصل مع الادمن</a>'
                      })
                    }
                    
                  }
                })
                // $.alert('   تم الارسال الي الموقع لمعالجة البريد و سوف تصلك رساله اذا كان صحيحا اذا لم تصلك رسالة يمكن المحاولة مجددا او التواصل  مع ادمن الموقع');
            }
        },
        'الغاء': function () {
            
        },
    }
});

    
  
  
}
window.form = new Vue({
  el : '#form_contant',
  data: {
    type : 0,
    action: '',
  } 
})


</script>