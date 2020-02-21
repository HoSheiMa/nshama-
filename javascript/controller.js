// $("body").niceScroll();
// $("#contant").niceScroll();
// window.rezisebody = () => {
//   $("body")
//     .getNiceScroll()
//     .resize();
//   $("#contant")
//     .getNiceScroll()
//     .resize();

//   setTimeout(() => {
//     rezisebody();
//   }, 600);
// };
// rezisebody();
if (
  !access___admin_.access.includes("30") &&
  !access___admin_.access.includes("31")
) {
  $(".access-not_found").remove();
}
// note is option [get backup for sql, stop/start a webside for viewers]
if (!access___admin_.access.includes("30")) {
  $(".access-30").remove();
}
if (!access___admin_.access.includes("31")) {
  $(".access-31").remove();
}
arr_removed = [];
$(".list-group")
  .children()
  .each(e => {
    el_ = $(".list-group")
      .children()
      [e].getAttribute("permission");

    if (!access___admin_.access.includes(`${el_}`)) {
      if (!$($(".list-group").children()[e]).hasClass("not")) {
        arr_removed.push($(".list-group").children()[e]);
      }
    }
  });
for (i in arr_removed) {
  $(arr_removed[i]).remove();
}

function show_inputs(type) {
  $("#contant").css("background-color", "#e5eff1").html(`
  <div class="row  align-items-center " style="background-color: #e5eff1">
      <div class="col text-center">
      <img src="./assets/loading.gif">
      </div>
  </div>`);

  var dataReq = {
    reqs: "get_input",
    data: {
      type: type,
      who: "*"
    }
  };
  $.ajax({
    url: "./ajax/ajaxReqs.php",
    data: dataReq,
    type: "post",
    success: d => {
      var d = JSON.parse(d);
      var t = "";

      for (var i in d) {
        t += `
        <tr>
          <td>
          <button onclick="input_edit('${type}', '${d[i][3]}')" type="button" style="    background: transparent;
                    border: none;">
          <i class="material-icons">

create
</i>
          </button>
          <button onclick="input_remove('${type}', '${d[i][3]}')" type="button" style="    background: transparent;
          border: none;"><i class="material-icons text-danger">
          delete_forever
          </i></button>
          </td>
            <td>${d[i][0]}</td>
            <td>${d[i][1]}</td>      
        </tr>
        `;
      }

      console.log(d);
      $("#contant").css("background-color", "#e5eff1").html(`
  <button type="button" onclick="add_input('${type}')" class="btn btn-primary btn-lg btn-block">اضافه</button>
  <br />
  <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">الاجرءات</th>
    <th scope="col">النوع</th>
      <th scope="col">العنوان</th>
      
    </tr>
  </thead>
  ${t}
  <tbody>
    
  </tbody>
</table>`);
    }
  });
}

function input_edit(type, id) {
  var dataReq = {
    reqs: "get_input",
    data: {
      type: type,
      who: `${id}`
    }
  };
  $.ajax({
    url: "./ajax/ajaxReqs.php",
    data: dataReq,
    type: "post",
    success: d => {
      var d = JSON.parse(d);
      var inputType = d[0];
      var inputTitle = d[1];
      var inputExtraData = d[2];
      var InputExtraDataHTML = '';
      for (vi in inputExtraData) {
        InputExtraDataHTML += `
      <div class="row p-0 m-0">
      <input name="a[]" value='${inputExtraData[vi]}' required="" placeholder="ضع اجابة" class="name mb-1 form-control col-10">
      <button onclick="$(this).parent().remove()" class="btn btn-link text-danger col-2"><i class="material-icons">
        remove_circle_outline
        </i></button></div>
        </div>
        
        `
       }
      var inputId = d[3];
      $.confirm({
        title: "اضافه حقل",
        content:
          "" +
          '<form action="" name="formName_add_vote" style="min-height:140px"> ' +
          '<div class="form-group">' +
          '<input type="text" value="' +  inputTitle +  '" name="title" placeholder="ضع العنوان" class="name mb-1 form-control" required />' +
          `<div class='row p-0 m-0 d-block'>` +
          `<input type="hidden" name="inputId" value="${inputId}"> ` +
          `<input type="hidden" name="InputType" id="add_type" value="${inputType}"> ` +

          `
      <div class="d-block">
  <div class="dropdown mr-1 mb-1 w-100">
    <button type="button" class="btn w-100 btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      اختر نوع الحقل
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
      <a class="dropdown-item" onclick="$('#add_type').attr('value', 'text');$('#select_type_only').hide()" href="#">نص</a>
      <a class="dropdown-item" onclick="$('#add_type').attr('value', 'number');$('#select_type_only').hide()" href="#">رقم</a>
      <a class="dropdown-item" onclick="$('#add_type').attr('value', 'select');$('#select_type_only').show()" href="#">سؤال واختيارات</a>
    </div>
  </div></div>
  ` +
          `<div class='row p-0 m-0' style="display:${inputType == "select" ? 'block' : 'none'};" id="select_type_only">` +
          `
      <div id="GroupsInputs">
      ${InputExtraDataHTML}
      
      
      ` +
          '<button onclick="add_new_Input(this);return false;"placeholder="ضع السؤال" class="name btn btn-warning ">اضافت اجابة اخري<i class="material-icons">add_circle</i></button><script>$(\'.dropdown-toggle\').dropdown()</script>' +
          `</div>` +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "Submit",
            btnClass: "btn-blue",
            action: function() {
              var formData = new FormData(
                $("form[name='formName_add_vote']")[0]
              );
              formData.append("type", type);
              formData.append("reqs", "edit_input");
              $.ajax({
                url: "./ajax/ajaxReqs.php",
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: d => {
                  console.log(d);

                  show_inputs(type);
                }
              });
            }
          },
          cancel: function() {}
        }
      });
    }
  });
}
function add_input(type) {
  $.confirm({
    title: "اضافه حقل",
    content:
      "" +
      '<form action="" name="formName_add_vote" style="min-height:140px"> ' +
      '<div class="form-group">' +
      '<input type="text" name="title" placeholder="ضع العنوان" class="name mb-1 form-control" required />' +
      `<div class='row p-0 m-0 d-block'>` +
      `<input type="hidden" name="InputType" id="add_type" value="text"> ` +
      `
      <div class="d-block">
  <div class="dropdown mr-1 mb-1 w-100">
    <button type="button" class="btn w-100 btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      اختر نوع الحقل
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
      <a class="dropdown-item" onclick="$('#add_type').attr('value', 'text');$('#select_type_only').hide()" href="#">نص</a>
      <a class="dropdown-item" onclick="$('#add_type').attr('value', 'number');$('#select_type_only').hide()" href="#">رقم</a>
      <a class="dropdown-item" onclick="$('#add_type').attr('value', 'select');$('#select_type_only').show()" href="#">سؤال واختيارات</a>
    </div>
  </div></div>
  ` +
      `<div class='row p-0 m-0' style="display:none;" id="select_type_only">` +
      `
      <div id="GroupsInputs">
      
      
      <div class="row p-0 m-0">
    <input name="a[]" required="" placeholder="ضع اجابة" class="name mb-1 form-control col-10">
    <button onclick="$(this).parent().remove()" class="btn btn-link text-danger col-2"><i class="material-icons">
      remove_circle_outline
      </i></button></div>
      </div>
      ` +
      '<button onclick="add_new_Input(this);return false;"placeholder="ضع السؤال" class="name btn btn-warning ">اضافت اجابة اخري<i class="material-icons">add_circle</i></button><script>$(\'.dropdown-toggle\').dropdown()</script>' +
      `</div>` +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "Submit",
        btnClass: "btn-blue",
        action: function() {
          var formData = new FormData($("form[name='formName_add_vote']")[0]);
          formData.append("type", type);
          formData.append("reqs", "add_input");
          $.ajax({
            url: "./ajax/ajaxReqs.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);

              show_inputs(type);
            }
          });
        }
      },
      cancel: function() {}
    }
  });
}

function add_new_Input(el) {
  $("#GroupsInputs").append(
    `<div class='row p-0 m-0'>
    <input name='a[]' required placeholder="ضع اجابة" class="name mb-1 form-control col-10" />
    <button onclick='$(this).parent().remove()' class='btn btn-link text-danger col-2'><i class="material-icons">
      remove_circle_outline
      </i></button></div>
`
  );
  return false;
}
function input_remove(type, id) {
  var dataReq = {
    reqs: "remove_input",
    data: {
      type: type,
      id: id
    }
  };

  $.confirm({
    title: "تحذير",
    content: "هل انت متاكد من حذف هذا المحتوى!",
    buttons: {
      مسح: function() {
        $.ajax({
          url: "./ajax/ajaxReqs.php",
          type: "post",
          data: dataReq,
          success: d => {
            console.log("TCL: functioninput_remove -> d", d);
            $.alert("تم المسح");
            show_inputs(type);
          }
        });
      },
      الغاء: function() {}
    }
  });
}
function system_(el) {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/shortcutinfo.php",
    data: {},
    type: "post",
    success: d => {
      var date = JSON.parse(d);
      data_links = JSON.parse(date[6]);
      console.log(data_links);

      window.subs = JSON.parse(date[8]);

      data_html_links_ = `<table class="table">
  <thead>
    <tr>
    <th scope="col">الإجراءات</th>
    <th scope="col">الحالة</th>
    <th scope="col">الرابط</th>
    <th scope="col">الصورة</th>


    </tr>
  </thead>
  <tbody>
   `;

      for (html in data_links) {
        img = data_links[html][0];
        link = data_links[html][1];
        id = data_links[html][3];
        state = data_links[html][2];
        state =
          data_links[html][2] == "true"
            ? `<span class="text-success">فعال</span>`
            : `<span class="text-danger">غير فعال</span>`;
        data_html_links_ =
          data_html_links_ +
          `
          <tr>
      <th>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-sm btn-link text-danger"  onclick='remove_link__("${id}")'>
        <i class="material-icons">
delete_forever
</i></button>
        <button type="button" class="btn btn-sm btn-link   text-info" onclick='edit_link__("${id}", "${link}")'><i class="material-icons">
edit
</i></button>
      </div>
      </th>
      <td>${state}</td>
      <td>${link}</td>
      <td><img width=50 height=50 src='${img}'></td>
    </tr>

      `;
      }

      data_html_links_ =
        data_html_links_ +
        `
      </tbody> </table><th scope='row'>
      <button class='btn btn-lg btn-block btn-info' onclick="add_new_link()"> اضافه رابط جديد</button>
      </th>`;

      $("#contant")
        .css({
          padding: "30px",
          textAlign: "right",
          "background-color": "#fff"
        })
        .html(
          `
                <div class="col text-right" style="margin:20px;color:#20c997"><h3>معلومات عن الموقع</h3></div>


                <div class="col b-card box-hover" style="width: 18rem;">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons" style="font-size: 42px;color: #20c997;">accessibility</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">  زار ${date[0]} شخض الموقع</h6>
                        
                        <p class="card-text"></p>
                    </div>
                    </div>
                    <div class="col b-card box-hover3" style="width: 18rem;">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">assignment_late</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">  ابلغ ${date[1]} شخص عن مشكلة</h6>
                        <a href="#" class="btn card-link" onclick="show_ask_massages()">عرض</a>
                        <p class="card-text"></p>
                    </div>
                    </div>
                <div class="col b-card box-hover1" style="width: 18rem;">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons" style="font-size: 42px;color: #17a2b8;">assignment</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">سجل في الموقع ${date[2]}
                         شخص </h6>
                        <a href="#" class="btn card-link" onclick="show_ask_user_signin()">عرض</a>
                        <p class="card-text"></p>
                    </div>
                    </div>
                    
                <div class="col b-card box-hover2" style="width: 18rem;">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons" style="font-size: 42px;color: #17a2b8;">group_add</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">اشترك في الموقع ${subs.length}
                         شخص </h6>
                        <a href="#" class="btn card-link" onclick="show_subs()">عرض</a>
                        <p class="card-text"></p>
                    </div>
                    </div>
                    
                   <a data-toggle="collapse"onclick='collapse_controlling(this)' collapse_='collapse_controlling' href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample"> <div class="col text-right" style="margin:20px;color:#20c997"><h3>اختصارات </h3></div></a>

                    <div class="collapse" id="collapseExample1">

 <div class='col-12 text-right'>
 <div class='row'>
 <div class="col b-card" onclick="change_logo('1')" style="width: 12rem;cursor:pointer  ">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-primary" style="font-size: 42px;">add_circle</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted"> تغيير  الشعار الاساسي</h6>
                        
                        <p class="card-text"></p>
                    </div>

                    </div>
                    <div class="col b-card" onclick="change_logo('2')" style="width: 12rem;cursor:pointer  ">

                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-primary" style="font-size: 42px;">add_circle</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">  تغيير  الشعار الثاني</h6>
                        
                        <p class="card-text"></p>
                    </div>
                    </div>

                    </div>

                    </div></div>
                    
                    
                    </div>

                    
                    <a data-toggle="collapse"onclick='collapse_controlling(this)'  collapse_='collapse_controlling' href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample"> 
                    <div class="col text-right" style="margin:20px;color:#20c997"><h3>تغيير  الشعار المصغر </h3></div>
                    </a>
                    <div class="collapse" id="collapseExample2">

                    <div class="alert alert-danger" role="alert">
<p>  يجب ان يكون الشعار المصغر في حجم مناسب للمكان
</p>
<p>                    16× 16, 32× 32, 48× 48, or 64× 64 pixels\n</p>
<p>  يجب ان تكون نوع الصورة [png]
</p>
<p>  لينكات مفيده لوضع صورة مناسبة
</p>

<p>
https://realfavicongenerator.net/

</p>
<p>
https://www.favicon.cc/
</p>
</div>
                   
 <div class="col b-card" onclick="change_logo_small()" style="width: 12rem;cursor:pointer  ">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-primary" style="font-size: 42px;">add_circle</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">تغير الشعار المصغر</h6>
                        
                        <p class="card-text"></p>
                    </div>
                    </div>
                    </div>
                                        <a data-toggle="collapse"onclick='collapse_controlling(this)' collapse_='collapse_controlling' href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample"> 

                    <div class="col text-right" style="margin:20px;color:#20c997"><h3>معلومات الموقع</h3></div>
                    </div></div></a>
                    <div class="collapse" id="collapseExample3">

                    <form class='info_web_form_change float-right text-right w-100 border rounded border-info p-2 m-1' >
                        <label class='text-warning'>عنوان الموقع</label>
                    <input name='title' value='${date[3]}' class="form-control text-right">
                        <div class="dropdown-divider"></div>

                     <label class='text-warning'>الكلمات المفتاحية</label>
                    <input name='keywords'   value='${date[4]}' class="form-control text-right">
     <div class="dropdown-divider"></div>

                     <label class='text-warning'>تعريف الموقع</label>
                     <div class="alert alert-warning text-right" role="alert">
                      تعريف الموقع سوف يظهر في مواقع البحث مثل جوجل
                    </div>
                    <input name='description' value='${date[5]}'  class="form-control text-right">
                         <div class="dropdown-divider"></div>

                     <label class='text-warning'>تعريف الموقع</label>
                     <div class="alert alert-warning text-right" role="alert">
شروط الموقع الخاصة بالمتطوع التي يتم الموافقه عليها لــ النشر و التسجيل و الخ                    </div>
                    <textarea name='bigtapinfoUser'  class="form-control text-right">${date[9][0]}</textarea>
                    <div class="dropdown-divider"></div>

                    <div class="alert alert-warning text-right" role="alert">
                    شروط الموقع الخاصة بالمدرب التي يتم الموافقه عليها لــ النشر و التسجيل و الخ                    </div>
                                        <textarea name='bigtapinfoTrainer'  class="form-control text-right">${date[9][1]}</textarea>
                                        <div class="dropdown-divider"></div>

                                        <div class="alert alert-warning text-right" role="alert">
                                        شروط الموقع الخاصة بالفريق التي يتم الموافقه عليها لــ النشر و التسجيل و الخ                    </div>
                                                            <textarea name='bigtapinfoTeam'  class="form-control text-right">${date[9][2]}</textarea>
                                                            <div class="dropdown-divider"></div>

                                                            <div class="alert alert-warning text-right" role="alert">
                                                            شروط الموقع الخاصة بالجهة المستفيدة التي يتم الموافقه عليها لــ النشر و التسجيل و الخ                    </div>
                                                                                <textarea name='bigtapinfoEstiblshment'  class="form-control text-right">${date[9][3]}</textarea>
     <div class="dropdown-divider"></div>

     
                    <button class='btn btn-info btn-lg btn-block' onclick="update_info_main();return false;">تحديث</button>
                    </form></div>
                                        <a data-toggle="collapse"onclick='collapse_controlling(this)'  collapse_='collapse_controlling'href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample"> 

                    <div class=" text-right mt-3" style="color:#20c997"><h3>روابط الموقع</h3></div>
</a>
                                        <div class="collapse" id="collapseExample4">

                    ${data_html_links_}</div>


                                        <a data-toggle="collapse"onclick='collapse_controlling(this)' collapse_='collapse_controlling' href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample"> 

                    <div class=" text-right mt-3" style="color:#20c997"><h3>عن الموقع</h3></div></a>
                    
                    <div class="collapse" id="collapseExample5">

                    <div class="border p-1 border-info" >
                    <textarea class='form-control text-right w-100'>${date[7]}</textarea>
                    <button class='btn btn-info btn-lg btn-block mt-1' onclick="save_bout_small_web($(this).prev().val());return false;">تحديث</button>

                    </div>
                    </div>




                    
                                        <a data-toggle="collapse" onclick='collapse_controlling(this)' collapse_='collapse_controlling' href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample"> 

                    <div class=" text-right mt-3" style="color:#20c997"><h3>ميثاق العمل التطوعي</h3></div></a>
                    
                    <div class="collapse" id="collapseExample6">

                    <div class="border-0" style='min-height:300px'>
                    <textarea id='info_c_editorrr' class='form-control text-right w-100 h-100'>${date[10]}</textarea>
                    <button class='btn btn-info btn-lg btn-block m-2' onclick="save_bout_small_web2();return false;">تحديث</button>

                    </div>
                    </div>






                    
                                        <a data-toggle="collapse"onclick='collapse_controlling(this)' collapse_='collapse_controlling' href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample"> 

                    <div class=" text-right mt-3" style="color:#20c997"><h3>حقوق وواجبات المتطوعين</h3></div></a>
                    
                    <div class="collapse" id="collapseExample7">

                    <div class="border-0" style='min-height:300px'>
                    <textarea id='info_c_editorrr2' class='form-control text-right w-100 h-100'>${date[11]}</textarea>
                    <button class='btn btn-info btn-lg btn-block m-2' onclick="save_bout_small_web3();return false;">تحديث</button>

                    </div>
                    </div>

                    

                    </div>
                `
        );
      tinymce.remove("#info_c_editorrr");
      tinymce.init({
        selector: "#info_c_editorrr",
        height: 500,
        theme: "modern",
        plugins:
          "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
        toolbar1:
          "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        image_advtab: true,

        content_css: [
          "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
          "//www.tinymce.com/css/codepen.min.css"
        ]
      });

      Remove_n();
      tinymce.remove("#info_c_editorrr2");
      tinymce.init({
        selector: "#info_c_editorrr2",
        height: 500,
        theme: "modern",
        plugins:
          "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
        toolbar1:
          "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        image_advtab: true,

        content_css: [
          "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
          "//www.tinymce.com/css/codepen.min.css"
        ]
      });

      Remove_n();
    }
  });
}

