$(document).ready(function () {
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
  $('.main-nav ul li .dropdown ul li:has(ul)').addClass('hassub');


  $('.main-nav ul li .dropdown ul li.hassub').hover(function(){
    //alert('g');
    var current=$(this).find('ul');
    if($(current).css('display') == 'block')
    {
  //alert("Ok");
  $(this).parent().parent().addClass('multi');
    }
    else {
      $('.main-nav ul li .dropdown ul li:has(ul)').parent().parent().removeClass('multi');
    }
  });


  //MOBILE NAVIGATION FUNCTIONALITY
  $('.mobile-nav .colapsed').click(function (e) {
    $('.expanded-nav').slideToggle();
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

});
