window.addEventListener("load", (event) => {
  const URL =
    "https://c8ofs0autc.execute-api.us-east-1.amazonaws.com/prod/contactmail";

  let form = document.getElementById("form");
  let infoArea = document.getElementById("info");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let note = document.getElementById("message").value;

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
            document.getElementById("info").innerHTML =
              "Thanks. Your message has been sent";
            document.getElementById("info").style.color = "green";

            form.disabled = true;
          } else {
            //  output("Sorry. There was a problem. Please sure you're not a robot");
            document.getElementById("info").innerHTML =
              "Sorry. There was a problem. Please sure you're not a robot";
            document.getElementById("info").style.color = "#ff0000";
          }
        } else {
          //output("Sorry. There was a problem. Check that you have enter everyting and the reCaptcha is checked");
          document.getElementById("info").innerHTML =
            "Sorry. There was a problem. Check that you have enter everyting and the reCaptcha is checked";
          document.getElementById("info").style.color = "#ff0000";
        }
      }
    };

    http.open("POST", URL, true);
    http.setRequestHeader("Content-type", "application/json; charset=utf-8");

    http.send(JSON.stringify(data));
  });
});
