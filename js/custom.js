$ = jQuery;

$(document).ready(function() {
    

    //    scroll intent nav
    var lastScrollTop = 0;
    $(window).scroll(function(event){
       var theTop = $(this).scrollTop();
        if (theTop > 200) {
       if (theTop > lastScrollTop){
           //downscroll
           $('header#wrapper-navbar').addClass('neg-margin');
       } else {
          // upscrol
          $('header#wrapper-navbar').removeClass('neg-margin');
       }
       lastScrollTop = theTop;
        } 
    });
    
    
    $('.navbar-toggler').on('click', function() {
        $('#navbarNavDropdown').toggleClass('collapse');
        if ($('#navbarNavDropdown').hasClass('collapse')) {
            $('.navbar-toggler-icon .bars').show();
            $('.navbar-toggler-icon .close').hide();
        } else {
            $('.navbar-toggler-icon .bars').hide();
            $('.navbar-toggler-icon .close').show();
        }
    })
    
    
      $('.home-video-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,    
          autoplay: false,
          infinite: true,
          arrows: true,
          prevArrow: $('.prev-videos'),
          nextArrow: $('.next-videos'),
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            }
          ]
      });
        
      $('.wuc-testimonial-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          infinite: true,
          arrows: true,
          prevArrow: $('.prev-wuc-testimonial'),
          nextArrow: $('.next-wuc-testimonial'),
          dots: true
      });
    
    
      $('.speaking-logos').slick({
          slidesToShow: 6,
          slidesToScroll: 1,    
          autoplay: false,
          infinite: true,
          arrows: true,
          dots: true,
          prevArrow: $('.prev-logos'),
          nextArrow: $('.next-logos'),
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            }
          ]
      });
    
        $('.dud_img').parent().parent().addClass('dud_img_wrap');

//        $(".set > a").on("click", function(e) {
//              e.preventDefault();
//            if ($(this).hasClass("active")) {
//              $(this).removeClass("active");
//              $(this)
//                .siblings(".content")
//                .slideUp(150);
//              $(".set > a i.minus").hide();
//              $(".set > a i.plus").show();
//            } else {
//              $(".set > a i.minus").hide();
//              $(".set > a i.plus").show();
//              $(this)
//                .find("i.plus").hide();
//            $(this)
//                .find("i.minus").show();
//              $(".set > a").removeClass("active");
//              $(this).addClass("active");
//              $(".content").slideUp(150);
//              $(this)
//                .siblings(".content")
//                .slideDown(150);
//            }
//          });
    
})