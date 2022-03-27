<?php
echo view('emails/partials/header');
?>
  	<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
      	<tr>
          	<td valign="top" class="bg_white" style="padding: 1em 2.5em;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;background: #ffffff">
          		<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
          			<tr>
          				<td width="100%" class="logo" style="text-align: center;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
          					<img src="cid:logo" alt="<?= TITLEAPP; ?>" style="width:250px;height: auto;">
			          	</td>
          			</tr>
          			<tr>
          				<td width="100%" class="logo" style="text-align: center;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
			            	<h1 style="margin: 0;font-size: 30px;color: #000000;"><a href="<?= base_url(); ?>"><span style="color: #ff7f00;"><?= TITLEAPP_BASE; ?></span> <span style="color: #000000;"><?= TITLEAPP_TAILS; ?></span> </a></h1>
			          	</td>
          			</tr>
          			<tr>
			          	<td width="100%" class="logo" style="text-align: center;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
				            <ul class="navigation" style="padding: 0;">
				            	<li style="display: inline-block;list-style: none; margin-bottom: 10px; list-style: none; display: inline-block; margin-left: 5px; font-size: 12px; font-weight: 700; text-transform: uppercase;"><a style="    color: #fff;transition: all 0.4s ease-out 0s;background-color: #ff7f00;user-select: none;border-radius:3px; padding: 5px 10px; border: 8px solid #fff;font-size: 11px; font-weight: 700; text-transform: uppercase; font-family: 'Nunito Sans', sans-serif;text-align: center;white-space: nowrap;vertical-align: middle;" href="<?= base_url(); ?>#inicio?utm_source=email&utm_medium=web&utm_campaign=inicio&utm_term=all&utm_content="><?= lang('Doit.home'); ?></a></li>
				            	<!--li style="display: inline-block;list-style: none; margin-bottom: 10px; list-style: none; display: inline-block; margin-left: 5px; font-size: 12px; font-weight: 700; text-transform: uppercase;"><a style="    color: #fff;transition: all 0.4s ease-out 0s;background-color: #ff7f00;user-select: none;border-radius:3px; padding: 5px 10px; border: 8px solid #fff;font-size: 11px; font-weight: 700; text-transform: uppercase; font-family: 'Nunito Sans', sans-serif;text-align: center;white-space: nowrap;vertical-align: middle;" href="<?= base_url(); ?>#nosotoros?utm_source=email&utm_medium=web&utm_campaign=nosotros&utm_term=all&utm_content="><?= lang('Doit.ours'); ?></a-->
				            	<!--li style="display: inline-block;list-style: none; margin-bottom: 10px; list-style: none; display: inline-block; margin-left: 5px; font-size: 12px; font-weight: 700; text-transform: uppercase;"><a style="    color: #fff;transition: all 0.4s ease-out 0s;background-color: #ff7f00;user-select: none;border-radius:3px; padding: 5px 10px; border: 8px solid #fff;font-size: 11px; font-weight: 700; text-transform: uppercase; font-family: 'Nunito Sans', sans-serif;text-align: center;white-space: nowrap;vertical-align: middle;" href="<?= base_url(); ?>#objetivos?utm_source=email&utm_medium=web&utm_campaign=objetivos&utm_term=all&utm_content="><?= lang('Doit.objectives'); ?></a-->
				            	<li style="display: inline-block;list-style: none; margin-bottom: 10px; list-style: none; display: inline-block; margin-left: 5px; font-size: 12px; font-weight: 700; text-transform: uppercase;"><a style="    color: #fff;transition: all 0.4s ease-out 0s;background-color: #ff7f00;user-select: none;border-radius:3px; padding: 5px 10px; border: 8px solid #fff;font-size: 11px; font-weight: 700; text-transform: uppercase; font-family: 'Nunito Sans', sans-serif;text-align: center;white-space: nowrap;vertical-align: middle;" href="<?= base_url(); ?>#ofertas?utm_source=email&utm_medium=web&utm_campaign=ofertas&utm_term=all&utm_content="><?= lang('Doit.offers'); ?></a>
				            	<li style="display: inline-block;list-style: none; margin-bottom: 10px; list-style: none; display: inline-block; margin-left: 5px; font-size: 12px; font-weight: 700; text-transform: uppercase;"><a style="    color: #fff;transition: all 0.4s ease-out 0s;background-color: #ff7f00;user-select: none;border-radius:3px; padding: 5px 10px; border: 8px solid #fff;font-size: 11px; font-weight: 700; text-transform: uppercase; font-family: 'Nunito Sans', sans-serif;text-align: center;white-space: nowrap;vertical-align: middle;" href="<?= base_url('nuestros-destinos?utm_source=email&utm_medium=web&utm_campaign=nuestros-destinos&utm_term=all&utm_content=');?>"><?= lang('Doit.destinations'); ?></a>
				            	<li style="display: inline-block;list-style: none; margin-bottom: 10px; list-style: none; display: inline-block; margin-left: 5px; font-size: 12px; font-weight: 700; text-transform: uppercase;"><a style="    color: #fff;transition: all 0.4s ease-out 0s;background-color: #ff7f00;user-select: none;border-radius:5px; padding: 5px 10px; border: 8px solid #fff;font-size: 11px; font-weight: 700; text-transform: uppercase; font-family: 'Nunito Sans', sans-serif;text-align: center;white-space: nowrap;vertical-align: middle;" href="<?= base_url(); ?>#contacto?utm_source=email&utm_medium=web&utm_campaign=contacto&utm_term=all&utm_content="><?= lang('Doit.contact'); ?></a>
				            </ul>
			          	</td>
          			</tr>          			
          			<tr>
          				<td width="100%" class="logo" style="text-align: center;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
          					<h4><?= lang('Doit.beatraveler').' x1'; ?></h4>
          				</td>
          			</tr>
          		</table>
          	</td>
      	</tr><!-- end tr -->
      	<tr>
	      	<td class="bg_white" style="mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;background: #ffffff">
		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
		        	<tr>
				      	<td class="bg_white" style="mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;background: #ffffff">
					        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
					          <tr>
					            <td class="bg_white email-section" style="mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;background: #ffffff;padding:2.5em;">
					            	<div class="heading-section" style="text-align: center; padding: 0 30px;">
						              	<h3><?= $Subject; ?></h3>
						              	<p><?= $Subtitle ?? '' ?></p>
					            	</div>
					            	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
					            		<tr>
			                      	<td valign="top" width="100%" style="mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
			                        	<?= $content; ?>
			                      	</td>
	                    		</tr>
					            	</table>
					            </td>
					          </tr><!-- end: tr -->
					        </table>
				      	</td>
				    </tr><!-- end:tr -->
		        </table>
	      	</td>
	    	</tr><!-- end:tr -->
      	<tr>
	        <td class="bg_dark email-section" style="text-align:center;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;background: rgba(0,0,0,.8);padding:2.5em;">
	        	<div class="heading-section heading-section-white" style="color: rgba(255,255,255,.8);">
		          	<h2 style="color: #ffffff;font-size: 14px;margin-top: 0;line-height: 1.4;font-weight: 500;font-family: 'Nunito Sans', sans-serif;  padding-bottom: 0;"><?= lang('Doit.welcomeTo') .' '. COMERCIALNAME; ?></h2>
		          	<h4 style="color: #ffffff;font-size: 10px;margin-top: 0;line-height: 1.4;font-weight: 500;font-family: 'Nunito Sans', sans-serif;  padding-bottom: 0;"><?= SUBTITLEAPP; ?></h4>
		          	<p style="text-align: justify;color: rgba(255,255,255,.8);"><?= COMPANY_DESC;?></p>
	        	</div>
	        </td>
      	</tr><!-- end: tr -->
      <!-- 1 Column Text + Button : END -->
  	</table>
<?php
echo view('emails/partials/footer');
?>