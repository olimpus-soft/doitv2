<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="./">
    <meta name="baseUrl" content="<?= base_url(); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Global Designs Creative Admin ">
    <meta name="author" content="Olimpus Soft">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <meta name="msapplication-TileColor" content="#0d368e" />
    <meta name="theme-color" content="#0d368e" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#0d368e" />  
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="Olimpus Soft">
    <meta name="type" content="WebApp">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="210760597593-44e99ac5iur75372m7ktepdlh4lsvlj3.apps.googleusercontent.com">
    <meta name="google-site-verification" content="k36W4fleTldK7iebraTMriCZuduzP59NMo36Ol4jk7g" />
    <meta name="robots" content="all" />
    <meta name="googlebot" content="all" />
    <meta name="Facebot" content="all">
    <meta property="fb:admins" content="100012341980917" />
    <meta name="keyword" content="Admin,Global,Designs,Creative,Olimpus,Software,Disenio,grafico">
    <title>Admin - Global Designs Creative</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/favicon/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/favicon/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/favicon/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/favicon/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/favicon/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/favicon/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/favicon/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/favicon/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/favicon/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png');?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/manifest.json');?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/favicon/ms-icon-144x144.png');?>">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="<?= base_url('assets/js/icon-picker/fontawesome-5.11.2/css/all.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/js/chossen/chosen.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/assets/dt4/datatables.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/js/icon-picker/iconpicker-1.5.0.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sweetalert2.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/css/style.css');?>" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MJV4L97');</script>
    <!-- End Google Tag Manager -->
  </head>
  <body class="c-app">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJV4L97"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
        <img class="c-sidebar-brand-full" style="height: 46px; width: auto;" src="<?= session()->get('company')->image_url; ?>" alt="<?= session()->get('company')->razonSocial; ?>">
        <img class="c-sidebar-brand-minimized" style="height: 46px; width: auto;" src="<?= session()->get('company')->image_url; ?>" alt="<?= session()->get('company')->razonSocial; ?>">
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">Admin</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?= site_url('Admin/General');?>">
            <i class="c-sidebar-nav-icon fa fa-cogs" aria-hidden="true"></i> General</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?= site_url('Admin/sliders');?>">
            <i class="c-sidebar-nav-icon fa fa-sliders" aria-hidden="true"></i> Sliders</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?= site_url('Admin/About-Us');?>">
            <i class="c-sidebar-nav-icon fa fa-users" aria-hidden="true"></i> Nosotros</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?= site_url('Admin/Features-Us');?>">
            <i class="c-sidebar-nav-icon fa fa-list" aria-hidden="true"></i> Caracteristicas</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?= site_url('Admin/Ours-Services');?>">
            <i class="c-sidebar-nav-icon fa fa-check" aria-hidden="true"></i> Servicios</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="<?= site_url('Admin/Portfolio');?>">
            <i class="c-sidebar-nav-icon fa fa-briefcase" aria-hidden="true"></i> Portafolio</a>
        </li>
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="<?= base_url('assets/@coreui/icons/sprites/free.svg#cil-menu')?>"></use>
          </svg>
        </button><a class="c-header-brand d-lg-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg></a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="<?= base_url('assets/@coreui/icons/sprites/free.svg#cil-menu')?>"></use>
          </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="<?= site_url('Admin/General');?>">
            <i class="c-sidebar-nav-icon fa fa-cogs" aria-hidden="true"></i> General</a>
          </li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="<?= site_url('Admin/sliders');?>">
              <i class="c-sidebar-nav-icon fa fa-sliders" aria-hidden="true"></i> Sliders</a>
          </li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="<?= site_url('Admin/About-Us');?>">
              <i class="c-sidebar-nav-icon fa fa-users" aria-hidden="true"></i> Nosotros</a>
          </li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="<?= site_url('Admin/Features-Us');?>">
              <i class="c-sidebar-nav-icon fa fa-list" aria-hidden="true"></i> Caracteristicas</a>
          </li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="<?= site_url('Admin/Ours-Services');?>">
              <i class="c-sidebar-nav-icon fa fa-check" aria-hidden="true"></i> Servicios</a>
          </li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="<?= site_url('Admin/Portfolio');?>">
              <i class="c-sidebar-nav-icon fa fa-briefcase" aria-hidden="true"></i> Portafolio</a>
          </li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <!--li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar"><i class="c-avatar-img fa fa-briefcase" aria-hidden="true"></i></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Cuenta</strong></div><a class="dropdown-item" href="#">
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="<?= base_url('assets/@coreui/icons/sprites/free.svg#cil-account-logout');?>"></use>
                </svg> Logout</a>
            </div>
          </li-->
          <li>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="right: 0 !important; left: unset;">
                <a class="dropdown-item" href="<?= site_url('Admin/Profile');?>">Perfil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= site_url('Admin/LogOut');?>">Cerrar Sesión</a>
              </div>
            </div>
            
          </li>
        </ul>
        <div class="c-subheader px-3">
          <!-- Breadcrumb
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
            Breadcrumb Menu-->
        </div>
      </header>
      <div class="c-body">