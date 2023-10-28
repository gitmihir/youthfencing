function o() {
  var isMobile = {
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
  };
  if (isMobile.Opera())
    alert(
      "Looks like you are using Opera Mini, please use a different browser"
    );
}
window.onload = o;
jQuery(document).ready(function () {
  jQuery(this).attr("data-position", "");
  jQuery(this).attr("data-image", "");
  jQuery(this).attr("data-title", "");
  jQuery(this).attr("data-content", "");
  jQuery(".more-infdata").click(function () {
    let dataposition = jQuery(this).attr("data-position");
    let dataimage = jQuery(this).attr("data-image");
    let datatitle = jQuery(this).attr("data-title");
    let datacontent = jQuery(this).attr("data-content");
    jQuery(".imgw100").attr("src", dataimage);
    jQuery(".title").html(datatitle);
    jQuery(".subtitle").html(dataposition);
    jQuery(".columnmode2").html(datacontent);
  });
});

$("#send-button").click(function(){
 
    const URL =
      "https://3hj72nxrhw4xjmnk7jq4ln4x440oimyv.lambda-url.us-east-1.on.aws/"; //All4b-lamb2-Api //All4b-lamb2-Api
    let form = document.getElementById("form");
    let infoArea = document.getElementById("info");
  
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      debugger;
      let name = document.getElementById("name").value;
      let email = document.getElementById("email").value;
      let note = document.getElementById("message").value;
  
      //show the loading gif when submit bottons is clicked
      // $("#loading-img").css("display","block");
      document.getElementById("loading-img").style.display = "block";
  
      let data = {
        name: name,
        email: email,
        note: note,
        capt: grecaptcha.getResponse(),
      };
  
      let http = new XMLHttpRequest();
  
      output = (message) => {
        console.log(message);
        infoArea.value = message;
      };
  
      http.onreadystatechange = (status) => {
        if (http.readyState === XMLHttpRequest.DONE) {
          let status = http.status;
          if (status === 0 || (status >= 200 && status < 400)) {
            if ("ok" === JSON.parse(http.responseText).result) {
              output("Thanks. Your message has been sent");
              document.getElementById("form").reset();
              document.getElementById("info").innerHTML =
                "Thanks. Your message has been sent";
              document.getElementById("info").style.color = "green";
              document.getElementById("loading-img").style.display = "none";
              grecaptcha.reset();
  
              form.disabled = true;
            } else {
              //  output("Sorry. There was a problem. Please sure you're not a robot");
              document.getElementById("info").innerHTML =
                "Sorry. There was a problem. Please make sure you're not a robot";
              document.getElementById("info").style.color = "#ff0000";
              document.getElementById("loading-img").style.display = "none";
            }
          } else {
            //output("Sorry. There was a problem. Check that you have enter everyting and the reCaptcha is checked");
            document.getElementById("info").innerHTML =
              "Sorry. There was a problem. Check that you have enter everyting and the reCaptcha is checked";
            document.getElementById("info").style.color = "#ff0000";
            document.getElementById("loading-img").style.display = "none";
          }
        }
      };
  
      http.open("POST", URL, true);
      http.setRequestHeader("Content-type", "application/json; charset=utf-8");
  
      //http.send(JSON.stringify(data));  //also good to use
      http.send(
        JSON.stringify({
          name: name,
          email: email,
          note: note,
          capt: grecaptcha.getResponse(),
        })
      );
    });
});


window.addEventListener("load", function () {
  let btnTop = document.getElementById("btn-top");
  // display the button when user scrolls more than 20px
  window.onscroll = function () {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      btnTop.style.display = "block";
    } else {
      btnTop.style.display = "none";
    }
  };
  btnTop.addEventListener("click", function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });
});
$(document).ready(function () {
  $(".text-field").hide();
  $("#signup-form").submit(function (e) {
    debugger
    e.preventDefault();

    var valid;
    valid = validateContact();
    if (valid) {
      $("#loading-img").css("display", "block");
      var sendData = $(this).serialize();
      var $form = $(this),
        urlData = $form.attr("action");
      $.ajax({
        method: "POST",
        url: urlData,
        data: sendData,
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        success: function (data) {
          $("#loading-img").css("display", "none");
          $(".response_msg").text(data);
          $(".response_msg").slideDown().fadeOut(5000);
          if (data.type == "error") {
            output = '<div class="error">' + data.text + "</div>";
          } else {
            output = '<div class="success">' + data.text + "</div>";
          }
        },
        error: function () {},
      });
    }
    return false;
  });

  function validateContact() {
    var valid = true;
    $(".demoInputBox").css("background-color", "");
    $(".info").html("");

    if (!$("#fname").val()) {
      $("#name-info").html("(required)");
      $("#name-info").css("color", "red");
      $("#name-info").css("font-family", "Raleway");
      $("#name-info").css("font-size", "16px");
      $("#fname").css("border-color", "red");
      valid = false;
    }
    if (!$("#femail").val()) {
      $("#email-info").html("(required)");
      $("#email-info").css("color", "red");
      $("#email-info").css("font-family", "Raleway");
      $("#email-info").css("font-size", "16px");
      $("#femail").css("border-color", "red");
      valid = false;
    }
    if (
      !$("#femail")
        .val()
        .match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    ) {
      $("#email-info").html("(invalid)");
      $("#email-info").css("color", "red");
      $("#femail").css("background-color", "#FFFFDF");
      $("#femail").css("border-color", "red");
      valid = false;
    }
    return valid;
  }

  $("#signup-form input").blur(function () {
    var checkValue = $(this).val();
    if (checkValue != "") {
      $(this).css("border", "1px solid #eeeeee");
    }
  });
});
$(document).ready(function () {
  function e() {
    $(".nav-toggle").click(function () {
      $(".nav").toggleClass("open");
    });
  }

  function s() {
    $('a[href^="#"]').click(function (e) {
      var s = $($(this).attr("href"));
      s.length &&
        (e.preventDefault(),
        $("html, body").animate(
          {
            scrollTop: s.offset().top - 15,
          },
          300
        )),
        $(".nav").toggleClass("open");
    });
  }
  e(), s();
});
