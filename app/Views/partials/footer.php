    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script src="<?= base_url('assets/js/vendor/modernizr-3.6.0.min.js');?>"></script>
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js');?>"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= GOOGLE_RECAPTCHA_SITEKEY; ?>" SameSite="None"  async defer type="text/javascript"></script>
    <!--script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script-->
    <script src="<?= base_url('assets/js/v5/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js');?>"></script>
    <script src="<?= base_url('assets/js/slick.min.js');?>"></script>
    <script src="<?= base_url('assets/js/scrolling-nav.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js');?>"></script>
    <script src="<?= base_url('assets/js/aos.js');?>"></script>
    <script src="<?= base_url('assets/js/sweetalert2.all.min.js');?>"></script>
    <script src="<?= base_url('assets/js/slider/tiny-slider.js');?>"></script>
    <script src="<?= base_url('assets/js/slider/tiny-slider.helper.ie8.js');?>"></script>
    <script src="<?= base_url('assets/js/numscroller-1.0.js');?>"></script>
    <script src="<?= base_url('assets/js/slideshow/jquery.prettyPhoto.js');?>"></script>
    <!--script src="<?= base_url('assets/js/jquery.serialize-object.min.js');?>"></script-->
    <script src="<?= base_url('assets/js/main.js');?>"></script>
		
    <?php if(isset($destino) && isset($destino->imagenes) && is_array($destino->imagenes)  && count($destino->imagenes) > 0) { ?>
      <script src="<?= base_url('assets/js/gallery/js/gallery.min.js');?>"></script>
      <script src="<?= base_url('assets/js/gallery/themes/default/ug-theme-default.js');?>"></script>
      <script src="<?= base_url('assets/js/gallery/themes/tiles/ug-theme-tiles.js');?>"></script>
      <script src="<?= base_url('assets/js/gallery/themes/tilesgrid/ug-theme-tilesgrid.js');?>"></script>
      <script src="<?= base_url('assets/js/gallery/themes/grid/ug-theme-grid.js');?>"></script>

      <script>
        $(document).ready(function(){ 
          var galleryApi = $("#gallery").unitegallery({
            //gallery_skin:"alexis",       //it's the default skin
            //slider_bullets_skin: "alexis",   //example how to change only skin for slider bullets
            tiles_type:"nested",
            tiles_nested_optimal_tile_width:200,
          }); 
          galleryApi.play();
        }); 
      </script>
    <?php } ?>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	    
    <!-- CUSTTOM JS FOR PAGE FROM ADDSCRIPTS-->
    <?php 
			if(defined('ADDSCRIPTS') && !empty(ADDSCRIPTS)) { 
				echo ADDSCRIPTS;
			}
		?>
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "<?= FB_APP_ID;?>");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>
		<script async defer type="text/javascript">
			(function(d){
			  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
			  js = d.createElement('script'); js.id = id; js.async = true;
			  js.src = "https://connect.facebook.net/<?= ( in_array(DEFAULT_LOCALE, ['es_CO', 'es']) || substr(DEFAULT_LOCALE, 0, 2) == 'es') ? 'es_LA' : 'en_US' ;?>/all.js";
			  d.getElementsByTagName('head')[0].appendChild(js);
			}(document));
			window.fbAsyncInit = function() {
			    FB.init({
			      appId      : '<?= FB_APP_ID;?>',
			      cookie     : true,
			      xfbml      : true,
			      status      : true,
			      version    : 'v13.0',
			      autoLogAppEvents : false,
			    });
			        
			    FB.getLoginStatus(function(response) {
				    console.info('statusChangeCallback', response);
				});  
		  	};//*/
		</script>
		<!-- END: CUSTTOM JS FOR PAGE FROM ADDSCRIPTS-->
		<!-- CUSTTOM JS FOR PAGES-->
    <script>
      $(document).ready(function() { 
    		<?= $contentScripts ?? '';  ?>
      }); 
    </script>
  		<!-- END: CUSTTOM JS FOR PAGES-->

		<!--script src="//code.jivosite.com/widget.js" data-jv-id="K9FLC6LJEP" async></script-->
    </body>
</html>
