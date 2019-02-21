$(document).ready(function(){
  $('.owl-carousel').owlCarousel();
});

// FANCYBOX
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

});

$('.focus').hover(function() {
    $(this).find('img').fadeTo(500, 0.5);
}, function() {
    $(this).find('img').fadeTo(500, 1);
});

$(document).ready(function(){
    setTimeout(function () {
        $("#cookieConsent").fadeIn(200);
     }, 4000);
    $("#closeCookieConsent, .cookieConsentOK").click(function() {
        $("#cookieConsent").fadeOut(200);
    });
});
