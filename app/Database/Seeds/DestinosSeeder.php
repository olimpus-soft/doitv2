<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DestinosSeeder extends Seeder {
  protected $tableName = 'destinos';
  protected $tableName2 = 'destinos_detalles';
  protected $tableName3 = 'destino_imagenes';
  public function run() {
    $data = [
      //es
      [
        'destino_titulo'    => 'La Habana',
        'destino_slug'      => 'la-habana',
        'destino_subtitulo' => 'un destino líder en el Caribe',
        'destino_resumen'   => 'La Habana se ha posicionado como un destino líder en el Caribe, recibiendo actualmente más de la mitad del total de visitantes extranjeros que llegan a Cuba. La estrategia turística del país se ha sustentado hasta hoy en los atractivos de las playas y el clima, por su condición de isla caribeña. Aún cuando se reconoce al patrimonio cultural como un recurso diferenciador del destino y creador de valor, y se han puesto en práctica iniciativas para su promoción, hay un limitado conocimiento sobre el sector y la demanda actual, lo que afecta al desarrollo de La Habana como destino cultural. Este trabajo tiene como propósito analizar el perfil de los turistas que visitan La Habana como destino cultural, su valoración del destino, la fidelidad, y las preferencias respecto a éste y otros destinos culturales. Se han encuestado a 1500 turistas de los seis países emisores principales de turismo a Cuba, lo que ha permitido identificar el potencial que ofrecen estos mercados para el diseño de productos y experiencias culturales, así como para distinguir las áreas que deben recibir los esfuerzos de marketing de cara a la fidelización de la demanda. El estudio ofrece recomendaciones útiles para contribuir a una gestión turística más sostenible de los recursos culturales en la región caribeña.',
        'destino_lang'      => 'es',
        'destino_image'     => 'destinos/0001.jpg',
        'status'            => '1',
        'detalles'          => [
          'descripcion'     => '
            El turismo se desarrolla en Cuba en los comienzos del siglo XIX y comienza en La Habana asociado a la prosperidad de la ciudad como colonia española (Rodríguez Domínguez, 2002). Se plantea que el desarrollo del comercio y los arribos de inmigrantes y visitantes extranjeros a la isla generaron una alta demanda de alojamiento, a la que le sucedió la aparición de teatros, cafés, salas de bailes, paseos y parques con bandas de música, entre otras edificaciones destinadas a usos culturales y comerciales (Quintana et al., 2005). Estas condiciones de prosperidad de la ciudad capital fueron las que dieron impulso a la actividad turística en el país durante más de 100 años.

            <h4>Turismo, territorio y patrimonio</h4>

            El patrimonio cultural no es más que el testimonio de los valores y el quehacer de un pueblo, es único en un espacio físico y su autenticidad lo convierte en un recurso turístico potencial capaz de motivar viajes y generar actividades en los destinos (McIntosh & Prentice, 1999). Para el turismo, el patrimonio deviene en la clave de la diferenciación generando en muchos casos el crecimiento de diversos segmentos de demanda, desde los más especializados cuya motivación y experiencias de viaje se centran casi exclusivamente en los valores patrimoniales, hasta el turista que decide viajar a un destino en busca de un clima cálido y de sus playas, pero además desea conocer la idiosincrasia del sitio. El patrimonio también requiere financiamiento para sostener su rehabilitación y mantener sus valores y no puede evitar el interés que generan sus atracciones más allá de las fronteras donde se localizan (McKercher et al., 2002).

            <h4>El turista cultural</h4>

            En la literatura los autores concuerdan en que turistas culturales son aquellos que tienen una relación estrecha y directa con una experiencia cultural. Sin embargo, no todos los turistas culturales ¨consumen¨ cultura, o lo que es lo mismo, satisfacen sus necesidades culturales de la misma manera (Richards, 2007; McKercher, Wong & Lau, 2006). Las características demográficas, el nivel económico y educacional, la naturaleza discrecional de las percepciones y la valoración del turista han contribuido a estas diferencias. Al mismo tiempo, el desarrollo del transporte, la comunicación y otros aspectos, han permitido que los sitios con atracciones culturales sean más propensos a recibir flujos turísticos donde coexista una mayor diversidad de consumidores (Moragues, 2006).

            <h4>Multidestinos y transculturación</h4>

            El turista de hoy en día suele ser un consumidor múltiple. Puede ser un cliente ocasional de turismo rural, de viaje de negocios o congresos por su actividad profesional, de aventura en unas cortas vacaciones o de cultura durante un fin de semana (Jovicic, 2016). Uno de los factores que ha contribuido a esto es el desarrollo de internet y las comunicaciones, que ha permitido una mayor autonomía en la planificación de los viajes, sin que esto signifique un incremento del precio por la intermediación de profesionales del sector (Caro, Luque & Zayas Fernández, 2014; Richards, 2007). Además, gracias al avance tecnológico, lo que antes eran sitios culturales anclados a un espacio físico, ahora pueden ser individualmente ¨consumidos¨ gracias a los avances de las herramientas audiovisuales (Russo & Van der Borg, 2002).

            <h4>Atracciones en La Habana</h4>
            <h5>Plaza Vieja</h5>
            Lo más notorio de este lugar son las edificaciones que la rodean, pues tienen los incuestionables valores históricos y artísticos de haber fijado un estilo arquitectónico que se extendió por toda la ciudad y caracterizó la arquitectura cubana del siglo XVIII.

            <h5>Plaza de Armas</h5>
            Las más antigua y una de las más hermosas de La Habana. Es el punto de partida perfecto para explorar La Habana Vieja, rodeada por cafeterías, bares y restaurantes. Conforma el primer espacio de la ciudad, en torno al cual se agrupan los edificios más representativos del barroco cubano y la colonia española.

          ',
          'status'          => '1',
        ],
        'imagenes'          => [
          [
            'recurso'               => 'destinos/0001/0001.png',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Minagen o1',
            'recurso_descripcion'   => 'desrcrrrrrr',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0002.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Turismo, territorio y patrimonio',
            'recurso_descripcion'   => '',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0003.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Plaza de Armas',
            'recurso_descripcion'   => 'Las más antigua y una de las más hermosas de La Habana.',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0004.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Plaza Vieja',
            'recurso_descripcion'   => 'o más notorio de este lugar son las edificaciones que la rodean',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0005.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Multidestinos y transculturación',
            'recurso_descripcion'   => 'El turista de hoy en día suele ser un consumidor múltiple.',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0006.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Turismo, territorio y patrimonio',
            'recurso_descripcion'   => 'l patrimonio cultural no es más que el testimonio de los valores y el quehacer de un pueblo, es único en un espacio físico y su autenticidad lo convierte en un recurso turístico potencial',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0007.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'El turista cultural',
            'recurso_descripcion'   => 'n la literatura los autores concuerdan en que turistas culturales son aquellos que tienen una relación estrecha y directa con una experiencia cultural',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'https://www.youtube.com/watch?v=wqMfhQgzwns',
            'recurso_tipo'          => 'video',
            'recurso_tipo_destino'  => 'url',
            'recurso_titulo'        => 'Nueva forma de conocer Cuba',
            'recurso_descripcion'   => 'Hemos llegado a Cuba y nos hemos sorprendido con sus playas de arenas blancas y su mar hábitat de cientos de corales y especies de peces. Esta es la nueva forma de llegar a CUBA desde Colombia',
            'status'                => '1',       
          ],
        ],
      ],
      [
        'destino_titulo'    => 'La Habana 3',
        'destino_slug'      => 'la-habana-3',
        'destino_subtitulo' => 'un destino líder en el Caribe',
        'destino_resumen'   => 'La Habana se ha posicionado como un destino líder en el Caribe, recibiendo actualmente más de la mitad del total de visitantes extranjeros que llegan a Cuba. La estrategia turística del país se ha sustentado hasta hoy en los atractivos de las playas y el clima, por su condición de isla caribeña. Aún cuando se reconoce al patrimonio cultural como un recurso diferenciador del destino y creador de valor, y se han puesto en práctica iniciativas para su promoción, hay un limitado conocimiento sobre el sector y la demanda actual, lo que afecta al desarrollo de La Habana como destino cultural. Este trabajo tiene como propósito analizar el perfil de los turistas que visitan La Habana como destino cultural, su valoración del destino, la fidelidad, y las preferencias respecto a éste y otros destinos culturales. Se han encuestado a 1500 turistas de los seis países emisores principales de turismo a Cuba, lo que ha permitido identificar el potencial que ofrecen estos mercados para el diseño de productos y experiencias culturales, así como para distinguir las áreas que deben recibir los esfuerzos de marketing de cara a la fidelización de la demanda. El estudio ofrece recomendaciones útiles para contribuir a una gestión turística más sostenible de los recursos culturales en la región caribeña.',
        'destino_lang'      => 'es',
        'destino_image'     => 'destinos/0001.jpg',
        'status'            => '1',
        'detalles'          => [
          'descripcion'     => '
            El turismo se desarrolla en Cuba en los comienzos del siglo XIX y comienza en La Habana asociado a la prosperidad de la ciudad como colonia española (Rodríguez Domínguez, 2002). Se plantea que el desarrollo del comercio y los arribos de inmigrantes y visitantes extranjeros a la isla generaron una alta demanda de alojamiento, a la que le sucedió la aparición de teatros, cafés, salas de bailes, paseos y parques con bandas de música, entre otras edificaciones destinadas a usos culturales y comerciales (Quintana et al., 2005). Estas condiciones de prosperidad de la ciudad capital fueron las que dieron impulso a la actividad turística en el país durante más de 100 años.

            <h4>Turismo, territorio y patrimonio</h4>

            El patrimonio cultural no es más que el testimonio de los valores y el quehacer de un pueblo, es único en un espacio físico y su autenticidad lo convierte en un recurso turístico potencial capaz de motivar viajes y generar actividades en los destinos (McIntosh & Prentice, 1999). Para el turismo, el patrimonio deviene en la clave de la diferenciación generando en muchos casos el crecimiento de diversos segmentos de demanda, desde los más especializados cuya motivación y experiencias de viaje se centran casi exclusivamente en los valores patrimoniales, hasta el turista que decide viajar a un destino en busca de un clima cálido y de sus playas, pero además desea conocer la idiosincrasia del sitio. El patrimonio también requiere financiamiento para sostener su rehabilitación y mantener sus valores y no puede evitar el interés que generan sus atracciones más allá de las fronteras donde se localizan (McKercher et al., 2002).

            <h4>El turista cultural</h4>

            En la literatura los autores concuerdan en que turistas culturales son aquellos que tienen una relación estrecha y directa con una experiencia cultural. Sin embargo, no todos los turistas culturales ¨consumen¨ cultura, o lo que es lo mismo, satisfacen sus necesidades culturales de la misma manera (Richards, 2007; McKercher, Wong & Lau, 2006). Las características demográficas, el nivel económico y educacional, la naturaleza discrecional de las percepciones y la valoración del turista han contribuido a estas diferencias. Al mismo tiempo, el desarrollo del transporte, la comunicación y otros aspectos, han permitido que los sitios con atracciones culturales sean más propensos a recibir flujos turísticos donde coexista una mayor diversidad de consumidores (Moragues, 2006).

            <h4>Multidestinos y transculturación</h4>

            El turista de hoy en día suele ser un consumidor múltiple. Puede ser un cliente ocasional de turismo rural, de viaje de negocios o congresos por su actividad profesional, de aventura en unas cortas vacaciones o de cultura durante un fin de semana (Jovicic, 2016). Uno de los factores que ha contribuido a esto es el desarrollo de internet y las comunicaciones, que ha permitido una mayor autonomía en la planificación de los viajes, sin que esto signifique un incremento del precio por la intermediación de profesionales del sector (Caro, Luque & Zayas Fernández, 2014; Richards, 2007). Además, gracias al avance tecnológico, lo que antes eran sitios culturales anclados a un espacio físico, ahora pueden ser individualmente ¨consumidos¨ gracias a los avances de las herramientas audiovisuales (Russo & Van der Borg, 2002).

            <h4>Atracciones en La Habana</h4>
            <h5>Plaza Vieja</h5>
            Lo más notorio de este lugar son las edificaciones que la rodean, pues tienen los incuestionables valores históricos y artísticos de haber fijado un estilo arquitectónico que se extendió por toda la ciudad y caracterizó la arquitectura cubana del siglo XVIII.

            <h5>Plaza de Armas</h5>
            Las más antigua y una de las más hermosas de La Habana. Es el punto de partida perfecto para explorar La Habana Vieja, rodeada por cafeterías, bares y restaurantes. Conforma el primer espacio de la ciudad, en torno al cual se agrupan los edificios más representativos del barroco cubano y la colonia española.

          ',
          'status'          => '1',
        ],
        'imagenes'          => [
          [
            'recurso'               => 'destinos/0001/0001.png',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Minagen o1',
            'recurso_descripcion'   => 'desrcrrrrrr',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0002.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Turismo, territorio y patrimonio',
            'recurso_descripcion'   => '',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0003.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Plaza de Armas',
            'recurso_descripcion'   => 'Las más antigua y una de las más hermosas de La Habana.',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0004.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Plaza Vieja',
            'recurso_descripcion'   => 'o más notorio de este lugar son las edificaciones que la rodean',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0005.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Multidestinos y transculturación',
            'recurso_descripcion'   => 'El turista de hoy en día suele ser un consumidor múltiple.',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0006.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Turismo, territorio y patrimonio',
            'recurso_descripcion'   => 'l patrimonio cultural no es más que el testimonio de los valores y el quehacer de un pueblo, es único en un espacio físico y su autenticidad lo convierte en un recurso turístico potencial',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0007.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'El turista cultural',
            'recurso_descripcion'   => 'n la literatura los autores concuerdan en que turistas culturales son aquellos que tienen una relación estrecha y directa con una experiencia cultural',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'https://www.youtube.com/watch?v=wqMfhQgzwns',
            'recurso_tipo'          => 'video',
            'recurso_tipo_destino'  => 'url',
            'recurso_titulo'        => 'Nueva forma de conocer Cuba',
            'recurso_descripcion'   => 'Hemos llegado a Cuba y nos hemos sorprendido con sus playas de arenas blancas y su mar hábitat de cientos de corales y especies de peces. Esta es la nueva forma de llegar a CUBA desde Colombia',
            'status'                => '1',       
          ],
        ],
      ],
      [
        'destino_titulo'    => 'Los Cayos dasd',
        'destino_slug'      => 'los-cayos-dasd',
        'destino_subtitulo' => 'un destino líder en el Caribe',
        'destino_resumen'   => 'La Habana se ha posicionado como un destino líder en el Caribe, recibiendo actualmente más de la mitad del total de visitantes extranjeros que llegan a Cuba. La estrategia turística del país se ha sustentado hasta hoy en los atractivos de las playas y el clima, por su condición de isla caribeña. Aún cuando se reconoce al patrimonio cultural como un recurso diferenciador del destino y creador de valor, y se han puesto en práctica iniciativas para su promoción, hay un limitado conocimiento sobre el sector y la demanda actual, lo que afecta al desarrollo de La Habana como destino cultural. Este trabajo tiene como propósito analizar el perfil de los turistas que visitan La Habana como destino cultural, su valoración del destino, la fidelidad, y las preferencias respecto a éste y otros destinos culturales. Se han encuestado a 1500 turistas de los seis países emisores principales de turismo a Cuba, lo que ha permitido identificar el potencial que ofrecen estos mercados para el diseño de productos y experiencias culturales, así como para distinguir las áreas que deben recibir los esfuerzos de marketing de cara a la fidelización de la demanda. El estudio ofrece recomendaciones útiles para contribuir a una gestión turística más sostenible de los recursos culturales en la región caribeña.',
        'destino_lang'      => 'es',
        'destino_image'     => 'destinos/0001.jpg',
        'status'            => '1',
        'detalles'          => [
          'descripcion'     => '
            El turismo se desarrolla en Cuba en los comienzos del siglo XIX y comienza en La Habana asociado a la prosperidad de la ciudad como colonia española (Rodríguez Domínguez, 2002). Se plantea que el desarrollo del comercio y los arribos de inmigrantes y visitantes extranjeros a la isla generaron una alta demanda de alojamiento, a la que le sucedió la aparición de teatros, cafés, salas de bailes, paseos y parques con bandas de música, entre otras edificaciones destinadas a usos culturales y comerciales (Quintana et al., 2005). Estas condiciones de prosperidad de la ciudad capital fueron las que dieron impulso a la actividad turística en el país durante más de 100 años.

            <h4>Turismo, territorio y patrimonio</h4>

            El patrimonio cultural no es más que el testimonio de los valores y el quehacer de un pueblo, es único en un espacio físico y su autenticidad lo convierte en un recurso turístico potencial capaz de motivar viajes y generar actividades en los destinos (McIntosh & Prentice, 1999). Para el turismo, el patrimonio deviene en la clave de la diferenciación generando en muchos casos el crecimiento de diversos segmentos de demanda, desde los más especializados cuya motivación y experiencias de viaje se centran casi exclusivamente en los valores patrimoniales, hasta el turista que decide viajar a un destino en busca de un clima cálido y de sus playas, pero además desea conocer la idiosincrasia del sitio. El patrimonio también requiere financiamiento para sostener su rehabilitación y mantener sus valores y no puede evitar el interés que generan sus atracciones más allá de las fronteras donde se localizan (McKercher et al., 2002).

            <h4>El turista cultural</h4>

            En la literatura los autores concuerdan en que turistas culturales son aquellos que tienen una relación estrecha y directa con una experiencia cultural. Sin embargo, no todos los turistas culturales ¨consumen¨ cultura, o lo que es lo mismo, satisfacen sus necesidades culturales de la misma manera (Richards, 2007; McKercher, Wong & Lau, 2006). Las características demográficas, el nivel económico y educacional, la naturaleza discrecional de las percepciones y la valoración del turista han contribuido a estas diferencias. Al mismo tiempo, el desarrollo del transporte, la comunicación y otros aspectos, han permitido que los sitios con atracciones culturales sean más propensos a recibir flujos turísticos donde coexista una mayor diversidad de consumidores (Moragues, 2006).

            <h4>Multidestinos y transculturación</h4>

            El turista de hoy en día suele ser un consumidor múltiple. Puede ser un cliente ocasional de turismo rural, de viaje de negocios o congresos por su actividad profesional, de aventura en unas cortas vacaciones o de cultura durante un fin de semana (Jovicic, 2016). Uno de los factores que ha contribuido a esto es el desarrollo de internet y las comunicaciones, que ha permitido una mayor autonomía en la planificación de los viajes, sin que esto signifique un incremento del precio por la intermediación de profesionales del sector (Caro, Luque & Zayas Fernández, 2014; Richards, 2007). Además, gracias al avance tecnológico, lo que antes eran sitios culturales anclados a un espacio físico, ahora pueden ser individualmente ¨consumidos¨ gracias a los avances de las herramientas audiovisuales (Russo & Van der Borg, 2002).

            <h4>Atracciones en La Habana</h4>
            <h5>Plaza Vieja</h5>
            Lo más notorio de este lugar son las edificaciones que la rodean, pues tienen los incuestionables valores históricos y artísticos de haber fijado un estilo arquitectónico que se extendió por toda la ciudad y caracterizó la arquitectura cubana del siglo XVIII.

            <h5>Plaza de Armas</h5>
            Las más antigua y una de las más hermosas de La Habana. Es el punto de partida perfecto para explorar La Habana Vieja, rodeada por cafeterías, bares y restaurantes. Conforma el primer espacio de la ciudad, en torno al cual se agrupan los edificios más representativos del barroco cubano y la colonia española.

          ',
          'status'          => '1',
        ],
        'imagenes'          => [
          [
            'recurso'               => 'destinos/0001/0001.png',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Minagen o1',
            'recurso_descripcion'   => 'desrcrrrrrr',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0002.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Turismo, territorio y patrimonio',
            'recurso_descripcion'   => '',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0003.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Plaza de Armas',
            'recurso_descripcion'   => 'Las más antigua y una de las más hermosas de La Habana.',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0004.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Plaza Vieja',
            'recurso_descripcion'   => 'o más notorio de este lugar son las edificaciones que la rodean',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0005.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Multidestinos y transculturación',
            'recurso_descripcion'   => 'El turista de hoy en día suele ser un consumidor múltiple.',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0006.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'Turismo, territorio y patrimonio',
            'recurso_descripcion'   => 'l patrimonio cultural no es más que el testimonio de los valores y el quehacer de un pueblo, es único en un espacio físico y su autenticidad lo convierte en un recurso turístico potencial',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'destinos/0001/0007.jpg',
            'recurso_tipo'          => 'image',
            'recurso_tipo_destino'  => 'local',
            'recurso_titulo'        => 'El turista cultural',
            'recurso_descripcion'   => 'n la literatura los autores concuerdan en que turistas culturales son aquellos que tienen una relación estrecha y directa con una experiencia cultural',
            'status'                => '1',       
          ],
          [
            'recurso'               => 'https://www.youtube.com/watch?v=wqMfhQgzwns',
            'recurso_tipo'          => 'video',
            'recurso_tipo_destino'  => 'url',
            'recurso_titulo'        => 'Nueva forma de conocer Cuba',
            'recurso_descripcion'   => 'Hemos llegado a Cuba y nos hemos sorprendido con sus playas de arenas blancas y su mar hábitat de cientos de corales y especies de peces. Esta es la nueva forma de llegar a CUBA desde Colombia',
            'status'                => '1',       
          ],
        ],
      ],
    ];
    $this->db->table($this->tableName3)->emptyTable();
    $this->db->table($this->tableName2)->emptyTable();
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName3} AUTO_INCREMENT = 1;");
    $this->db->query("ALTER TABLE {$this->tableName2} AUTO_INCREMENT = 1;");
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $imagenes = $row['imagenes'];
      $detalles = $row['detalles'];
      unset($row['imagenes']);
      unset($row['detalles']);
      $done = $this->db->table($this->tableName)->insert($row, true);
      $id = $this->db->insertID();
      if($done) {
        $detalles['destino_id'] = $id;
        $idD = $this->db->table($this->tableName2)->insert($detalles);
        foreach ($imagenes as $imagen) {
          $imagen['destino_id'] = $id;
          $idD = $this->db->table($this->tableName3)->insert($imagen);
        }
      }
    }
  }
}
