<?php
if(
    (isset($statusCode) 
    && $statusCode >= 400 
    && (
        !isset($aditionalTitle) 
        || 
        (isset($aditionalTitle) && empty($aditionalTitle))
    )
    )) {
    $aditionalTitle = lang('Doit.hasOcurredError');
}
?>
<!DOCTYPE html>
<html lang="<?= $locale ?? 'es'; ?>">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= COMPANY_ANALITYCS_KEY;?>"></script>
    <script>
        window.baseUrl = "<?= base_url(); ?>";
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('config', '<?= COMPANY_ANALITYCS_KEY;?>');
        gtag('js', new Date());

        gtag('set', {'user_id': '<?= COMPANY_ANALITYCS_KEY;?>'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.
        gtag('set', 'userId', '<?= COMPANY_ANALITYCS_KEY;?>'); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= COMPANY_ANALITYCSV4_KEY;?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '<?= COMPANY_ANALITYCSV4_KEY;?>');
      gtag('set', {'user_id': '<?= COMPANY_ANALITYCSV4_KEY;?>'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.
      gtag('set', 'userId', '<?= COMPANY_ANALITYCSV4_KEY;?>'); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.
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
    <meta name="application-name" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP;?>" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="revisit-after" content="periode" />
    <meta name="copyright" content="<?= DEV_COMPANY;?>" />
    <meta name="description" content="<?= COMPANY_DESC; ?>">

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
    <?php
        $adminsFb = explode(',', FB_IDS_ADMINS);
        foreach ($adminsFb as $fbAdminId) { ?>
            <meta property="fb:admins" content="<?= $fbAdminId; ?>" />
    <?php
        }
    ?>
    <meta property="fb:pages" content="<?= FB_ID_PAGE;?>">
    <meta property="fb:pages" content="<?= FB_ID_PAGE_SUPPORT;?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?= CONTACT_TW; ?>" />
    <meta name="twitter:title" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>">
    <meta name="twitter:creator" content="<?= DEV_TW_PROFILE;?>" />
    <meta name="twitter:description" content="<?= COMPANY_DESC; ?>">
    <meta name="twitter:image:alt" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>">
    <meta name="twitter:image:src" content="<?= base_url(SOCIAL_IMG); ?>">

    <meta itemprop="name" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>">
    <meta itemprop="description" content="<?= COMPANY_DESC; ?>">
    <meta itemprop="image" content="<?= base_url(SOCIAL_IMG); ?>">

    <meta property="og:title" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>" />
    <meta property="og:description" content="<?= COMPANY_DESC; ?>" />
    <meta property="og:url" content="<?= base_url(); ?>" />
    <meta name="og:image" content="<?= base_url(SOCIAL_IMG); ?>">
    <meta name="og:url" content="<?= base_url(); ?>">
    <meta name="og:site_name" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>">
    <meta property="og:site_name" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>" />
    <meta name="og:locale" content="es-419">

    <meta name="og:type" content="business.business">
    <meta property="og:type" content="business.business" />
    <meta property="og:publisher" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>" />

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>" />
    <meta property="og:locale" content="es_LA">
    <!--meta name="og:video" content="<?= (isset($aditionalTitle)&&!empty($aditionalTitle)?$aditionalTitle.' - ':'').TITLEAPP; ?>"-->
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

    <link rel="canonical" href="<?= CANNONICAL_URL; ?>?utm=doit&id=doitviajesyturismo" />

    <meta name="theme-color" content="<?= MAIN_COLOR;?>">
    <meta name="msapplication-TileColor" content="<?= MAIN_COLOR;?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= MAIN_COLOR;?>" />  

    <link rel="manifest" href="<?= base_url('manifest.json');?>">

    <title><?= (isset($aditionalTitle) && !empty($aditionalTitle) ? $aditionalTitle .' - ' : '').TITLEAPP; ?></title>

	<!-- core CSS -->
    <!--link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"-->
    <link rel="stylesheet" href="<?= base_url('assets/js/v5/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/LineIcons.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/default.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/js/slideshow/prettyPhoto.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/sweetalert2.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/js/slider/tiny-slider.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
    <?php if(isset($destino) && isset($destino->imagenes) && is_array($destino->imagenes)  && count($destino->imagenes) > 0) { ?>
        <link rel="stylesheet" href="<?= base_url('assets/js/gallery/css/gallery.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/js/gallery/themes/default/ug-theme-default.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/js/gallery/skins/alexis/alexis.css');?>" rel="stylesheet">
    <?php } ?>
</head><!--/head-->

<body id="home" class="homepage">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= COMPANY_GTM_KEY; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->