function show_subs() {
  subs_html = "";
  subs_html_mob = "";
  for (i in subs) {
    if (subs[i].includes("@") == true) {
      subs_html =
        subs_html +
        `
      
      <tr>
      <td>${subs[i]}</td>
      </tr>
      `;
    } else {
      subs_html_mob =
        subs_html_mob +
        `
      
      <tr>
      <td>${subs[i]}</td>
      </tr>
      `;
    }
  }

  $("#contant").css("background-color", "#e5eff1").html(`


  <div class='col-12 text-right'>

  <button class='btn btn-link text-danger' onclick='system_(null)'>
  <i class="material-icons">
arrow_forward
</i>
  </button>
  </div>

<div class='row'>


<div class='col'>
<table class="table">
<thead>
  <tr>
  <th scope="col"> رقم الهاتف</th>
  </tr>
</thead>
<tbody>
 ${subs_html_mob}
 
</tbody>
</table>
</div>
   
  <div class='col'>
  <table class="table">
  <thead>
    <tr>
    <th scope="col">البريد الاكتروني </th>
    </tr>
  </thead>
  <tbody>
   ${subs_html}
   
  </tbody>
</table>
</div>


</div>
   `);
}

function save_bout_small_web(value) {
  // console.log(new_code);

  $.ajax({
    url: "./ajax/save_bout_small_web.php",
    type: "post",
    data: {
      val: value
    },
    success: d => {
      console.log(d);
      $.alert("تم");
    }
  });
}

function save_bout_small_web2() {
  var iframe = document.getElementById("info_c_editorrr_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;

  new_code = innerDoc.querySelector("#tinymce").innerHTML;
  // var formData = new FormData($("form[id='form_new_info']")[0]);
  // formData.append("info", new_code);
  console.log(new_code);

  $.ajax({
    url: "./ajax/save_bout_small_web2.php",
    type: "post",
    data: {
      val: new_code
    },
    success: d => {
      console.log(d);
      $.alert("تم");
    }
  });
}

function save_bout_small_web3(value) {
  var iframe = document.getElementById("info_c_editorrr2_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;

  new_code = innerDoc.querySelector("#tinymce").innerHTML;
  $.ajax({
    url: "./ajax/save_bout_small_web3.php",
    type: "post",
    data: {
      val: new_code
    },
    success: d => {
      console.log(d);
      $.alert("تم");
    }
  });
}

function add_new_link() {
  $.confirm({
    title: "",
    content:
      "" +
      '<form action="" class="uploading_links">' +
      '<div class="form-group text-right">' +
      "<label>الصورة</label>" +
      '<input type="file" placeholder="Your name" name="image" class=" form-control" required />' +
      '<label class="mt-2">الرابط</label>' +
      `<input type="text" placeholder="الرابط" name="link" class="name form-control" required />` +
      `<select class="form-control form-control-lg mt-2" name="visable" required>
          <option value='true'>فعال</option>
          <option value="false">غير فعال</option>
        </select>` +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "نشر",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("خطأ");
            return false;
          }

          var formData = new FormData($(".uploading_links")[0]);
          $.ajax({
            url: "./ajax/add_new_link.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);

              $.alert("تم");
              system_(null);
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });
}

function remove_link__(id) {
  $.confirm({
    title: "تحذير",
    content: "هل انت متاكد من حذف هذا المحتوى!",
    buttons: {
      مسح: function() {
        $.ajax({
          url: "./ajax/remove_link__.php",
          type: "post",

          data: {
            id: id
          },
          success: d => {
            console.log(d);

            $.alert("تم المسح");
            system_(null);
          }
        });
      },
      الغاء: function() {}
    }
  });
}

function edit_link__(id, link) {
  $.confirm({
    title: "",
    content:
      "" +
      '<form action="" class="uploading_links">' +
      '<div class="form-group text-right">' +
      "<label>الصورة</label>" +
      '<input type="file" placeholder="Your name" name="image" class=" form-control" />' +
      '<label class="mt-2">الرابط</label>' +
      `<input type="text" placeholder="الرابط" value="${link}" name="link" class="name form-control" required />` +
      `<select class="form-control form-control-lg mt-2" name="visable">
          <option value='true'>فعال</option>
          <option value="false">غير فعال</option>
        </select>` +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "تحديث",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("خطأ");
            return false;
          }

          var formData = new FormData($(".uploading_links")[0]);
          formData.append("id", id);
          $.ajax({
            url: "./ajax/uploading_links.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);

              $.alert("تم");
              system_(null);
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });
}

function update_info_main() {
  var formData = new FormData($(".info_web_form_change")[0]);
  $.ajax({
    url: "./ajax/change_info_web_form_change.php",
    type: "post",
    cache: false,
    contentType: false,
    processData: false,
    data: formData,
    success: d => {
      console.log(d);

      $.alert("تم");
    }
  });
}

function change_logo_small() {
  $.confirm({
    title: "",
    content:
      "" +
      '<form action="" class="form_small_logo">' +
      '<div class="form-group">' +
      "<label>اختر الصورة</label>" +
      '<input type="file" name="logo" placeholder="Your name" class="name form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "تغير",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("provide a valid name");
            return false;
          }
          var formData = new FormData($(".form_small_logo")[0]);
          $.ajax({
            url: "./ajax/change_small_logo.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              // console.log(d);

              $.alert("تم");
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });
}

function show_ask_massages() {
  $.ajax({
    url: "./ajax/asks_.php",
    type: "post",
    data: {},
    success: d => {
      arr = JSON.parse(d);
      arr = arr.reverse();
      els = `<li class="list-group-item text-right" style="background:#eeeeee6e;cursor:pointer" onclick="$(this).parent().parent().fadeOut()"><i class="material-icons">close</i></li>`;

      for (i in arr) {
        els =
          els +
          `
                         <li class="list-group-item">
                         <div style="display:inline-block" class="col-6">
                         ${arr[i][0]}
                         </div>
                         <div  style="display:inline-block" class="col-5 text-right">
                         
                         <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="قراءة" onclick="show_info_asks_problem('${arr[i][6]}')">
                         <i class="material-icons">open_in_new</i>
                         </button>
                                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="حذف" onclick="$(this).parent().parent().remove();delete_info_asks_problem('${arr[i][6]}')">
                                                  
                                                  <i class="material-icons">delete</i></button>

                         </div>
                         
                         </li>

                    `;
      }
      $("body").append(`
            

            <div class="costam-view" >
            <ul class="list-group">
            ${els}
            </ul>
            </div>
            <script>$('.costam-view').niceScroll()</script>
            `);
    }
  });
}

function show_ask_user_signin() {
  $.ajax({
    url: "./ajax/users_signin.php",
    type: "post",
    data: {},
    success: d => {
      arr = JSON.parse(d);
      arr = arr.reverse();
      els = `<li class="list-group-item text-right" style="background:#eeeeee6e;cursor:pointer" onclick="$(this).parent().parent().fadeOut()"><i class="material-icons">close</i></li>`;

      for (i in arr) {
        els =
          els +
          `
                         <li class="list-group-item">
                         <div style="display:inline-block" class="col-6">
                         ${arr[i][1]}
                         </div>
                         <div  style="display:inline-block" class="col-5 text-right">
                         
                         <button class = "btn btn-primary"
                         data-toggle = "tooltip"
                         data-placement = "top"
                         title = "قراءة"
                         onclick = "show_info_asks_problem2('${arr[i][0]}')">
                         <i class="material-icons">open_in_new</i>
                         </button>
                                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="حذف" onclick="$(this).parent().parent().remove();delete_signUP('${arr[i][0]}')">
                                                  
                                                  <i class="material-icons">delete</i></button>

                         </div>
                         
                         </li>

                    `;
      }
      $("body").append(`
            

            <div class="costam-view" >
            <ul class="list-group">
            ${els}
            </ul>
            </div>
            <script>//$('.costam-view').niceScroll()</script>
            `);
    }
  });
}

function show_info_asks_problem(id) {
  $.ajax({
    url: "./ajax/akss_contant.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      $arr = JSON.parse(d);

      $("body").append(`
            <div class="view2 rounded border border-danger">
            
                <div class="col-1" onclick="$(this).parent().fadeOut()" style="cursor:pointer;display: inline-block;">
                <i class="material-icons">close</i>
                </div>
                
                
                <div class="col-12 text-right"><h5> البريد</h5></div>

                <div class="dropdown-divider mt-2"></div>
                <div class="col-12 text-right text-muted mr-5"><h5>${$arr[0]} </h5></div>

                <div class="col-12 text-right"><h5> اسم المرسل</h5></div>

                <div class="dropdown-divider mt-2"></div>
                <div class="col-12 text-right text-muted"><h5>${$arr[1]} </h5></div>

                <div class="col-12 text-right"><h5> نوع الموضوع</h5></div>

                <div class="dropdown-divider mt-2"></div>
                <div class="col-12 text-right text-muted"><h5> ${$arr[3]}  </h5></div>

                <div class="col-12 text-right"><h5> التاريخ</h5></div>

                <div class="dropdown-divider mt-2"></div>
                <div class="col-12 text-right text-muted"><h5>${$arr[5]}  </h5></div>

                <div class="col-12 text-right"><h5> العنوان</h5></div>

                <div class="dropdown-divider mt-2" ></div>
                <div class="col-12 text-right text-muted"><h5>${$arr[4]} </h5></div>


                <div class="col-12 text-right"><h5> الموضوع</h5></div>
                    <div class="dropdown-divider mt-2"></div>

                <div class="col-12 text-right text-muted border border-warning "><h5>${$arr[2]} </h5></div>



            </div>
            
            `);
    }
  });
}

function show_info_asks_problem2(id) {
  $.ajax({
    url: "./ajax/singup_contant.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      arr = JSON.parse(d);

      $("body").append(`
            <div class="view2">
            <li class="list-group-item text-right" style="background:#eeeeee6e;cursor:pointer" onclick="$(this).parent().fadeOut()"><i class="material-icons">close</i></li>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">البريد الاكتروني</th>
      <th scope="col">الرقم القومي</th> 
      <th scope="col">الاسم</th>
      <th>تاريخ الميلاد</th>
      <th>العنوان</th>
      <th>نوع الجنس</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">${arr[0]}</th>
      <td>${arr[1]}</td>
      <td>${arr[2]}</td>
      <td>${arr[3]}</td>
      <th >${arr[4]}</>
      <td>${arr[5]}</td>
      <td>${arr[6]}</td>
    </tr>
  </tbody>
</table>
            </div>
            
            `);
    }
  });
}

function delete_info_asks_problem(id) {
  $.ajax({
    url: "./ajax/delete_info_asks_problem.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      console.log(d);
    }
  });
}

function delete_signUP(id) {
  $.ajax({
    url: "./ajax/delete_signUP.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      console.log(d);
    }
  });
}

function show_info_singup(id) {
  $.ajax({
    url: "./ajax/show_info_singup.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      console.log(d);
    }
  });
}

