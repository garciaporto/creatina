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
