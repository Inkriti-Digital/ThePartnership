$(document).ready(function () {
  var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
  $(window).bind(mousewheelevt, function(e){

    var evt = window.event || e //equalize event object
    evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible
    var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta //check for detail first, because it is used by Opera and FF

    if(delta > 0) {
      $(".nav-container").addClass("scrolling");
    }
    else{
      $(".nav-container").removeClass("scrolling");
    }
  });


  //hover controls
  $(document).on('mouseenter', '.service_list li', function () {
    $(this).find(".tooltip").fadeIn();
  }).on('mouseleave', '.service_list li', function () {
    $(this).find(".tooltip").fadeOut();
  });

  // top search button
  $('#searchbtn').click(function () {
    $(this).toggleClass('active');
        $('#searchblock').stop(true).fadeToggle();
    })

  // dropdown
  $('.main-nav ul li:has(ul)').addClass('hassub');
  var windowWidth = $(window).width();
 $(".main-nav ul li.hassub").removeClass('current');

 function mobilenav() {
   if (windowWidth < 1024) {

     $(".main-nav ul li.hassub > a").attr('href','');
     $(".main-nav ul li.hassub > a").click(function(e){
 // // code here
          e.preventDefault();
        $(".main-nav ul li.hassub").removeClass('current');
        //$(this).next("ul").slideToggle();
 		 /*here the code*/
		 $(this).next("ul").removeClass('hide_dropdown');
		 $(this).next("ul").addClass('show_dropdown');
		   $(this).next("ul").stop().animate({top: '0'});
         });
   }
 }

$(document).delegate('.main-nav ul li ul li.current.backto', 'click', function(e){
   e.preventDefault();
     $(this).parent("ul").animate({top: '100%'});
   });

 $( window ).resize(function() {
    mobilenav();
 });
     mobilenav();
   //MOBILE NAVIGATION FUNCTIONALITY
  $('#mobil-navico').click(function (e) {

    $('#topnav #navwrap').slideToggle();
     });

   //  POST CONTROL, READ MORE, READ LESS
   $(".readMore").click(function(e) {
      e.preventDefault();
      console.log('clicky clicks');
      $(this).closest(".post-content").find("#postMore").slideDown();
      $(this).closest(".post-content").find(".readMore").toggle();
      $(this).closest(".post-content").find(".readLess").toggle();
   });

   $(".readLess").click(function(e) {
      e.preventDefault();
      console.log('clicky clicks');
      $(this).closest(".post-content").find("#postMore").slideUp();
      $(this).closest(".post-content").find(".readMore").toggle();
      $(this).closest(".post-content").find(".readLess").toggle();
   });

});
