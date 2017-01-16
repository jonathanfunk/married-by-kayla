(function( $ ) {

 //This will show/hide the navigation list in mobile view.
 $('.menu-toggle').on('click', function(){
   event.preventDefault();
   $('#primary-menu').animate({height:'toggle'},350);
 });

 $('.menu-toggle').on('focusout', function(){
   event.preventDefault();
   $('#primary-menu').animate({height:'toggle'},350);
 });

 //This animates scroll navigation.
 var offset = $("header").height();
 $('a[href*="#"]:not([href="#"])').click(function() {
   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
     var target = $(this.hash);
     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
     if (target.length) {
       $('html, body').animate({
         scrollTop: target.offset().top - offset
       }, 1000);
       return false;
     }
   }
 });

 //This gives the navigation an overlay on scroll.
 $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 10) {
        $("#masthead").addClass("overlay");
      } else {
        $("#masthead").removeClass("overlay");

      }
  });

  $('.faq-text').on('click', function(){
    $(this).toggleClass('move');
  })

})( jQuery );
