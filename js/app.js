$(document).ready(function () {
  // nav scroll
  
  scrollWindow();


  $(window).scroll(function() {
    scrollWindow();
  });

  function scrollWindow(){
     var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $(".nav-container").addClass("scrolling");
    } else {
        $(".nav-container").removeClass("scrolling");
    }
  }

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



// function mobilenav() {
//   if (windowWidth < 1024) {
 
//     $(".main-nav ul li.hassub > a").attr('href','');

//     $(".main-nav ul li.hassub > a").click(function(e){

//           // code here

//         e.preventDefault();
//        $(".main-nav ul li.hassub").removeClass('current');
//        $(this).next("ul").slideToggle();
//         $(this).parent('li').toggleClass('current');

//     });
//   }
// }

// $( window ).resize(function() {
//    mobilenav();
// });
//     mobilenav();

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


  //OPEN SECONDARY NAV PANELS
  $('.primary-nav #m-alumni').click(function (e) {
    e.preventDefault();
    $('.primary-nav').slideUp();
    $('.alumni-nav').slideDown();
  });

  $('.primary-nav #m-services').click(function (e) {
    e.preventDefault();
    $('.primary-nav').slideUp();
    $('.services-nav').slideDown();
  });

  $('.primary-nav #m-about').click(function (e) {
    e.preventDefault();
    $('.primary-nav').slideUp();
    $('.about-nav').slideDown();
  });


  //CLOSE SECONDARY NAV PANELS
  $('.alumni-nav .back-primary').click(function (e) {
    e.preventDefault();
    $('.alumni-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  $('.services-nav .back-primary').click(function (e) {
    e.preventDefault();
    $('.services-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  $('.about-nav .back-primary').click(function (e) {
    e.preventDefault();
    $('.about-nav').slideUp();
    $('.primary-nav').slideDown();
  });


  //OPEN TERTIARY NAV PANELS
  // $('.alumni-nav #m-involved').click(function (e) {
  //   e.preventDefault();
  //   $('.alumni-nav').slideUp();
  //   $('.involved-nav').slideDown();
  // });

  $('.services-nav #m-development').click(function (e) {
    e.preventDefault();
    $('.services-nav').slideUp();
    $('.development-nav').slideDown();
  });

  $('.about-nav #m-leadership').click(function (e) {
    e.preventDefault();
    $('.about-nav').slideUp();
    $('.leadership-nav').slideDown();
  });



  //CLOSE TERTIARY NAV PANELS
  // $('.involved-nav .back-primary').click(function (e) {
  //   e.preventDefault();
  //   $('.involved-nav').slideUp();
  //   $('.primary-nav').slideDown();
  // });

  // $('.involved-nav .back-secondary').click(function (e) {
  //   e.preventDefault();
  //   $('.involved-nav').slideUp();
  //   $('.alumni-nav').slideDown();
  // });

  $('.development-nav .back-primary').click(function (e) {
    e.preventDefault();
    $('.development-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  $('.development-nav .back-secondary').click(function (e) {
    e.preventDefault();
    $('.development-nav').slideUp();
    $('.services-nav').slideDown();
  });

  $('.leadership-nav .back-primary').click(function (e) {
    e.preventDefault();
    $('.leadership-nav').slideUp();
    $('.primary-nav').slideDown();
  });

  $('.leadership-nav .back-secondary').click(function (e) {
    e.preventDefault();
    $('.leadership-nav').slideUp();
    $('.about-nav').slideDown();
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
