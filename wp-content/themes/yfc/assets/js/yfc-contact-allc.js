  window.addEventListener('load', (event) => {
      
      const URL       = "https://3hj72nxrhw4xjmnk7jq4ln4x440oimyv.lambda-url.us-east-1.on.aws/"; //All4b-lamb2-Api //All4b-lamb2-Api
    
      let form        = document.getElementById('form');
      let infoArea    = document.getElementById('info');
    
      form.addEventListener('submit', (event) => {
    
          event.preventDefault();
    
          let name = document.getElementById('name').value;
          let email = document.getElementById('email').value;
          let note = document.getElementById('message').value;

          //show the loading gif when submit bottons is clicked
         // $("#loading-img").css("display","block");
          document.getElementById('loading-img').style.display = "block";

    
          let data = {
              'name': name,
              'email': email,
              'note': note,
              'capt': grecaptcha.getResponse()
          };
    
          let http = new XMLHttpRequest();
    
          output = (message) => {
              
              console.log( message );
              infoArea.value = message;
          };
    
          http.onreadystatechange = (status) => {
              if(http.readyState === XMLHttpRequest.DONE){
                  
                  let status = http.status;
                  if (status === 0 || (status >= 200 && status < 400)) {
                                          
                      if ("ok" === JSON.parse(http.responseText).result){
                          output("Thanks. Your message has been sent");
                          document.getElementById("form").reset();
                          document.getElementById("info").innerHTML = "Thanks. Your message has been sent";
                          document.getElementById("info").style.color = "green";  
                          document.getElementById('loading-img').style.display = "none";
                          grecaptcha.reset();


    
                          form.disabled = true;
                      }else{
                        //  output("Sorry. There was a problem. Please sure you're not a robot");
                        document.getElementById("info").innerHTML = "Sorry. There was a problem. Please make sure you're not a robot";
                        document.getElementById("info").style.color = "#ff0000";
                        document.getElementById('loading-img').style.display = "none";
                    }
    
                  } else {
                      //output("Sorry. There was a problem. Check that you have enter everyting and the reCaptcha is checked");
                      document.getElementById("info").innerHTML = "Sorry. There was a problem. Check that you have enter everyting and the reCaptcha is checked";
                      document.getElementById("info").style.color = "#ff0000";  
                      document.getElementById('loading-img').style.display = "none";           
                 
                    }
              }
          };
    
          http.open("POST", URL, true);
          http.setRequestHeader("Content-type", "application/json; charset=utf-8");
    
          //http.send(JSON.stringify(data));  //also good to use
          http.send(JSON.stringify({ 'name': name, "email": email, 'note': note, 'capt': grecaptcha.getResponse() }));
  
      });
    });
