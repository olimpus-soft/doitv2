<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ObjetivosSeeder extends Seeder {
  public function run() {
    $data = [
      //es
      [
        'id'      => '1',
        'title'   => 'Servir',
        'lang'    => 'es',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '1',
            'descripcion' => 'Garantizar servicios 24/7',
            'status'      => '1',
          ], [
            'objetivo_id' => '1',
            'descripcion' => 'Dar solución a los problemas que se puedan presentar de última hora, de una manera amable y oportuna.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '2',
        'title'   => 'Cumplir',
        'lang'    => 'es',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '2',
            'descripcion' => 'Cumplir con los servicios contratados por el cliente.',
            'status'      => '1',
          ], [
            'objetivo_id' => '2',
            'descripcion' => 'Realizar seguimiento al viaje del cliente y servicio de postventa.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '3',
        'title'   => 'Proveer',
        'lang'    => 'es',
        'icon'    => 'lni-star-filled',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '3',
            'descripcion' => 'Contratar servicios de calidad con los diferentes proveedores, aerolineas, hoteles, cruceros, transporte terrestre, tarjetas de asistencia, operadores internacionales, centros de negocios y/o convenciones, entre otros.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '4',
        'title'   => 'Hacer',
        'lang'    => 'es',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '4',
            'descripcion' => 'Implementar herramientas tecnologicas de comercialización que faciliten el proceso de compra del cliente.',
            'status'      => '1',
          ], [
            'objetivo_id' => '4',
            'descripcion' => 'Realizar comunicado a traves de RRSS, informando sobre destinos, tendencias de viajes y turismo de salud y bienestar.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '5',
        'title'   => 'Responsabilidad',
        'lang'    => 'es',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '5',
            'descripcion' => 'Administrar de una manera organizada y responsable, los recursos de la empresa, llevar una correcta y sana contabilidad, tributaria y relación con proveedores.',
            'status'      => '1',
          ], [
            'objetivo_id' => '5',
            'descripcion' => 'Realizar buenas negociaciones con proveedores, para garantizar un producto bueno, estructurado e innovador.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '6',
        'title'   => 'Informar',
        'lang'    => 'es',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '6',
            'descripcion' => 'Tener pleno conocimiento de los destinos a comercializar, paises, geografia, actividades recreativas, restaurantes, moneda, entre otros.',
            'status'      => '1',
          ],  
        ]
      ],
      //es_CO
      [
        'id'      => '7',
        'title'   => 'Servir',
        'lang'    => 'es',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '7',
            'descripcion' => 'Garantizar servicios 24/7',
            'status'      => '1',
          ], [
            'objetivo_id' => '7',
            'descripcion' => 'Dar solución a los problemas que se puedan presentar de última hora, de una manera amable y oportuna.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '8',
        'title'   => 'Cumplir',
        'lang'    => 'es',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '8',
            'descripcion' => 'Cumplir con los servicios contratados por el cliente.',
            'status'      => '1',
          ], [
            'objetivo_id' => '8',
            'descripcion' => 'Realizar seguimiento al viaje del cliente y servicio de postventa.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '9',
        'title'   => 'Proveer',
        'lang'    => 'es',
        'icon'    => 'lni-star-filled',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '9',
            'descripcion' => 'Contratar servicios de calidad con los diferentes proveedores, aerolineas, hoteles, cruceros, transporte terrestre, tarjetas de asistencia, operadores internacionales, centros de negocios y/o convenciones, entre otros.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '10',
        'title'   => 'Hacer',
        'lang'    => 'es',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '10',
            'descripcion' => 'Implementar herramientas tecnologicas de comercialización que faciliten el proceso de compra del cliente.',
            'status'      => '1',
          ], [
            'objetivo_id' => '10',
            'descripcion' => 'Realizar comunicado a traves de RRSS, informando sobre destinos, tendencias de viajes y turismo de salud y bienestar.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '11',
        'title'   => 'Responsabilidad',
        'lang'    => 'es',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '11',
            'descripcion' => 'Administrar de una manera organizada y responsable, los recursos de la empresa, llevar una correcta y sana contabilidad, tributaria y relación con proveedores.',
            'status'      => '1',
          ], [
            'objetivo_id' => '11',
            'descripcion' => 'Realizar buenas negociaciones con proveedores, para garantizar un producto bueno, estructurado e innovador.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '12',
        'title'   => 'Informar',
        'lang'    => 'es',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '12',
            'descripcion' => 'Tener pleno conocimiento de los destinos a comercializar, paises, geografia, actividades recreativas, restaurantes, moneda, entre otros.',
            'status'      => '1',
          ], 
        ]
      ],
      //en
      [
        'id'      => '13',
        'title'   => 'To Serve',
        'lang'    => 'en',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '13',
            'descripcion' => 'Guarantee services 24/7.',
            'status'      => '1',
          ], [
            'objetivo_id' => '13',
            'descripcion' => 'Take a solution to the problems that can be presented at the last minute, in a kind and timely manner.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '14',
        'title'   => 'Comply',
        'lang'    => 'en',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '14',
            'descripcion' => 'Comply with the services contracted by the client.',
            'status'      => '1',
          ], [
            'objetivo_id' => '14',
            'descripcion' => 'Follow up on the client\'s trip and after-sales service.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '15',
        'title'   => 'Provide',
        'lang'    => 'en',
        'icon'    => 'lni-star-filled',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '15',
            'descripcion' => 'Hire quality services with different suppliers, airlines, hotels, cruises, land transport, attendance cards, international operators, business centers and / or conventions, among others.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '15',
        'title'   => 'Do',
        'lang'    => 'en',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '15',
            'descripcion' => 'Implement marketing technological tools that facilitate the customer\'s purchase process.',
            'status'      => '1',
          ], [
            'objetivo_id' => '15',
            'descripcion' => 'Make communicate through RRSS, informing about destinations, travel trends and health and well-being tourism.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '16',
        'title'   => 'Responsibility',
        'lang'    => 'en',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '16',
            'descripcion' => 'Manage organized and responsible manner, the resources of the company, carry a correct and healthy accounting, tax and relationship with suppliers.',
            'status'      => '1',
          ], [
            'objetivo_id' => '16',
            'descripcion' => 'Make good negotiations with suppliers, to guarantee a good, structured and innovative product.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '17',
        'title'   => 'Report',
        'lang'    => 'en',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '17',
            'descripcion' => 'Take full knowledge of destinations to market, countries, geography, recreational activities, restaurants, currency, among others.',
            'status'      => '1',
          ],
        ]
      ],
      //de
      [
        'id'      => '18',
        'title'   => 'Dienen',
        'lang'    => 'de',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '18',
            'descripcion' => 'Garantie Gienstleistungen 24/7.',
            'status'      => '1',
          ], [
            'objetivo_id' => '18',
            'descripcion' => 'Nehmen Sie eine Lösung für die Probleme, die in letzter Minute auf Art und Zeitpunkte präsentiert werden können.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '19',
        'title'   => 'Einhalten',
        'lang'    => 'de',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '19',
            'descripcion' => 'Erfüllen die vom Kunden beauftragten Dienstleistungen.',
            'status'      => '1',
          ], [
            'objetivo_id' => '19',
            'descripcion' => 'Folgen Sie der Reise- und After-Sales-Service des Kunden.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '20',
        'title'   => 'Bieten',
        'lang'    => 'de',
        'icon'    => 'lni-star-filled',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '20',
            'descripcion' => 'Mieten Sie Quality Services mit verschiedenen Lieferanten, Fluggesellschaften, Hotels, Kreuzfahrten, Landtransport, Anwesenheitskarten, internationalen Betreibern, Geschäftszentren und / oder Konventionen, unter anderem.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '21',
        'title'   => 'Machen',
        'lang'    => 'de',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '21',
            'descripcion' => 'Implementieren Sie marketing technologische Werkzeuge, die den Kaufprozess des Kunden erleichtern.',
            'status'      => '1',
          ], [
            'objetivo_id' => '21',
            'descripcion' => 'Machen Sie über RRSS kommunizieren, informieren Sie über Ziele, Reisen, Trends und Gesundheits- und Wohlbefindens-Tourismus.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '22',
        'title'   => 'Verantwortung',
        'lang'    => 'de',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '22',
            'descripcion' => 'Verwalten Sie organisierte und verantwortungsbewusste Weise, die Ressourcen des Unternehmens, tragen eine korrekte und gesunde Rechnungslegung, Steuer und Beziehung zu Lieferanten.',
            'status'      => '1',
          ], [
            'objetivo_id' => '22',
            'descripcion' => 'Machen Sie gute Verhandlungen mit Lieferanten, um ein gutes, strukturiertes und innovatives Produkt zu gewährleisten.',
            'status'      => '1',
          ], 
        ]
      ], [
        'id'      => '23',
        'title'   => 'Prüfbericht',
        'lang'    => 'de',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'objetivo_id' => '23',
            'descripcion' => 'Nehmen Sie volle Kenntnisse der Ziele in den Markt, Ländern, Geographie, Freizeitaktivitäten, Restaurants, Währung, unter anderem.',
            'status'      => '1',
          ],  
        ]
      ],
    ];
    foreach ($data as $row) {
      $details = $row['details'];
      unset($row['details']);
      $done = $this->db->table('objetivos')->insert($row);
      if($done) {
        foreach ($details as $detail) {
          $idD = $this->db->table('objetivos_detalles')->insert($detail);
        }
      }
    }
  }
}
