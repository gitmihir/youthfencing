$(document).ready(function() {
	
	$(".text-field").hide();
	
	$("#signup-form").submit(function(e)
		{
		e.preventDefault(); 
	
	
	var valid;	
      valid = validateContact();
		if(valid) {
	
		$("#loading-img").css("display","block");
		
		var sendData = $( this ).serialize();

		var $form = $(this),
		urlData = $form.attr('action');
		
				$.ajax({
				   method: "POST",
				   url: urlData,
				   data: sendData, 
				   contentType: "application/x-www-form-urlencoded; charset=utf-8",
				   success: function(data){
					  $("#loading-img").css("display","none");
					  
					  $(".response_msg").text(data);
					  $(".response_msg").slideDown().fadeOut(5000);
                    //  $('#name').attr("placeholder").fadeOut(9000).val('');
                   	//  $("#name").attr("placeholder", "Enter Name2").val("").focus().blur(9000);
					//  $('#name').val('');
					//  $('#email').val('');
					//  $('#subject').val('');
					//  $('#message').val('');
					//  $('#message').val('');
					//  grecaptcha.reset();
					  
					  if(data.type == 'error'){
							output = '<div class="error">'+data.text+'</div>';
							}
							else{
							output = '<div class="success">'+data.text+'</div>';
							}
				   }, //SUCCESS Function()
					error: function() {}
				}); //AJAX
				
		
		} //if(valid)
      
      return false;
		
	}); //.on("submit")
	

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#name-news").val()) {
		$("#name-info").html("(required)");
		$("#name-info").css('color','red');
		$("#name-news").css('background-color','#FFFFDF');
		$("#name-news").css('border-color','red');
	//	$("#name").css('border-width','2px');
	//	$("#name").attr("placeholder", "Please enter your Name").val("").focus().blur();
		valid = false;
	}
	if(!$("#email-news").val()) {
		$("#email-info").html("(required)");
		$("#email-info").css('color','red');
		$("#email-news").css('background-color','#FFFFDF');
		$("#email-news").css('border-color','red');
	//	$("#email").css('border-width','2px');
	//	$("#email").attr("placeholder", "Please enter your Email").val("").focus().blur();
		valid = false;
	}
	if(!$("#email-news").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email-info").html("(invalid)");
		$("#email-info").css('color','red');
		$("#email-news").css('background-color','#FFFFDF');
		$("#email-news").css('border-color','red');
	//	$("#email").css('border-width','2px');
	//	$("#email").attr("placeholder", "Please enter a valid Email").val("").focus().blur();
		valid = false;
	}
//	if(!$("#subject").val()) {
//		$("#subject-info").html("(required)");
//		$("#subject").css('background-color','#FFFFDF');
//		valid = false;
//	}
//	if(!$("#message").val()) {
//		$("#message-info").html("(required)");
//		$("#message").css('background-color','#FFFFDF');
//		valid = false;
//	}
	
	return valid;
}
	

	
	$("#signup-form input").blur(function(){
		var checkValue = $(this).val();
		if(checkValue != '')
		{
			$(this).css("border","1px solid #eeeeee");
		}
	});//#contact-form input")
		
		
});  //(document).ready