<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EquipoSeeder extends Seeder {
  protected $tableName = 'equipo';
  public function run() {
    $data = [
      //es
      [
        'equipo_titulo'     => 'Dainel Torres',
        'equipo_subtitulo'  => 'Sub Director Comercial de Cubatur',
        'equipo_lang'       => 'es', 
        'equipo_image'      => 'team/team-1.png', 
        'orden'             => '2', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Alejandro Fuentefria',
        'equipo_subtitulo'  => 'Gerente de Negocios Latinoamerica, Meliá Hotels.',
        'equipo_lang'       => 'es', 
        'equipo_image'      => 'team/team-2.png', 
        'orden'             => '3', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Jose Chorot - Leonardo Tamayo',
        'equipo_subtitulo'  => 'Grupo Cubana de Aviación - Representante del MINED Cuba',
        'equipo_lang'       => 'es', 
        'equipo_image'      => 'team/team-3.png', 
        'orden'             => '4', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Luisa Correa',
        'equipo_subtitulo'  => 'Caravana turistica por Colombia 2019',
        'equipo_lang'       => 'es', 
        'equipo_image'      => 'team/team-4.png', 
        'orden'             => '1', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Reinaldo Lugones',
        'equipo_subtitulo'  => 'Representante de Merely Tours, operador de Cuba en Mexico',
        'equipo_lang'       => 'es', 
        'equipo_image'      => 'team/team-5.png', 
        'orden'             => '5', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Dayane Mejia',
        'equipo_subtitulo'  => 'Representante de la Cadena Roc Hotels Cuba,  Caravana Turistica 2019',
        'equipo_lang'       => 'es', 
        'equipo_image'      => 'team/team-6.png',
        'orden'             => '6',  
        'status'            => '1',
      ],
      //es_CO
      [
        'equipo_titulo'     => 'Dainel Torres',
        'equipo_subtitulo'  => 'Sub Director Comercial de Cubatur',
        'equipo_lang'       => 'es_CO', 
        'equipo_image'      => 'team/team-1.png', 
        'orden'             => '2', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Alejandro Fuentefria',
        'equipo_subtitulo'  => 'Gerente de Negocios Latinoamerica, Meliá Hotels.',
        'equipo_lang'       => 'es_CO', 
        'equipo_image'      => 'team/team-2.png', 
        'orden'             => '3', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Jose Chorot - Leonardo Tamayo',
        'equipo_subtitulo'  => 'Grupo Cubana de Aviación - Representante del MINED Cuba',
        'equipo_lang'       => 'es_CO', 
        'equipo_image'      => 'team/team-3.png', 
        'orden'             => '4', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Luisa Correa',
        'equipo_subtitulo'  => 'Caravana turistica por Colombia 2019',
        'equipo_lang'       => 'es_CO', 
        'equipo_image'      => 'team/team-4.png', 
        'orden'             => '1', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Reinaldo Lugones',
        'equipo_subtitulo'  => 'Representante de Merely Tours, operador de Cuba en Mexico',
        'equipo_lang'       => 'es_CO', 
        'equipo_image'      => 'team/team-5.png', 
        'orden'             => '5', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Dayane Mejia',
        'equipo_subtitulo'  => 'Representante de la Cadena Roc Hotels Cuba,  Caravana Turistica 2019',
        'equipo_lang'       => 'es_CO', 
        'equipo_image'      => 'team/team-6.png',
        'orden'             => '6',  
        'status'            => '1',
      ],
      //de
      [
        'equipo_titulo'     => 'Dainel Torres',
        'equipo_subtitulo'  => 'Stellvertretender kaufmännischer Leiter von Cubatur',
        'equipo_lang'       => 'de', 
        'equipo_image'      => 'team/team-1.png', 
        'orden'             => '2', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Alejandro Fuentefria',
        'equipo_subtitulo'  => 'Business Manager für Lateinamerika, Meliá Hotels.',
        'equipo_lang'       => 'de', 
        'equipo_image'      => 'team/team-2.png', 
        'orden'             => '3', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Jose Chorot - Leonardo Tamayo',
        'equipo_subtitulo'  => 'Cuban Aviation Group - Vertreter von MINED Cuba',
        'equipo_lang'       => 'de', 
        'equipo_image'      => 'team/team-3.png', 
        'orden'             => '4', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Luisa Correa',
        'equipo_subtitulo'  => 'Touristenkarawane durch Kolumbien 2019',
        'equipo_lang'       => 'de', 
        'equipo_image'      => 'team/team-4.png', 
        'orden'             => '1', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Reinaldo Lugones',
        'equipo_subtitulo'  => 'Vertreter von Merely Tours, Betreiber von Kuba in Mexiko',
        'equipo_lang'       => 'de', 
        'equipo_image'      => 'team/team-5.png', 
        'orden'             => '5', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Dayane Mejia',
        'equipo_subtitulo'  => 'Vertreter der Kette Roc Hotels Cuba, Tourist Caravan 2019',
        'equipo_lang'       => 'de', 
        'equipo_image'      => 'team/team-6.png',
        'orden'             => '6',  
        'status'            => '1',
      ],
      //en
      [
        'equipo_titulo'     => 'Dainel Torres',
        'equipo_subtitulo'  => 'Sub Director of Cubatur Commercial',
        'equipo_lang'       => 'en', 
        'equipo_image'      => 'team/team-1.png', 
        'orden'             => '2', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Alejandro Fuentefria',
        'equipo_subtitulo'  => 'Latin American Business Manager, Meliá Hotels.',
        'equipo_lang'       => 'en', 
        'equipo_image'      => 'team/team-2.png', 
        'orden'             => '3', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Jose Chorot - Leonardo Tamayo',
        'equipo_subtitulo'  => 'Cuban Aviation Group - Representative of MINED Cuba',
        'equipo_lang'       => 'en', 
        'equipo_image'      => 'team/team-3.png', 
        'orden'             => '4', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Luisa Correa',
        'equipo_subtitulo'  => 'Tourist caravan through Colombia 2019',
        'equipo_lang'       => 'en', 
        'equipo_image'      => 'team/team-4.png', 
        'orden'             => '1', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Reinaldo Lugones',
        'equipo_subtitulo'  => 'Representative of Merely Tours, operator of Cuba in Mexico',
        'equipo_lang'       => 'en', 
        'equipo_image'      => 'team/team-5.png', 
        'orden'             => '5', 
        'status'            => '1',
      ],
      [
        'equipo_titulo'     => 'Dayane Mejia',
        'equipo_subtitulo'  => 'Representative of the Roc Hotels Cuba Chain, Tourist Caravan 2019',
        'equipo_lang'       => 'en', 
        'equipo_image'      => 'team/team-6.png',
        'orden'             => '6',  
        'status'            => '1',
      ],
    ];
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
