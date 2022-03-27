        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
          <tr>
            <td valign="middle" class="bg_black footer email-section" style="mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;background: #000000;color: rgba(255,255,255,.5);padding:2.5em;">
              <table style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                <tr>
                  <td valign="top" width="60%" style="padding-top: 20px;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                      <tr>
                        <td style="text-align: left; padding-right: 10px;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                          <h3 class="heading" style="color: #ffffff; font-size: 20px;"><?= lang('Doit.about_us'); ?></h3>
                          <p style="color: rgba(255,255,255,.4);text-align: justify;"><?= COMPANY_LEGAL_DESC; ?></p>
                          <ul class="social" style="padding: 0;margin: 0; padding: 0;">
                            <li style="display: inline-block;list-style: none; margin-bottom: 10px;"><a target="_blank" href="https://www.facebook.com/<?= ltrim(CONTACT_FB, '@');?>"><img src="cid:logo-facebook" alt="<?= ltrim(CONTACT_FB, '@');?>" style="width: 20px; max-width: 600px; height: auto; display: block;"></a></li>
                            <li style="display: inline-block;list-style: none; margin-bottom: 10px;"><a target="_blank" href="https://www.instagram.com/<?= ltrim(CONTACT_IM, '@');?>"><img src="cid:logo-instagram" alt="<?= ltrim(CONTACT_IM, '@');?>" style="width: 20px; max-width: 600px; height: auto; display: block;"></a></li>
                            <li style="display: inline-block;list-style: none; margin-bottom: 10px;"><a target="_blank" href="https://www.twitter.com/<?= ltrim(CONTACT_TW, '@');?>"><img src="cid:logo-twitter" alt="<?= ltrim(CONTACT_TW, '@');?>" style="width: 20px; max-width: 600px; height: auto; display: block;"></a></li>
                            <li style="display: inline-block;list-style: none; margin-bottom: 10px;"><a target="_blank" href="https://www.google.com/search?q=Do+It+Viajes+y+Turismo&oq=Do+It+Viajes+y+Turismo%20site:doitviajesyturismo.com"><img src="cid:logo-play" alt="<?= TITLEAPP;?>" style="width: 20px; max-width: 600px; height: auto; display: block;"></a></li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td valign="top" width="40%" style="padding-top: 20px;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                      <tr>
                        <td style="text-align: left; padding-left: 5px; padding-right: 5px;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                          <h3 class="heading" style="color: #ffffff; font-size: 20px;"><?= lang('Doit.contact_info'); ?></h3>
                          <ul style="padding: 0;margin: 0; padding: 0;">
                            <li style="display: inline-block;list-style: none; margin-bottom: 10px;"><span class="text"><a target="_blank" href="https://www.google.com/maps/search/<?= COMPANY_ADDRESS;?>, <?= COMPANY_LOCALITY;?>, <?= COUNTRY_NAME;?>" target="_blank"><?= COMPANY_ADDRESS;?>, <?= COMPANY_LOCALITY;?>, <?= COUNTRY_NAME;?></a></span></li>
                            <li style="display: inline-block;list-style: none; margin-bottom: 10px;"><span class="text"><a target="_blank" href="https://wa.me/<?= str_replace(['+','.',' '], '', CONTACT_PHONE);?>?text=<?= CONTACT_MSG_OFFERS;?>"><?= CONTACT_PHONE;?></a></span></a></li>
                            <li style="display: inline-block;list-style: none; margin-bottom: 10px;"><span class="text"><a target="_blank" href="mailto:<?= CONTACT_EMAIL; ?>?subject=<?= CONTACT_MSG_OFFERS;?>" target="_blank"><?= CONTACT_EMAIL; ?></a></span></a></li>
                          </ul>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr><!-- end: tr -->
          <tr>
            <td valign="middle" class="bg_black footer email-section" style="background: #000000;color: rgba(255,255,255,.5);padding:2.5em;">
              <table style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                <tr>
                  <td valign="top" width="100%" style="mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                      <tr>
                        <td style="text-align: center; padding-right: 10px;color: rgba(255,255,255,.4);mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                          <p>&copy; <?= date('Y', strtotime(FOUND_DATE)) . ' ' . COMERCIALNAME . ' ' . lang('Doit.rightReserved'); ?></p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="100%" style="mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                      <tr>
                        <td style="text-align: center; padding-left: 5px; padding-right: 5px;mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;">
                          <p style="color: rgba(255,255,255,.4);"><?= lang('Doit.designed_by'); ?> <a target="_blank" href="https://olimpussoft.com" rel="follow">olimpussoft.com</a> &copy; <?= lang('Doit.since'); ?> 2019 - <?= date('Y');?></p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
    </center>
  </body>
</html>