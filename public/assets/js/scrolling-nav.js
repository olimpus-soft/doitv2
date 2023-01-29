$(document).ready(function(){ 
    //jQuery to collapse the navbar on scroll
    ////===== Sticky
    $.extend({
      scrollLink: $('.page-scroll'),
    });

    $(window).on('scroll', function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 10) {
            $(".navigation-bar").removeClass("sticky");
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }else{
            $(".navigation-bar").addClass("sticky");
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        }

        if(scroll > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }

        $.scrollLink.each(function() {
          let inHash = this.hash.split('?')[0];
          if($(inHash).length > 0) {
            let sectionOffset = $(inHash).offset().top - 90;
            if ( sectionOffset <= scroll ) {
              $(this).parent().siblings().removeClass('active');
              $(this).parent().addClass('active');
            }
          }
        });
        $('a.page-scroll[hash*="#"][href^="#"]').on('click', function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                let inHash = this.hash.split('?')[0];        
                var target = $(inHash);
                
                target = target.length > 0 ? target : $('[name=' + inHash + ']');
                if (target.length > 0) {
                    $('html, body').animate({
                        scrollTop: (target.offset().top -70)
                    }, 1200, "easeInOutExpo");
                    return false;
                }
                
            }
        });
    });
});















