$ = jQuery;

$(document).ready(function() {
    
      $('.home-video-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,    
          autoplay: false,
          infinite: true,
          arrows: true,
          prevArrow: $('.prev-videos'),
          nextArrow: $('.next-videos') 
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