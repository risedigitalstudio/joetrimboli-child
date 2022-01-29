$ = jQuery;

$(document).ready(function() {
    
      $('.home-video-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,    
          autoplay: false,
          infinite: true,
          autoplaySpeed: 10000,
          arrows: true,
          prevArrow: $('.prev-videos'),
          nextArrow: $('.next-videos') 
      });
    

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