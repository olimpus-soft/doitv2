
    <script src="<?= base_url('assets/js/vendor/modernizr-3.6.0.min.js');?>"></script>
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js');?>"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= GOOGLE_RECAPTCHA_SITEKEY; ?>" SameSite="None"  async defer type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js');?>"></script>
    <script src="<?= base_url('assets/js/slick.min.js');?>"></script>
    <script src="<?= base_url('assets/js/scrolling-nav.js');?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js');?>"></script>
    <script src="<?= base_url('assets/js/aos.js');?>"></script>
    <script src="<?= base_url('assets/js/sweetalert2.all.min.js');?>"></script>
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

		<!-- WhatsHelp.io widget -->
    <script async defer type="text/javascript">
      /*(function () {
          var options = {
              facebook: "<?= FB_ID_PAGE; ?>", // Facebook page ID
              email: "<?= CONTACT_EMAIL; ?>", // Email
              whatsapp: "<?= str_replace([' ','+'], ['', ''], CONTACT_PHONE);?>", // WhatsApp number
              sms: "<?= str_replace([' ','+'], ['', ''], CONTACT_PHONE);?>", // Sms phone number
              call: "<?= str_replace([' ','+'], ['', ''], CONTACT_PHONE);?>", // Call phone number
              company_logo_url: "<?= base_url('assets/logo.png');?>", // URL of company logo (png, jpg, gif)
              greeting_message: "¡Hola! ¿Como puedo ayudarte?", // Text of greeting message
              call_to_action: "Llamanos y con gusto te atenderemos", // Call to action
              button_color: "<?= COMPANY_MAIN_COLOR;?>", // Color of button
              position: "left", // Position may be 'right' or 'left'
              order: "whatsapp,facebook,sms,call,email", // Order of buttons
              ga: true, // Google Analytics enabled
              branding: false, // Show branding string
              mobile: true, // Mobile version enabled
              desktop: true, // Desktop version enabled
              greeting: true, // Greeting message enabled
              shift_vertical: 0, // Vertical position, px
              shift_horizontal: 100, // Horizontal position, px
              domain: "doitviajesyturismo.com", // site domain
              key: "v5ZTLH5JQkuyR6xv0S0kmw", // pro-widget key
          };
          var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();*/
    </script>
    <!-- /WhatsHelp.io widget -->
	    
    <!-- CUSTTOM JS FOR PAGE FROM ADDSCRIPTS-->
    <?php 
			if(defined('ADDSCRIPTS') && !empty(ADDSCRIPTS)) { 
				echo ADDSCRIPTS;
			}
		?>
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
			      version    : 'v3.3',
			      autoLogAppEvents : true
			    });
			        
			    FB.getLoginStatus(function(response) {
				    console.info('statusChangeCallback', response);
				});  
		  	};
		</script>
		<!-- END: CUSTTOM JS FOR PAGE FROM ADDSCRIPTS-->

		<!-- CUSTTOM JS FOR PAGES-->
		<?= $contentScripts ?? '';  ?>
		<!-- END: CUSTTOM JS FOR PAGES-->
		<!--script src="//code.jivosite.com/widget.js" data-jv-id="K9FLC6LJEP" async></script-->
    </body>
</html>
