<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ParameterSeeder extends Seeder {
  protected $tableName = 'parameters';
  public function run() {
    $data = [
      [
        'parameter' => 'DEFAULT_LOCALE',
        'parameter_value' => 'es_CO',
      ], [
        'parameter' => 'DEFAULT_LOCALE2',
        'parameter_value' => 'es-419',
      ], [
        'parameter' => 'PASSWD_REGEX',
        'parameter_value' => '^\\S*(?=\\S{8,})(?=\\S*[a-z])(?=\\S*[A-Z])(?=\\S*[\\d])\\S*$',
      ], [
        'parameter' => 'PASSWD_DETAIL',
        'parameter_value' => 'auth.passwd.cond1,auth.passwd.cond2,auth.passwd.cond3,auth.passwd.cond4',
      ], [
        'parameter' => 'DEFAULT_CURRENCY',
        'parameter_value' => '1',
      ], [
        'parameter' => 'FAVICON',
        'parameter_value' => 'favicon.ico',
      ], [
        'parameter' => 'SOCIAL_IMG',
        'parameter_value' => 'assets/images/social_banner.png',
      ], [
        'parameter' => 'COMPANY_GTM_KEY',
        'parameter_value' => 'GTM-NHZR5P8',
      ], [
        'parameter' => 'COMPANY_ANALITYCS_KEY',
        'parameter_value' => 'UA-138689768-1',
      ], [
        'parameter' => 'COMPANY_ANALITYCS_ADMIN_KEY',
        'parameter_value' => 'UA-138689768-2',
      ], [
        'parameter' => 'DEV_GTM_KEY',
        'parameter_value' => 'GTM-PHRGHJC',
      ], [
        'parameter' => 'DEV_ANALITYCS_KEY',
        'parameter_value' => 'UA-144567188-1',
      ], [
        'parameter' => 'COMPANY_ANALITYCSV4_KEY',
        'parameter_value' => 'G-8H1CJGN7ER',
      ], [
        'parameter' => 'DEV_ANALITYCS_ADMIN_KEY',
        'parameter_value' => 'UA-144567188-1',
      ], [
        'parameter' => 'BACKGROUND',
        'parameter_value' => 'wallpaper',
      ], [
        'parameter' => 'CSRF_TOKEN',
        'parameter_value' => 'MTU2NzE4NDU1ODc4OGE3ZGNlMzhmMTUyZWY5YWI5ZWY4MTZhYTI0OTk0YjBlNWU0OWNtZ0hybEVPOEU2d2NzUUNIU0dZeTF4MDNiR2NUQU96cw==',
      ], [
        'parameter' => 'MARKUP',
        'parameter_value' => '33.4000',
      ], [
        'parameter' => 'OVERPRICE',
        'parameter_value' => '0.0000',
      ], [
        'parameter' => 'APPURL',
        'parameter_value' => 'https://doitviajesyturismo.com/',
      ], [
        'parameter' => 'COMERCIALNAME',
        'parameter_value' => 'Do It! Agencia de Viajes y Turismo SAS',
      ], [
        'parameter' => 'TITLEAPP',
        'parameter_value' => 'Do It! Viajes y Turismo',
      ], [
        'parameter' => 'TITLEAPP_BASE',
        'parameter_value' => 'Do It!',
      ], [
        'parameter' => 'TITLEAPP_TAILS',
        'parameter_value' => 'Viajes y Turismo',
      ], [
        'parameter' => 'SUBTITLEAPP',
        'parameter_value' => 'Respira Cuba',
      ], [
        'parameter' => 'FOUND_DATE',
        'parameter_value' => '2015-01-06',
      ], [
        'parameter' => 'KEYWORDS',
        'parameter_value' => 'Do, It!, Development, Viajes, Turismo, Tour, Paquetes',
      ], [
        'parameter' => 'APP_DESCRIPT',
        'parameter_lang' => 'es',
        'parameter_value' => 'Viajes y Turismo por el mundo descubre la razón de cada lugar, una razón para viajar',
      ], [
        'parameter' => 'APP_DESCRIPT',
        'parameter_lang' => 'es_CO',
        'parameter_value' => 'Viajes y Turismo por el mundo descubre la razón de cada lugar, una razón para viajar',
      ], [
        'parameter' => 'APP_DESCRIPT',
        'parameter_lang' => 'en',
        'parameter_value' => 'Travel and Tourism around the world discover the reason for each place, a reason to travelr',
      ], [
        'parameter' => 'APP_DESCRIPT',
        'parameter_lang' => 'de',
        'parameter_value' => 'Reisen und Tourismus auf der ganzen Welt entdecken den Grund für jeden Ort, einen Grund zum Reisen',
      ], [
        'parameter' => 'DATEFORMAT',
        'parameter_value' => 'dd/mm/yyyy',
      ], [
        'parameter' => 'MULTILANG',
        'parameter_value' => '1',
      ], [
        'parameter' => 'MULTICURRENCY',
        'parameter_value' => '1',
      ], [
        'parameter' => 'GOOGLEMAPKEY',
        'parameter_value' => 'AIzaSyCzx_KiC4Bhj-ra6y-5rTSL0O8pR7e-GHU',
      ], [
        'parameter' => 'ADDSCRIPTS',
        'parameter_value' => '',
      ], [
        'parameter' => 'CONTACT_PHONE',
        'parameter_value' => '+573045319769',
      ], [
        'parameter' => 'CONTACT_EMAIL',
        'parameter_value' => 'lcorrea@doitviajesyturismo.com',
      ], [
        'parameter' => 'CONTACT_MSG_OFFERS',
        'parameter_lang' => 'es',
        'parameter_value' => 'Hola Doit, me gustaria tener información de sus ofertas',
      ], [
        'parameter' => 'CONTACT_MSG_OFFERS',
        'parameter_lang' => 'es_CO',
        'parameter_value' => 'Hola Doit, me gustaria tener información de sus ofertas',
      ], [
        'parameter' => 'CONTACT_MSG_OFFERS',
        'parameter_lang' => 'en',
        'parameter_value' => 'Hello Doit, I would like to have information about your offers',
      ], [
        'parameter' => 'CONTACT_MSG_OFFERS',
        'parameter_lang' => 'de',
        'parameter_value' => 'Hallo Doit, ich hätte gerne Informationen zu Ihren Angeboten',
      ], [
        'parameter' => 'RNT_TITLE',
        'parameter_value' => 'RNT 2022',
      ], [
        'parameter' => 'RNT_FILE',
        'parameter_value' => 'RNT 2022.pdf',
      ], [
        'parameter' => 'CONTACT_FB',
        'parameter_value' => '@doitviajesyturismo',
      ], [
        'parameter' => 'CONTACT_TW',
        'parameter_value' => '@doitviajesytur',
      ], [
        'parameter' => 'CONTACT_IM',
        'parameter_value' => '@doitviajesyturismo',
      ], [
        'parameter' => 'COMPANY_ADDRESS',
        'parameter_value' => 'Calle 64C Bis 85 J 20 piso 3',
      ], [
        'parameter' => 'COMPANY_LOCALITY',
        'parameter_value' => 'Bogota D.C.',
      ], [
        'parameter' => 'COMPANY_COUNTRY',
        'parameter_value' => 'CO',
      ],  [
        'parameter' => 'COUNTRY_NAME',
        'parameter_value' => 'Colombia',
      ], [
        'parameter' => 'COMPANY_POSTAL_CODE',
        'parameter_value' => '111011',
      ], [
        'parameter' => 'COMPANY_LAT',
        'parameter_value' => '4.68645330000000016',
      ], [
        'parameter' => 'COMPANY_LON',
        'parameter_value' => '-74.1147402',
      ], [
        'parameter' => 'COMPANY_MAIN_COLOR',
        'parameter_value' => '#ff7f00',
      ], [
        'parameter' => 'ADMINURL',
        'parameter_value' => 'https://admin.doitviajesyturismo.com/',
      ], [
        'parameter' => 'LICENSEKEY',
        'parameter_value' => 'XaIWsWW1+oSn+sr8WI09D6/Mjdmbu6Hgv2/TeJtEUhw=',
      ], [
        'parameter' => 'LOGOCOMERCIAL',
        'parameter_value' => 'logocomercial.png',
      ], [
        'parameter' => 'LOGO',
        'parameter_value' => 'logo.png',
      ], [
        'parameter' => 'RNT',
        'parameter_value' => '62169',
      ], [
        'parameter' => 'COMPANY_LEGAL_DESC',
        'parameter_lang' => 'es',
        'parameter_value' => 'En Do It viajes y turismo SAS., rechazamos la explotación, la pornografía, el turismo sexual y demás formas de abuso sexual con menores de edad. Según lo dispuesto por el artículo 17 de la Ley 679 de 2001, advertimos al turista que la explotación y el abuso sexual de menores de edad en el país son sancionados penal y administrativamente, conforme a las normas y leyes.',
      ], [
        'parameter' => 'COMPANY_LEGAL_DESC',
        'parameter_lang' => 'es_CO',
        'parameter_value' => 'En Do It viajes y turismo SAS., rechazamos la explotación, la pornografía, el turismo sexual y demás formas de abuso sexual con menores de edad. Según lo dispuesto por el artículo 17 de la Ley 679 de 2001, advertimos al turista que la explotación y el abuso sexual de menores de edad en el país son sancionados penal y administrativamente, conforme a las normas y leyes.',
      ], [
        'parameter' => 'COMPANY_LEGAL_DESC',
        'parameter_lang' => 'de',
        'parameter_value' => 'Bei Do It viajes y turismo SAS., lehnen wir Ausbeutung, Pornografie, Sextourismus und andere Formen des sexuellen Missbrauchs Minderjähriger ab. Gemäß den Bestimmungen von Artikel 17 des Gesetzes 679 von 2001 warnen wir den Touristen, dass die Ausbeutung und der sexuelle Missbrauch von Minderjährigen im Land gemäß den Vorschriften und Gesetzen strafrechtlich und verwaltungsrechtlich sanktioniert werden.',
      ], [
        'parameter' => 'COMPANY_LEGAL_DESC',
        'parameter_lang' => 'en',
        'parameter_value' => 'At Do It viajes y turismo SAS., we reject exploitation, pornography, sex tourism and other forms of sexual abuse with minors. According to the provisions of article 17 of Law 679 of 2001, we warn the tourist that the exploitation and sexual abuse of minors in the country are criminally and administratively sanctioned, in accordance with the regulations and laws.',
      ], [
        'parameter' => 'COMPANY_DESC',
        'parameter_lang' => 'es',
        'parameter_value' => 'Somos una Agencia de viajes Mayorista, especializada en el destino de Cuba. Contamos con contratación directa con la Embajada de Cuba para Colombia, principales operadores del destino como lo son Cubatur, Viajes Cubanacan, Havanatur, Gaviota Tour etc. Cadenas hoteleras directas como lo son Roc Hoteles, Meliá, Bluediamond, Cubanacan Hoteles, Gaviota Hoteles, Paradiso, entre otros; teniendo así la capacidad de poder manejar cualquier hotel de la isla y diferentes planes que se acomodan a todos los mercados.',
      ], [
        'parameter' => 'COMPANY_DESC',
        'parameter_lang' => 'es_CO',
        'parameter_value' => 'Somos una Agencia de viajes Mayorista, especializada en el destino de Cuba. Contamos con contratación directa con la Embajada de Cuba para Colombia, principales operadores del destino como lo son Cubatur, Viajes Cubanacan, Havanatur, Gaviota Tour etc. Cadenas hoteleras directas como lo son Roc Hoteles, Meliá, Bluediamond, Cubanacan Hoteles, Gaviota Hoteles, Paradiso, entre otros; teniendo así la capacidad de poder manejar cualquier hotel de la isla y diferentes planes que se acomodan a todos los mercados.',
      ], [
        'parameter' => 'COMPANY_DESC',
        'parameter_lang' => 'en',
        'parameter_value' => 'We are a Wholesale Travel Agency, specialized in the destination of Cuba. We have direct contracting with the Embassy of Cuba for Colombia, main operators of the destination such as Cubatur, Viajes Cubanacan, Havanatur, Gaviota Tour, etc. Direct hotel chains such as Roc Hotels, Meliá, Bluediamond, Cubanacan Hotels, Gaviota Hotels, Paradiso, among others; thus having the ability to manage any hotel on the island and different plans that accommodate all markets.',
      ], [
        'parameter' => 'COMPANY_DESC',
        'parameter_lang' => 'de',
        'parameter_value' => 'Wir sind ein Großhandelsreisebüro, spezialisiert auf das Reiseziel Kuba. Wir haben direkte Verträge mit der kubanischen Botschaft für Kolumbien, den wichtigsten Betreibern des Reiseziels wie Cubatur, Viajes Cubanacan, Havanatur, Gaviota Tour usw. Direkte Hotelketten wie unter anderem Roc Hotels, Meliá, Bluediamond, Cubanacan Hotels, Gaviota Hotels, Paradiso; Dadurch haben Sie die Möglichkeit, jedes Hotel auf der Insel und verschiedene Pläne zu verwalten, die alle Märkte abdecken.',
      ], [
        'parameter' => 'FB_ID_PAGE',
        'parameter_value' => '2063756457010073',
      ], [
        'parameter' => 'FB_IDS_ADMINS',
        'parameter_value' => '100000964416427',
      ], [
        'parameter' => 'APP_LANGUAGES',
        'parameter_value' => 'es,es_CO,en,de',
      ], [
        'parameter' => 'ABOUT_TEXT',
        'parameter_lang' => 'es',
        'parameter_value' => '<b>Somos una Agencia de viajes Mayorista</b>, especializada en el destino de <b>Cuba</b>. Contamos con contratación directa con la Embajada de Cuba para Colombia, principales operadores del destino como lo son Cubatur, Viajes Cubanacan, Havanatur, Gaviota Tour etc. Cadenas hoteleras directas como lo son Roc Hoteles, Meliá, Bluediamond, Cubanacan Hoteles, Gaviota Hoteles, Paradiso, entre otros; teniendo así la capacidad de poder manejar cualquier hotel de la isla y diferentes planes que se acomodan a todos los mercados.<br><br>
          Contamos con una variedad de planes estandar y a la medida. Destinos combinados como: Habana & Varadero, Habana & Los Cayos, Circuitos (recorridos de minimo 3 ciudades) en planes entre 8 y 15 días, Planes a la médida como buceo, planes de salud, educación, eventos culturales, congresos y convenciones, manejo de grupos, bodas, lunas de miel etc.<br><br>
          En Do It tenemos un sinfín de eventos y opciones para que tus sueños de viaje se hagan realidad.',
      ], [
        'parameter' => 'ABOUT_TEXT',
        'parameter_lang' => 'es_CO',
        'parameter_value' => '<b>Somos una Agencia de viajes Mayorista</b>, especializada en el destino de <b>Cuba</b>. Contamos con contratación directa con la Embajada de Cuba para Colombia, principales operadores del destino como lo son Cubatur, Viajes Cubanacan, Havanatur, Gaviota Tour etc. Cadenas hoteleras directas como lo son Roc Hoteles, Meliá, Bluediamond, Cubanacan Hoteles, Gaviota Hoteles, Paradiso, entre otros; teniendo así la capacidad de poder manejar cualquier hotel de la isla y diferentes planes que se acomodan a todos los mercados.<br><br>
          Contamos con una variedad de planes estandar y a la medida. Destinos combinados como: Habana & Varadero, Habana & Los Cayos, Circuitos (recorridos de minimo 3 ciudades) en planes entre 8 y 15 días, Planes a la médida como buceo, planes de salud, educación, eventos culturales, congresos y convenciones, manejo de grupos, bodas, lunas de miel etc.<br><br>
          En Do It tenemos un sinfín de eventos y opciones para que tus sueños de viaje se hagan realidad.',
      ], [
        'parameter' => 'ABOUT_TEXT',
        'parameter_lang' => 'en',
        'parameter_value' => '<b> We are a wholesale travel agency </b>, specialized in the destination of <b> Cuba </b>. We have direct recruitment with the Embassy of Cuba for Colombia, main destination operators such as Cubatur, Viajes Cubanacan, Havanatur, Gaviota Tour etc. Direct hotel chains such as Roc Hotels, Meliá, BlueDiamond, Cubanacan Hotels, Gaviota Hotels, Paradiso, among others; Having thus the ability to manage any hotel on the island and different plans that accommodate all markets. <br> <br>
          We have a variety of standard and tailored plans. Combined destinations such as: Havana & Varadero, Havana & Los Cayos, Circuits (Tours of minimum 3 cities) in plans between 8 and 15 days, medical plans such as diving, health plans, education, cultural events, congresses and conventions, handling of groups, weddings, honeymoons etc. <br> <br>
          In Do it we have endless events and options so that your travel dreams come true.',
      ], [
        'parameter' => 'ABOUT_TEXT',
        'parameter_lang' => 'de',
        'parameter_value' => '<b> Wir sind ein Wholesale-Reiseagentur </b>, das auf das Ziel von <b> cuba </b> spezialisiert ist. Wir haben direkte Rekrutierung mit der Botschaft von Kuba für Kolumbien, Hauptzielbetreiber wie Cubatur, Viajes Cubanacan, Havanatur, Gaviota-Tour usw. Direkte Hotelketten wie ROC Hotels, Meliá, Bledingiamond, Hotels in Kubanacan, Gaviota Hotels, Paradiso, ua; So haben Sie die Möglichkeit, jedes Hotel auf der Insel und anderer Pläne, die alle Märkte aufnehmen, zu verwalten. <br> <br>
          Wir haben eine Vielzahl von Standard- und maßgeschneiderten Plänen. Kombinierte Ziele wie: Havana & Varadero, Havanna & Los Cayos, Schaltkreise (Touren in Höhe von 3 Städten) in Plänen zwischen 8 und 15 Tagen, medizinischen Plänen wie Tauchen, Gesundheitspläne, Bildung, Kulturveranstaltungen, Kongresse und Kongresse, Handhabung von Gruppen, Hochzeiten, Flitterwochen usw. <br> <br>
          Dabei haben wir endlose Ereignisse und Optionen, damit Ihre Reiseträume wahr werden.',
      ], [
        'parameter' => 'ADDSCRIPTS_ADMIN',
        'parameter_value' => '',
      ], [
        'parameter' => 'FEATURED_HOTELS_HOME',
        'parameter_value' => '1',
      ], [
        'parameter' => 'FEATURED_HOTELS_HCNT',
        'parameter_value' => '4',
      ], [
        'parameter' => 'FEATURED_DESTINATIONS_HOME',
        'parameter_value' => '1',
      ], [
        'parameter' => 'FEATURED_DESTINATIONS_HCNT',
        'parameter_value' => '4',
      ], [
        'parameter' => 'FEATURED_PACKAGES_HCNT',
        'parameter_value' => '5',
      ], [
        'parameter' => 'FEATURED_PACKAGES_HOME',
        'parameter_value' => '1',
      ], [
        'parameter' => 'FEATURED_OFFERS_HOME',
        'parameter_value' => '1',
      ], [
        'parameter' => 'DISCOUNT',
        'parameter_value' => '0',
      ], [
        'parameter' => 'GLOBALTAX',
        'parameter_value' => '19.00',
      ], [
        'parameter' => 'BOOK_EXPIRY',
        'parameter_value' => '4',
      ], [
        'parameter' => 'COUPON_CODE_LENGTH',
        'parameter_value' => '7',
      ], [
        'parameter' => 'EMAIL_SERVICE',
        'parameter_value' => '1',
      ], [
        'parameter' => 'LIMIT_GALLERY',
        'parameter_value' => '9',
      ], [
        'parameter' => 'LIMIT_SLIDER',
        'parameter_value' => '3',
      ], [
        'parameter' => 'LIMIT_THUMBS',
        'parameter_value' => '3',
      ], [
        'parameter' => 'COMPANY_CITY',
        'parameter_value' => '10881',
      ], [
        'parameter' => 'TEMPLATE',
        'parameter_value' => 'telephasic',
      ], [
        'parameter' => 'MODE',
        'parameter_value' => 'development',
      ], [
        'parameter' => 'DEBUG',
        'parameter_value' => 'true',
      ], [
        'parameter' => 'API_KEY',
        'parameter_value' => 'base64:XaIWsWW1+oSn+sr8WI09D6/Mjdmbu6Hgv2/TeJtEUhw=',
      ], [
        'parameter' => 'LOGO_URL',
        'parameter_value' => 'https://doitviajesyturismo.com/favicon.png',
      ], [
        'parameter' => 'CONTACT_FB_SUPPORT',
        'parameter_value' => '//www.facebook.com/olimpussoft',
      ], [
        'parameter' => 'CONTACT_TW_SUPPORT',
        'parameter_value' => 'olimpussoftd',
      ], [
        'parameter' => 'CONTACT_IM_SUPPORT',
        'parameter_value' => 'olimpussoft',
      ], [
        'parameter' => 'SUPPORT_ADDRESS',
        'parameter_value' => 'Av. 49 #63-31 Int 267',
      ], [
        'parameter' => 'SUPPORT_LOCALITY',
        'parameter_value' => 'Bello',
      ], [
        'parameter' => 'SUPPORT_COUNTRY',
        'parameter_value' => 'CO',
      ], [
        'parameter' => 'MAIN_COLOR',
        'parameter_value' => '#ff7f00',
      ], [
        'parameter' => 'SECOND_COLOR',
        'parameter_value' => '#196c5f',
      ], [
        'parameter' => 'SUPPORT_COUNTRY_NAME',
        'parameter_value' => 'Colombia',
      ], [
        'parameter' => 'SUPPORT_POSTAL_CODE',
        'parameter_value' => '051050',
      ], [
        'parameter' => 'SUPPORT_LAT',
        'parameter_value' => '6.3468987',
      ], [
        'parameter' => 'SUPPORT_LON',
        'parameter_value' => '-75.5577909',
      ], [
        'parameter' => 'SUPPORT_NAME',
        'parameter_value' => 'Olimpus Soft',
      ], [
        'parameter' => 'SUPPORT_URL',
        'parameter_value' => 'https://olimpussoft.com',
      ], [
        'parameter' => 'CONTACT_PHONE_SUPPORT',
        'parameter_value' => '+573174428875',
      ], [
        'parameter' => 'FB_ID_PAGE_SUPPORT',
        'parameter_value' => '1559328247686915',
      ], [
        'parameter' => 'CONTACT_EMAIL_SUPPORT',
        'parameter_value' => 'mmorales@olimpussoft.com',
      ],  [
        'parameter' => 'DEV_AUTHOR',
        'parameter_value' => 'Miguel Morales - Olimpus Soft',
      ], [
        'parameter' => 'DEV_COMPANY',
        'parameter_value' => 'Olimpus Soft',
      ], [
        'parameter' => 'DEV_NIT',
        'parameter_value' => '1012461973-0',
      ], [
        'parameter' => 'DEV_EMAIL',
        'parameter_value' => 'mmorales@olimpussoft.com',
      ], [
        'parameter' => 'DEV_URL',
        'parameter_value' => 'http://olimpussoft.com',
      ], [
        'parameter' => 'DEV_PHONE',
        'parameter_value' => '+573174428875',
      ], [
        'parameter' => 'DEV_TW_PROFILE',
        'parameter_value' => '@olimpussoft',
      ], [
        'parameter' => 'DEV_TW_AUTHOR',
        'parameter_value' => '@mmoralescoterio',
      ], [
        'parameter' => 'DEV_TW_PAGE',
        'parameter_value' => 'https://www.twitter.com/olimpussoft',
      ], [
        'parameter' => 'DEV_IM_PROFILE',
        'parameter_value' => '@olimpussoft',
      ], [
        'parameter' => 'DEV_IM_AUTHOR',
        'parameter_value' => '@miguelmmorales',
      ], [
        'parameter' => 'DEV_IM_PAGE',
        'parameter_value' => 'https://www.instagram.com/olimpussoft',
      ], [
        'parameter' => 'GOOGLE_SITEVERIFY',
        'parameter_value' => 'w3CZfUwaM_h7SfOHKBpGaNW5Xb5gZBoXcfowo7Q4qco',
      ], [
        'parameter' => 'GOOGLE_RECAPTCHA_SITEKEY',
        'parameter_value' => '6LcRyt0UAAAAADYen-NCuM1tIEULQHq3TX1VAj_p',
      ], [
        'parameter' => 'GOOGLE_RECAPTCHA_SITEVERIFY',
        'parameter_value' => '6LcRyt0UAAAAAFtNgE8fDp4C8z60gRBsBnzYjETJ',
      ], [
        'parameter' => 'GOOGLE_CLIENTID',
        'parameter_value' => '301370644869-pl2h2kklf4g9b6dlenqggq68pqiq7ue6.apps.googleusercontent.com',
      ], [
        'parameter' => 'GOOLGE_SECRET_CLIENT',
        'parameter_value' => 'l1Ty_vMQDV_pfiCHnqsBiiyZ',
      ], [
        'parameter' => 'GOOGLE_API_KEY',
        'parameter_value' => 'AIzaSyAbghG866SlAo',
      ], [
        'parameter' => 'FB_PAGE',
        'parameter_value' => '2063756457010073',
      ], [
        'parameter' => 'FB_APP_ID',
        'parameter_value' => '2043447709097481',
      ], [
        'parameter' => 'FB_ADMIN_ID',
        'parameter_value' => '100012341980917',
      ], [
        'parameter' => 'POSTALCODE',
        'parameter_value' => '111921',
      ],
    ];
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