function add_momber(type) {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>إضافة جديدة </label>" +
      '<input style="margin-bottom:5px;" type="text" name="name" placeholder="الاسم" class="name form-control" required />' +
      '<input type="text" style="margin-bottom:5px;"  name="work" placeholder="المهنة" class="work form-control" required />' +
      '<input type="text" style="margin-bottom:5px;"  name="ph" placeholder="الهاتف" class="work form-control" required />' +
      '<input type="text" style="margin-bottom:5px;"  name="tw" placeholder="توتير" class="work form-control" required />' +
      `<input type="hidden" name="type" value="${type}" style="margin-bottom:5px;"  class="image form-control" required />` +
      '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("اسم خطأ");
            return false;
          }
          var work = this.$content.find(".work").val();
          if (!work) {
            $.alert("مهنة خطأ");
            return false;
          }
          var image = this.$content.find(".image").val();
          if (!image) {
            $.alert("صورة خطأ");
            return false;
          }
          var formData = new FormData($("form[name='uploader_momber']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/member_upload.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function add_momber_v() {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>عضو جديد</label>" +
      '<input style="margin-bottom:5px;" type="text" name="name" placeholder="الاسم" class="name form-control" required />' +
      '<input type="text" style="margin-bottom:5px;"  name="work" placeholder="المهنة" class="work form-control" required />' +
      '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("اسم خطأ");
            return false;
          }
          var work = this.$content.find(".work").val();
          if (!work) {
            $.alert("مهنة خطأ");
            return false;
          }
          var image = this.$content.find(".image").val();
          if (!image) {
            $.alert("صورة خطأ");
            return false;
          }
          var formData = new FormData($("form[name='uploader_momber']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/member_upload_v.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function add_news() {
  $("#contant")
    .css("background-color", "#e5eff1")
    .html(
      '<form name="uploader_news" method="post" enctype="multipart/form-data" class="formName">' +
        '<div class="form-group text-center" >' +
        "<h3 class='m-3'>خبر جديد</h3>" +
        '<input style="margin-bottom:5px;" type="text" name="title" placeholder="العنوان" class="title placeholder form-control m-3" required />' +
        '<textarea type="text" style="margin-bottom:5px; height:200px;"  name="text" placeholder="المحتوي" class="text  placeholder form-control m-3" required /></textarea>' +
        '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control m-3" required />' +
        '<input class="btn btn-lg btn-block m-3" onclick="add_news__();return false;" type="submit" value="نشر">' +
        "</div>" +
        "</form>"
    );
}

function add_news__() {
  var formData = new FormData($("form[name='uploader_news']")[0]);
  console.log("work!");

  $.ajax({
    url: "./ajax/news_upload.php",
    type: "POST",
    data: formData,
    success: function(msg) {
      console.log(msg);

      $.alert("تم!");
      system_3();
    },
    cache: false,
    contentType: false,
    processData: false
  });
  return false;
}

function add_event() {
  $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>

  <form id='form_new_info'>


    <input style="margin-bottom:8px;" type="text" name="title" placeholder="العنوان" class="title placeholder form-control" required /> 
    <input style="margin-bottom:8px;" type="text" name="text" placeholder="تعريف للخبر" class="title placeholder form-control" required /> 
           <h5 class='text-right'> المحتوي</h5>
    
    <textarea class='form-control'id='info_c_editor5' name='info' style='height:500px;' required></textarea>
    <input type="file" name="image" style="margin-top:8px;"  class="image form-control" required />
 <select class="form-control form-control-lg m-2 " name="state" required>
          <option value='true'>فعال</option>
          <option value="false">غير فعال</option>
        </select>
    <input class='mt-3 btn btn-lg btn-block btn-success' onclick='add_new_event();return false;' type='submit' value='نشر' > 
    
  </form>
  </div>
`);

  // tinymce.init({
  //   selector: '#info_c_editor4',

  // });
  tinymce.remove("#info_c_editor5");

  tinymce.init({
    selector: "#info_c_editor5",
    height: 500,
    theme: "modern",
    plugins:
      "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
    toolbar1:
      "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
    image_advtab: true,

    content_css: [
      "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
      "//www.tinymce.com/css/codepen.min.css"
    ]
  });
  Remove_n();
}

function add_new_event() {
  var iframe = document.getElementById("info_c_editor5_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;

  new_code = innerDoc.querySelector("#tinymce").innerHTML;
  var formData = new FormData($("form[id='form_new_info']")[0]);
  formData.append("info", new_code);

  $.ajax({
    url: "./ajax/uploader_event.php",
    type: "POST",
    data: formData,
    success: function(msg) {
      console.log(msg);
      system_4(null);
      $.alert("تم!");
    },
    cache: false,
    contentType: false,
    processData: false
  });
}

function add_statistics() {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_event" action="ajax/uploader_news.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>احصئيات جديده</label>" +
      '<input style="margin-bottom:5px;" type="text" name="title" placeholder="العنوان" class="title form-control placeholder" required />' +
      '<input type="text" style="margin-bottom:5px;"  name="text" placeholder="عدد" class="text form-control placeholder" required />' +
      '<input style="margin-bottom:5px;"  name="ico" placeholder="صورة مصغرة" class="ico form-control placeholder" required />' +
      '<a href="https://material.io/tools/icons/?icon=delete&style=baseline" target="_blank">رأيت الصورة المصغرة</a>' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var title = this.$content.find(".title").val();
          if (!title) {
            $.alert("العنوان خطأ");
            return false;
          }
          var text = this.$content.find(".text").val();
          if (!text) {
            $.alert("تعريف خطأ");
            return false;
          }
          var ico = this.$content.find(".ico").val();
          if (!ico) {
            $.alert("صورة مصغرة خطأ");
            return false;
          }

          var formData = new FormData($("form[name='uploader_event']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/uploader_statistics.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function add_member2() {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>عضو جديد</label>" +
      '<input style="margin-bottom:5px;" type="text" name="name" placeholder="الاسم" class="name form-control" required />' +
      '<input type="text" style="margin-bottom:5px;"  name="work" placeholder="المهنة" class="work form-control" required />' +
      '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("اسم خطأ");
            return false;
          }
          var work = this.$content.find(".work").val();
          if (!work) {
            $.alert("مهنة خطأ");
            return false;
          }
          var image = this.$content.find(".image").val();
          if (!image) {
            $.alert("صورة خطأ");
            return false;
          }
          var formData = new FormData($("form[name='uploader_momber']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/member_upload2.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function add_supporters() {
  $.ajax({
    url: "./ajax/show_tags_sups.php",
    type: "post",
    data: {},
    success: data => {
      arr = data.replace(/\s+/g, " ").trim();

      data = JSON.parse(arr);
      tags_html = `<select name="tag" required="required" class="form-control" style="display: inline-block;">
          
           `;
      for (i in data) {
        tags_html = tags_html + `<option>${data[i]}</option>`;
      }

      tags_html = tags_html + "</select>";

      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>داعم جديد</label>" +
          '<input style="margin-bottom:5px;" type="text" name="name" placeholder="اسم الشركة" class="name form-control" required />' +
          '<input type="text" style="margin-bottom:5px;"  name="info" placeholder="معلومات عن الشركة " class="info form-control" required />' +
          `${tags_html}` +
          '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "اضافه",
            btnClass: "btn-blue",
            action: function() {
              var name = this.$content.find(".name").val();
              if (!name) {
                $.alert("اسم خطأ");
                return false;
              }
              var work = this.$content.find(".info").val();
              if (!work) {
                $.alert("معلومات خطأ");
                return false;
              }
              var image = this.$content.find(".image").val();
              if (!image) {
                $.alert("صورة خطأ");
                return false;
              }
              var formData = new FormData($("form[name='uploader_momber']")[0]);
              console.log("work!");

              $.ajax({
                url: "./ajax/support_upload.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        },
        onContentReady: function() {
          // bind to events
          var jc = this;
          this.$content.find("form").on("submit", function(e) {
            // if the user submits the form by pressing enter in the field.
            e.preventDefault();
            jc.$$formSubmit.trigger("click"); // reference the button and click it
          });
        }
      });
    }
  });
}

function active(el) {
  $(el)
    .parent()
    .children()
    .each(e => {
      $(
        $(el)
          .parent()
          .children()[e]
      ).removeClass("active");
    });
  $(el).addClass("active");
}

function system_2() {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/statistics.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      console.log(arr);

      els = "";
      for (i in arr) {
        els =
          els +
          `
                <div style="display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >
      <div class=\"col text-center\"style=\"font-size:1.5rem\">${arr[i]["2"]}</div>

  <i class=\"material-icons\" style=\"font-size:7rem\">
${arr[i]["1"]}
</i>
 </div>
  <div class=\"col text-center\"style=\"font-size:2rem\">
   
  ${arr[i]["3"]}
 </div>
 </div><div class="card-body">
    <a onclick="edite__statistics(this,'${arr[i][0]}')" href="#" class="card-link">
    <i class="material-icons">
create
</i>
    </a>
    <a href="#" onclick="delete__statistics(this,'${arr[i][0]}')" class="card-link"><i class="material-icons text-danger">
delete
</i></a>
  </div>
 </div>

    `;
      }
      els =
        els +
        `
            
                <div onclick="add_statistics()" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function delete__statistics(el, id) {
  $.ajax({
    url: "./ajax/delete__statistics.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      $(el)
        .parent()
        .parent()
        .fadeOut();
    }
  });
}

function edite__statistics(el, id) {
  $.ajax({
    url: "./ajax/edite__statistics_info.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      arr = JSON.parse(d);

      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_event" action="ajax/uploader_news.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>تعديل</label>" +
          `<input type="hidden" name="id" value="${arr[0]}">` +
          `<input style="margin-bottom:5px;" value="${arr[2]}" type="text" name="title" placeholder="العنوان" class="title form-control placeholder" required />` +
          `<input type="text" style="margin-bottom:5px;"  value="${arr[3]}" name="text" placeholder="عدد" class="text form-control placeholder" required />` +
          `<input style="margin-bottom:5px;"  name="ico" value="${arr[1]}" placeholder="صورة مصغرة" class="ico form-control placeholder" required />` +
          '<a href="https://material.io/tools/icons/?icon=delete&style=baseline" target="_blank">رأيت الصورة المصغرة</a>' +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "تعديل",
            btnClass: "btn-blue",
            action: function() {
              var title = this.$content.find(".title").val();
              if (!title) {
                $.alert("العنوان خطأ");
                return false;
              }
              var text = this.$content.find(".text").val();
              if (!text) {
                $.alert("تعريف خطأ");
                return false;
              }
              var ico = this.$content.find(".ico").val();
              if (!ico) {
                $.alert("صورة مصغرة خطأ");
                return false;
              }

              var formData = new FormData($("form[name='uploader_event']")[0]);
              console.log("work!");

              $.ajax({
                url: "./ajax/uploader_statistics_edite.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        },
        onContentReady: function() {
          // bind to events
          var jc = this;
          this.$content.find("form").on("submit", function(e) {
            // if the user submits the form by pressing enter in the field.
            e.preventDefault();
            jc.$$formSubmit.trigger("click"); // reference the button and click it
          });
        }
      });
    }
  });
}

function system_3(el) {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/topnews.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      els = "";

      for (i in arr) {
        els =
          els +
          `
                <div class="card" style="display:inline-block;width: 18rem;">
                  <img class="card-img-top" src="${arr[i][0]}" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title">${arr[i][1]}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${arr[i][2]}</h6>
    <a onclick="edite__topnews(this,'${arr[i][3]}')" href="#" class="card-link">
    <i class="material-icons">
create
</i>
    </a>
    <a href="#" onclick="delete__topnews(this,'${arr[i][3]}')" class="card-link"><i class="material-icons text-danger">
delete
</i></a>
                    </div>
                    </div>
                    `;
      }
      els =
        els +
        `
            
                <div onclick="add_news()" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function delete__topnews(el, id) {
  $.ajax({
    url: "./ajax/delete__topnews.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      $(el)
        .parent()
        .parent()
        .fadeOut();
    }
  });
}

function edite__topnews(el, id) {
  $.ajax({
    url: "./ajax/edite__topnews_info.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      arr = JSON.parse(d);

      $("#contant")
        .css("background-color", "#e5eff1")
        .html(
          '<form name="uploader_news" method="post" enctype="multipart/form-data" class="formName">' +
            '<div class="form-group text-center" >' +
            "<h3 class='m-3'>تعديل الخبر</h3>" +
            `<input type="hidden" name="id" value="${arr[3]}">` +
            `<input value='${arr[1]}' style="margin-bottom:5px;" type="text" name="title" placeholder="العنوان" class="title  placeholder form-control m-3" required />` +
            `<textarea type="text" style="margin-bottom:5px; height:200px;"  name="text" placeholder="المحتوي" class="text  placeholder form-control m-3" required >${arr[2]}</textarea>` +
            '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control m-3" required />' +
            '<input class="btn btn-lg btn-block m-3" onclick="edit__topnew__();return false;" type="submit" value="نشر">' +
            "</div>" +
            "</form>"
        );
    }
  });
}

function edit__topnew__() {
  var formData = new FormData($("form[name='uploader_news']")[0]);
  console.log("work!");

  $.ajax({
    url: "./ajax/edite__topnews.php",
    type: "POST",
    data: formData,
    success: function(msg) {
      console.log(msg);
      $.alert("تم!");
      system_3();
    },
    cache: false,
    contentType: false,
    processData: false
  });
}

function system_4() {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/topnews2.php",
    type: "post",
    data: {},
    success: d => {
      arr = JSON.parse(d);
      els = "";

      for (i in arr) {
        els =
          els +
          `
                <div class="card" style="display:inline-block;width: 18rem;">
                  <img class="card-img-top" src="${arr[i][0]}" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title">${arr[i][2]}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${arr[i][3]}</h6>
    <a onclick="edite__topnews2(this,'${arr[i][1]}')" href="#" class="card-link">
    <i class="material-icons">
create
</i>
    </a>
    <a href="#" onclick="delete__topnews2(this,'${arr[i][1]}')" class="card-link"><i class="material-icons text-danger">
delete
</i></a>
                    </div>
                    </div>
                    `;
      }
      els =
        els +
        `
            
                <div onclick="add_event()" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function delete__topnews2(el, id) {
  $.ajax({
    url: "./ajax/delete__topnews2.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      $(el)
        .parent()
        .parent()
        .fadeOut();
    }
  });
}

function edite__topnews2(el, id) {
  $.ajax({
    url: "./ajax/edite__statistics_topnews2.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      console.log(arr);
      $("#contant")
        .css("background-color", "#e5eff1")
        .html(
          `
      <div class='col-12 text-center'>

  <form id='form_edit_info'>
         <input name="id" type="hidden" value="${arr[1]}"><br>


    <input style="margin-bottom:8px;" type="text" value="${arr[2]}" name="title" placeholder="العنوان" class="title placeholder form-control" required /> 
    <input style="margin-bottom:8px;" type="text" value="${arr[3]}"name="text" placeholder="تعريف للخبر" class="title placeholder form-control" required /> 
           <h5 class='text-right'> المحتوي</h5>
    <textarea class='form-control'id='info_c_editor6' name='info' style='height:500px;' required>
    ${arr[4]}
    </textarea>
    <input type="file" name="image" style="margin-top:8px;"  class="image form-control" required />
 <select class="form-control form-control-lg m-2 " name="state" required>
          <option value='true'>فعال</option>
          <option value="false">غير فعال</option>
        </select>
    <input class='mt-3 btn btn-lg btn-block btn-success' onclick='uploading_event();return false;' type='submit' value='تعديل' > 
    
  </form>
  </div>
  `
        );
      tinymce.remove("#info_c_editor6");
      tinymce.init({
        selector: "#info_c_editor6",
        height: 500,
        theme: "modern",
        plugins:
          "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
        toolbar1:
          "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        image_advtab: true,

        content_css: [
          "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
          "//www.tinymce.com/css/codepen.min.css"
        ]
      });

      Remove_n();
    }
  });
}

function uploading_event() {
  var formData = new FormData($("form[name='uploader_event']")[0]);
  var iframe = document.getElementById("info_c_editor6_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;

  new_code = innerDoc.querySelector("#tinymce").innerHTML;
  var formData = new FormData($("form[id='form_edit_info']")[0]);
  formData.append("info", new_code);
  console.log("work!");

  $.ajax({
    url: "./ajax/edite_event_.php",
    type: "POST",
    data: formData,
    success: function(msg) {
      console.log(msg);
      system_4(null);
      $.alert("تم!");
    },
    cache: false,
    contentType: false,
    processData: false
  });
}

function system_5(el) {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/members.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      els = "";

      for (i in arr) {
        id = arr[i][0];
        name = arr[i][1];
        work = arr[i][2];
        img = arr[i][3];

        els =
          els +
          `
          <div class="card" style="width: 18rem;display:inline-block">
            <img class="card-img-top" height=200 src="${img}" alt="Card image cap">

  <div class="card-body" >
    <h5 class="card-title">${name}</h5>
    <p class="card-text">${work}</p>
    <a onclick="edite__members__(this,'${id}', 'members')" href="#" class="card-link">
    <i class="material-icons">
create
</i>
    </a>
    <a href="#" onclick="delete__members(this,'${id}')" class="card-link"><i class="material-icons text-danger">
delete
</i></a>
  </div>
</div>
          
          
          
          
          `;
      }
      els =
        els +
        `
            
                <div onclick="add_momber('members')" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function delete__members(el, id) {
  $(el)
    .parent()
    .parent()
    .fadeOut();

  $.ajax({
    url: "./ajax/delete_members.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      console.log(d);
    }
  });
}

function edite__members__(el, id, type) {
  $.ajax({
    url: "./ajax/member__info_for_editor.php",
    data: {
      id: id,
      type: type
    },
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>تعديل</label>" +
          "<label>تعديل الغلاف</label>" +
          "<input type='file'class=\" form-control\" name='img'>" +
          `<input style="margin-bottom:5px;" value="${arr[1]}" type="text" name="name" placeholder="الاسم" class="name form-control" required />` +
          `<input type="text" style="margin-bottom:5px;"  value="${arr[2]}" name="work" placeholder="المهنة" class="work form-control" required />` +
          `<input type="text" style="margin-bottom:5px;"  value="${arr[4]}" name="ph" placeholder="الهاتف" class="work form-control" required />` +
          `<input type="text" style="margin-bottom:5px;"  value="${arr[5]}" name="tw" placeholder="تويتر" class="work form-control" required />` +
          `<input type="hidden" name="id" value='${id}'>` +
          `<input type="hidden" name="type" value='${type}'>` +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "تحديث",
            btnClass: "btn-blue",
            action: function() {
              var name = this.$content.find(".name").val();
              if (!name) {
                $.alert("اسم خطأ");
                return false;
              }
              var work = this.$content.find(".work").val();
              if (!work) {
                $.alert("مهنة خطأ");
                return false;
              }
              var formData = new FormData($("form[name='uploader_momber']")[0]);
              console.log("work!");

              $.ajax({
                url: "./ajax/member__info__editor.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        },
        onContentReady: function() {
          // bind to events
          var jc = this;
          this.$content.find("form").on("submit", function(e) {
            // if the user submits the form by pressing enter in the field.
            e.preventDefault();
            jc.$$formSubmit.trigger("click"); // reference the button and click it
          });
        }
      });
    }
  });
}

function system_5_v(el) {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/members_v.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      els = "";

      for (i in arr) {
        id = arr[i][0];
        name = arr[i][1];
        work = arr[i][2];
        img = arr[i][3];

        els =
          els +
          `
          <div class="card" style="width: 18rem;display:inline-block">
            <img class="card-img-top" height=200 src="${img}" alt="Card image cap">

  <div class="card-body" >
    <h5 class="card-title">${name}</h5>
    <p class="card-text">${work}</p>
    <a onclick="edite__members__v(this,'${id}')" href="#" class="card-link">
    <i class="material-icons">
create
</i>
    </a>
    <a href="#" onclick="delete__members__v(this,'${id}')" class="card-link"><i class="material-icons text-danger">
delete
</i></a>
  </div>
</div>
          
          
          
          
          `;
      }
      els =
        els +
        `
            
                <div onclick="add_momber_v()" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function delete__members__v(el, id) {
  $(el)
    .parent()
    .parent()
    .fadeOut();

  $.ajax({
    url: "./ajax/delete_members_v.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      console.log(d);
    }
  });
}

function edite__members__v(el, id) {
  $.ajax({
    url: "./ajax/member__info_for_editor_v.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>تعديل</label>" +
          "<label>تعديل الغلاف</label>" +
          "<input type='file'class=\" form-control\" name='img'>" +
          `<input style="margin-bottom:5px;" value="${arr[1]}" type="text" name="name" placeholder="الاسم" class="name form-control" required />` +
          `<input type="text" style="margin-bottom:5px;"  value="${arr[2]}" name="work" placeholder="المهنة" class="work form-control" required />` +
          `<input type="hidden" name="id" value='${id}'>` +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "تحديث",
            btnClass: "btn-blue",
            action: function() {
              var name = this.$content.find(".name").val();
              if (!name) {
                $.alert("اسم خطأ");
                return false;
              }
              var work = this.$content.find(".work").val();
              if (!work) {
                $.alert("مهنة خطأ");
                return false;
              }
              var formData = new FormData($("form[name='uploader_momber']")[0]);
              console.log("work!");

              $.ajax({
                url: "./ajax/member__info__editor_v.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        },
        onContentReady: function() {
          // bind to events
          var jc = this;
          this.$content.find("form").on("submit", function(e) {
            // if the user submits the form by pressing enter in the field.
            e.preventDefault();
            jc.$$formSubmit.trigger("click"); // reference the button and click it
          });
        }
      });
    }
  });
}

function system_6(el) {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/supports.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      els = `
       <div class='col-12 text-center m-5'>
      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">note_add</i></h5>
                        <a href="#" class="btn card-link" onclick="add_supporters()()">اضافة داعم جديد</a>
                        <p class="card-text"></p>
                    </div>
                    </div>
                      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">view_week</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">الأقسام</h6>
                        <a href="#" class="btn card-link" onclick="show_tags_sup()">عرض</a>
                                                <a href="#" class="btn card-link" onclick="add_new_tag('sup')">اضافة</a>

                        <p class="card-text"></p>
                    </div>
                    </div>
                    </div>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">الإجراءات</th>
      <th scope="col">تعريق الشركة</th>
      <th scope="col">اسم الشركة</th>
      <th scope="col">الصورة</th>
    </tr>
  </thead>
  <tbody>
 
`;

      for (i in arr) {
        id = arr[i][0];
        name = arr[i][1];
        info = arr[i][2];
        img = arr[i][3];

        els =
          els +
          `

           <tr>
      <th>
       <a href="#" onclick="delete__members__(this,'${id}')" class="card-link"><i class="material-icons text-danger">delete
</i></a>

 <a href="#" onclick="edit__members____(this,'${id}')" class="card-link"><i class="material-icons text-pramiry">edit
</i></a>


      </th>
      <td>${info}</td>
      <td>${name}</td>
      <td> <img width=100 height=200 src="${img}" alt="Card image cap"></td>
    </tr>


           


          
          
          
          
          `;
      }
      els =
        els +
        `
          </tbody>
</table>
            
  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function edit__members____(el, id) {
  $.ajax({
    url: "./ajax/show_tags_sups.php",
    type: "post",
    data: {},
    success: data => {
      arr = data.replace(/\s+/g, " ").trim();

      data = JSON.parse(arr);
      tags_html = `<select name="tag" required="required" class="form-control mb-1" style="display: inline-block;">
          
           `;
      for (i in data) {
        tags_html = tags_html + `<option>${data[i]}</option>`;
      }

      tags_html = tags_html + "</select>";
      $.ajax({
        url: "./ajax/edti_supports_.php",
        type: "post",
        data: {
          id: id
        },
        success: d => {
          d = JSON.parse(d);
          console.log(d);
          var con = $.confirm({
            title: "",
            content:
              "" +
              '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
              '<div class="form-group text-center" >' +
              "<label>تعديل</label>" +
              '<input type="hidden" name="type" value="edit"> ' +
              '<input style="margin-bottom:5px;" type="text" value="' +
              d[1] +
              '" name="name" placeholder="اسم الشركة" class="name form-control" required />' +
              `${tags_html}` +
              '<input type="text" style="margin-bottom:5px;"  value="' +
              d[2] +
              '" name="info" placeholder="معلومات عن الشركة " class="info form-control" required />' +
              '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
              "</div>" +
              "</form>",
            buttons: {
              formSubmit: {
                text: "تعديل",
                btnClass: "btn-blue",
                action: function() {
                  var name = this.$content.find(".name").val();
                  if (!name) {
                    $.alert("اسم خطأ");
                    return false;
                  }
                  var work = this.$content.find(".info").val();
                  if (!work) {
                    $.alert("معلومات خطأ");
                    return false;
                  }

                  var formData = new FormData(
                    $("form[name='uploader_momber']")[0]
                  );
                  formData.append("id", id);
                  console.log("work!");

                  $.ajax({
                    url: "./ajax/support_upload.php",
                    type: "POST",
                    data: formData,
                    success: function(msg) {
                      console.log(msg);

                      con.close();
                      $.alert("تم!");
                      system_6(null);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                  });

                  return false;
                }
              },
              cancel: function() {
                // cancel
              }
            }
          });
        }
      });
    }
  });
}

function delete__members__(el, id) {
  $(el)
    .parent()
    .parent()
    .fadeOut();

  $.ajax({
    url: "./ajax/delete_members.1.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      console.log(d);
    }
  });
}

function search_by_name(e) {
  var v = e.value;

  // if (v.length == 0)  {
  //     $('.ctn-person').children().each((e) => {
  //       $($($($('.ctn-person').children()[e]))).show()
  //   })
  // }
  if (v.length == 0) {
    show_content_by_index(window.Active_switch_index);
    return;
  }

  $(".ctn-person")
    .children()
    .each(e => {
      console.log(
        $($($($($(".ctn-person").children()[e]))).children()[2]).text()
      );

      console.log();

      if (
        $($($($($(".ctn-person").children()[e]))).children()[2])
          .text()
          .includes(v) == true
      ) {
        $($($($(".ctn-person").children()[e]))).show();
      } else {
        $($($($(".ctn-person").children()[e]))).hide();
      }
    });
}

function search_for_person(e) {
  console.log(filterSexArr);
  var v = e.value;

  console.log(v);
  if (v.length == 0) {
    show_content_by_index(window.Active_switch_index);
    return;
  }
  // if (v.length == 0) {
  //   console.log('0 len')
  //   $('.ctn-person').children().each((e) => {
  //     if (window.filterSexArr['male'] == true && window.filterSexArr['female'] == true) {

  //       $($($($('.ctn-person').children()[e]))).show();
  //     } else {
  //       if (window.filterSexArr['male'] == true) {
  //         if (s[0].innerText == "ذكر") {

  //           $($($($('.ctn-person').children()[e]))).show();
  //         }

  //       } else {
  //          // only female
  //          if (s[0].innerText == "انثي") {

  //           $($($($('.ctn-person').children()[e]))).show();
  //         }
  //       }
  //     }
  //     })

  //     return;

  // }

  $(".ctn-person")
    .children()
    .each(e => {
      t = $($($($(".ctn-person").children()[e]).children()[4])[0]);

      s = $($($($(".ctn-person").children()[e]).children()[3])[0]);
      // console.log('Hello2')

      if (t[0].innerText.includes(v) == false) {
        // console.log('Hello')
        $($($($(".ctn-person").children()[e]))).hide();
      } else {
        if (
          window.filterSexArr["male"] == true &&
          window.filterSexArr["female"] == true
        ) {
          $($($($(".ctn-person").children()[e]))).show();
        } else {
          if (window.filterSexArr["male"] == true) {
            if (
              window.filterSexArr["male"] == true &&
              window.filterSexArr["female"] == false &&
              s[0].innerText == "ذكر"
            ) {
              $($($($(".ctn-person").children()[e]))).show();
              return;
            } else {
              $($($($(".ctn-person").children()[e]))).hide();

              return;
            }
          } else {
            console.log(s[0].innerText);
            if (
              window.filterSexArr["female"] == true &&
              window.filterSexArr["male"] == false &&
              s[0].innerText == "انثى"
            ) {
              $($($($(".ctn-person").children()[e]))).show();

              return;
            } else {
              $($($($(".ctn-person").children()[e]))).hide();

              return;
            }
          }
        }
      }
    });
}

function filterSex(e, f) {
  window.filterSexArr[f] = e.checked;

  $(".ctn-person")
    .children()
    .each(e => {
      t = $($($($(".ctn-person").children()[e]).children()[4])[0]);

      s = $($($($(".ctn-person").children()[e]).children()[3])[0]);
      // console.log('Hello2')

      if (
        window.filterSexArr["male"] == true &&
        window.filterSexArr["female"] == true
      ) {
        console.log("no success if");

        $($($($(".ctn-person").children()[e]))).show();
      } else {
        if (window.filterSexArr["male"] == true) {
          if (
            window.filterSexArr["male"] == true &&
            window.filterSexArr["female"] == false &&
            s[0].innerText == "ذكر"
          ) {
            $($($($(".ctn-person").children()[e]))).show();
            return;
          } else {
            $($($($(".ctn-person").children()[e]))).hide();
            return;
          }
        } else {
          console.log(s[0].innerText);
          if (
            window.filterSexArr["female"] == true &&
            window.filterSexArr["male"] == false &&
            s[0].innerText == "انثى"
          ) {
            $($($($(".ctn-person").children()[e]))).show();

            return;
          } else {
            $($($($(".ctn-person").children()[e]))).hide();

            return;
          }
        }
      }
    });
}

function show_content_by_index(index) {
  window.Active_switch_index = index;
  $(".ctn-person")
    .children()
    .each(e => {
      $($($($(".ctn-person").children()[e]))).hide();
    });

  if (
    window.filterSexArr["male"] == true &&
    window.filterSexArr["female"] == true
  ) {
    $(`[show-index=${index}]`).show();
  } else {
    if (window.filterSexArr["male"] == true) {
      $(`[show-national="ذكر"][show-index=${index}]`).show();
    } else {
      $(`[show-national="انثى"][show-index=${index}]`).show();
    }
  }
}

function get_info(el, type) {
  var sex = type == "user" ? "<th scope='col'>الجنس</th> " : "";

  var search =
    type == "user"
      ? `<div class="col-3 row">

      <div class="col form-group form-check">
      <input checked onchange="filterSex(this, 'male')" type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">ذكر</label>
      </div>

      <div class="col form-group form-check">
      <input checked onchange="filterSex(this, 'female')" type="checkbox" class="form-check-input" id="exampleCheck2">
      <label class="form-check-label" for="exampleCheck2">انثي</label>
      </div>
  </div>
    <div class="col text-right" >
    
    <input class="form-control text-center" id="search_person" onkeyup="search_for_person(this)" placeholder="بحث باسم المتطوع">
    </div>
    </div>`
      : `
    <div class="col text-right" >
    
    <input class="form-control text-center m-2" id="search_by_name" onkeyup="search_by_name(this)" placeholder="بحث">
    </div>
    `;
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  pointsOrstate =
    type == "user"
      ? `<th scope='col'>النقاط التطوعية</th><th scope='col'>النقاط  التدريبية</th>`
      : ` <th scope='col'>الحالة</th>`;
  $.ajax({
    url: "./ajax/geter_info.php",
    data: {
      type: type
    },
    type: "post",
    success: d => {
      window.filterSexArr = {
        male: true,
        female: true
      }; // for filtering contents
      arr = JSON.parse(d);
      console.log(arr);

      els = `
      <div class="row mb-2">
      ${search}
      <table class='table'>
  <thead>
    <tr>
    <th scope='col'>الإجراءات</th>
   ${pointsOrstate}
   
      ${sex}
    <th scope='col'>الاسم باكامل</th>

      <th scope=\'col\'>الابريد</th>
    </tr>
  </thead>
  <tbody class="ctn-person">`;

      window.SwitchlLength = Math.floor(arr.length / 8);
      window.Active_switch_index = 0;

      for (i in arr) {
        console.log(arr[i]);
        email = arr[i][0];
        name = arr[i][1];
        access = arr[i][2] == "1" ? "فعال" : "غير فعال";
        access_c = arr[i][2] == "1" ? "text-success" : "text-danger";
        points_v = arr[i][3];
        points_t = arr[i][4];
        national = arr[i][5];

        pointsOrstate =
          type == "user"
            ? `<td>${points_v}</td><td>${points_t}</td>`
            : `<td class='${access_c}'>${access}</td>`;
        // need some changing here next day;
        $btn_edit_info =
          type == "user"
            ? `<button type="button" class="btn btn-secondary" onclick='window.location.assign("helper/profile.php?type=user&email=${email}")'>تعديل</button>`
            : "";

        $btn = `<button type="button" class="btn btn-secondary"onclick ='access_(\"${email}\", \"${type}\")'>تصريح النشر</button>`;
        if (type == "user") {
          $btn = "";
        }
        els =
          els +
          `
           <tr show-national='${
             national == undefined ? "null" : national
           }' show-index='${Math.floor(i / 8)}' >
     
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-link" onclick='success_event(\"${email}\")'>منح  الساعات</button>

  <button type="button" class="btn btn-danger" onclick='delete_user(this,\"${email}\", \"${type}\")'>حذف</button>
        ${$btn}${$btn_edit_info}`;
        console.log(type);

        if (type != "supporters") {
          els =
            els +
            `<button type="button" class="btn btn-warning" onclick='
            print_(this, "${email}", "${type}")'>تفاصيل</button>`;
        }
        els =
          els +
          `
  <button type="button" class="btn btn-primary" onclick='change_pass_user(this,\"${email}\", \"${type}\")'>تغير كلمة السر</button>
</div>
${pointsOrstate}
${type == "user" ? "<td>" + national + "</td>" : ""}
<td>${name}</td>
<td>${email}</td>


      </td>
    </tr>
          
          
          `;
      }
      switchs_btns = ``;

      for (i = 0; i < window.SwitchlLength; i++) {
        switchs_btns += `
        <div class="col bg-info text-white m-1" style="min-width:10px; cursor: pointer;" onclick='show_content_by_index(${i})'>${i}</div>
        `;
      }

      els =
        els +
        `</tbody></table>
      
      
        <div class="row justify-content-center">
          <div class="row" style="min-width:50px;">
            ${window.SwitchlLength != 0 ? switchs_btns : ""}
          </div>  
        </div>

      `;

      $("#contant")
        .css("background-color", "#fff")
        .html(els);
      show_content_by_index(0);
    }
  });
}

