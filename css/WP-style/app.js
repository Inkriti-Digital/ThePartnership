$(document).ready(function () {
  var windowWidth = $(window).width();
  
  // nav scroll
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $(".nav-container").addClass("scrolling");
    } else {
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
  // $(".main-nav ul li.hassub").removeClass('current');



function mobilenav() {
  if (windowWidth < 1024) {
 
    // $(".main-nav ul li.hassub > a").attr('href','');

    // $(".")

    $(".main-nav ul li.hassub > a").click(function(e){          // code here

        e.preventDefault();
        console.log('clicked' + this);
        $(this).parent('li').toggleClass('current');
        $(this).next("ul").slideToggle();
        // $(this).closest("li").find("ul").slideToggle(); 

        // $(".main-nav ul li.hassub").removeClass('current');
        // $(this).next("ul").slideToggle();
        // $(this).parent('li').toggleClass('current');
    });
  }
}

$( window ).resize(function() {
   mobilenav();
});
    mobilenav();

  // $('.main-nav ul li .dropdown ul li.hassub').hover(function(){
  //   //alert('g');
  //   var current=$(this).find('ul');
  //   if($(current).css('display') == 'block')
  //   {
  // //alert("Ok");
  // $(this).parent().parent().addClass('multi');
  //   }
  //   else {
  //     $('.main-nav ul li .dropdown ul li:has(ul)').parent().parent().removeClass('multi');
  //   }
  // });


  //MOBILE NAVIGATION FUNCTIONALITY
  $('#mobil-navico').click(function (e) {

    $('#topnav #navwrap').slideToggle();
  });



  $('.primary-nav #m-alumni').click(function (e) {
    e.preventDefault();
    $('.primary-nav').slideUp();
    $('.alumni-nav').slideDown();
  });

  //return to main from alumni nav
  $('.alumni-nav .back-btn').click(function (e) {
    e.preventDefault();
    $('.alumni-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  $('.alumni-nav #m-involved').click(function (e) {
    e.preventDefault();
    $('.alumni-nav').slideUp();
    $('.involved-nav').slideDown();
  });


  $('.primary-nav #m-alumni').click(function (e) {
    e.preventDefault();
    $('.primary-nav').slideUp();
    $('.alumni-nav').slideDown();
  });

  //return to main from alumni nav
  $('.alumni-nav .back-btn').click(function (e) {
    e.preventDefault();
    $('.alumni-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  $('.alumni-nav #m-involved').click(function (e) {
    e.preventDefault();
    $('.alumni-nav').slideUp();
    $('.involved-nav').slideDown();
  });


  //return to alumni nav from get involved
  $('.involved-nav .back-primary').click(function (e) {
    e.preventDefault();
    $('.involved-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  //return to alumni nav from get involved
  $('.involved-nav .back-alumni').click(function (e) {
    e.preventDefault();
    $('.involved-nav').slideUp();
    $('.alumni-nav').slideDown();
  });

  //return to alumni nav from get involved
  $('.involved-nav .back-primary').click(function (e) {
    e.preventDefault();
    $('.involved-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  //return to alumni nav from get involved
  $('.involved-nav .back-alumni').click(function (e) {
    e.preventDefault();
    $('.involved-nav').slideUp();
    $('.alumni-nav').slideDown();
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
