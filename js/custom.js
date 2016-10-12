if (screen.width <= 770) {
document.location = "mobile/mobileindex.html";
}

$(function () {
    $('.tlt').textillate({
    	loop: true,
    	minDisplayTime: 1000,
    });
});
$(function () {
    $('.developer').textillate({
      loop: true,
      minDisplayTime: 500,
    });
});
$(function(){
    $("#interactive_bg").interactive_bg({
   	strength: 50,
   	scale: 1,
   	animationSpeed: "1000ms",
   	contain: true,
   	wrapContent: true
 });
});
$(window).resize(function() {
	  $("#interactive_bg > .ibg-bg").css({
   width: $(window).outerWidth(),
   height: $(window).outerHeight()
  });
});
$(document).ready(function() {
  $('.container_heart').hide().fadeIn(3000);
});
$(function(){
    $(".interactive_bg_works").interactive_bg({
    strength: 50,
    scale: 1.2,
    animationSpeed: "300ms",
    contain: true,
    wrapContent: true
 });
});
$(window).resize(function() {
    $(".interactive_bg_works > .ibg-bg").css({
   width: $(window).outerWidth(),
   height: $(window).outerHeight()
  });
});
