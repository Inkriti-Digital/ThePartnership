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


});
