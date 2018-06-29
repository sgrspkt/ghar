$(document).ready(function (){
// main search bar check function
  $('.propertype .columnCommon li label').click(function(){

    $(this).siblings('span').toggleClass('checked');
  })

  $('.form-field input').click(function(){
    $(this).next('.propertype').slideToggle();
    $(this).next('.priceRange').slideToggle();

  })

// price range click fucntion 
  $('.rangeOption .minrange').click(function(){

   $('.rangeMax').css('display', 'none');
   $('.rangeMin').css('display', 'block');
    
  });
  $('.rangeOption .maxrange').click(function(){
     $('.rangeMax').css('display', 'block');
     $('.rangeMin').css('display', 'none');
    
  });


//sticky header
  "use strict";
  $('.list-view').hide();
  mtSticky();
  $(window).scroll(mtSticky);
  function mtSticky() {
    var height = $(window).scrollTop(), stickyHeight = $('.header-section').outerHeight();
    $('body').removeClass('mt-sticky');
    if(height  > stickyHeight) {
      $('body').addClass('mt-sticky');
      
      } else {
      $('body').removeClass('mt-sticky'); 
    }
  }	
 
 // select fomr wrap
     $("select").addClass( "js-example-basic-single" );

    // 

$('.gs-extra-form a.gs-more').click(function(){
  $('.gs-refinements').slideToggle();
  $(this).toggleClass('active');
});
$('.gs-conditions').click(function(){
  $('.gs-condiv').slideToggle();
   $(this).toggleClass('active');
});

$('#list').click(function(event) {
  $('.list-view').show();
  $('.grid-view').hide();
});
$('#grid').click(function(event) {
  $('.list-view').hide();
  $('.grid-view').show();
});

$('.share-box').click(function(){
 
  $('.gs-share-icons ul').slideToggle();

});
$('.more-link').click(function(){
  $('.more-desc').slideToggle();
  $(this).hide();
})

//owl carousel stop on hover

  //testimonial carousel
   $("#property-slider").owlCarousel({
    nav: false,
    dots: true,
    loop: true,
    autoplay:true,
    autoplayHoverPause: true,
    autoPlaySpeed: 3000,
    items: 5,
    responsive:{
         0:{
            items:1
        },
        641:{
            items:4
        }
    }
  });
     //testimonial carousel
   $("#related-property-slider").owlCarousel({
    nav: false,
    dots: true,
    loop: true,
    autoplay:true,
    autoplayHoverPause: true,
    autoPlaySpeed: 3000,
    items: 5,
    responsive:{
         0:{
            items:1
        },
        641:{
            items:1
        }
    }
  });


   // slick sdlider
    $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true,
        centerMode:true,
         nextArrow: '<i class="fa fa-angle-right"></i>',
        prevArrow: '<i class="fa fa-angle-left"></i>',
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]

      });

   
// comment and file upload section
$('#textarea').focus(function(){
  $(this).animate({
    height:"100"
  }, 500, function(){
  });
  $('.file_upload').slideToggle();
  });


// users comments discuss forum
 $(".numbers").click(function(){
        $(".hidden-users-comment").toggle();
    });

// show navigation
$('#toggle').on('click',function(){
  $('.sec-navigation').toggleClass('show');
});
  
  //land carousel
   $("#land-slider").owlCarousel({
    nav: false,
    dots: true,
    loop: true,
    autoplay:true,
    autoPlaySpeed: 3000,
    items: 5,
    autoplayHoverPause: true,
    direction: true,
    responsive:{
         0:{
            items:1
        },
        641:{
            items:5
        }
    }
  });


// show navigation
$('#toggle').on('click',function(){
  $('.sec-navigation').toggleClass('show');
});

//toggle icon
var theToggle = document.getElementById('toggle');

// hasClass
function hasClass(elem, className) {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
      elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
  var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
  if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}

// footer toggle
   function sqz_sidebar_widget() {
    var winWidth = $(window).width();
    if(winWidth < 768) {

  $('.footer-widget h4').click(function(){
    $(this).next('ul').slideToggle();
    $(this).toggleClass("active");
    $('.footer-widget h4').not(this).next('ul').slideUp();
    $('.footer-widget h4').not(this).removeClass("active");
  });

} else {
      $('.footer-widget h4').unbind('click');
    }
   }
   sqz_sidebar_widget();
   $(window).resize(sqz_sidebar_widget);
});

$(window).resize(function(){
  var winWidthNew = $(window).width();
  if($(winWidthNew > 959)) {
    $('.footer-widget ul').removeAttr('style');
  }
});