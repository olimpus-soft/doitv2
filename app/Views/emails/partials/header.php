<!DOCTYPE html>
<html lang="<?= $locale; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?= COMPANY_ANALITYCS_KEY;?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('config', '<?= COMPANY_ANALITYCS_KEY;?>');
            gtag('js', new Date());

            gtag('set', {'user_id': '<?= COMPANY_ANALITYCS_KEY;?>'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.
            gtag('set', 'userId', '<?= COMPANY_ANALITYCS_KEY;?>'); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.
        </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?= COMPANY_GTM_KEY; ?>');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8"> 
        <link rel="profile" href="//gmpg.org/xfn/11">
        <meta name="keywords" content="<?= KEYWORDS; ?>">
        <meta name="type" content="WebApp">
        <meta name="pinterest-rich-pin" content="false" />
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="author" content="<?= DEV_AUTHOR; ?>">
        <meta name="type" content="WebApp">
        <meta name="application-name" content="<?= TITLEAPP;?>" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-title" content="<?= TITLEAPP;?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="revisit-after" content="periode" />
        <meta name="copyright" content="<?= DEV_COMPANY;?>" />
        <meta name="description" content="<?= COMPANY_DESC; ?>">
        <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->

        <meta http-equiv="cache-control" content="no-cache, no-store, no-transform, must-revalidate"/>
        <meta http-equiv="Pragma" content="no-cache, no-store, no-transform, must-revalidate"/>
        <meta http-equiv="expires" content="0"/>
        <meta name="Revisit-after" content="1 days">

        <meta property="business:contact_data:street_address" content="<?= COMPANY_ADDRESS;?>" />
        <meta property="business:contact_data:locality" content="<?= COMPANY_LOCALITY;?>"/>
        <meta property="business:contact_data:postal_code" content="<?= COMPANY_POSTAL_CODE;?>" />
        <meta property="business:contact_data:country_name" content="<?= COMPANY_COUNTRY;?>" />
        <meta property="place:location:latitude" content="<?= COMPANY_LAT;?>" />
        <meta property="place:location:longitude" content="<?= COMPANY_LON;?>" />

        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="<?= GOOGLE_CLIENTID; ?>">
        <meta name="google-site-verification" content="<?= GOOLGE_SECRET_CLIENT?>" />
        <meta name="googlebot" content="all" />
        <meta name="robots" content="all" />
        
        <meta name="Facebot" content="all">
        <meta property="fb:admins" content="<?= FB_ADMIN_ID;?>" />
        <meta property="fb:app_id" content="<?= FB_APP_ID;?>" />
        <meta property="fb:admins" content="100000964416427" />
        <meta property="fb:pages" content="<?= FB_ID_PAGE;?>">
        <meta property="fb:pages" content="<?= FB_ID_PAGE_SUPPORT;?>">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?= CONTACT_TW; ?>" />
        <meta name="twitter:title" content="<?= TITLEAPP; ?>">
        <meta name="twitter:creator" content="<?= DEV_TW_PROFILE;?>" />
        <meta name="twitter:description" content="<?= COMPANY_DESC; ?>">
        <meta name="twitter:image:alt" content="<?= TITLEAPP; ?>">
        <meta name="twitter:image:src" content="<?= base_url(SOCIAL_IMG); ?>">

        <meta itemprop="name" content="<?= TITLEAPP; ?>">
        <meta itemprop="description" content="<?= COMPANY_DESC; ?>">
        <meta itemprop="image" content="<?= base_url(SOCIAL_IMG); ?>">

        <meta property="og:title" content="<?= TITLEAPP; ?>" />
        <meta property="og:description" content="<?= COMPANY_DESC; ?>" />
        <meta property="og:url" content="<?= base_url(); ?>" />
        <meta name="og:image" content="<?= base_url(SOCIAL_IMG); ?>">
        <meta name="og:url" content="<?= base_url(); ?>">
        <meta name="og:site_name" content="<?= TITLEAPP; ?>">
        <meta property="og:site_name" content="<?= TITLEAPP; ?>" />
        <meta name="og:locale" content="es-419">

        <meta name="og:type" content="business.business">
        <meta property="og:type" content="business.business" />
        <meta property="og:publisher" content="<?= TITLEAPP; ?>" />

        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:alt" content="<?= TITLEAPP; ?>" />
        <meta property="og:locale" content="es_LA">
        <!--meta name="og:video" content="<?= TITLEAPP; ?>"-->
        <meta property="og:publisher" content="<?= DEV_COMPANY;?>" />
        <meta property="og:type" content="business.business" />
        <meta property="og:type" content="website" />
        <meta property="og:email" content="<?= CONTACT_EMAIL_SUPPORT;?>" />
        <meta property="og:email" content="<?= CONTACT_EMAIL;?>" />
        <meta property="og:phone_number" content="<?= CONTACT_PHONE_SUPPORT;?>" />
        <meta property="og:phone_number" content="<?= CONTACT_PHONE;?>" />

        <!-- Fav and touch icons -->
        <meta name="msapplication-TileImage" content="<?= base_url('assets/favicon/apple-icon-144x144.png');?>">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/favicon/apple-touch-icon-144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/favicon/apple-touch-icon-114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed"   sizes="72x72" href="<?= base_url('assets/favicon/apple-touch-icon-72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed"   href="<?= base_url('assets/favicon/apple-touch-icon-57-precomposed.png');?>">

        <link rel="apple-touch-icon"   sizes="57x57" href="<?= base_url('assets/favicon/apple-icon-57x57.png');?>">
        <link rel="apple-touch-icon"   sizes="60x60" href="<?= base_url('assets/favicon/apple-icon-60x60.png');?>">
        <link rel="apple-touch-icon"   sizes="72x72" href="<?= base_url('assets/favicon/apple-icon-72x72.png');?>">
        <link rel="apple-touch-icon"   sizes="76x76" href="<?= base_url('assets/favicon/apple-icon-76x76.png');?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/favicon/apple-icon-114x114.png');?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/favicon/apple-icon-120x120.png');?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/favicon/apple-icon-144x144.png');?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/favicon/apple-icon-152x152.png');?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-icon-180x180.png');?>">
        
        <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-icon-192x192.png');?>">
        <link rel="icon" type="image/png"   sizes="96x96" href="<?= base_url('assets/favicon/favicon-96x96.png');?>">
        <link rel="icon" type="image/png"   sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png');?>">
        <link rel="icon" type="image/png"   sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png');?>">
        
        <link rel="icon"  type="image/x-icon"href="<?= base_url(FAVICON);?>">
        <link rel="shortcut icon" href="<?= base_url(FAVICON);?>">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(FAVICON);?>">

        <meta name="theme-color" content="#ff7f00">
        <meta name="msapplication-TileColor" content="#ff7f00">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ff7f00" />  

        <link rel="manifest" href="<?= base_url('manifest.json');?>">

        <title><?= TITLEAPP.' - '.$Subject; ?></title>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

        <!-- CSS Reset : BEGIN -->
        <style>

            /* What it does: Remove spaces around the email design added by some email clients. */
            /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
                background: #f1f1f1;
            }

            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            /* What it does: Centers email on Android 4.4 */
            div[style*="margin: 16px 0"] {
                margin: 0 !important;
            }

            /* What it does: Stops Outlook from adding extra spacing to tables. */
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }

            /* What it does: Fixes webkit padding issue. */
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }

            /* What it does: Uses a better rendering method when resizing images in IE. */
            img {
                -ms-interpolation-mode:bicubic;
            }

            /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
            a {
                text-decoration: none;
            }

            /* What it does: A work-around for email clients meddling in triggered links. */
            *[x-apple-data-detectors],  /* iOS */
            .unstyle-auto-detected-links *,
            .aBn {
                border-bottom: 0 !important;
                cursor: default !important;
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
            .a6S {
                display: none !important;
                opacity: 0.01 !important;
            }

            /* What it does: Prevents Gmail from changing the text color in conversation threads. */
            .im {
                color: inherit !important;
            }

            /* If the above doesn't work, add a .g-img class to any image in question. */
            img.g-img + div {
                display: none !important;
            }

            /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
            /* Create one of these media queries for each additional viewport size you'd like to fix */

            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                u ~ div .email-container {
                    min-width: 320px !important;
                }
            }
            /* iPhone 6, 6S, 7, 8, and X */
            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                u ~ div .email-container {
                    min-width: 375px !important;
                }
            }
            /* iPhone 6+, 7+, and 8+ */
            @media only screen and (min-device-width: 414px) {
                u ~ div .email-container {
                    min-width: 414px !important;
                }
            }


        </style>

        <!-- CSS Reset : END -->

        <!-- Progressive Enhancements : BEGIN -->
        <style>

            .primary{
                background: #f5564e;
            }
            .bg_white{
                background: #ffffff;
            }
            .bg_light{
                background: #fafafa;
            }
            .bg_black{
                background: #000000;
            }
            .bg_dark{
                background: rgba(0,0,0,.8);
            }
            .email-section{
                padding:2.5em;
            }

            /*BUTTON*/
            .btn{
                padding: 5px 15px;
                display: inline-block;
            }
            .btn.btn-primary{
                border-radius: 5px;
                background: #f5564e;
                color: #ffffff;
            }
            .btn.btn-white{
                border-radius: 5px;
                background: #ffffff;
                color: #000000;
            }
            .btn.btn-white-outline{
                border-radius: 5px;
                background: transparent;
                border: 1px solid #fff;
                color: #fff;
            }

            h1,h2,h3,h4,h5,h6{
                font-family: 'Nunito Sans', sans-serif;
                color: #000000;
                margin-top: 0;
            }

            body{
                font-family: 'Nunito Sans', sans-serif;
                font-weight: 400;
                font-size: 15px;
                line-height: 1.8;
                color: rgba(0,0,0,.4);
            }

            a{
                color: #f5564e;
            }

            table{
            }
            /*LOGO*/

            .logo h1{
                margin: 0;
            }
            .logo h1 a{
                color: #000;
                font-size: 20px;
                font-weight: 700;
                text-transform: uppercase;
                font-family: 'Nunito Sans', sans-serif;
            }

            .navigation{
                padding: 0;
            }
            .navigation li{
                list-style: none;
                display: inline-block;;
                margin-left: 5px;
                font-size: 12px;
                font-weight: 700;
                text-transform: uppercase;
            }
            .navigation li a{
                color: rgba(0,0,0,.6);
            }

            /*HERO*/
            .hero{
                position: relative;
                z-index: 0;
            }
            .hero .overlay{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                content: '';
                width: 100%;
                background: #000000;
                z-index: -1;
                opacity: .3;
            }
            .hero .icon{
            }
            .hero .icon a{
                display: block;
                width: 60px;
                margin: 0 auto;
            }
            .hero .text{
                color: rgba(255,255,255,.8);
                padding: 0 4em;
            }
            .hero .text h2{
                color: #ffffff;
                font-size: 40px;
                margin-bottom: 0;
                line-height: 1.2;
                font-weight: 900;
            }


            /*HEADING SECTION*/
            .heading-section{
            }
            .heading-section h2{
                color: #000000;
                font-size: 24px;
                margin-top: 0;
                line-height: 1.4;
                font-weight: 700;
            }
            .heading-section .subheading{
                margin-bottom: 20px !important;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(0,0,0,.4);
                position: relative;
            }
            .heading-section .subheading::after{
                position: absolute;
                left: 0;
                right: 0;
                bottom: -10px;
                content: '';
                width: 100%;
                height: 2px;
                background: #f5564e;
                margin: 0 auto;
            }

            .heading-section-white{
                color: rgba(255,255,255,.8);
            }
            .heading-section-white h2{
                font-family: 'Nunito Sans', sans-serif;
                line-height: 1;
                padding-bottom: 0;
            }
            .heading-section-white h2{
                color: #ffffff;
            }
            .heading-section-white .subheading{
                margin-bottom: 0;
                display: inline-block;
                font-size: 13px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: rgba(255,255,255,.4);
            }


            .icon{
                text-align: center;
            }
            .icon img{
            }


            /*SERVICES*/
            .services{
                background: rgba(0,0,0,.03);
            }
            .text-services{
                padding: 10px 10px 0; 
                text-align: center;
            }
            .text-services h3{
                font-size: 16px;
                font-weight: 600;
            }

            .services-list{
                padding: 0;
                margin: 0 0 10px 0;
                width: 100%;
                float: left;
            }

            .services-list .text{
                width: 100%;
                float: right;
            }
            .services-list h3{
                margin-top: 0;
                margin-bottom: 0;
                font-size: 18px;
            }
            .services-list p{
                margin: 0;
            }


            /*DESTINATION*/
            .text-tour{
                padding-top: 10px;
            }
            .text-tour h3{
                margin-bottom: 0;
            }
            .text-tour h3 a{
                color: #000;
            }

            /*BLOG*/
            .text-services .meta{
                text-transform: uppercase;
                font-size: 14px;
            }

            /*TESTIMONY*/
            .text-testimony .name{
                margin: 0;
            }
            .text-testimony .position{
                color: rgba(0,0,0,.3);

            }


            /*COUNTER*/
            .counter{
                width: 100%;
                position: relative;
                z-index: 0;
            }
            .counter .overlay{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                content: '';
                width: 100%;
                background: #000000;
                z-index: -1;
                opacity: .3;
            }
            .counter-text{
                text-align: center;
            }
            .counter-text .num{
                display: block;
                color: #ffffff;
                font-size: 34px;
                font-weight: 700;
            }
            .counter-text .name{
                display: block;
                color: rgba(255,255,255,.9);
                font-size: 13px;
            }


            ul.social{
                padding: 0;
            }
            ul.social li{
                display: inline-block;
            }

            /*FOOTER*/

            .footer{
                color: rgba(255,255,255,.5);

            }
            .footer .heading{
                color: #ffffff;
                font-size: 20px;
            }
            .footer ul{
                margin: 0;
                padding: 0;
            }
            .footer ul li{
                list-style: none;
                margin-bottom: 10px;
            }
            .footer ul li a{
                color: rgba(255,255,255,1);
            }


            @media screen and (max-width: 500px) {

                .icon{
                    text-align: left;
                }

                .text-services{
                    padding-left: 0;
                    padding-right: 20px;
                    text-align: left;
                }

            }
        </style>
    </head>

    <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
        <center style="width: 100%; background-color: #f1f1f1;">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= COMPANY_GTM_KEY; ?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div style="max-width: 600px; margin: 0 auto;" class="email-container">
        <!-- BEGIN BODY -->