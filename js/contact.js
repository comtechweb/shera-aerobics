// JavaScript Document
var id = "#contact_form"; //form ID

$.validator.addMethod("notEqual", function(value, element, param) {
  		return this.optional(element) || value != param;
	}, " ");
function randomNumber() {
var randNum = 999999 + Math.floor(Math.random() * 9999999);
return randNum;
}
$(document).ready(function() {
	var randnum =randomNumber();
	$(id).submit(function() { 
    	// check validation 
   	 	if($(id).valid()){
			//submit the form	
			$(this).ajaxSubmit({
                url:"mailer/send-contact.php?_="+randnum,
				success : FormSendResponse, 
				beforeSubmit: showPleaseWait
			}); 
    	}else{
			return false;	
		}
    	return false; 
	});

	$(id).validate({
		rules: {
			name: "required",
			phone: {
				required: true,
				notEqual: '077'
			},
			email: {
				required: true,
				email: true
			},
			message: "required"
		},
		messages: {
			name: "",
			phone: "",
			email:"",
			message:""
		}
	});	
	//Contact form ajax submit
	
	$('.retryFormSubmit').click(showFormAgain);
	
});

//AJAX Form submission functions
function showFormAgain(){
	$('.formMessage').hide(0,function(){
		$(id).fadeIn(500);
	});
}

function showPleaseWait() {
	$(id).fadeOut(500,function(){
		$('#formPleaseWait').show();
	});
}

function FormSendResponse(responseText, statusText, xhr, $form){
	$(id).fadeOut(500,function(){
		$('.formMessage').hide();
		if(responseText=='ok'){
			$('#formOk').fadeIn(300);	
		}else{
			$('#formError').fadeIn(300);
		}
	});
}