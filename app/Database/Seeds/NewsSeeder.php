<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder {
  protected $tableName = 'news';
  public function run() {
    $data = [
      //es
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/001.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/05/30/cuba-por-un-turismo-sostenible-y-respetuoso-del-medio-ambiente',
        'title'     => 'Vitrina Turística Anato 2022 muy positiva para Cuba',
        'details'   => 'Cuba es un destino muy atractivo, que está muy de moda a nivel internacional',
        'orden'     => '1',
        'lang'      => NULL,
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/002.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/04/10/charter-bogota-santa-clara-un-hito-para-el-turismo-en-cuba',
        'title'     => 'Chárter Bogotá-Santa Clara un hito para el turismo en Cuba',
        'details'   => 'Este chárter a Cuba significa para mí el rompimiento de un paradigma más, una meta más lograda y la apertura a nuevas oportunidades...',
        'orden'     => '3',
        'lang'      => NULL,
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/003.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/04/11/llegaron-a-cuba-turistas-de-colombia-en-charter-bogota-santa-clara',
        'title'     => 'Llegaron a Cuba turistas de Colombia en chárter Bogotá-Santa Clara',
        'details'   => 'Los viajeros podrán disfrutar aquí la belleza y las bondades de la Cayería Noreste de Villa Clara, un sueño de muchas personas.',
        'orden'     => '4',
        'lang'      => NULL,
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/004.jpg',
        'news_link' => 'https://www.cubanoticias360.com/queda-inaugurada-nueva-ruta-aerea-bogota-santa-clara/',
        'title'     => 'Queda inaugurada nueva ruta aérea Bogotá-Santa Clara',
        'details'   => 'Una nueva ruta aérea que unirá las ciudades de Bogotá y Santa Clara quedó inaugurada recientemente con un vuelo chárter operado por la aerolínea Wingo',
        'orden'     => '2',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/005.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/04/17/califican-de-exitoso-primer-vuelo-charter-bogota-santa-clara-cuba',
        'title'     => 'Califican de exitoso primer vuelo chárter Bogotá-Santa Clara (Cuba)',
        'details'   => 'Durante seis días, los representantes de agencias mayoristas y medios de prensa realizaron un Fam Trip o viaje de familiarización, cada grupo con un plan distinto',
        'orden'     => '2',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/006.jpg',
        'news_link' => 'https://colombia.ladevi.info/do-it-viajes-y-turismo/do-it-viajes-y-turismo-especialistas-el-destino-cuba-n40599',
        'title'     => 'Do It Viajes y Turismo: especialistas en el destino Cuba',
        'details'   => '<b>Luisa Correa: </b>Nuestro lema es que estamos para cumplir y hacer realidad los sueños de viaje de cada uno de nuestros pasajeros, y hasta el momento lo estamos cumpliendo.',
        'orden'     => '0',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/007.jpg',
        'news_link' => 'https://columnavip.com/2022/02/cuba-alcanzo-objetivos-en-vitrina-anato-2022/',
        'title'     => 'Do It Viajes y Turismo: especialistas en el destino Cuba',
        'details'   => 'Ha sido un evento positivo, sumamente fructífero tanto para la oficina como paras las agencias y cadenas hoteleras que nos acompañaron.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/008.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/05/31/cuidar-emblematica-playa-varadero-de-cuba-para-el-futuro',
        'title'     => 'Cuidar emblemática playa Varadero de Cuba para el futuro',
        'details'   => 'Desde ahora hay que trabajar. Varadero ha sido la playa más emblemática de Cuba, y no puede esperar, todo lo que hagamos ahora impactará en su futuro.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/009.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/06/20/autoridades-confian-en-desarrollo-del-turismo-de-cuba',
        'title'     => 'Autoridades confían en desarrollo del turismo de Cuba',
        'details'   => 'Alexander Sierra, (Mintur) de Cuba, mostró confianza en las perspectivas de la industria de los viajes en este país.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/010.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/02/27/cuba-un-destino-turistico-deseado-en-feria-anato-de-colombia',
        'title'     => 'Cuba, un destino turístico deseado en feria Anato de Colombia',
        'details'   => 'Ha sido un evento positivo, sumamente fructífero tanto para la oficina como paras las agencias y cadenas hoteleras que nos acompañaron.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/011.jpg',
        'news_link' => 'https://youtu.be/yKrdZincToo',
        'title'     => 'Conocimos campesinos cubanos. ¿Qué opinan de su país?',
        'details'   => 'Llegamos a esta isla y nos metimos en las profundidades del campo para dialogar un poco con los campesinos y nuestra sorpresa fue grande.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/012.jpg',
        'news_link' => 'https://youtu.be/wqMfhQgzwns',
        'title'     => ' ¿EN SERIO, esto es LA ISLA? ASÍ se llega a CUBA diferente',
        'details'   => 'Hemos llegado a Cuba y nos hemos sorprendido con sus playas de arenas blancas y su mar hábitat de cientos de corales y especies de peces. Esta es la nueva forma de llegar a CUBA desde Colombia.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/013.jpg',
        'news_link' => 'https://youtu.be/LEcn5hOfEnY',
        'title'     => 'Agentes de viaje de Colombia motivados con venta del chárter Bogotá-Santa Clara',
        'details'   => 'Agentes de viaje de Colombia manifestaron su satisfacción con el paquete turístico que ofrece el chárter Bogotá-Santa Clara que cuenta con una programación de nuevos vuelos para disfrutar las bondades turísticas de Cuba.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/014.jpg',
        'news_link' => 'https://youtu.be/EMd4naof-b8',
        'title'     => 'Todo un éxito primer vuelo chárter Bogotá-Santa Clara (Cuba)',
        'details'   => 'Turistas, agentes de viajes, freelancers, periodistas y youtubers calificaron de exitoso el primer chárter que unió a Bogotá con Santa Clara, ciudad central de Cuba, y que propició también recorridos por varias zonas del país, entre ellas La Habana.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/015.jpg',
        'news_link' => 'https://youtu.be/7zvku_0-rc0',
        'title'     => 'Llegaron a Cuba turistas de Colombia en chárter Bogotá-Santa Clara',
        'details'   => 'El primer vuelo chárter de la aerolínea Wingo, que unió a Bogotá con Santa Clara, ciudad central de Cuba, arribó al aeropuerto Abel Santamaría donde los turistas fueron recibidos a ritmo de música cubana. ',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/016.jpg',
        'news_link' => 'https://youtu.be/D2TV5f0LRIU',
        'title'     => 'Cuba: un destino turístico deseado en feria Anato de Colombia',
        'details'   => 'Al cierre de la Vitrina 41 de Anato 2022, la feria comercial más importante de Colombia, los participantes en el stad de Cuba.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/017.jpg',
        'news_link' => 'https://fb.watch/dMU_Zzhq6e/',
        'title'     => '¡El Programa TRIBU VIAJERA retoma hoy su rumbo! ',
        'details'   => 'Hora de disfrutar de la primera parte de nuestro programa sobre #Cuba, un destino que es cultura, naturaleza, historia, magia y tradiciones.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/018.jpg',
        'news_link' => 'https://fb.watch/dMVf_2Z13R/',
        'title'     => 'Cuba 2 entrega ',
        'details'   => 'Disfruta de la segunda entrega del destino Turístico #Cuba, en esta oportunidad nos acompaña el Agregado del turismo de la Isla Mariano Fernández, María Paula Camacho de Tribu Viajera Kids y Luisa Correa de la agencia Do it viajes y turismo.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/019.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/06/23/destino-cubaunica-promociona-charter-bogota-santa-clara',
        'title'     => 'Destino #CubaUnica promociona chárter Bogotá-Santa Clara ',
        'details'   => 'El destino #CubaUnica promociona hoy el vuelo chárter Bogotá-Santa Clara, que operará nuevamente este 28 de Junio, como una opción para el disfrute de los colombianos de un lugar de belleza singular en Cuba.',
        'orden'     => '4',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/020.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/06/25/cayos-de-villa-clara-en-cuba-una-opcion-para-turistas-colombianos',
        'title'     => 'Cayos de Villa Clara en Cuba una opción para turistas colombianos (+Foto)',
        'details'   => 'Operadores colombianos de agencias de viajes conocieron detalles del vuelo chárter Bogotá-Santa Clara (Cuba).',
        'orden'     => '1',
        'lang'      => 'es',
        'status'    => '1',
      ],
    ];
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
