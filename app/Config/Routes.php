<?php

namespace Config;
use Config\Services as AppServices;
// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Index');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
//$routes->set404Override();
// Custom 404 view with error message.
$routes->set404Override(function( $message = null ) {
    $locale = AppServices::request()->getLocale() ?? 'es';
    AppServices::response()->setStatusCode(404, lang('Doit.pageNotFound'));
    \App\Controllers\BaseController::getParameterApp($locale);
    $destinosModel = new \App\Models\Destinos();
    $cntDestinations = $destinosModel->asObject()
        ->where('status', 'ACTIVE')
        ->where('lang', $locale)
        ->orderBy('id', 'ASC')
        ->countAllResults()
    ; 
    $data = [
        'menuUrl'               => true,
        'locale'                => $locale,
        'cntDestinations'       => $cntDestinations,
        'message'               => $message,
    ];
    echo view('errors/'. (is_cli()? 'cli':'html' ) .'/error_404', $data);
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/info-php', 'Index::info');
$routes->get('/', 'Index::index');

$routes->get('files/(:any)', 'Index::getFile/$1');
$routes->get('files/(:any)/(:any)', 'Index::getFile/$1/$2');
$routes->get('files/(:any)/(:any)/true', 'Index::getFile/$1/$2/$3');
$routes->post('saveContact', 'Index::saveContact');
$routes->get('sobre-nosotros', 'Index::aboutUs');
$routes->get('p/(:any)', 'Index::aditionalPage/$1');
$routes->get('todas-las-ofertas', 'Index::allOffers');
$routes->get('nuestros-destinos', 'Index::allDestinations');
$routes->get('destino/(:any)', 'Index::getDestination/$1');
$routes->get('ofertas', 'Index::getOferta');
$routes->get('oferta', 'Index::getOferta');
$routes->get('oferta/(:any)', 'Index::getOferta/$1');
$routes->get('oferta/(:any)/(:any)', 'Index::getOferta/$1/$2');
$routes->get('disfruta-nuestro-charter', 'Index::getCharterOffer');
$routes->get('plan-charter', 'Index::getCharterOffer');
$routes->get('agent/getVcard/(:any)', 'Index::getAgentVcard/$1');
$routes->get('charter/(:any)', 'Index::getCharterDetail/$1');


$routes->get('bucket/(:any)', 'Index::getBucketFile/$1');
$routes->get('bucket/(:any)/(:any)', 'Index::getBucketFile/$1/$2');
$routes->get('bucket/(:any)/(:any)/(:any)', 'Index::getBucketFile/$1/$2/$3');

$routes->get('bucketC/(:any)', 'Index::getBucketCFile/$1');
$routes->get('bucketC/(:any)/(:any)', 'Index::getBucketCFile/$1/$2');
$routes->get('bucketC/(:any)/(:any)/(:any)', 'Index::getBucketCFile/$1/$2/$3');

$routes->post('getGallery', 'Index::getHomeGalery');
$routes->post('getGallery/(:any)', 'Index::getHomeGalery/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
