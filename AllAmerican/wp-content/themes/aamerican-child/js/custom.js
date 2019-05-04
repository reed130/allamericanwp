

$(document).ready(function($) {

  

 
  $( ".mobile-menu img" ).click(function() {
    $( ".menu-wrapper" ).slideToggle( "slow", function() {
      
    });
  });
  

  /*--------- popup ---------*/

   /*jQuery(".has-popup").on('click', function(){
      jQuery('.popup-wrapper').toggleClass('open-popup');
        
    })

    jQuery(".popup-wrapper").on('click', function(){
      jQuery('.popup-wrapper.open-popup').removeClass('open-popup');
        
    })*/
    

  /*------ page scroll offset----*/

  jQuery(function() {
    jQuery('a[href*=\\#]:not([href=\\#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          jQuery('html,body').animate({
            scrollTop: target.offset().top-120
          }, 1000);
          
          return false;
        }
      }
    });
  });

  // loaction id find

  
  /*if(location.hash) {
      var hashId = location.hash
      jQuery('html,body').animate({
              scrollTop: $(hashId).offset().top-215
    }, 1000);
  }*/
    


  // LITEBOX
    var veno_box = $('.venobox');
    veno_box.venobox();

    
});


jQuery(window).load(function(){

 $('#owl-slider-1').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:false,
      autoplay:true,
      autoplayTimeout:4000,      
      autoplayHoverPause:true,
      autoHeight:true,
      items:1,
      autoWidth:false,
      animateOut: 'fadeOut',
      
  });


  $('#owl-slider-2').owlCarousel({
      loop:true,
      margin:50,
      nav:false,
      dots:false,
      autoplay:false,
      autoplayTimeout:4000,      
      autoplayHoverPause:true,
      autoHeight:true,
      items:4,
      autoWidth:false,
      responsive : {          
          0 : {
              items:1
          },
         
          480 : {
              items:2
          },
          640 : {
              items:3
          },
          768 : {
              items:4
          }
      }
      
  });

  $('#owl-slider-3').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:false,
      autoplay:false,
      autoplayTimeout:4000,      
      autoplayHoverPause:true,
      autoHeight:true,
      items:5,
      autoWidth:false,
      responsive : {          
          0 : {
              items:1
          },
         
          480 : {
              items:2
          },
          640 : {
              items:3
          },
          768 : {
              items:5
          }
      }
      
  });

  $('#owl-slider-4').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:false,
      autoplay:false,
      autoplayTimeout:4000,      
      autoplayHoverPause:true,
      autoHeight:true,
      items:5,
      autoWidth:false,
      responsive : {          
          0 : {
              items:1
          },
         
          480 : {
              items:2
          },
          640 : {
              items:3
          },
          768 : {
              items:5
          }
      }
      
  });

  $('#owl-slider-5').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:false,
      autoplay:false,
      autoplayTimeout:4000,      
      autoplayHoverPause:true,
      autoHeight:true,
      items:5,
      autoWidth:false,
      responsive : {          
          0 : {
              items:1
          },
         
          480 : {
              items:2
          },
          640 : {
              items:3
          },
          768 : {
              items:5
          }
      }
      
  });

  $('#owl-slider-6').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:false,
      autoplay:false,
      autoplayTimeout:4000,      
      autoplayHoverPause:true,
      autoHeight:true,
      items:5,
      autoWidth:false,
      responsive : {          
          0 : {
              items:1
          },
         
          480 : {
              items:2
          },
          640 : {
              items:3
          },
          768 : {
              items:5
          }
      }
      
  });

  $('#owl-slider-7').owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:false,
      autoplay:false,
      autoplayTimeout:4000,      
      autoplayHoverPause:true,
      autoHeight:true,
      items:5,
      autoWidth:false,
      responsive : {          
          0 : {
              items:1
          },
         
          480 : {
              items:2
          },
          640 : {
              items:3
          },
          768 : {
              items:5
          }
      }
      
  });
  


});


$(window).on('scroll load',function() {  
  // $('.spaceFixed').height($('.menu-wrapper').outerHeight())
  /*var cur_pos = $(this).scrollTop();
   var top = $('.spaceFixed').offset().top,
       bottom = top + $('.spaceFixed').outerHeight();
          if (cur_pos >= top) {
              $('.full-wrapper').addClass('fixed');
          }
          else{
              $('.full-wrapper').removeClass('fixed');  

          }*/

    // var scroll = $(this).scrollTop();
    // var stickyTop = $('.menu-wrapper').offset().top;  

    // if (scroll >= stickyTop) {
    //     $(".full-wrapper").addClass("fixed");
    // }
    // else if(scroll <= stickyTop){
    //     $(".full-wrapper").removeClass("fixed");
});

/*$(window).scroll(function() {  
    var stickyTop = jQuery('.header').offset().top;  
    var scroll = $(window).scrollTop();

    if (scroll <= stickyTop) {
        $(".full-wrapper").addClass("fixed");
    } else {
        $(".full-wrapper").removeClass("fixed");
    }
});*/


$(document).ready(function() {
  var s = $(".full-wrapper");
  var pos = s.position();            
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    if (windowpos > pos.top) {
      s.addClass("sticky");
    } else {
      s.removeClass("sticky"); 
    }
  });
});

/* on window resize */

jQuery(window).resize(function(){

});