function print_(el, email, type) {
  $.ajax({
    url: `helper/profile_sources/${type}.php`,
    data: {
      email: email,
      type: type,
      print: "true"
    },
    type: "get",
    success: d => {
      $("body").append(`
      <div class='more_info_geter_page'style='
      display:none;
    width: 100vw;
    height: 100vh;
    background: white;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    z-index: 999999;
    overflow: scroll;'>
    <div class='row' ><div class="col text-right">
    <button onclick='window.print()' class='btn btn-outline-success rounded-0 print__'>
    
    <i  class='material-icons' style='font-size:32px;'>print</i>
    </button>
    <button onclick='$(this).parent().parent().parent().slideUp("fast", () => { $(this).parent().parent().parent().remove() })' class='btn btn-outline-danger rounded-0 print__'>
    
    <i  class='material-icons' style='font-size:32px;'>close</i>
    </button>
      
    
    </div></div>
        ${d}

      </div>

      `);
      $(".more_info_geter_page").slideDown();
      console.log(d);
    }
  });
  // console.log(`?email=${email}&print=true&type=any`);

  // window.location.assign(`helper/profile_sources/${type}.php?email=${email}&print=true&type=any`);
}

function access_(email, type) {
  $.confirm({
    title: "Confirm!",
    content: "Simple confirm!",
    buttons: {
      تفعيل: function() {
        $.ajax({
          url: "./ajax/access_changing.php",
          type: "post",
          data: {
            email: email,
            type: type,
            action: "1"
          },
          success: d => {
            console.log(d);
          }
        });
      },
      " الغاء التفعيل": function() {
        $.ajax({
          url: "./ajax/access_changing.php",
          type: "post",
          data: {
            email: email,
            type: type,
            action: "0"
          },
          success: d => {
            console.log(d);
          }
        });
      },
      close: {
        text: "اغلاق",
        btnClass: "btn-danger",
        keys: ["enter", "shift"],
        action: function() {}
      }
    }
  });
}

function delete_user(el, email, type) {
  $.confirm({
    title: "هل انت متاكد",
    content: "هذا يمكن ان يمسح معلومات مهمة",
    buttons: {
      confirm: function() {
        $(el)
          .parent()
          .parent()
          .fadeOut();

        $.ajax({
          url: "./ajax/delete_members2.php",
          type: "post",
          data: {
            email: email,
            type: type
          },
          success: d => {
            $.alert("تم الحذف");
          }
        });
      },
      cancel: function() {
        $.alert("تم الالغاء");
      }
    }
  });
}

