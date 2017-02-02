(function( $ ) {

 //This will show/hide the navigation list in mobile view.
 $('.menu-toggle').on('click', function(){
   event.preventDefault();
   $(this).focus()
   $('#primary-menu').animate({height:'toggle'},350);
 });

 $('.menu-toggle').on('focusout', function(){
   event.preventDefault();
   $('#primary-menu').animate({height:'toggle'},350);
 });

 $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      var height = $(window).height();
      if (scroll >= height) {
          $("#masthead").removeClass("hero-display");
      } else {
          $("#masthead").addClass("hero-display");
      }
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

 //This will show answer in FAQ sections on click.
  $('.faq-text').on('click', function(){
    $(this).toggleClass('move');
  })

})( jQuery );
