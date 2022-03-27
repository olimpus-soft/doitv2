$(function() {
    
    "use strict";
    
    //===== Prealoder
    
    $(window).on('load', function(event) {
        $('.preloader').delay(500).fadeOut(500);
    });
    
    
    //===== Mobile Menu 
    
    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass('active');
    });
    
    $(".navbar-nav a").on('click', function() {
        $(".navbar-toggler").removeClass('active');
    });
    
    
    //===== close navbar-collapse when a  clicked
    
    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });
    
    var form = $('form#contact-form');
    form.on('submit', (event) => {
        //$('.preloader').show();
        event.preventDefault();        
        grecaptcha.ready(function() {
          grecaptcha.execute('6LcRyt0UAAAAADYen-NCuM1tIEULQHq3TX1VAj_p', {action: 'contacto_web'})
          .then(function(token) {
            if($('input[name="token"]', form).length > 0) {
              $('input[name="token"]', form).val(token);
            } else {
              form.prepend('<input type="hidden" name="token" value="' + token + '">');
            }
            if($('input[name="recaptcha"]', form).length > 0) {
              $('input[name="recaptcha"]', form).val(token);
            } else {
              form.prepend('<input type="hidden" name="recaptcha" value="' + token + '">');
            }
            if($('input[name="action"]', form).length > 0) {
              $('input[name="action"]', form).val("contacto_web");
            } else {
              form.prepend('<input type="hidden" name="action" value="contacto_web">');                
            }
            form.unbind('submit').submit();            
          }); ///.then(function(token) grecaptcha
        }); ///grecaptcha.ready(function()
    });
    
    //===== Sticky
    
    $(window).on('scroll',function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 10) {
            $(".navigation-bar").removeClass("sticky");
        }else{
            $(".navigation-bar").addClass("sticky");
        }
    });
    
    
    //===== Section Menu Active
    
    var scrollLink = $('.page-scroll');
        // Active link switching
    $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
        scrollLink.each(function() {

          var sectionOffset = $(this.hash).offset().top - 90;

          if ( sectionOffset <= scrollbarLocation ) {
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
          }
        });
    });
    
    
    //===== wow
    
    new WOW().init();
    
    
    //===== AOS
    
     AOS.init({
         duration: 800,
     });
    
    
    //===== Slick project
    
    $('.project-active').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 5,
        slidesToScroll: 3,
        arrows: true,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 4,
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
              }
            }
        ]
    });
    
    
    //===== Slick Testimonial
    
    $('.testimonial-active').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
    });
    
    
    //===== Back to top
    
    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
      console.log($(this).scrollTop())
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
    });
    
    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    
    
    
    
    
    
    
    
});