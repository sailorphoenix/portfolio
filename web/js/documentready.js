function contactFormValidate(){
    $('#footer-contact-form').validate({
        onsubmit: false,
        onkeyup: true,
        rules : {
            'contact[nom]' : {
            	required: true
            },
            'contact[prenom]' : {
            	required: true
            },
            'contact[mail]' : {
            	email: true,
            	required : true
            },
            'contact[objet]' : {
            	maxlength: 10,
            	required: true
            },
            'contact[message]' : {
            	required: true
            }
        }
    });
}

function heightMenuRWD (){
	var height = $('#main-content').height();
	$('#trigger').height(height + 1);
}

$(document).ready(function (){
    heightMenuRWD(); 
    contactFormValidate();
});

$(window).resize(function () {
	heightMenuRWD();
});