function change_pass_user(el, email, type) {
  $.confirm({
    title: "",
    content:
      "" +
      '<form action="" class="formName">' +
      '<div class="form-group">' +
      `<label>${email} </label>` +
      '<input type="text" placeholder="كلمة السر الجديدة " class="pass form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "Submit",
        btnClass: "btn-blue",
        action: function() {
          var pass = this.$content.find(".pass").val();
          if (!name) {
            $.alert("provide a valid pass");
            return false;
          }

          $.ajax({
            url: "./ajax/change_pass_user.php",
            type: "post",
            data: {
              email: email,
              pass: pass,
              type: type
            },
            success: d => {
              $.alert("تم!");
            }
          });
        }
      },
      cancel: function() {
        //close
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function system_8(el) {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/certificates_info.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      els = "";

      for (i in arr) {
        id = arr[i][0];
        name = arr[i][1];
        img = arr[i][2];

        els =
          els +
          `
          <div class="card" style="width: 18rem;display:inline-block">
            <img class="card-img-top" height=200 src="${img}" alt="Card image cap">

  <div class="card-body" >
    <h5 class="card-title">${name}</h5>
    <p class="card-text">${id}</p>
    
    <a href="#" onclick="delete__certificates(this,'${id}')" class="card-link"><i class="material-icons text-danger">
delete
</i></a>

 <a href="#" onclick="change__certificates(this,'${id}')" class="card-link"><i class="material-icons text-info">
edit
</i></a>
  </div>
</div>
          
          
          
          
          `;
      }
      els =
        els +
        `
            
                <div onclick="add_certificates()" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function change__certificates(el, id) {
  $.ajax({
    url: "./ajax/Certificates.php",
    type: "post",
    data: {
      code: id
    },
    success: d => {
      d = JSON.parse(d);

      console.log(d);
      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>تعديل</label>" +
          `<input type='hidden' name='old_id' value='${id}'>` +
          `<input style="margin-bottom:5px;" value="${d[1]}" type="text" name="name" placeholder="الاسم" class="name form-control" required />
          <input style="margin-bottom:5px;"  value="${d[0]}" type="text" name="code" placeholder="الكود" class="name2 form-control" required />` +
          '<input type="file" name="img" style="margin-bottom:5px;"  class="image form-control" required />' +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: " تعديل  ",
            btnClass: "btn-blue",
            action: function() {
              var name = this.$content.find(".name").val();
              if (!name) {
                $.alert("اسم خطأ");
                return false;
              }
              var name = this.$content.find(".name2").val();
              if (!name) {
                $.alert("اسم خطأ");
                return false;
              }

              var formData = new FormData($("form[name='uploader_momber']")[0]);
              console.log("work!");

              $.ajax({
                url: "./ajax/certificates_chage.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                  system_8();
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        }
      });
    }
  });
}

function delete__certificates(el, id) {
  $(el)
    .parent()
    .parent()
    .fadeOut();

  $.ajax({
    url: "./ajax/delete_certificates.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      console.log(d);
    }
  });
}

function add_certificates() {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>شهاده جديدة</label>" +
      '<input style="margin-bottom:5px;" type="text" name="name" placeholder="الاسم" class="name form-control" required />' +
      '<input style="margin-bottom:5px;" type="text" name="code" placeholder="الكود" class="name form-control" required />' +
      '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("اسم خطأ");
            return false;
          }

          var image = this.$content.find(".image").val();
          if (!image) {
            $.alert("صورة خطأ");
            return false;
          }
          var formData = new FormData($("form[name='uploader_momber']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/certificates_upload.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function system_9(el) {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/cards_info.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      els = "";

      for (i in arr) {
        id = arr[i][0];
        name = arr[i][1];
        img = arr[i][2];

        els =
          els +
          `
          <div class="card" style="width: 18rem;display:inline-block">
            <img class="card-img-top" height=200 src="${img}" alt="Card image cap">

  <div class="card-body" >
    <h5 class="card-title">${name}</h5>
    <p class="card-text">${id}</p>
    
    <a href="#" onclick="delete__cards(this,'${id}')" class="card-link"><i class="material-icons text-danger">
delete
</i></a>
<a href="#" onclick="edit__cards(this,'${id}')" class="card-link"><i class="material-icons text-info">
edit
</i></a>
  </div>
</div>
          
          
          
          
          `;
      }
      els =
        els +
        `
            
                <div onclick="add_cards()" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function edit__cards(el, id) {
  $.ajax({
    url: "./ajax/card_info.php",
    type: "post",
    data: {
      code: id
    },
    success: d => {
      d = JSON.parse(d);

      console.log(d);
      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>تعديل</label>" +
          `<input type='hidden' name='old_id' value='${id}'>` +
          `<input style="margin-bottom:5px;" value="${d[1]}" type="text" name="name" placeholder="الاسم" class="name form-control" required />
          <input style="margin-bottom:5px;"  value="${d[0]}" type="text" name="code" placeholder="الكود" class="name2 form-control" required />` +
          '<input type="file" name="img" style="margin-bottom:5px;"  class="image form-control" required />' +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: " تعديل  ",
            btnClass: "btn-blue",
            action: function() {
              var name = this.$content.find(".name").val();
              if (!name) {
                $.alert("اسم خطأ");
                return false;
              }
              var name = this.$content.find(".name2").val();
              if (!name) {
                $.alert("اسم خطأ");
                return false;
              }

              var formData = new FormData($("form[name='uploader_momber']")[0]);
              console.log("work!");

              $.ajax({
                url: "./ajax/card_chage.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                  system_9();
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        }
      });
    }
  });
}

function delete__cards(el, id) {
  $(el)
    .parent()
    .parent()
    .fadeOut();

  $.ajax({
    url: "./ajax/delete__cards.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      console.log(d);
    }
  });
}

function add_cards() {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>اضافة جديدة</label>" +
      '<input style="margin-bottom:5px;" type="text" name="name" placeholder="الاسم" class="name form-control" required />' +
      '<input style="margin-bottom:5px;" type="text" name="code" placeholder="كود الشهادة" class="code form-control" required />' +
      '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("اسم خطأ");
            return false;
          }
          var code = this.$content.find(".code").val();
          if (!code) {
            $.alert("كود خطأ");
            return false;
          }

          var image = this.$content.find(".image").val();
          if (!image) {
            $.alert("صورة خطأ");
            return false;
          }
          var formData = new FormData($("form[name='uploader_momber']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/cards_upload.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function system_10() {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);

  $.ajax({
    url: "./ajax/creater_info.php",
    data: {},
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      els = "";

      for (i in arr) {
        id = arr[i][0];
        name = arr[i][1];
        work = arr[i][2];
        img = arr[i][3];
        ph = arr[i][4];
        tw = arr[i][5];

        els =
          els +
          `
          <div class="card" style="width: 18rem;display:inline-block">
            <img class="card-img-top" height=200 src="${img}" alt="Card image cap">

  <div class="card-body" >
    <h5 class="card-title">${name}</h5>
    <p class="card-text">${work}</p>
      <div class='col-12  text-center'>
  <h5 class='text-right'>الهاتف</h5>
  <div class='dropdown-divider'></div>
 
  <div class='col-12 '>
${ph}
  
  </div>

  <h5 class='text-right'>توتير</h5>
  <div class='dropdown-divider'></div>

 
  <div class='col-12 '>
   <a href='${tw}'>
  <img src='./assets/twitter-icon-logo.png' width=50>
  </a>
  </div>
  <div></div>
  </div>
  <div class='dropdown-divider'></div>

    <a href="#" onclick="delete__creaters(this,'${id}')" class="card-link"><i class="material-icons text-danger">
    
delete
</i></a>
 <a onclick="edite__members__(this,'${id}', 'creaters')" href="#" class="card-link">
    <i class="material-icons">
create
</i>
    </a>
  </div>
</div>
          
          
          
          
          `;
      }
      els =
        els +
        `
            
                <div onclick="add_momber('creaters')" style="cursor:pointer;display: inline-block;margin: 1px;
    border: 1px solid #17a2b8;border-radius: 6px;    box-shadow: 0 0 4px #17a2b8;" class=\"col-sm-12 col-md-6 col-lg-3 col-xl-3 wow bounceInLeft\">
  <div class=\"  costam-card-2 \" >
 <div class=\"col text-center\" >

  <i class=\"material-icons\" style=\"font-size:7rem\">
add
</i>
 </div>

  
 </div>
 </div>
            `;
      $("#contant")
        .css("background-color", "#fff")
        .html(els);
    }
  });
}

function delete__creaters(el, id) {
  $(el)
    .parent()
    .parent()
    .fadeOut();

  $.ajax({
    url: "./ajax/delete__creaters.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      console.log(d);
    }
  });
}

function add_createds(el, id) {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>عضو جديد</label>" +
      '<input style="margin-bottom:5px;" type="text" name="name" placeholder="الاسم" class="name form-control" required />' +
      '<input type="text" style="margin-bottom:5px;"  name="work" placeholder="المهنة" class="work form-control" required />' +
      '<input type="file" name="image" style="margin-bottom:5px;"  class="image form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("اسم خطأ");
            return false;
          }
          var work = this.$content.find(".work").val();
          if (!work) {
            $.alert("مهنة خطأ");
            return false;
          }
          var image = this.$content.find(".image").val();
          if (!image) {
            $.alert("صورة خطأ");
            return false;
          }
          var formData = new FormData($("form[name='uploader_momber']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/creater_upload.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function system_end() {
  $("#contant").css("background-color", "#e5eff1").html(`
        <div class="row  align-items-center " style="background-color: #e5eff1">
            <div class="col text-center">
            <img src="./assets/loading.gif">
            </div>
        </div>`);
  $("#contant").css("background-color", "#e5eff1").html(`
  <div class="jumbotron jumbotron-fluid bg-dark">
  <div class="container">
    <h1 class="display-4 text-warning">تنبية</h1>
    <p class="lead text-warning">يرجى العلم أنه من الغير مسموح لأي أحد غير المسؤول في الموقع أن يسجل في قاعدة التحكم فنرجو لتجنب وقوع أي مشاكل قانونية</p>
  </div>
</div>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">الأمان</h1>
    <button style="
    display: inline-block; "class="btn" onclick="change_pass()"><a class="btn">  </a> تغير كلمة المرور</button> 
    
      <form method="post" style="
    display: inline-block;">
      <button name="logout" class="btn btn-danger">  تسجيل الخروج  </button>
      </form>
      
    </div>
</div>
  `);
}

function change_pass() {
  var con = $.confirm({
    title: "",
    content:
      "" +
      '<form name="uploader_momber" action="ajax/member_upload.php" method="post" enctype="multipart/form-data" class="formName">' +
      '<div class="form-group text-center" >' +
      "<label>عضو جديد</label>" +
      '<input style="margin-bottom:5px;" type="password" name="pass" placeholder="كلمة مرور جديدة" class="pass form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "تحديث",
        btnClass: "btn-blue",
        action: function() {
          var pass = this.$content.find(".pass").val();
          if (!pass) {
            $.alert("كلمة مرور خطأ");
            return false;
          }

          var formData = new FormData($("form[name='uploader_momber']")[0]);
          console.log("work!");

          $.ajax({
            url: "./ajax/change_pass.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      cancel: function() {
        // cancel
      }
    },
    onContentReady: function() {
      // bind to events
      var jc = this;
      this.$content.find("form").on("submit", function(e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger("click"); // reference the button and click it
      });
    }
  });
}

function show_contanet(type) {
  $.ajax({
    url: "./ajax/show_contant.php",
    type: "post",
    data: {
      type: type
    },
    success: d => {
      console.log(d);
      $("#contant")
        .css("background-color", "#e5eff1")
        .html("<div class=row>" + d + "</div>");
    }
  });
}

function delete___V_OR_T(el, type, id) {
  $.confirm({
    title: "مسح المنشور",
    content: "هل انت متاكد",
    buttons: {
      مسج: function() {
        $.ajax({
          url: "./ajax/delete___V_OR_T.php",
          type: "post",
          data: {
            type: type,
            id: id
          },
          success: d => {
            console.log(d);
            $(el)
              .parent()
              .parent()
              .fadeOut();
          }
        });
      },
      الغاء: function() {}
    }
  });
}

function edite___V_OR_T(el, type, id) {
  $.confirm({
    closeIcon: true,
    title: "تغير الحالة للمنشور",
    content: "",
    buttons: {
      متاح: function() {
        $.ajax({
          url: "./ajax/edite___V_OR_T.php",
          type: "post",
          data: {
            type: type,
            id: id,
            state: 1
          },
          success: d => {
            console.log(d);
            show_contanet(type);
            // window.location.reload();
          }
        });
      },
      مغلق: function() {
        $.ajax({
          url: "./ajax/edite___V_OR_T.php",
          type: "post",
          data: {
            type: type,
            id: id,
            state: 0
          },
          success: d => {
            console.log(d);
            show_contanet(type);

            // window.location.reload();
          }
        });
      },
      قريبا: function() {
        $.ajax({
          url: "./ajax/edite___V_OR_T.php",
          type: "post",
          data: {
            type: type,
            id: id,
            state: 2
          },
          success: d => {
            console.log(d);
            show_contanet(type);

            // window.location.reload();
          }
        });
      }
    }
  });
}

function change_logo(select) {
  var con = $.confirm({
    title: "شعار جديد",
    content:
      "" +
      "<form  name='new_logo'class=\"formName\">" +
      '<div class="form-group">' +
      '<input type="file" name=\'image\' class=\'_logo\'placeholder="Your name" class="name form-control" required />' +
      "</div>" +
      "</form>",

    type: "red",
    typeAnimated: true,
    buttons: {
      btn: {
        text: "تغير",
        btnClass: "btn-red",
        action: function() {
          var formData = new FormData($("form[name='new_logo']")[0]);
          formData.append("select", select);
          if (!$("._logo").val()) {
            $.alert("اختر صورة من فضلك!");
          }

          $.ajax({
            url: "./ajax/new_logo.php",
            type: "POST",
            data: formData,
            success: function(msg) {
              console.log(msg);

              con.close();
              $.alert("تم!");
            },
            cache: false,
            contentType: false,
            processData: false
          });

          return false;
        }
      },
      close: function() {}
    }
  });
}

function Stop___WEB(type) {
  $.ajax({
    url: "./ajax/Stop___WEB.php",
    data: {
      type: type
    },
    type: "post",
    success: data => {
      console.log(data);
      window.location.reload();
    }
  });
}

function Videos(el) {
  $.ajax({
    url: "./ajax/ControlVideos.php",
    data: {},
    type: "post",
    success: data => {
      data = JSON.parse(data);
      html_table = "";
      console.log(data);

      for (i in data) {
        html_table =
          html_table +
          `<tr>
        <td>
        <button onclick='Delete_Videos("${data[i][0]}",this);' class='btn btn-sm btn-link m-1'><i class=" text-danger material-icons">
delete
</i></button>
        <button class = 'btn btn-sm btn-link m-1' onclick="edit_Videos('${data[i][0]}')"> <i class = "text-info material-icons" >
edit
</i></button>
        </td>
        <td>${data[i][4]}</td>
        <td>${data[i][2]}</td>
        <td>${data[i][1]}</td>
        <td> <video width=285>
                <source src='${data[i][3]}' type='video/mp4'>
                </video></td>

      </tr>`;
      }
      $("#contant").css("background-color", "#e5eff1").html(`
      
      <div class='col-12 text-center m-5'>
      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">note_add</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">  يمكنك اضافه فيديو جديد</h6>
                        <a href="#" class="btn card-link" onclick="add_new_video()">اضافة فيديو جديد</a>
                        <p class="card-text"></p>
                    </div>
                    </div>
                      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">view_week</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">الأقسام</h6>
                        <a href="#" class="btn card-link" onclick="show_tags_()">عرض</a>
                                                <a href="#" class="btn card-link" onclick="add_new_tag('video')">اضافة</a>

                        <p class="card-text"></p>
                    </div>
                    </div>
      
      <div class='row'>
      <table class="table">
  <thead>
    <tr>
    <th scope='col'>الإجراءات</th>
    <th scope="col">النوع</th>
    <th scope="col">التعريف</th>
    <th scope="col">الاسم</th>
    <th scope="col">الفيديو</th>
    </tr>
  </thead>
  <tbody>
    ${html_table}
  </tbody>
</table>
      </div>
      
      `);
    }
  });
}

function BookShowCase(el) {
  $.ajax({
    url: "./ajax/ControlBookShowCase.php",
    data: {},
    type: "post",
    success: data => {
      data = JSON.parse(data);
      html_table = "";
      console.log(data);

      for (i in data) {
        html_table =
          html_table +
          `<tr>
        <td>
        <button onclick='Delete_BookShowCase("${data[i][0]}",this);' class='btn btn-sm btn-link m-1'><i class=" text-danger material-icons">
delete
</i></button>
        <button class = 'btn btn-sm btn-link m-1' onclick="edit_BookShowCase('${data[i][0]}')"> <i class = "text-info material-icons" >
edit
</i></button>
        </td>
        <td>${data[i][6]}</td>
        <td><img width=200 src='${data[i][4]}'></td>
        <td>${data[i][3]}</td>
        <td>${data[i][1]}</td>
        <td>${data[i][2]}</td>
        <th scope="row">${i}</th>

      </tr>`;
      }
      $("#contant").css("background-color", "#e5eff1").html(`
      
      <div class='col-12 text-center m-5'>
      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">note_add</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">  يمكنك اضافه كتب جديدة</h6>
                        <a href="#" class="btn card-link" onclick="add_new_Book()">اضافة كتاب جديد</a>
                        <p class="card-text"></p>
                    </div>
                    </div>
                      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">view_week</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">الأقسام</h6>
                        <a href="#" class="btn card-link" onclick="show_tags()">عرض</a>
                                                <a href="#" class="btn card-link" onclick="add_new_tag('book')">اضافة</a>

                        <p class="card-text"></p>
                    </div>
                    </div>
      
      <div class='row'>
      <table class="table">
  <thead>
    <tr>
    <th scope='col'>الإجراءات</th>
    <th scope="col">النوع</th>
    <th scope="col">الصورة</th>
    <th scope="col">التعريف</th>
    <th scope="col">اسم الكاتب</th>
    <th scope="col">الاسم</th>
    <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    ${html_table}
  </tbody>
</table>
      </div>
      
      `);
    }
  });
}

function Delete_BookShowCase(id, el) {
  $.confirm({
    title: "هل انت متاكد!",
    content: "",
    buttons: {
      مسح: function() {
        $.ajax({
          url: "./ajax/Delete_BookShowCase.php",
          data: {
            id: id
          },
          type: "post",
          success: data => {
            console.log(data);
            $.alert("تم!");
            $(el)
              .parent()
              .parent()
              .fadeOut();
          }
        });
      },
      الغاء: function() {
        $.alert("تم الالغاء!");
      }
    }
  });
}

function Delete_Image(id, el) {
  $.confirm({
    title: "هل انت متاكد!",
    content: "",
    buttons: {
      مسح: function() {
        $.ajax({
          url: "./ajax/Delete_Image.php",
          data: {
            id: id
          },
          type: "post",
          success: data => {
            console.log(data);
            $.alert("تم!");
            $(el)
              .parent()
              .parent()
              .fadeOut();
          }
        });
      },
      الغاء: function() {
        $.alert("تم الالغاء!");
      }
    }
  });
}

function Delete_Videos(id, el) {
  $.confirm({
    title: "هل انت متاكد!",
    content: "",
    buttons: {
      مسح: function() {
        $.ajax({
          url: "./ajax/Delete_videos.php",
          data: {
            id: id
          },
          type: "post",
          success: data => {
            console.log(data);
            $.alert("تم!");
            $(el)
              .parent()
              .parent()
              .fadeOut();
          }
        });
      },
      الغاء: function() {
        $.alert("تم الالغاء!");
      }
    }
  });
}

function edit_BookShowCase(id) {
  $.ajax({
    url: "./ajax/edit_BookShowCase_info.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      $.ajax({
        url: "./ajax/tag_geter.php",
        type: "post",
        data: {},
        success: data => {
          data = JSON.parse(data);
          tags_html = `<select name="tag" required="required" class="form-control" style="display: inline-block;">
          
           `;
          for (i in data) {
            tags_html = tags_html + `<option>${data[i]}</option>`;
          }

          tags_html = tags_html + "</select>";
          var con = $.confirm({
            title: "",
            content:
              "" +
              '<form name="uploader_BookShowCase" action="ajax/uploader_BookShowCase.php" method="post" enctype="multipart/form-data" class="formName">' +
              '<div class="form-group text-center" >' +
              "<label>تعديل</label>" +
              `<input type="hidden" name="id" value="${id}">` +
              "<div class='col-12 text-right'>الملف</div>" +
              `<div class="alert alert-warning" role="alert">
  ندعم الملف من نوع pdf
</div>` +
              `<input type='file' name='source' class="form-control">` +
              "<div class='col-12 text-right'>الغلاف</div>" +
              `<input type='file' name='cover' class="form-control">` +
              "<div class='col-12 text-right'>الكاتب</div>" +
              `<input name="writer" placeholder="الكاتب" class="title form-control"value='${arr[0]}' required>` +
              "<div class='col-12 text-right'>الاسم</div>" +
              `<input name="name" placeholder="الاسم" class="text form-control" value='${arr[1]}' required>` +
              "<div class='col-12 text-right'>تعريف</div>" +
              `<textarea name="body" placeholder="تعريف" class="text form-control" required>${arr[2]}</textarea>` +
              "<div class='col-12 text-right'>النوع</div>" +
              `${tags_html}` +
              "</div>" +
              "</form>",
            buttons: {
              formSubmit: {
                text: "تعديل",
                btnClass: "btn-blue",
                action: function() {
                  var title = this.$content.find(".title").val();
                  if (!title) {
                    $.alert("العنوان خطأ");
                    return false;
                  }
                  var text = this.$content.find(".text").val();
                  if (!text) {
                    $.alert("محتوي خطأ");
                    return false;
                  }

                  var formData = new FormData(
                    $("form[name='uploader_BookShowCase']")[0]
                  );
                  console.log("work!");

                  $.ajax({
                    url: "./ajax/uploader_BookShowCase.php",
                    type: "POST",
                    data: formData,
                    success: function(msg) {
                      console.log(msg);

                      con.close();
                      $.alert("تم!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                  });

                  return false;
                }
              },
              cancel: function() {
                // cancel
              }
            },
            onContentReady: function() {
              // bind to events
              var jc = this;
              this.$content.find("form").on("submit", function(e) {
                // if the user submits the form by pressing enter in the field.
                e.preventDefault();
                jc.$$formSubmit.trigger("click"); // reference the button and click it
              });
            }
          });
        }
      });
    }
  });
}

function edit_Images(id) {
  $.ajax({
    url: "./ajax/edit_Images_info.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      console.log(d);

      arr_img = JSON.parse(d);
      $.ajax({
        url: "./ajax/show_tags_Images.php",
        type: "post",
        data: {},
        success: data => {
          arr = data.replace(/\s+/g, " ").trim();

          data = JSON.parse(arr);
          tags_html = `<select name="tag" required="required" class="form-control" style="display: inline-block;">
          
           `;
          for (i in data) {
            tags_html = tags_html + `<option>${data[i]}</option>`;
          }

          tags_html = tags_html + "</select>";
          var con = $.confirm({
            title: "",
            content:
              "" +
              '<form name="uploader_BookShowCase" action="ajax/uploader_BookShowCase.php" method="post" enctype="multipart/form-data" class="formName">' +
              '<div class="form-group text-center" >' +
              "<label>تعديل</label>" +
              `<input type="hidden" name="id" value="${id}">` +
              "<div class='col-12 text-right'>الغلاف</div>" +
              `<input type='file' name='cover' class="form-control">` +
              "<div class='col-12 text-right'>العنوان</div>" +
              `<input name="name" placeholder="العنوان" class="text form-control" value='${arr_img[1]}' required>` +
              "<div class='col-12 text-right'>النوع</div>" +
              `${tags_html}` +
              "</div>" +
              "</form>",
            buttons: {
              formSubmit: {
                text: "تعديل",
                btnClass: "btn-blue",
                action: function() {
                  var text = this.$content.find(".text").val();
                  if (!text) {
                    $.alert("محتوي خطأ");
                    return false;
                  }

                  var formData = new FormData(
                    $("form[name='uploader_BookShowCase']")[0]
                  );
                  console.log("work!");

                  $.ajax({
                    url: "./ajax/uploader_Images.php",
                    type: "POST",
                    data: formData,
                    success: function(msg) {
                      console.log(msg);

                      con.close();
                      $.alert("تم!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                  });

                  return false;
                }
              },
              cancel: function() {
                // cancel
              }
            },
            onContentReady: function() {
              // bind to events
              var jc = this;
              this.$content.find("form").on("submit", function(e) {
                // if the user submits the form by pressing enter in the field.
                e.preventDefault();
                jc.$$formSubmit.trigger("click"); // reference the button and click it
              });
            }
          });
        }
      });
    }
  });
}

function edit_Videos(id) {
  $.ajax({
    url: "./ajax/edit_Videos_info.php",
    data: {
      id: id
    },
    type: "post",
    success: d => {
      arr = JSON.parse(d);
      $.ajax({
        url: "./ajax/tag_geter_.php",
        type: "post",
        data: {},
        success: data => {
          data = JSON.parse(data);
          tags_html = `<select name="tag" required="required" class="form-control" style="display: inline-block;">
          
           `;
          for (i in data) {
            tags_html = tags_html + `<option>${data[i]}</option>`;
          }

          tags_html = tags_html + "</select>";
          var con = $.confirm({
            title: "",
            content:
              "" +
              '<form name="uploader_BookShowCase" action="ajax/uploader_BookShowCase.php" method="post" enctype="multipart/form-data" class="formName">' +
              '<div class="form-group text-center" >' +
              "<label>تعديل</label>" +
              `<input type="hidden" name="id" value="${id}">` +
              "<div class='col-12 text-right'>الفيديو</div>" +
              `
          <script>
            function change_type_vadies(el) {
              var target = el.value;
              if (target == "1") {
              $(".choose-1").show()
              $(".choose-0").hide()
              } else {
                $(".choose-1").hide()
                $(".choose-0").show()

              }             
            }
        
          </script>
          <select onchange="change_type_vadies(this)" class='form-control' name='type' required>
          <option >اختر طريقة الادخال</option>

              <option value='0'>رفع الفيديو</option>
              <option value='1'>رابط للفيديو</option>
          </select>
          
          ` +
              `<div class='choose-1 mt-2' style='display:none;'>
              <input name="link" placeholder="رابط الفيديو" class="text form-control" value='${arr[2]}' required></div>
              <div class='choose-0' style='display:none;'><div class='col-12 text-right'>الفيديو</div>
              <div class="alert alert-warning" role="alert">
  ندعم الملف من نوع mp4
</div>


          ` +
              `<input type='file' name='source' class="form-control" required></div>` +
              "<div class='col-12 text-right'>الاسم</div>" +
              `<input name="name" placeholder="الاسم" class="text form-control" value='${arr[0]}' required>` +
              "<div class='col-12 text-right'>تعريف</div>" +
              `<textarea name="body" placeholder="تعريف" class="text form-control" required>${arr[1]}</textarea>` +
              "<div class='col-12 text-right'>النوع</div>" +
              `${tags_html}` +
              "</div>" +
              "</form>",
            buttons: {
              formSubmit: {
                text: "تعديل",
                btnClass: "btn-blue",
                action: function() {
                  var formData = new FormData(
                    $("form[name='uploader_BookShowCase']")[0]
                  );
                  console.log("work!");

                  $.ajax({
                    url: "./ajax/edit_Videos_.php",
                    type: "POST",
                    data: formData,
                    success: function(msg) {
                      console.log(msg);

                      con.close();
                      $.alert("تم!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                  });

                  return false;
                }
              },
              cancel: function() {
                // cancel
              }
            },
            onContentReady: function() {
              // bind to events
              var jc = this;
              this.$content.find("form").on("submit", function(e) {
                // if the user submits the form by pressing enter in the field.
                e.preventDefault();
                jc.$$formSubmit.trigger("click"); // reference the button and click it
              });
            }
          });
        }
      });
    }
  });
}

function add_new_Book() {
  $.ajax({
    url: "./ajax/tag_geter.php",
    type: "post",
    data: {},
    success: data => {
      data = JSON.parse(data);
      tags_html = `<select name="tag" required="required" class="form-control" style="display: inline-block;">
          
           `;
      for (i in data) {
        tags_html = tags_html + `<option>${data[i]}</option>`;
      }

      tags_html = tags_html + "</select>";

      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_BookShowCase" action="ajax/uploader_BookShowCase.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>اضافة جديد</label>" +
          "<div class='col-12 text-right'>الملف</div>" +
          `<div class="alert alert-warning" role="alert">
  ندعم الملف من نوع pdf
</div>` +
          `<input type='file' name='source' class="form-control" required>` +
          "<div class='col-12 text-right'>الغلاف</div>" +
          `<input type='file' name='cover' class="form-control" required>` +
          "<div class='col-12 text-right'>الكاتب</div>" +
          `<input name="writer" placeholder="الكاتب" class="title form-control" required>` +
          "<div class='col-12 text-right'>الاسم</div>" +
          `<input name="name" placeholder="الاسم" class="text form-control"  required>` +
          "<div class='col-12 text-right'>تعريف</div>" +
          `<textarea name="body" placeholder="تعريف" class="text form-control" required></textarea>` +
          "<div class='col-12 text-right'>النوع</div>" +
          `${tags_html}` +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "اضافه",
            btnClass: "btn-blue",
            action: function() {
              var title = this.$content.find(".title").val();
              if (!title) {
                $.alert("العنوان خطأ");
                return false;
              }
              var text = this.$content.find(".text").val();
              if (!text) {
                $.alert("محتوي خطأ");
                return false;
              }

              var formData = new FormData(
                $("form[name='uploader_BookShowCase']")[0]
              );
              console.log("work!");

              $.ajax({
                url: "./ajax/add_BookShowCase.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        }
      });
    }
  });
}

function add_new_Image() {
  $.ajax({
    url: "./ajax/show_tags_Images.php",
    type: "post",
    data: {},
    success: data => {
      arr = data.replace(/\s+/g, " ").trim();

      data = JSON.parse(arr);
      tags_html = `<select name="tag" required="required" class="form-control" style="display: inline-block;">
          
           `;
      for (i in data) {
        tags_html = tags_html + `<option>${data[i]}</option>`;
      }

      tags_html = tags_html + "</select>";

      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_BookShowCase" action="ajax/uploader_BookShowCase.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>اضافة جديد</label>" +
          "<div class='col-12 text-right'>الصورة</div>" +
          `<input type='file' name='cover' class="form-control" required>` +
          "<div class='col-12 text-right' required>عنوان للصورة</div>" +
          `<input name="name" placeholder="عنوان" class="text form-control"  required>` +
          "<div class='col-12 text-right'>النوع</div>" +
          `${tags_html}` +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "اضافه",
            btnClass: "btn-blue",
            action: function() {
              var text = this.$content.find(".text").val();
              if (!text) {
                $.alert("محتوي خطأ");
                return false;
              }

              var formData = new FormData(
                $("form[name='uploader_BookShowCase']")[0]
              );
              console.log("work!");

              $.ajax({
                url: "./ajax/add_Images.php",
                type: "POST",
                data: formData,
                success: function(msg) {
                  console.log(msg);

                  con.close();
                  $.alert("تم!");
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        }
      });
    }
  });
}

function add_new_video() {
  $.ajax({
    url: "./ajax/tag_geter_.php",
    type: "post",
    data: {},
    success: data => {
      data = JSON.parse(data);
      tags_html = `<select name="tag" required="required" class="form-control" style="display: inline-block;">
          
           `;
      for (i in data) {
        tags_html = tags_html + `<option>${data[i]}</option>`;
      }

      tags_html = tags_html + "</select>";

      var con = $.confirm({
        title: "",
        content:
          "" +
          '<form name="uploader_BookShowCase" action="ajax/uploader_BookShowCase.php" method="post" enctype="multipart/form-data" class="formName">' +
          '<div class="form-group text-center" >' +
          "<label>اضافة جديد</label>" +
          `
          
          <script>
            function change_type_vadies(el) {
              var target = el.value;
              if (target == "1") {
              $(".choose-1").show()
              $(".choose-0").hide()
              } else {
                $(".choose-1").hide()
                $(".choose-0").show()

              }             
            }
        
          </script>
          <select onchange="change_type_vadies(this)" class='form-control' name='type' required>
          <option >اختر طريقة الادخال</option>

              <option value='0'>رفع الفيديو</option>
              <option value='1'>رابط للفيديو</option>
          </select>
          
          ` +
          '<div class=\'choose-1 mt-1\' style=\'display:none;\'><input name="link" placeholder="رابط الفيديو" class="text form-control"  required></div>' +
          "<div class='choose-0' style='display:none;'><div class='col-12 text-right'>الفيديو</div>" +
          `<div class="alert alert-warning" role="alert">
  ندعم الملف من نوع mp4
</div>` +
          `<input type='file' name='source' class="form-control" required></div>` +
          "<div class='col-12 text-right'>الاسم</div>" +
          `<input name="name" placeholder="الاسم" class="text form-control"  required>` +
          "<div class='col-12 text-right'>تعريف</div>" +
          `<textarea name="body" placeholder="تعريف" class="text2 form-control" required></textarea>` +
          "<div class='col-12 text-right'>النوع</div>" +
          `${tags_html}` +
          "</div>" +
          "</form>",
        buttons: {
          formSubmit: {
            text: "اضافه",
            btnClass: "btn-blue",
            action: function() {
              var formData = new FormData(
                $("form[name='uploader_BookShowCase']")[0]
              );

              if (!$(".text").val()) {
                $.alert("خطأ");
                return false;
              }
              if (!$(".text2").val()) {
                $.alert("خطأ");
                return false;
              }
              console.log("work!");
              con.close();

              var di = $.dialog({
                title: "يتم الرفع للموقع!",
                content: `<div class="progress id-process-loading">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div>`
              });
              $.ajax({
                url: "./ajax/add_Video.php",
                type: "POST",
                data: formData,
                uploadProgress: (e, p, t, p2) => {
                  console.log(p2);

                  $(".id-process-loading").animate({
                    width: `${p2}%`
                  });
                },
                success: function(msg) {
                  // console.log(msg);

                  // di.close();
                  $.alert("تم!");
                },
                cache: false,
                contentType: false,
                processData: false
              });

              return false;
            }
          },
          cancel: function() {
            // cancel
          }
        }
      });
    }
  });
}

function show_tags() {
  $.ajax({
    url: "./ajax/tag_geter.php",
    type: "post",
    data: {},
    success: d => {
      arr = d.replace(/\s+/g, " ").trim();

      arr = JSON.parse(arr);

      console.log(arr);

      arr = arr.reverse();
      els = `<li class="list-group-item text-right" style="background:#eeeeee6e;cursor:pointer" onclick="$(this).parent().parent().fadeOut()"><i class="material-icons">close</i></li>`;

      for (i in arr) {
        els =
          els +
          `
                         <li class="list-group-item">
                         <div style="display:inline-block" class="col-6">
                         ${arr[i]}
                         </div>
                         <div  style="display:inline-block" class="col-5 text-right">
                         
                                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="حذف" onclick="$(this).parent().parent().remove();delete_tag('${arr[i]}')">
                                                  
                                                  <i class="material-icons">delete</i></button>

                         </div>
                         
                         </li>

                    `;
      }
      $("body").append(`
            

            <div class="costam-view" >
            <ul class="list-group">
            ${els}
            </ul>
            </div>
            <script>//$('.costam-view').niceScroll()</script>
            `);
    }
  });
}

function show_tags_Images() {
  $.ajax({
    url: "./ajax/show_tags_Images.php",
    type: "post",
    data: {},
    success: d => {
      arr = d.replace(/\s+/g, " ").trim();
      arr = JSON.parse(arr);
      arr = arr.reverse();
      els = `<li class="list-group-item text-right" style="background:#eeeeee6e;cursor:pointer" onclick="$(this).parent().parent().fadeOut()"><i class="material-icons">close</i></li>`;

      for (i in arr) {
        els =
          els +
          `
                         <li class="list-group-item">
                         <div style="display:inline-block" class="col-6">
                         ${arr[i]}
                         </div>
                         <div  style="display:inline-block" class="col-5 text-right">
                         
                                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="حذف" onclick="$(this).parent().parent().remove();delete_tag_Image('${arr[i]}')">
                                                  
                                                  <i class="material-icons">delete</i></button>

                         </div>
                         
                         </li>

                    `;
      }
      $("body").append(`
            

            <div class="costam-view" >
            <ul class="list-group">
            ${els}
            </ul>
            </div>
            <script>//$('.costam-view').niceScroll()</script>
            `);
    }
  });
}

function show_tags_sup() {
  $.ajax({
    url: "./ajax/show_tags_sups.php",
    type: "post",
    data: {},
    success: d => {
      arr = d.replace(/\s+/g, " ").trim();
      arr = JSON.parse(arr);
      arr = arr.reverse();
      els = `<li class="list-group-item text-right" style="background:#eeeeee6e;cursor:pointer" onclick="$(this).parent().parent().fadeOut()"><i class="material-icons">close</i></li>`;

      for (i in arr) {
        els =
          els +
          `
                         <li class="list-group-item">
                         <div style="display:inline-block" class="col-6">
                         ${arr[i]}
                         </div>
                         <div  style="display:inline-block" class="col-5 text-right">
                         
                                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="حذف" onclick="$(this).parent().parent().remove();delete_tag_sup('${arr[i]}')">
                                                  
                                                  <i class="material-icons">delete</i></button>

                         </div>
                         
                         </li>

                    `;
      }
      $("body").append(`
            

            <div class="costam-view" >
            <ul class="list-group">
            ${els}
            </ul>
            </div>
            <script>//$('.costam-view').niceScroll()</script>
            `);
    }
  });
}

function show_tags_() {
  $.ajax({
    url: "./ajax/tag_geter_.php",
    type: "post",
    data: {},
    success: d => {
      arr = d.replace(/\s+/g, " ").trim();
      arr = JSON.parse(arr);

      arr = arr.reverse();
      els = `<li class="list-group-item text-right" style="background:#eeeeee6e;cursor:pointer" onclick="$(this).parent().parent().fadeOut()"><i class="material-icons">close</i></li>`;

      for (i in arr) {
        els =
          els +
          `
                         <li class="list-group-item">
                         <div style="display:inline-block" class="col-6">
                         ${arr[i]}
                         </div>
                         <div  style="display:inline-block" class="col-5 text-right">
                         
                                                  <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="حذف" onclick="$(this).parent().parent().remove();delete_tag_('${arr[i]}')">
                                                  
                                                  <i class="material-icons">delete</i></button>

                         </div>
                         
                         </li>

                    `;
      }
      $("body").append(`
            

            <div class="costam-view" >
            <ul class="list-group">
            ${els}
            </ul>
            </div>
            <script>//$('.costam-view').niceScroll()</script>
            `);
    }
  });
}

function delete_tag(name) {
  $.ajax({
    url: "./ajax/delete_tag.php",
    data: {
      name: name
    },
    type: "post",
    success: d => {
      console.log(d);
    }
  });
}

function delete_tag_(name) {
  $.ajax({
    url: "./ajax/delete_tag_.php",
    data: {
      name: name
    },
    type: "post",
    success: d => {
      console.log(d);
    }
  });
}

function delete_tag_Image(name) {
  $.ajax({
    url: "./ajax/delete_tag_Image.php",
    data: {
      name: name
    },
    type: "post",
    success: d => {
      console.log(d);
    }
  });
}

function delete_tag_sup(name) {
  $.ajax({
    url: "./ajax/delete_tag_sup.php",
    data: {
      name: name
    },
    type: "post",
    success: d => {
      console.log(d);
    }
  });
}

function add_new_tag(table) {
  $.confirm({
    title: "اضافت قسم جديد",
    content:
      "" +
      '<form action="" class="formName">' +
      '<div class="form-group">' +
      '<input type="text" placeholder="اسم القسم"  class="name form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("اسم خطأ");
            return false;
          }
          $.ajax({
            url: "./ajax/add_new_tag.php",
            type: "post",
            data: {
              name: name,
              table: table
            },
            success: d => {
              console.log(d);

              $.alert("تم");
            }
          });
        }
      },
      cancel: function() {
        //close
      }
    }
  });
}

function Vote(el) {
  $.ajax({
    url: "./ajax/vote_info.php",
    data: {},
    type: "post",
    success: data => {
      console.log(data.includes("null"));

      if (data.includes("null") == false) {
        console.log(data);
        data = JSON.parse(data);
        window.vote_data = data;

        q = data[0];
        a = JSON.parse(data[1]);
        d = JSON.parse(data[2]);

        $("#contant").css("background-color", "#e5eff1").html(`
      <div class='col text-right'>
        <button type="button" onclick='Stop_vote()' class="btn btn-danger btn-lg">ايقاف</button>
        <button type="button" onclick='edit_vote()' class="btn  btn-lg">تعديل</button>
      
      </div>
        <div class='row justify-content-md-center'><div class='col-8 text-center'><canvas id='ctx' width=300 height=300></canvas></div></div>
      `);
        ctx = $("#ctx");
        var myBarChart = new Chart(ctx, {
          type: "doughnut",
          data: {
            datasets: [
              {
                data: d,
                backgroundColor: [
                  "#dc3545",
                  "#ffc107",
                  "#6610f2",
                  "#17a2b8",
                  "#20c997",
                  "#e83e8c"
                ]
              }
            ],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: a
          }
        });
      } else {
        $("#contant").css("background-color", "#e5eff1").html(`
         <div class='col text-right'>
                 <button type="button" onclick='add_vote()' class="btn btn-info btn-lg">اضافة استفتاء جديد</button>
              </div>
              <div class='container mt-5'>
              <div class="alert alert-danger" role="alert">
                لا يوجد استفتاء مفعل
              </div>
              </div>
         `);
      }
    }
  });
}

function edit_vote() {
  q = vote_data[0];
  a = JSON.parse(vote_data[1]);
  ans = JSON.parse(vote_data[2]);
  a_html = "";

  for (i in a) {
    a_html =
      a_html +
      `<div class='row p-0 m-0'>
      <input type='hidden' name='ans[]' value='${ans[i]}'>
      <input name='a[]' class="name mb-1 form-control col-10"  value='${a[i]}' />
      <button onclick='$(this).parent().remove()' class='btn btn-link text-danger col-2'><i class="material-icons">
        remove_circle_outline
        </i></button></div>
`;
  }
  $.confirm({
    title: "الاستفتاء",
    content:
      "" +
      '<form action="" name="formName_add_vote">' +
      '<div class="form-group">' +
      "<label>هذا الاستفتاء سيظهر مرة واحده فقط لكل شخص</label>" +
      `<input type="text" name="q" placeholder="ضع السؤال" value='${q}' class="name mb-1 form-control" required />` +
      a_html +
      "</div>" +
      "</form>" +
      '<button onclick="add_new_answer(this)"placeholder="ضع السؤال"  class="name btn btn-warning ">اضافت اجابة اخري<i class="material-icons">add_circle</i></button>',
    buttons: {
      formSubmit: {
        text: "Submit",
        btnClass: "btn-blue",
        action: function() {
          var formData = new FormData($("form[name='formName_add_vote']")[0]);
          console.log(formData);

          $.ajax({
            url: "./ajax/updating_vote.php.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);

              Vote("");
            }
          });
        }
      },
      cancel: function() {}
    }
  });
}

function Stop_vote() {
  $.ajax({
    url: "./ajax/stop_vote.php",
    success: () => {
      Vote("");
    }
  });
}

function add_vote() {
  $.confirm({
    title: "الاستفتاء",
    content:
      "" +
      '<form action="" name="formName_add_vote">' +
      '<div class="form-group">' +
      "<label>هذا الاستفتاء سيظهر مرة واحده فقط لكل شخص</label>" +
      '<input type="text" name="q" placeholder="ضع السؤال" class="name mb-1 form-control" required />' +
      `<div class='row p-0 m-0'>
      <input name='a[]' class="name mb-1 form-control col-10" />
      <button onclick='$(this).parent().remove()' class='btn btn-link text-danger col-2'><i class="material-icons">
        remove_circle_outline
        </i></button></div>` +
      "</div>" +
      "</form>" +
      '<button onclick="add_new_answer(this)"placeholder="ضع السؤال" class="name btn btn-warning ">اضافت اجابة اخري<i class="material-icons">add_circle</i></button>',
    buttons: {
      formSubmit: {
        text: "Submit",
        btnClass: "btn-blue",
        action: function() {
          var formData = new FormData($("form[name='formName_add_vote']")[0]);
          console.log(formData);

          $.ajax({
            url: "./ajax/add_new_vote.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);

              Vote("");
            }
          });
        }
      },
      cancel: function() {}
    }
  });
}

function add_new_answer(el) {
  $(el)
    .prev()
    .append(
      `<div class='row p-0 m-0'>
      <input name='a[]'  placeholder="ضع اجابة" class="name mb-1 form-control col-10" />
      <button onclick='$(this).parent().remove()' class='btn btn-link text-danger col-2'><i class="material-icons">
        remove_circle_outline
        </i></button></div>
`
    );
  return false;
}

function ads(el) {
  $.ajax({
    url: "./ajax/get_ads_html.php",
    success: d => {
      d = JSON.parse(d);
      $("#contant").css("background-color", "#e5eff1").html(`
  
  <div class='col-12 text-center'>
  <div class='col-12 text-right'>
  <button class='btn btn-success btn-lg m-2' onclick="change_ads('${
    d[2]
  }')">تعديل الاعلان</button>
  </div>
  <form>
<div class="alert alert-warning" role="alert">
  يجب ان تكون صورة الاعلان مستطيلة
</div>
<input class=' placeholder form-control mb-2 ${
        d[1] == "true" ? "border-success" : "border-danger"
      }' disabled value='${d[1] == "true" ? "فعال" : "غير فعال"}'> 
<img src='${d[0]}' / height=300 style='width:100%'> 
      

  </form>
  </div>
  
  `);
    }
  });
}

function change_ads(link) {
  $.confirm({
    title: "تغير الاعلان",
    content:
      "" +
      '<form action="" class="formName__ads">' +
      '<div class="form-group">' +
      '<input type="file" name="img" placeholder="الصورة" class=" form-control"  />' +
      `<input type="text" name="link" placeholder="الرابط" value='${link}' class=" form-control mt-1"  />` +
      '<select class="form-control form-control-lg mt-1" name="visable"  >' +
      '<option value="true">فعال</option>' +
      '<option value="false">غير فعال</option>' +
      " </select>" +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "تعديل",
        btnClass: "btn-blue",
        action: function() {
          var formData = new FormData($(".formName__ads")[0]);

          $.ajax({
            url: "./ajax/change_ads.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);
              ads(null);
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });
}

// function save_ads() {
//   code = editAreaLoader.getValue("ads_editor");
//   $.ajax({
//     url: "./ajax/get_ads_html_update.php",
//     data: {
//       code: code
//     },
//     type: "post",
//     success: d => {
//       $.alert("تم الحفظ");
//     }
//   });
// }

function info_web(el) {
  $.ajax({
    url: "./ajax/get_info_system_html.php",
    success: d => {
      // console.log(d);

      $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
  <div class='col-12 text-right'>
  <button class='btn btn-success btn-lg m-2' onclick='save_info_web_system()'>حفظ </button>
  </div>
  <form>
  <h3 class='m-2'>الرؤية و الرسالة والقيم</h3>
  <textarea class='form-control'id='info_c_editor' style='height:500px;'>${d}</textarea>
  </form>
  </div>
`);

      // tinymce.init({
      //   selector: '#info_c_editor',

      // });
      tinymce.remove("#info_c_editor");
      tinymce.init({
        selector: "#info_c_editor",
        height: 500,
        theme: "modern",
        plugins:
          "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
        toolbar1:
          "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        image_advtab: true,

        content_css: [
          "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
          "//www.tinymce.com/css/codepen.min.css"
        ]
      });

      Remove_n();
    }
  });
}

function Remove_n() {
  // console.log("here_remove!");
  setTimeout(() => {
    if (
      $(
        ".mce-widget.mce-notification.mce-notification-warning.mce-has-close.mce-in"
      ).length != 0
    ) {
      $(
        ".mce-widget.mce-notification.mce-notification-warning.mce-has-close.mce-in"
      ).remove();
    } else {
      Remove_n();
    }
  }, 600);
}

function save_info_web_system() {
  var iframe = document.getElementById("info_c_editor_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
  console.log();

  new_code = innerDoc.querySelector("#tinymce").innerHTML;

  console.log(new_code);

  $.ajax({
    url: "./ajax/save_system_info.php",
    type: "post",
    data: {
      code: new_code
    },
    success: d => {
      $.alert("تم الحفظ");
    }
  });
}

function info_web_2(el) {
  $.ajax({
    url: "./ajax/get_info_system_html_2.php",
    success: d => {
      // console.log(d);

      $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
  <div class='col-12 text-right'>
  <button class='btn btn-success btn-lg m-2' onclick='save_info_web_system_2()'>حفظ </button>
  </div>
  <form>
  <h3 class='m-2'>خدماتنا</h3>
  <textarea class='form-control'id='info_c_editor2' style='height:500px;'>${d}</textarea>
  </form>
  </div>
`);

      // tinymce.init({
      //   selector: '#info_c_editor2',

      // });
      tinymce.remove("#info_c_editor2");

      tinymce.init({
        selector: "#info_c_editor2",
        height: 500,
        theme: "modern",
        plugins:
          "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
        toolbar1:
          "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        image_advtab: true,

        content_css: [
          "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
          "//www.tinymce.com/css/codepen.min.css"
        ]
      });
      Remove_n();
    }
  });
}

function save_info_web_system_2() {
  var iframe = document.getElementById("info_c_editor2_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
  console.log();

  new_code = innerDoc.querySelector("#tinymce").innerHTML;

  console.log(new_code);

  $.ajax({
    url: "./ajax/save_system_info_2.php",
    type: "post",
    data: {
      code: new_code
    },
    success: d => {
      $.alert("تم الحفظ");
    }
  });
}

function info_web_3(el) {
  $.ajax({
    url: "./ajax/get_info_system_html_3.php",
    success: d => {
      // console.log(d);

      $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
  <div class='col-12 text-right'>
  <button class='btn btn-success btn-lg m-2' onclick='save_info_web_system_3()'>حفظ </button>
  </div>
  <form>
  <h3 class='m-2'>العضويات</h3>
  <textarea class='form-control'id='info_c_editor3' style='height:500px;'>${d}</textarea>
  </form>
  </div>
`);

      // tinymce.init({
      //   selector: '#info_c_editor3',

      // });
      tinymce.remove("#info_c_editor3");

      tinymce.init({
        selector: "#info_c_editor3",
        height: 500,
        theme: "modern",
        plugins:
          "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
        toolbar1:
          "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        image_advtab: true,

        content_css: [
          "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
          "//www.tinymce.com/css/codepen.min.css"
        ]
      });
      Remove_n();
    }
  });
}

function save_info_web_system_3() {
  var iframe = document.getElementById("info_c_editor3_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
  console.log();

  new_code = innerDoc.querySelector("#tinymce").innerHTML;

  console.log(new_code);

  $.ajax({
    url: "./ajax/save_system_info_3.php",
    type: "post",
    data: {
      code: new_code
    },
    success: d => {
      $.alert("تم الحفظ");
    }
  });
}

function info_web_4(el) {
  $.ajax({
    url: "./ajax/get_info_system_html_4.php",
    success: d => {
      // console.log(d);

      $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
  <div class='col-12 text-right'>
  <button class='btn btn-success btn-lg m-2' onclick='save_info_web_system_4()'>حفظ </button>
  </div>
  <form>
  <h3 class='m-2'>تواصل معنا</h3>
  <textarea class='form-control'id='info_c_editor4' style='height:500px;'>${d}</textarea>
  </form>
  </div>
`);

      // tinymce.init({
      //   selector: '#info_c_editor4',

      // });
      tinymce.remove("#info_c_editor4");

      tinymce.init({
        selector: "#info_c_editor4",
        height: 500,
        theme: "modern",
        plugins:
          "print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help",
        toolbar1:
          "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        image_advtab: true,

        content_css: [
          "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
          "//www.tinymce.com/css/codepen.min.css"
        ]
      });
      Remove_n();
    }
  });
}

function save_info_web_system_4() {
  var iframe = document.getElementById("info_c_editor4_ifr");
  var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
  console.log();

  new_code = innerDoc.querySelector("#tinymce").innerHTML;

  console.log(new_code);

  $.ajax({
    url: "./ajax/save_system_info_4.php",
    type: "post",
    data: {
      code: new_code
    },
    success: d => {
      $.alert("تم الحفظ");
    }
  });
}

function edite_information__V_OR_T(el, type, id) {
  $.ajax({
    url: "./ajax/get_information_for_edite_information__V_OR_T.php",
    type: "post",
    data: {
      id: id,
      type: type
    },
    success: d => {
      console.log(d);

      jsonData = JSON.parse(d);
      $.confirm({
        title: "تعديل علي المنشور",
        content:
          "" +
          '<form action="" class="edite_information__V_OR_T text-right">' +
          `

        <div class="form-group ">
          <input type="text" value='${jsonData[0]}' required="required" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="العنوان الرئسي للدورة">
        </div>
        <div class="form-group ">
          <input type="text" value='${jsonData[1]}'required="required" name="shortbody" class="form-control" id="exampleInputPassword1" placeholder="تعريف صغير عن الدورة">
        </div>
         <div class="form-group">
          <input type="shortbody" value='${jsonData[5]}'required="required" name="name1" class="form-control" id="exampleInputPassword1" placeholder="اسم المنظم">
        </div>
        <div class="form-group">
          <input type="shortbody" required="required"value='${jsonData[6]}' name="name2" class="form-control" id="exampleInputPassword1" placeholder="اسم المنسق">
        </div>
         <div class="form-group">
          <input type="shortbody" required="required" value='${jsonData[7]}'name="mobile" class="form-control" id="exampleInputPassword1" placeholder="جوال المنسق">
        </div>
         <div class="form-group">
          <input type="shortbody" required="required" value='${jsonData[8]}'name="waytype" class="form-control" id="exampleInputPassword1" placeholder="المسارات التطوعية">
        </div>
        <div class="form-group text-right">
          <label for="exampleFormControlSelect1">الفئة المستهدفة		</label>
          <select class="form-control" required="required" name="focus_type_sex" id="exampleFormControlSelect1">
            <option>رجال</option>
            <option>نساء</option>
            <option>الكل</option>
          </select>
        </div>
         <div class="form-group text-right">
          <label for="exampleFormControlSelect1">الجنسية المطلوبة	</label>
          <select class="form-control" required="required" name="focus_people_type" id="exampleFormControlSelect1">
            <option>سعودي</option>
            <option>غير سعودي</option>
            <option>الكل</option>
          </select>
        </div>
        <div class="form-group">
          <input type="shortbody" value='${jsonData[9]}'required="required" name="location" class="form-control" id="exampleInputPassword1" placeholder="مكان التنفيذ	">
        </div>
        <div class="text-right">

        <input type="number" id="tentacles"value='${jsonData[13]}' name="num_hours" required="required" style="margin-right:30px">
             <label>عدد السعات</label>
        </div>

        <div class="form-group">
          <input type="shortbody" required="required"value='${jsonData[10]}' name="city" class="form-control" id="exampleInputPassword1" placeholder="المدينة">
        </div>
        <div class="form-group">
          <textarea type="shortbody" required="required"value='' name="item_needed" class="form-control" id="exampleInputPassword1" placeholder="متطلبات الفرصة	">${jsonData[11]}</textarea>
        </div><div class="form-group">
          <textarea type="shortbody" required="required"value='' name="info" class="form-control" id="exampleInputPassword1" placeholder="تفاصيل الفرصة	">${jsonData[12]}</textarea>
        </div>
        <div class="form-group text-right">
              <label for="exampleInputEmail1">تاريخ البدء </label>

      <input name="date" placeholder=" تاريخ البدء "value='${jsonData[4]}' required="required" type="date" class="form-control" style="display: inline-block;">
       </div>

       <div class="form-group text-right">
             <label for="exampleInputEmail1">تاريخ الانتهاء</label>

      <input name="date2" placeholder=" تاريخ الانتهاء " value='${jsonData[3]}'required="required" type="date" class="form-control" style="display: inline-block;">
       </div>
      <div class="form-group form-check text-right">
          <input type="checkbox" name="agree" checked='' required="required" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">اوافق علي شروط الموقع</label>
        </div>
        <div class="text-right">
          <label class="form-check-label" style="margin-left:52%;" for="exampleCheck1">صورة للدورة</label>
        </div>
        <input type="file" name="img" required="required" style="width:auto;position:relative" class="form-check-input" id="exampleCheck1">

        <div>
        </div>` +
          "</form>",
        buttons: {
          formSubmit: {
            text: "تعديل علي النشر",
            btnClass: "btn-blue",
            action: function() {
              var formData = new FormData($(".edite_information__V_OR_T")[0]);
              formData.append("id_", id);
              formData.append("type_", type);
              $.ajax({
                url: "./ajax/Updating_information__V_OR_T.php",
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: d => {
                  console.log(d);
                  show_contanet(type);
                }
              });
            }
          },
          cancel: function() {
            //close
          }
        }
      });
    }
  });
}

function Images(el) {
  $.ajax({
    url: "./ajax/ControlImages.php",
    data: {},
    type: "post",
    success: data => {
      data = JSON.parse(data);
      html_table = "";
      console.log(data);

      for (i in data) {
        html_table =
          html_table +
          `<tr>
        <td>
        <button onclick='Delete_Image("${data[i][0]}",this);' class='btn btn-sm btn-link m-1'><i class=" text-danger material-icons">
delete
</i></button>
        <button class = 'btn btn-sm btn-link m-1' onclick="edit_Images('${data[i][0]}')"> <i class = "text-info material-icons" >
edit
</i></button>
        </td>
        <td><img width=200 src='${data[i][1]}'></td>
        <td>${data[i][2]}</td>
        <th scope="row">${i}</th>

      </tr>`;
      }
      $("#contant").css("background-color", "#e5eff1").html(`
      
      <div class='col-12 text-center m-5'>
      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">note_add</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">  يمكنك اضافه صورة جديدة</h6>
                        <a href="#" class="btn card-link" onclick="add_new_Image()">اضافة صورة جديد</a>
                        <p class="card-text"></p>
                    </div>
                    </div>
                      <div class="col-3 b-card" style="width: 18rem;box-shadow:0 0 6px 0px #dc3545">
                    <div class="card-body  text-right">
                        <h5 class="card-title"><i class="material-icons text-danger" style="font-size: 42px;color: #20c997;">view_week</i></h5>
                        <h6 class="card-subtitle mb-2 text-muted">الأقسام</h6>
                        <a href="#" class="btn card-link" onclick="show_tags_Images()">عرض</a>
                                                <a href="#" class="btn card-link" onclick="add_new_tag('Image')">اضافة</a>

                        <p class="card-text"></p>
                    </div>
                    </div>
      
      <div class='row'>
      <table class="table">
  <thead>
    <tr>
    <th scope='col'>الإجراءات</th>
    <th scope="col">الصورة</th>
    <th scope="col">العنوان</th>
    <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    ${html_table}
  </tbody>
</table>
      </div>
      
      `);
    }
  });
}

function admins_controlling(el) {
  $.ajax({
    url: "./ajax/admin_controlling.php",
    success: d => {
      console.log(d);

      json_data = JSON.parse(d);
      data = ``;
      window.json___access = [];
      for (i in json_data) {
        var find = '"';
        var re = new RegExp(find, "g");
        json___access[json___access.length] = json_data[i][4];

        data =
          data +
          `
        <tr>
        <td>
        <div class="btn-group" role="group" aria-label="">
        <button type="button" onclick='Delete_admin_(this,"${
          json_data[i][0]
        }")' class="btn btn-danger">مسح</button>
        <button type="button" onclick='edit_admin_(this,"${
          json_data[i][0]
        }", "${json_data[i][1]}", "${
            json_data[i][3]
          }")' class="btn btn-info"> تعديل</button>
        <button type="button" onclick="access_admin_(this,'${
          json_data[i][0]
        }', '${json___access.length - 1}')" class="btn">ضبط الصلاحيات</button>
        
      </div>
        
        </td>
        <td>${json_data[i][3]}</td>
        <th scope="row">${json_data[i][1]}</th>
</tr>
        `;
      }
      $("#contant").css("background-color", "#e5eff1").html(`
  
  <div class='col-12 text-right'>
  <button class='btn btn-lg btn-info' onclick='Add_new_admin()'>اضافه جديد</button>
  </div>
  
  <div class='col-12 text-center text-gray'><h2>الادارة</h2></div>

  <table class="table">
  <thead>
    <tr>
    <th scope="col">الإجراءات</th>
    <th scope="col">الاسم</th>
    <th scope="col">البريد</th>
    </tr>
  </thead>
  <tbody>
   ${data}
  </tbody>
</table>
  
  `);
    }
  });
}

function Add_new_admin() {
  $.confirm({
    title: "Prompt!",
    content:
      "" +
      '<form action="" class="formName__d">' +
      '<div class="form-group">' +
      `
      <div class="alert alert-warning" role="alert">
      يتم منح  الصلاحيات بعد الاضافه
      </div>
      ` +
      "<label>اضافه مشرف جديد</label>" +
      '<input type="text" name="name" placeholder="الاسم" class="name form-control" required />' +
      '<input type="text" name="email" placeholder="البريد" class="name2 form-control" required />' +
      '<input type="password" name="pass" placeholder="الرقم السري" class="name3 form-control" required />' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "اضافه",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("خطأ");
            return false;
          }
          var name = this.$content.find(".name2").val();
          if (!name) {
            $.alert("خطأ");
            return false;
          }
          var name = this.$content.find(".name3").val();
          if (!name) {
            $.alert("خطأ");
            return false;
          }

          var formData = new FormData($(".formName__d")[0]);

          $.ajax({
            url: "./ajax/add_new_admin.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              admins_controlling(null);
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });
}

function Delete_admin_(el, id) {
  $.confirm({
    title: "هل انت متاكد",
    content: "هذا يمكن ان يمسح معلومات مهمة",
    buttons: {
      confirm: function() {
        $(el)
          .parent()
          .parent()
          .parent()
          .fadeOut();

        $.ajax({
          url: "./ajax/delete_admin.php",
          type: "post",
          data: {
            id: id
          },
          success: d => {
            $.alert("تم الحذف");
          }
        });
      },
      cancel: function() {
        $.alert("تم الالغاء");
      }
    }
  });
}

function edit_admin_(el, id, email, name) {
  $.confirm({
    title: "تحديث للمعلومات",
    content:
      "" +
      '<form action="" class="formName_admin_change">' +
      '<div class="form-group">' +
      '<input name="id" type="hidden" value="' +
      id +
      '" />' +
      `<div class="alert alert-warning" role="alert">
        اذا لم كان حقل الرقم السري فارغ فلن يتغير
      </div>` +
      '<input type="text" value="' +
      name +
      '"name="name" placeholder="الاسم" class="name form-control mb-1 placeholder-right"/ required >' +
      '<input type="email" value="' +
      email +
      '"name="email" placeholder="البريد الاكتروني" class="name2 form-control  mb-1 placeholder-right" required />' +
      '<input type="password" name="pass" placeholder="الرقم السري" class=" form-control  mb-1 placeholder-right"/>' +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "تحديث",
        btnClass: "btn-blue",
        action: function() {
          var name = this.$content.find(".name").val();
          if (!name) {
            $.alert("خطا");
            return false;
          }
          var name2 = this.$content.find(".name2").val();
          if (!name2) {
            $.alert("خطا");
            return false;
          }

          var formData = new FormData($(".formName_admin_change")[0]);

          $.ajax({
            url: "./ajax/admin_changing_info.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);

              $.alert("تم");
              admins_controlling(null);
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });
}

function access_admin_(el, id, old_access) {
  old_access = JSON.parse(json___access[old_access]);
  arr_c = [
    "نظام",
    "احصئيات",
    "الدورات التدريبية",
    "الفرص التطوعية",
    "الأخبار",
    "الاحداث",
    "المكتبة",
    "الصور",
    "الفيديوهات",
    "اعضاء",
    "المتطوعين الموثقين",
    "داعمين",
    "متطوعين",
    "الفرق",
    "المدربين",
    "الجهات المستفاده",
    "الاستفتاء",
    "الاعلانات",
    "شهدات",
    "بطاقات العضوية",
    "من نحن",
    "خدماتنا",
    "العضويات ",
    "تواصل معنا ",
    "المؤسسين",
    "الادارة",
    "شريط التطبيق العلوي",
    "  شريط التطبيق العلوي الفرعي",
    "التحكم في الصفحات",
    "تفعيل - الغاء تفعيل الموقع",
    "نسخة احتياطية من قاعدة البيانات "
  ];

  html = "";

  for (i in arr_c) {
    old_found_ = +i + 1; // becoase for start at 0 to etc

    console.log(old_found_);
    console.log(old_access);

    if (old_access.includes(`${old_found_}`)) {
      html =
        html +
        `
    <div class="form-group form-check form-check-inline">
    <input value="${old_found_}" name="access_arr[]" type="checkbox" checked class="form-check-input" id="exampleCheck1${i}">
    <label class="form-check-label" for="exampleCheck1${i}">${arr_c[i]}</label>
  </div>
    `;
    } else {
      html =
        html +
        `
    <div class="form-group form-check form-check-inline">
    <input  value="${old_found_}"type="checkbox" name="access_arr[]" class="form-check-input" id="exampleCheck1${i}">
    <label class="form-check-label" for="exampleCheck1${i}">${arr_c[i]}</label>
  </div>
    `;
    }
  }
  $("#contant").css("background-color", "#e5eff1").html(`

    <form class='form_access'>

    <div class='col-12 text-right '> 
    <h3>ضبط الصلاحيات</h3>
    <div class="alert alert-danger" role="alert">
    حدد صلاحيات الشخص بالضغط على العلامة أدناه</div>
    </div>

    <div class='col-12 text-right p-3 border border-warning'>${html}</div>

    </form>
    <div class='col text-center'>
    <button  class="btn btn-success btn-lg w-50 mt-3" onclick='save_access("${id}")'>تحديث</button>
    <button  class="btn btn-danger btn-lg w-50 mt-3" onclick='admins_controlling(null)'>رجوع</button>
</div>
    
    `);
}

function save_access(id) {
  var formData = new FormData($(".form_access")[0]);
  formData.append("id", id);
  $.ajax({
    url: "./ajax/admin_change_access.php",
    type: "post",
    cache: false,
    contentType: false,
    processData: false,
    data: formData,
    success: d => {
      console.log(d);

      $.alert("تم");
      admins_controlling(null);
    }
  });
}

window.onload = () => {
  $(".bluecover").fadeOut();
  $.ajax({
    url: "./ajax/programmer_msg.php",
    success: d => {
      msg = d.replace(/\s+/g, " ").trim();
      if (msg != "null") {
        Swal("!تحديث جديد من دعم الموقع", `${msg}`, "success");

        $.ajax({
          url: "./ajax/programmer_msg.php",
          type: "post",
          data: {
            delete: "true"
          },
          success: d => {
            console.log(msg);
            console.log("done!");
          }
        });
      }
    }
  });
};

function top_appbar2(el) {
  $.ajax({
    url: "./ajax/get_appbar2.php",
    success: d => {
      d = JSON.parse(d);
      console.log(d);

      Table = `<table class="table">
  <thead>
    <tr>
    <th scope="col">الإجراءات</th>
    <th scope="col">الحالة</th>
    <th scope="col">النوع</th>
    <th scope="col">الرابط</th>
    <th scope="col">عنوان</th>

    </tr>
  </thead>
  <tbody>
    `;

      for (i in d) {
        Table =
          Table +
          `

          <tr>
          <td>
          <a class='btn btn-link' onclick='remove_appbar_link2("${
            d[i][5]
          }")'><i class='material-icons text-danger'>remove</i></a>

          <a class='btn btn-link ' onclick='edit_appbar_link2("${
            d[i][5]
          }")'><i class='material-icons text-primary'>edit</i></a>
          </td>
          <td> ${
            d[i][3] == "true"
              ? '<span class="text-success">ظاهر</span>'
              : '<span class="text-danger">مخفي</span>'
          } </td>
          <td>رابط</td>
          <td>${d[i][1]}</td>
          <th scope="row">${d[i][2]}</th>
    </tr>
      `;
      }
      Table =
        Table +
        `  </tr>
  </tbody>
</table>`;
      $("#contant").css("background-color", "#e5eff1").html(`
      <div class='col-12 text-center'>
      شريط التطبيق العلوي الفرعي
      </div>
      <div class='col-12 text-right'>
      <div class="alert alert-warning mt-2" role="alert">
  سيتم محو كل التعديلات و المسح و استرجاع النسخة الاصلية للقائمة القديمة
</div>
      
      <button class='btn btn-sm btn-warning' onclick='recoved_appbar()'>استرجاع القائمة الثابته</button></div>
        <div class='col-12 text-center mt-2'>
        
        ${Table}
        <buttun class='btn btn-lg btn-block btn-success' onclick='add_new_appbar_link()'>اضافه جديدة</buttun>
        </div>
      `);
    }
  });
}

function top_appbar(el) {
  $.ajax({
    url: "./ajax/get_appbar.php",
    success: d => {
      d = JSON.parse(d);
      console.log(d);

      Table = `<table class="table">
  <thead>
    <tr>
    <th scope="col">الإجراءات</th>
    <th scope="col">الحالة</th>
    <th scope="col">النوع</th>
    <th scope="col">الرابط</th>
    <th scope="col">عنوان</th>

    </tr>
  </thead>
  <tbody>
    `;

      for (i in d) {
        Table =
          Table +
          `

          <tr>
          <td>
          <a class='btn btn-link' onclick='remove_appbar_link("${
            d[i][5]
          }")'><i class='material-icons text-danger'>remove</i></a>

          <a class='btn btn-link ' onclick='edit_appbar_link("${
            d[i][5]
          }")'><i class='material-icons text-primary'>edit</i></a>
          </td>
          <td> ${
            d[i][2] == "true"
              ? '<span class="text-success">ظاهر</span>'
              : '<span class="text-danger">مخفي</span>'
          } </td>
          <td>${d[i][3] == "link" ? "رابط" : "قائمة اسقاط"}</td>
          <td>${d[i][3] == "link" ? d[i][1] : "لا يوجد"}</td>
          <th scope="row">${d[i][0]}</th>
    </tr>
      `;
      }
      Table =
        Table +
        `  </tr>
  </tbody>
</table>`;
      $("#contant").css("background-color", "#e5eff1").html(`
      <div class='col-12 text-center'>
      شريط التطبيق العلوي
      </div>
      <div class='col-12 text-right'>
      <div class="alert alert-warning mt-2" role="alert">
  سيتم محو كل التعديلات و المسح و استرجاع النسخة الاصلية للقائمة القديمة
</div>
      
      <button class='btn btn-sm btn-warning' onclick='recoved_appbar()'>استرجاع القائمة الثابته</button></div>
        <div class='col-12 text-center mt-2'>
        
        ${Table}
        <buttun class='btn btn-lg btn-block btn-success' onclick='add_new_appbar_link()'>اضافه جديدة</buttun>
        </div>
      `);
    }
  });
}

function edit_appbar_link2(id) {
  $.ajax({
    url: "./ajax/get_appbar_foucs_one2.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      d = JSON.parse(d);
      // console.clear();
      console.log(d);
      $.ajax({
        url: "./ajax/get_appbar_foucs_one.php",
        type: "post",
        data: {
          id: d[0],
          type: "other"
        },
        success: dv => {
          dv = JSON.parse(dv);
          console.log(dv, "3333");
          $.ajax({
            url: "./ajax/get_appbar.php",

            success: dvv => {
              dvv = JSON.parse(dvv);
              console.log(dvv);
              options = ``;
              options = options + `<option value='${dv[1]}'>${dv[0]}</option>`;
              for (i in dvv) {
                if (dvv[i][1] != dv[1] && dvv[i][3] == "dropdown") {
                  options =
                    options +
                    `<option value='${dvv[i][1]}'>${dvv[i][0]}</option>`;
                }
              }

              $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
      تعديل علي شريط التطبيق العلوي الفرعي
      </div>

    <div class='col-12 text-right mt-2'>
      
    <form id='appbar_Edit' onsubmit="event.preventDefault(); ">


  <div class="form-group">
    <label for="exampleInputEmail1">العنوان</label>
    <input type="text" name='title' value='${d[2]}' class="form-control text-right" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="العنوان">
  </div>
  <div class="form-group" method='post'>
    <label for="exampleInputPassword1">اختر القائمة الخاصة به</label>
              <select name='link_id' class="form-control ">
              ${options}
              </select>
    </div>

  <div class="form-group" method='post'>
    <label for="exampleInputPassword1">الرابط</label>
    <input  type="text" name='link' value='${d[1]}' class="form-control " id="exampleInputPassword1" placeholder="الرابط">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">النوع</label>
        <select disabled class="form-control " >
        <option value='link'>رابط</option>
        </select>
    </div>

  <div class="form-group">
    <label  for="exampleInputPassword1">الحالة</label>
    <select name='state'  class="form-control">
    <option value='true'>فعال</option>
    <option value='false'>غير فعال</option>
    </select>
  </div>

  <button type="" onclick="sava_new_info_appbar2('${d[5]}');return false;" class="btn btn-primary btn-lg btn-block">تعديل</button>

    
    </form>
    
    </div>
  `);
            }
          });
        }
      });
    }
  });
}

function edit_appbar_link(id) {
  $.ajax({
    url: "./ajax/get_appbar_foucs_one.php",
    type: "post",
    data: {
      id: id
    },
    success: d => {
      d = JSON.parse(d);
      $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
     تعديل علي شريط التطبيق العلوي 
      </div>

    <div class='col-12 text-right mt-2'>
      
    <form id='appbar_Edit' onsubmit="event.preventDefault(); ">


  <div class="form-group">
    <label for="exampleInputEmail1">العنوان</label>
    <input type="text" name='title' value='${
      d[0]
    }' class="form-control text-right" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="العنوان">
  </div>
  <div class="form-group" method='post'>
    <label for="exampleInputPassword1">الرابط</label>
    <input ${d[3] == "link" ? "" : "disabled"}  ${
        d[4] == "false" ? "" : "disabled"
      } type="text" name='link' value='${
        d[1]
      }' class="form-control " id="exampleInputPassword1" placeholder="الرابط">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">النوع</label>
        <select name='type' ${
          d[4] == "false" ? "" : "disabled"
        } class="form-control">
   ${
     d[3] == "link"
       ? ` <option value='link'>رابط</option>
    <option value='dropdown'>قائمة اسقاط</option>`
       : `<option value='dropdown'>قائمة اسقاط</option><option value='link'>رابط</option>
    `
   }
    </select>
    </div>

  <div class="form-group">
    <label  for="exampleInputPassword1">الحالة</label>
    <select name='state'  class="form-control">
    <option value='true'>فعال</option>
    <option value='false'>غير فعال</option>
    </select>
  </div>

  <button type="" onclick="sava_new_info_appbar('${
    d[5]
  }');return false;" class="btn btn-primary btn-lg btn-block">تعديل</button>

    
    </form>
    
    </div>
  `);
    }
  });
}

function sava_new_info_appbar(id) {
  form = new FormData($("#appbar_Edit")[0]);
  form.append("id", id);
  $.ajax({
    url: "./ajax/save_new_info_appber.php",
    type: "post",
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    success: d => {
      console.log(d);
      top_appbar(null);
    }
  });
  return false;
}

function sava_new_info_appbar2(id) {
  form = new FormData($("#appbar_Edit")[0]);
  form.append("id", id);
  $.ajax({
    url: "./ajax/save_new_info_appber2.php",
    type: "post",
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    success: d => {
      console.log(d);
      top_appbar2(null);
    }
  });
  return false;
}

function add_new_appbar_link() {
  $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
    اضافة جديد
</div>

    <div class='col-12 text-right mt-2'>
      
    <form id='appbar_create' onsubmit="event.preventDefault(); ">


  <div class="form-group">
    <label for="exampleInputEmail1">العنوان</label>
    <input type="text" name='title' class="form-control text-right" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="العنوان">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">نوع الرابط</label>
        <select name='link_type' onchange='checking_link_type(this)' class="form-control">
        <option value='1'>داخلي</option>
        <option  value='0'>خارجي</option>
    

   
    </select>
    </div>

   <div class="form-group">
    <label for="exampleInputPassword1">النوع</label>
        <select name='type' class="form-control">
        <option value='link'>رابط</option>
   <option value='dropdown'>قائمة اسقاط</option>
    

   
    </select>
    </div>

  <div class="form-group">
    <label  for="exampleInputPassword1">الحالة</label>
    <select name='state'  class="form-control">
    <option value='true'>فعال</option>
    <option value='false'>غير فعال</option>
    </select>
  </div>

  <button type="" onclick="create_new_one_appbar_eleemnt();return false;" class="btn btn-primary btn-lg btn-block">اضافة</button>

    
    </form>
    
    </div>
  `);
}

function checking_link_type(el) {
  console.log(el.value);

  if (el.value == "0") {
    $(el).parent()
      .after(`  <div id='link_id_for_appbar' class="form-group" method='post'>

    <label for="exampleInputPassword1">الرابط</label>
    <input  type="text" name='link' class="form-control " id="exampleInputPassword1" placeholder="الرابط">
  </div>`);
  } else {
    $("#link_id_for_appbar").remove();
  }
}

function create_new_one_appbar_eleemnt() {
  form = new FormData($("#appbar_create")[0]);

  $.ajax({
    url: "./ajax/create_new_appbar_element.php",
    type: "post",
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    success: d => {
      console.log(d);
      top_appbar(null);
    }
  });
  return false;
}

function remove_appbar_link2(id) {
  $.confirm({
    title: "هل انت متاكد!",
    content: "يمكن ان تفقد معلومات مهمة",
    buttons: {
      مسح: function() {
        $.ajax({
          url: "./ajax/remove_appbar_link2.php",
          type: "post",
          data: {
            id: id
          },
          success: d => {
            console.log(d);

            $.alert("تم المسح!");
            top_appbar2(null);
          }
        });
      },
      الغاء: function() {}
    }
  });
}

function remove_appbar_link(id) {
  $.confirm({
    title: "هل انت متاكد!",
    content: "يمكن ان تفقد معلومات مهمة",
    buttons: {
      مسح: function() {
        $.ajax({
          url: "./ajax/remove_appbar_link.php",
          type: "post",
          data: {
            id: id
          },
          success: d => {
            console.log(d);

            $.alert("تم المسح!");
            top_appbar(null);
          }
        });
      },
      الغاء: function() {}
    }
  });
}

function recoved_appbar() {
  $.confirm({
    title: "هل انت متاكد!",
    content: "يمكن ان تفقد معلومات مهمة",
    buttons: {
      استرجاع: function() {
        $.ajax({
          url: "./ajax/recoved_appbar.php",
          type: "post",

          success: d => {
            console.log(d);

            $.alert("تم استرجاع المعلومات!");
            top_appbar(null);
          }
        });
      },
      الغاء: function() {}
    }
  });
}

function add_new_appbar_link() {
  $.ajax({
    url: "./ajax/get_appbar.php",

    success: dvv => {
      dvv = JSON.parse(dvv);
      console.log(dvv);
      options = ``;
      for (i in dvv) {
        if (dvv[i][3] == "dropdown") {
          options =
            options + `<option value='${dvv[i][1]}'>${dvv[i][0]}</option>`;
        }
      }

      $("#contant").css("background-color", "#e5eff1").html(`

<div class='col-12 text-center'>
      اضافة شريط التطبيق العلوي الفرعي
      </div>

    <div class='col-12 text-right mt-2'>
      
    <form id='appbar_create' onsubmit="event.preventDefault(); ">


  <div class="form-group">
    <label for="exampleInputEmail1">العنوان</label>
    <input type="text" name='title'  class="form-control text-right" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="العنوان">
  </div>
  <div class="form-group" method='post'>
    <label for="exampleInputPassword1">اختر القائمة الخاصة به</label>
              <select name='link_id' class="form-control ">
              ${options}
              </select>
    </div>

  <div class="form-group" method='post'>
    <label for="exampleInputPassword1">الرابط</label>
    <input  type="text" name='link'  class="form-control " id="exampleInputPassword1" placeholder="الرابط">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">النوع</label>
        <select disabled class="form-control " >
        <option value='link'>رابط</option>
        </select>
    </div>

  <div class="form-group">
    <label  for="exampleInputPassword1">الحالة</label>
    <select name='state'  class="form-control">
    <option value='true'>فعال</option>
    <option value='false'>غير فعال</option>
    </select>
  </div>

  <button type="" onclick="add_new_info_appbar2();return false;" class="btn btn-primary btn-lg btn-block">اضافة</button>

    
    </form>
    
    </div>
  `);
    }
  });
}

function add_new_info_appbar2() {
  form = new FormData($("#appbar_create")[0]);

  $.ajax({
    url: "./ajax/create_new_appbar_element2.php",
    type: "post",
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    success: d => {
      console.log(d);
      top_appbar2(null);
    }
  });
  return false;
}

function controlling_pages() {
  $.ajax({
    url: "./ajax/get_ALL_LINKS.php",

    success: d => {
      d = JSON.parse(d);
      console.log(d);
      options = ``;
      for (o in d) {
        for (i in d[o]) {
          if (d[o][i].length == 6) {
            options =
              options + `<option value='${d[o][i][5]}'>${d[o][i][2]}</option>`;
          } else {
            options =
              options + `<option value='${d[o][i][5]}'>${d[o][i][0]}</option>`;
          }
        }
      }

      $("#contant").css("background-color", "#e5eff1").html(`
    <div class='col-12 text-right'>

    <div class="form-group">
    <label>اختر الصفحة المراد التعديل عليها</label>
      <select class="form-control" onchange='controlling_pages_onchange(this)' name="" id="">
      <option value='none'>اختر الرابط </option>
        ${options}
      </select>
    </div>

    </div>
    <div class='col-12 text-center' id='contant__editor_pages'>
    
    </div>

   `);
    }
  });
}

function controlling_pages_onchange(el) {
  if (el.value != "none") {
    $.ajax({
      url: "./ajax/check_if_have_already_page_.php",
      type: "post",
      data: {
        id: el.value
      },
      success: d => {
        d = d.replace(/\s+/g, " ").trim();
        console.log(d);

        if (d == "false") {
          $("#contant__editor_pages").html(`
          
          <textarea id='contant__editor_pages_editor'></textarea>
          
          <button class='btn btn-success btn-lg btn-block mt-2' onclick="save__page_controlling('${el.value}', 'false')">حفظ</button>
          
          `);

          $("#contant__editor_pages_editor")
            .froalaEditor({
              imageUploadURL: "./ajax/upload_image_editor.php"
            })
            .on("froalaEditor.image.error", function(
              e,
              editor,
              error,
              response
            ) {
              console.log(error);
              console.log(response);
            });
        } else {
          $.ajax({
            url: "./ajax/get_content_pages.php",
            type: "post",
            data: {
              id: el.value
            },
            success: d => {
              d = JSON.parse(d);
              console.log(d);
              $("#contant__editor_pages").html(`
          
          <textarea id='contant__editor_pages_editor'>${d[1]}</textarea>
          
          <button class='btn btn-success btn-lg btn-block mt-2' onclick="save__page_controlling('${el.value}', 'false')">حفظ</button>
          
          `);

              $("#contant__editor_pages_editor")
                .froalaEditor({
                  imageUploadURL: "./ajax/upload_image_editor.php"
                })
                .on("froalaEditor.image.error", function(
                  e,
                  editor,
                  error,
                  response
                ) {
                  console.log(error);
                  console.log(response);
                });
            }
          });
        }
      }
    });
  }
}

function save__page_controlling(id, type) {
  $.ajax({
    url: "./ajax/save__page_controlling.php",
    type: "post",
    data: {
      id: id,
      html: $(".fr-element.fr-view").html(),
      type: type
    },
    success: d => {
      $.alert("تم الحفظ");
      console.log(d);
    }
  });
}

function success_event(email) {
  $.confirm({
    title: "",
    content:
      "" +
      '<form action="" class="success_forming">' +
      '<div class="form-group text-right">' +
      `
       <div class="form-group"><label>العنوان او السبب </label>
       <input type="text" name='title' placeholder="العنوان او السبب " class="pass form-control" required=""></div>

  <div class="form-group"><label>عدد الساعات</label>
       <input type="number" name='time_add' placeholder="عدد الساعات" class="pass form-control" required=""></div>

         <div class="form-group"><label>نوع الساعات</label>
       <select type="number" name='seltype' placeholder="نوع الساعات" class="pass form-control" required="">
       <option value='v'>ساعات تطوعية</option>
       <option value='t'>ساعات تدريبة</option>
       <select>
       </div>
      <div class="alert alert-danger" role="alert">
اذا كان اتم هذا المتطوع المهمة يمكنك اعطائة شهاده و نقاط المخصصة له</div>` +
      `<div class="alert alert-warning" role="alert">
سيتم إعطاء النقاط تلقائيا بمجرد الموافقه </div>` +
      "<label>الشهاده</label>" +
      `  <div class="custom-file">
    <input type="file" class="custom-file-input" name='img'id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>` +
      "</div>" +
      "</form>",
    buttons: {
      formSubmit: {
        text: "منح  النقاط",
        btnClass: "btn-blue",
        action: function() {
          var formData = new FormData($(".success_forming")[0]);
          formData.append("admin", "true");
          formData.append("email", email);

          $.ajax({
            url: "./ajax/success_event.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);
              // window.location.reload();
              $.alert("تم");
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });
}

// $found = false;

// function collapse_controlling(el) {
//   $('[collapse_]').next().slideUp('fast', () => {

//     $(el).next().slideDown();
//   });

// }

function HideShowToolsBar(e) {
  if (e.innerText == "إِخْفاء") {
    $(".list-group").hide();

    $("#contant")
      .addClass("col-xl-12")
      .addClass("col-lg-12")
      .addClass("col-md-12")
      .addClass("col-sm-12");
    e.innerText = "إِبَانَةٌ";
  } else {
    e.innerText = "إِخْفاء";

    $(".list-group").show();
    $("#contant")
      .removeClass("col-xl-12")
      .removeClass("col-lg-12")
      .removeClass("col-md-12")
      .removeClass("col-sm-12");
  }
}
