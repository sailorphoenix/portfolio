function heightMenuRWD (){
    var height = $('#main-content').height();
    $('#trigger').height(height + 1);
}

function errorCaptcha (){
    var next = $('footer label[for=contact_captcha]').next();
    var li = next.children('li');
    if (li.length) {
        smoothScroll.animateScroll( null, '#formulaire-contact' );
    }
}

$(document).ready(function (){
    heightMenuRWD();
    smoothScroll.init();
    errorCaptcha();
});

$(window).resize(function () {
    heightMenuRWD();
});
