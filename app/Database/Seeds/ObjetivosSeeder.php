<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ObjetivosSeeder extends Seeder {
  protected $tableName = 'objetivos';
  protected $tableName2 = 'objetivos_detalles';
  public function run() {
    $data = [
      //es
      [
        'title'   => 'Servir',
        'lang'    => 'es',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Garantizar servicios 24/7',
            'status'      => '1',
          ], [
            'descripcion' => 'Dar solución a los problemas que se puedan presentar de última hora, de una manera amable y oportuna.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Cumplir',
        'lang'    => 'es',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Cumplir con los servicios contratados por el cliente.',
            'status'      => '1',
          ], [
            'descripcion' => 'Realizar seguimiento al viaje del cliente y servicio de postventa.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Proveer',
        'lang'    => 'es',
        'icon'    => 'lni-star-filled',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Contratar servicios de calidad con los diferentes proveedores, aerolineas, hoteles, cruceros, transporte terrestre, tarjetas de asistencia, operadores internacionales, centros de negocios y/o convenciones, entre otros.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Hacer',
        'lang'    => 'es',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Implementar herramientas tecnologicas de comercialización que faciliten el proceso de compra del cliente.',
            'status'      => '1',
          ], [
            'descripcion' => 'Realizar comunicado a traves de RRSS, informando sobre destinos, tendencias de viajes y turismo de salud y bienestar.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Responsabilidad',
        'lang'    => 'es',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Administrar de una manera organizada y responsable, los recursos de la empresa, llevar una correcta y sana contabilidad, tributaria y relación con proveedores.',
            'status'      => '1',
          ], [
            'descripcion' => 'Realizar buenas negociaciones con proveedores, para garantizar un producto bueno, estructurado e innovador.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Informar',
        'lang'    => 'es',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Tener pleno conocimiento de los destinos a comercializar, paises, geografia, actividades recreativas, restaurantes, moneda, entre otros.',
            'status'      => '1',
          ],  
        ]
      ],
      //es_CO
      [
        'title'   => 'Servir',
        'lang'    => 'es_CO',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Garantizar servicios 24/7',
            'status'      => '1',
          ], [
            'descripcion' => 'Dar solución a los problemas que se puedan presentar de última hora, de una manera amable y oportuna.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Cumplir',
        'lang'    => 'es_CO',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Cumplir con los servicios contratados por el cliente.',
            'status'      => '1',
          ], [
            'descripcion' => 'Realizar seguimiento al viaje del cliente y servicio de postventa.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Proveer',
        'lang'    => 'es_CO',
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
        'title'   => 'Hacer',
        'lang'    => 'es_CO',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Implementar herramientas tecnologicas de comercialización que faciliten el proceso de compra del cliente.',
            'status'      => '1',
          ], [
            'descripcion' => 'Realizar comunicado a traves de RRSS, informando sobre destinos, tendencias de viajes y turismo de salud y bienestar.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Responsabilidad',
        'lang'    => 'es_CO',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Administrar de una manera organizada y responsable, los recursos de la empresa, llevar una correcta y sana contabilidad, tributaria y relación con proveedores.',
            'status'      => '1',
          ], [
            'descripcion' => 'Realizar buenas negociaciones con proveedores, para garantizar un producto bueno, estructurado e innovador.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Informar',
        'lang'    => 'es_CO',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Tener pleno conocimiento de los destinos a comercializar, paises, geografia, actividades recreativas, restaurantes, moneda, entre otros.',
            'status'      => '1',
          ], 
        ]
      ],
      //en
      [
        'title'   => 'To Serve',
        'lang'    => 'en',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Guarantee services 24/7.',
            'status'      => '1',
          ], [
            'descripcion' => 'Take a solution to the problems that can be presented at the last minute, in a kind and timely manner.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Comply',
        'lang'    => 'en',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Comply with the services contracted by the client.',
            'status'      => '1',
          ], [
            'descripcion' => 'Follow up on the client\'s trip and after-sales service.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Provide',
        'lang'    => 'en',
        'icon'    => 'lni-star-filled',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Hire quality services with different suppliers, airlines, hotels, cruises, land transport, attendance cards, international operators, business centers and / or conventions, among others.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Do',
        'lang'    => 'en',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Implement marketing technological tools that facilitate the customer\'s purchase process.',
            'status'      => '1',
          ], [
            'descripcion' => 'Make communicate through RRSS, informing about destinations, travel trends and health and well-being tourism.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Responsibility',
        'lang'    => 'en',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Manage organized and responsible manner, the resources of the company, carry a correct and healthy accounting, tax and relationship with suppliers.',
            'status'      => '1',
          ], [
            'descripcion' => 'Make good negotiations with suppliers, to guarantee a good, structured and innovative product.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Report',
        'lang'    => 'en',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Take full knowledge of destinations to market, countries, geography, recreational activities, restaurants, currency, among others.',
            'status'      => '1',
          ],
        ]
      ],
      //de
      [
        'title'   => 'Dienen',
        'lang'    => 'de',
        'icon'    => 'lni-alarm-clock',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Garantie Gienstleistungen 24/7.',
            'status'      => '1',
          ], [
            'descripcion' => 'Nehmen Sie eine Lösung für die Probleme, die in letzter Minute auf Art und Zeitpunkte präsentiert werden können.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Einhalten',
        'lang'    => 'de',
        'icon'    => 'lni-check-mark-circle',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Erfüllen die vom Kunden beauftragten Dienstleistungen.',
            'status'      => '1',
          ], [
            'descripcion' => 'Folgen Sie der Reise- und After-Sales-Service des Kunden.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Bieten',
        'lang'    => 'de',
        'icon'    => 'lni-star-filled',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Mieten Sie Quality Services mit verschiedenen Lieferanten, Fluggesellschaften, Hotels, Kreuzfahrten, Landtransport, Anwesenheitskarten, internationalen Betreibern, Geschäftszentren und / oder Konventionen, unter anderem.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Machen',
        'lang'    => 'de',
        'icon'    => 'lni-briefcase',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Implementieren Sie marketing technologische Werkzeuge, die den Kaufprozess des Kunden erleichtern.',
            'status'      => '1',
          ], [
            'descripcion' => 'Machen Sie über RRSS kommunizieren, informieren Sie über Ziele, Reisen, Trends und Gesundheits- und Wohlbefindens-Tourismus.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Verantwortung',
        'lang'    => 'de',
        'icon'    => 'lni-handshake',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Verwalten Sie organisierte und verantwortungsbewusste Weise, die Ressourcen des Unternehmens, tragen eine korrekte und gesunde Rechnungslegung, Steuer und Beziehung zu Lieferanten.',
            'status'      => '1',
          ], [
            'descripcion' => 'Machen Sie gute Verhandlungen mit Lieferanten, um ein gutes, strukturiertes und innovatives Produkt zu gewährleisten.',
            'status'      => '1',
          ], 
        ]
      ], [
        'title'   => 'Prüfbericht',
        'lang'    => 'de',
        'icon'    => 'lni-grow',
        'status'  => '1',
        'details' => [
          [
            'descripcion' => 'Nehmen Sie volle Kenntnisse der Ziele in den Markt, Ländern, Geographie, Freizeitaktivitäten, Restaurants, Währung, unter anderem.',
            'status'      => '1',
          ],  
        ]
      ],
    ];
    $this->db->table($this->tableName2)->emptyTable();
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName2} AUTO_INCREMENT = 1;");
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $details = $row['details'];
      unset($row['details']);
      $done = $this->db->table($this->tableName)->insert($row, true);
      $id = $this->db->insertID();
      if($done) {
        foreach ($details as $detail) {
          $detail['objetivo_id'] = $id;
          $idD = $this->db->table($this->tableName2)->insert($detail);
        }
      }
    }
  }
}
