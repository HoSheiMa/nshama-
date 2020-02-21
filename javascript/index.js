window.onload = () => {
  $(".bluecover").fadeOut();

  // rezisebody();
  // $('body').niceScroll();

  // function rezisebody() {
  //     $('body').getNiceScroll().resize();

  //     setTimeout(() => {
  //         rezisebody();
  //     }, 600);
  // }

  $("#send_ask").on("click", () => {
    $.confirm({
      title: "نرحب بقتراحك!",
      content:
        "" +
        '<form action="" class="formName text-right">' +
        '<div class="form-group">' +
        "<label>اكتب مضمون المشكلة او الطلب</label>" +
        '<input type="text" placeholder="عنوان بريدك الاكتروني" class=" address form-control" required> ' +
        '<div style="height:20px;"></div>' +
        '<textarea type="text" height=300 placeholder="اكتب مضمون المشكلة" class="problem form-control" required /></textarea>' +
        "</div>" +
        "</form>",
      buttons: {
        formSubmit: {
          text: "Submit",
          btnClass: "btn-blue",
          action: function() {
            var problem = this.$content.find(".problem").val();
            if (!problem) {
              $.alert("provide a valid problem is null");
              return false;
            }
            var email = this.$content.find(".address").val();
            if (!email) {
              $.alert("provide a valid email is null");
              return false;
            }
            $.ajax({
              url: "ajax/problem.php",
              type: "post",
              data: {
                address: email,
                problem: problem
              },
              success: d => {
                console.log(d);

                $.alert("تم ارسال , شكرا لك");
              },
              error: () => {
                $.alert("هناك خطأ حاول في وقت اخر او تاكد من اتصالك بالنت");
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
  });
};
el = document.createElement("div");

el.className = "bluecover text-center";
el.style = "padding-top: 20vh";
img = document.createElement("img");
img.src = "assets/loading.gif";
img.width = 300;
img.height = 300;
$(el)
  .append(img)
  .appendTo("body");

window.checking_1 = check => {
  if (check == false) {
    $.ajax({
      url: "ajax/Certificates.php",
      type: "post",
      data: {
        code: $("#Certificates-checker").val()
      },
      success: d => {
        arr = JSON.parse(d);
        console.log(arr);

        if (arr[3] != null) {
          $(".contant").html(
            `
                        <table class="table">
  <thead>
    <tr>
    <th scope="col">كود الشهاده</th>
    <th scope="col">الاسم</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>${arr[0]}</td>
    <td>${arr[1]}</td>
    </tr>
  </tbody>
</table>
  <table class="table">
  <thead>
    <tr>
    <th scope="col"> الشهاده</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
    <td class = "text-center" > <img download id="img" src='${arr[2]}'
    width=300 height=300></td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary" onclick="down_img(this)">تحميل الصورة</button>
  <button type="button" class="btn btn-secondary" onclick="print_img(this)">طباعة</button>
</div></td>
    </tr>
  </tbody>
</table>



                        `
          );
          // $('body').niceScroll({
          //     zindex: 999,
          //     background: "rgba(20,20,20,0.3)",
          // });
        } else {
          $(".contant")
            .html("<h3>الكود خطا او ليس موجود</h3>")
            .addClass("text-center");
        }
      }
    });
  } else {
    $.ajax({
      url: "ajax/card.php",
      type: "post",
      data: {
        code: $("#Certificates-checker2").val()
      },
      success: d => {
        window.arr = JSON.parse(d);
        console.log(arr);

        if (arr[3] != null) {
          $(".contant").html(
            `
                        <table class="table">
  <thead>
    <tr>
    <th scope="col">كود الشهاده</th>
    <th scope="col">الاسم</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>${arr[0]}</td>
    <td>${arr[1]}</td>
    </tr>
  </tbody>
</table>
  <table class="table">
  <thead>
    <tr>
    <th scope="col"> الشهاده</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
    <td class="text-center"><img  download id="img" src='${arr[2]}'
    width=300 height=300></td>
    <td>
        <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary" onclick="down_img(this)">تحميل الصورة</button>
  <button type="button" class="btn btn-secondary" onclick="print_img(this)">طباعة</button>
</div></td>
    </tr>
  </tbody>
</table>

                        `
          );
          // $('body').niceScroll({
          //     zindex: 999,
          //     background: "rgba(20,20,20,0.3)",
          // });
        } else {
          $(".contant")
            .html("<h3>الكود خطا او ليس موجود</h3>")
            .addClass("text-center");
        }
      }
    });
  }
};

$("#Certificates-checker").on("keypress", e => {
  key = e.key;
  if (key == "Enter") {
    checking_1(false);
  }
});
$("#Certificates-checker-btn").on("click", () => {
  checking_1(false);
});

$("#Certificates-checker2").on("keypress", e => {
  key = e.key;
  if (key == "Enter") {
    checking_1(true);
  }
});
$("#Certificates-checker-btn2").on("click", () => {
  checking_1(true);
});

down_img = el => {
  var img = $(el)
    .parent()
    .parent()
    .prev()
    .children()[0];
  window.location.assign(img.src);
};
print_img = el => {
  var img = $(el)
    .parent()
    .parent()
    .prev()
    .children()[0];
  $(img).css({
    position: "absolute",
    left: "0px",
    top: "0px",
    width: "100vw",
    height: "100vh",
    zIndex: "999"
  });
  window.print();
};

// scroll page event

$(window).on("scroll", e => {
  self = "#nav-bar-controller";
  // where in screen
  var where = window.pageYOffset;
  // console.log(where);

  if (where < 20) {
    $(self)
      .removeClass("navbar-light")
      .removeClass("costam-navbar2")
      .addClass("navbar-dark");
  } else {
    $(self)
      .removeClass("navbar-dark")
      .addClass("costam-navbar2")
      .addClass("navbar-light");
  }
});

$("#scroll-down").on("click", d => {
  var n = window.innerHeight;
  $("html, body").animate(
    {
      scrollTop: n
    },
    1000
  );
});

function scroll_to_from() {
  document.querySelector("#form_contant").scrollIntoView();
}

function join_(id, el, type, name) {
  $(el).fadeOut();
  $.ajax({
    url: "helper/join.php",
    type: "post",
    data: {
      id: id,
      type: type,
      name: name
    },
    success: d => {
      console.log(d);
    }
  });
}

function event__(action_type, el, seltype, email, id) {
  $.ajax({
    url: "ajax/event__.php",
    type: "post",
    data: {
      action_type: action_type,
      seltype: seltype,
      email: email,
      id: id
    },
    success: d => {
      // console.log(d);

      window.location.reload();
    }
  });
}

function event__w(action_type, el, seltype, email, id) {
  $.ajax({
    url: "ajax/event__2.php",
    type: "post",
    data: {
      action_type: action_type,
      seltype: seltype,
      email: email,
      id: id
    },
    success: d => {
      // console.log(d);

      window.location.reload();
    }
  });
}

function success_event(el, seltype, email, id) {
  $.confirm({
    title: "",
    content:
      "" +
      '<form action="" class="success_forming">' +
      '<div class="form-group text-right">' +
      `<div class="alert alert-danger" role="alert">
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
        text: "اعطاء النقاط",
        btnClass: "btn-blue",
        action: function() {
          var formData = new FormData($(".success_forming")[0]);
          formData.append("seltype", seltype);
          formData.append("email", email);
          formData.append("id", id);

          $.ajax({
            url: "ajax/success_event.php",
            type: "post",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: d => {
              console.log(d);
              window.location.reload();
            }
          });
        }
      },
      الغاء: function() {
        //close
      }
    }
  });

  // $.ajax({
  //     url: 'ajax/success_event.php',
  //     type: 'post',
  //     data: {
  //         seltype: seltype,
  //         email: email,
  //         id: id,
  //     },
  //     success: (d) => {
  //         // console.log(d);

  //     }
  // })
}

function change_password() {
  $.confirm({
    title: "",
    content:
      "" +
      '<form action="" class="formName">' +
      '<div class="form-group">' +
      "<label>كلمة السر الجديدة</label>" +
      '<input type="password" placeholder="الرقم السري الجديد" class="name form-control" required />' +
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
          $.ajax({
            url: "ajax/change_password.php",
            type: "post",
            data: {
              new_password: name
            },
            success: d => {
              console.log(d);

              $.alert("تم التغير بنجاح");
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

function content_show_BookShowCase(id) {
  $.ajax({
    url: "ajax/content_show_BookShowCase.php",
    type: "post",
    data: {
      id: id
    },

    success: data => {
      data = JSON.parse(data);

      $("body").append(
        `<div class="row m-0 BookShowCase_info wow bounceInLeft">
                <div class='col-md-8 col-lg-8 col-lx-8 col-sm-12 text-right'>
                <span class="badge badge-info">${data["tag"]}</span>
                    
                <h3>${data["name"]}</h3>
               
               
                    <h6>الكاتب</h6>
                    <div class="dropdown-divider"></div>
                    <h5 class='text-dark'>${data["writer"]}</h5>
                 
                          <h6 class='mt-2'>تعريف للكتاب</h6>
                          <div class="dropdown-divider"></div>
                          <h5>${data["body"]}</h5>

                                          <div class="dropdown-divider mt-2"></div>
                    <a href="${data["source"]}"  target="_blank" class='btn btn-sm btn-warning'>تحميل</a>
                    <button class = 'btn btn-sm btn-danger'
                    onclick = '$(this).parent().parent().fadeOut()' > اغلاق </button>
                </div>
                <div class='col-md-4 col-lg-4 col-lx-4  col-sm-12 '>
                <img src='${data["cover"]}' width=350 height=500>
                </div>

                    </div>`
      );

      $(window).scrollTop(0);
    }
  });
}

function content_show_Video(id) {
  $.ajax({
    url: "ajax/content_show_Video.php",
    type: "post",
    data: {
      id: id
    },

    success: data => {
      data = JSON.parse(data);

      $("body").append(
        `<div class="row m-0 BookShowCase_info wow bounceInLeft">
                <div class='col-md-8 col-lg-8 col-lx-8 col-sm-12 text-right'>
                <span class="badge badge-info">${data["tag"]}</span>
                    
                <h3>${data["name"]}</h3>
               
               
                          <h6 class='mt-2'>تعريف</h6>
                          <div class="dropdown-divider"></div>
                          <h5>${data["body"]}</h5>

                                          <div class="dropdown-divider mt-2"></div>
                    <a href="${data["source"]}"  target="_blank" class='btn btn-sm btn-warning'>تحميل</a>
                    <button class = 'btn btn-sm btn-danger'
                    onclick = '$(this).parent().parent().fadeOut()' > اغلاق </button>
                </div>
                <div class='col-md-4 col-lg-4 col-lx-4  col-sm-12 '>
                 <video style='width:100%;height:50%;' controls>
                <source src = '${data["source"]}'
                type = 'video/mp4' >
                </video>
                </div>

                    </div>`
      );

      $(window).scrollTop(0);
    }
  });
}

if (Cookies.get("vote") == undefined || Cookies.get("vote_id") == undefined) {
  Show_Vote();
} else {
  $.ajax({
    url: "ajax/get_vote_id_.php",
    success: data => {
      data = JSON.parse(data);
      if (Cookies.get("vote_id") != data[0]) {
        Show_Vote();
      }
    }
  });
}

window.vote_to = nu => {
  $.ajax({
    url: "ajax/add_new_vote_person.php",
    type: "post",
    data: {
      nu: nu
    },
    success: d => {
      d = JSON.parse(d);
      console.log("------->" + d[0]);

      Cookies.set("vote", "true");
      Cookies.set("vote_id", `${d[0]}`);

      Swal("شكرا!", "رأيك يهمنا", "success");
    }
  });
};

function Show_Vote() {
  $.ajax({
    url: "ajax/vote_info.php",
    type: "post",
    data: {},
    success: data => {
      console.log(data);
      data = JSON.parse(data);

      ask = data[0];
      html = `<div class="btn-group" role="group" aria-label="Basic example">`;

      list_answer = JSON.parse(data[1]);

      for (i in list_answer) {
        html =
          html +
          `<button target__vote='${i}' class="btn btn-dark btn-vote">${list_answer[i]}</button>`;
      }
      html = html + "</div>";
      Swal({
        title: `${ask}`,
        html: `${html}`,
        type: "warning",
        showConfirmButton: false
      });

      $(".btn-vote").on("click", d => {
        vote_to($(d.currentTarget).attr("target__vote"));
      });
    }
  });
}

function join_team(el, team_email, team_name) {
  $.ajax({
    url: "ajax/join_in_team.php",
    type: "post",
    data: {
      team_email: team_email,
      team_name: team_name
    },
    success: d => {
      $(el).remove();
      Swal("شكرا!", "تم الاشتراك في الفريق", "success");
      console.log(d);
    }
  });
}

function checkId(type) {
  id_test = $($("#no")[0]).val();

  $.ajax({
    url: "./ajax/id_test.php",
    type: "post",
    data: {
      id_test: id_test,
      type: type
    },
    success: d => {
      d = d.replace(/\s+/g, " ").trim();

      console.log(d);

      if (d == "found") {
        $($("#id_status")[0])
          .html("هذا الرقم مستعمل بالفعل")
          .addClass("text-danger")
          .removeClass("text-success");
      } else {
        $($("#id_status")[0])
          .html("متاح")
          .addClass("text-success")
          .removeClass("text-danger");
      }
    }
  });
}
function HasArabicCharacters(text) {
  var arregex = /[\u0600-\u06FF]/;
  return arregex.test(text);
}
function checkEmail(type) {
  email = $($("#email")[0]).val();

  if (HasArabicCharacters(email)) {
    $($("#email_status")[0])
      .html("هذا البريد لا يصلح")
      .addClass("text-danger")
      .removeClass("text-success");
    return;
  }

  $.ajax({
    url: "./ajax/id_email.php",
    type: "post",
    data: {
      email: email,
      type: type
    },
    success: d => {
      d = d.replace(/\s+/g, " ").trim();

      //   console.log(d);

      if (d == "found") {
        $($("#email_status")[0])
          .html("هذا البريد مستعمل بالفعل")
          .addClass("text-danger")
          .removeClass("text-success");
      } else {
        $($("#email_status")[0])
          .html("متاح")
          .addClass("text-success")
          .removeClass("text-danger");
      }
    }
  });
}

function checkPhone(type) {
  phone = $($("#phone")[0]).val();

  if (HasArabicCharacters(phone)) {
    $($("#phone_status")[0])
      .html("هذا الجوال لا يصلح")
      .addClass("text-danger")
      .removeClass("text-success");
    return;
  }

  $.ajax({
    url: "./ajax/test_phone.php",
    type: "post",
    data: {
      phone: phone,
      type: type
    },
    success: d => {
      d = d.replace(/\s+/g, " ").trim();

      console.log(d);

      if (d == "found") {
        $($("#phone_status")[0])
          .html("هذا الجوال مستعمل بالفعل")
          .addClass("text-danger")
          .removeClass("text-success");
      } else {
        $($("#phone_status")[0])
          .html("متاح")
          .addClass("text-success")
          .removeClass("text-danger");
      }
    }
  });
}

function img_error_replace(image) {
  image.onerror = "";
  image.src = "assets/5c0c608643cf72.76407581.png";
  return true;
}
