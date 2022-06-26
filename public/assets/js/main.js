$(function() {
    
    "use strict";
    
    //===== Prealoder
    
    $(window).on('load', function(event) {
        $('.preloader').delay(100).fadeOut(200);
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
          this.hash = this.hash.split('?');
          this.hash = this.hash[0];
          if($(this.hash).length > 0) {
            var sectionOffset = $(this.hash).offset().top - 90;

            if ( sectionOffset <= scrollbarLocation ) {
              $(this).parent().addClass('active');
              $(this).parent().siblings().removeClass('active');
            }
          }
        });
    });
    
    
    //===== wow
    
    new WOW().init();
    
    
    //===== AOS
    
     AOS.init({
         duration: 100,
     });
    
    
    //===== Slick project
    
    $('.project-active').slick({
        dots: true,
        infinite: true,
        speed: 2000,
        slidesToShow: 5,
        slidesToScroll: 3,
        autoplay: false,        
        autoplaySpeed: 3000,
        mobileFirst: true,
        draggable: true,
        arrows: true,
        //prevArrow: '<button class="slick-arrow slick-prev" aria-label="Anterior" type="button">Anterior</button>',
        //nextArrow: '<button class="slick-arrow slick-next" aria-label="Siguiente" type="button">Siguiente</button>',
        prevArrow:"<button type='button' class='slick-arrow slick-prev'><i class='fa fa-angle-left fa-2x' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-arrow slick-next'><i class='fa fa-angle-right fa-2x' aria-hidden='true'></i></button>",
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
    
    if($('.tiny-slider .customize-toggle').length > 0) {
      $('.tiny-slider .customize-toggle').on('click', (evt) => {
        if($('.tiny-slider .customize-toggle').data('action') == "stop") {
          $('.tiny-slider .customize-toggle').data('action', 'play');
          $('.tiny-slider .customize-toggle').html('<span class="tns-visually-hidden">Iniciar Animación</span><i class="fa fa-play"></i>');
          $('#'+($('.tiny-slider .customize-toggle').data('slider-id'))).slick('slickPause')
        } else {
          $('.tiny-slider .customize-toggle').data('action', 'stop');
          $('.tiny-slider .customize-toggle').html('<span class="tns-visually-hidden">Detener Animación</span><i class="fa fa-stop"></i>');
          $('#'+($('.tiny-slider .customize-toggle').data('slider-id'))).slick('slickPlay')
        }
      });
    }

    $.extend({
      sameHeight: (selector) => {
        if($(selector).length > 0) {
          let objsSelector = $(selector);
          let minHeight = 0;
          let auxHeight = 0;
          for (var i = objsSelector.length - 1; i >= 0; i--) {
            auxHeight = $(objsSelector[i]).height();
            if( auxHeight > minHeight) {
              minHeight = auxHeight; 
            }
          }

          for (var i = objsSelector.length - 1; i >= 0; i--) {
            $(objsSelector[i]).css('height', 'unset');
            $(objsSelector[i]).height(minHeight);            
          }
          return minHeight;
        }
        return false;
      },
    });
    

    if($('#agents .agents-slider > .agent').length > 0) {
      $.sameHeight('#agents .agents-slider > .agent');
      $('#agents-slider').slick({
        dots: true,
        infinite: true,
        speed: 2000,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,        
        autoplaySpeed: 3000,
        mobileFirst: true,
        draggable: true,
        pauseOnDotsHover: true,
        centerMode: true,
        centerPadding: '60px',
        arrows: true,
        //prevArrow: '<button class="slick-arrow slick-prev" aria-label="Anterior" type="button">Anterior</button>',
        //nextArrow: '<button class="slick-arrow slick-next" aria-label="Siguiente" type="button">Siguiente</button>',
        prevArrow:document.getElementById('agents-control-prev'),
        //prevArrow:"<button type='button' class='slick-arrow slick-prev'><i class='fa fa-angle-left fa-2x' aria-hidden='true'></i></button>",
        nextArrow:document.getElementById('agents-control-next'),
        //nextArrow:"<button type='button' class='slick-arrow slick-next'><i class='fa fa-angle-right fa-2x' aria-hidden='true'></i></button>",
        appendDots: $('#agents-customize-controls .slick-dots'),
        responsive: [
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
    }
    
    if($('#news .news-slider > .news').length > 0) {
      
      var newsSlider = tns({
        container: '#news-slider',
        items: 1,
        //slideBy: 1,
        edgePadding: 0,
        gutter: 0,
        slideBy: "page",
        rewind: true,
        autoHeight: true,
        responsive: true,
        mouseDrag: true,
        viewportMax:true,
        swipeAngle: false,
        speed: 2000,
        loop: true,
        center: true,
        controlsContainer: false,
        prevButton: '#news-control-prev',
        nextButton: '#news-control-next',
        lazyload: true,
        controls: true,
        autoplayButton: '#news-autoplay-toggle',
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3500,
        autoplayText: [
          '<i class="fa fa-play">',
          '<i class="fa fa-stop">'
        ],
        responsive: {
          576: {
            gutter:5,
            items: 1,
            viewportMax:false,
          },
          768: {
            viewportMax:false,
            items: 1
          },
          992: {
            viewportMax:false,
            items: 2
          },
          1200: {
            gutter:30,
            viewportMax:false,
            items: 2
          },
          1400: {
            gutter:-30,
            viewportMax:false,
            items: 2
          }
        }
      });//*/
      //$.sameHeight('#news .news-slider > .news > .card');
    }



    
    if($('#categories .categoria-oferta > .card').length > 0) {
      $.sameHeight('#categories .categoria-oferta > .card');
      /*$('#categories .categoria-oferta-container').slick({
        dots: true,
        loop: true,
        infinite: false,
        speed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,        
        autoplaySpeed: 3000,
        mobileFirst: true,
        draggable: true,
        pauseOnDotsHover: true,
        //centerMode: true,
        //centerPadding: '60px',
        arrows: true,
        //prevArrow: '<button class="slick-arrow slick-prev" aria-label="Anterior" type="button">Anterior</button>',
        //nextArrow: '<button class="slick-arrow slick-next" aria-label="Siguiente" type="button">Siguiente</button>',
        prevArrow:document.getElementById('categories-control-prev'),
        //prevArrow:"<button type='button' class='slick-arrow slick-prev'><i class='fa fa-angle-left fa-2x' aria-hidden='true'></i></button>",
        nextArrow:document.getElementById('categories-control-next'),
        //nextArrow:"<button type='button' class='slick-arrow slick-next'><i class='fa fa-angle-right fa-2x' aria-hidden='true'></i></button>",
        appendDots: $('#categories-customize-controls .slick-dots'),
        responsive: [
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
      });//*/
       var categoriesSlider = tns({
        container: '#categoria-oferta-container',
        items: 3,
        slideBy: 1,
        edgePadding: 0,
        gutter: 0,
        //slideBy: "page",
        rewind: true,
        autoHeight: true,
        responsive: true,
        mouseDrag: true,
        viewportMax:false,
        swipeAngle: false,
        speed: 1000,
        loop: true,
        center: true,
        controlsContainer: false,
        prevButton: '#categories-control-prev',
        nextButton: '#categories-control-next',
        lazyload: true,
        controls: true,
        autoplayButton: '#categories-autoplay-toggle',
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3500,
        autoplayText: [
          '<i class="fa fa-play">',
          '<i class="fa fa-stop">'
        ],
        responsive: {
          576: {
            gutter:5,
            items: 1,
            viewportMax:true,
          },
          768: {
            viewportMax:true,
            items: 1
          },
          992: {
            viewportMax:true,
            items: 2
          },
          1200: {
            gutter:30,
            viewportMax:true,
            items: 3
          },
          1400: {
            gutter:-30,
            viewportMax:false,
            items: 3
          }
        }
      });
    }    


    setTimeout(() => {
      $.ajax({
        url: window.baseUrl + '/getGallery',
        type: 'post',
        data: {},
        success: function (data) {
          if(data && data.status && data.data.length > 0) {
            var $UlGalery = '<ul class="gallery slideshow">';
            $.each(data.data, (i, o) => {
              if(o.recurso_tipo == 'image') {
                //$('#gallery-home').append('<img alt="' + o.recurso_titulo + '" src="' + o.recurso + '" data-image="' + o.recurso + '" data-description="' + o.recurso_descripcion + '">');
                $UlGalery += '<li><a href="' + o.recurso + '" rel="prettyPhoto[gallery-home]"><img src="' + o.recurso + '" width="60" height="60" alt="' + o.recurso_titulo + '" /></a></li>';
              }
              if(o.recurso_tipo == 'video') {
                if(o.recurso.indexOf('youtube.com') > 0) {
                  $UlGalery += '<li><a href="' + o.recurso + '" rel="prettyPhoto[gallery-home]" title="' + o.recurso_titulo + '"><img src="' + window.baseUrl + '/assets/images/favicon.png" width="60" alt="' + o.recurso_titulo + '" /></a></li>';
                  //let videoId = o.recurso.substr(o.recurso.indexOf('v='));
                  //$('#gallery-home').append('<img alt="' + o.recurso_titulo + '" data-type="youtube" data-videoid="' + videoId +'" data-image="' + o.recurso + '" data-description="' + o.recurso_descripcion + '">');                  
                } else {
                  $UlGalery += '<li><a href="' + o.recurso + '" rel="prettyPhoto[gallery-home]" title="' + o.recurso_titulo + '"><img src="' + window.baseUrl + '/assets/images/favicon.png" width="60" alt="' + o.recurso_titulo + '" /></a></li>';
                  //$('#gallery-home').append('<img alt="' + o.recurso_titulo + '" src="' + window.baseUrl + 'assets/images/favicon.png" data-type="html5video"  data-image="' + window.baseUrl + 'assets/images/favicon.png" data-videoogv="' + o.recurso + '" data-videowebm="' + o.recurso + '" data-videomp4="' + o.recurso + '" data-description="' + o.recurso_descripcion + '">');
                }
              }
            });
            $UlGalery+= '</ul>';
            $("#gallery-home").append($UlGalery );
            $("#gallery-home a[rel^='prettyPhoto']").prettyPhoto({
              animation_speed:'normal',
              theme:'facebook',
              slideshow:10000, 
              autoplay_slideshow: false,
              social_tools: '<div class="pp_social"><div class="twitter"><a target="_blank" href="http://twitter.com/share?text=Me encanto este sitio, perfecto para viajar&url='+window.baseUrl+'&hashtags=DoIt,Cuba,Viajes,Turismo,doitviajesyturismo" class="twitter-share-button" data-count="none">Tweet</a></div><div class="facebook"><iframe src="http://www.facebook.com/plugins/like.php?locale=es&href='+location.href+'&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div></div>' /* html or false to disable */
            });
            /*var galleryApi = $("#gallery-home").unitegallery({
              //gallery_skin:"alexis",       //it's the default skin
              //slider_bullets_skin: "alexis",   //example how to change only skin for slider bullets
              tiles_type:"nested",
              tiles_nested_optimal_tile_width:200,
            }); 
            galleryApi.play();*/
          }
        }
      });
    }, 5000)
});