<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OfertasSeeder extends Seeder {
  protected $tableName = 'ofertas';
  public function run() {
    $data = [
      //es
      [ 
        'oferta_titulo'     => 'Circuito Mini Fantasia Cubana',
        'oferta_subtitulo'  => 'Disfruta de toda la fantasia Cubana',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/CirMiniFantasia.pdf',
        'oferta_image'      => 'ofertas/CirMiniFantasia.png',
        'oferta_favorita'   => '1',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Habana - Cayo Santa Maria',
        'oferta_subtitulo'  => 'A tu aire con estancia en playa',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HCayoSantaMaria.pdf',
        'oferta_image'      => 'ofertas/HCayoSantaMaria.png',
        'oferta_favorita'   => '1',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Habana y Varadero 4 Noches',
        'oferta_subtitulo'  => 'Déjate llevar y descubre una isla que bulle cada día',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HV4N.pdf',
        'oferta_image'      => 'ofertas/HV4N.png',
        'oferta_favorita'   => '1',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Habana y Varadero 5 Noches',
        'oferta_subtitulo'  => 'Cualquiera es el mejor mes para viajar a Cuba',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HV5N.pdf',
        'oferta_image'      => 'ofertas/HV5N.png',
        'oferta_favorita'   => '1',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Habana y Varadero 6 Noches',
        'oferta_subtitulo'  => 'Cuba es turismo',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HV6N.pdf',
        'oferta_image'      => 'ofertas/HV6N.png',
        'oferta_favorita'   => '1',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Habana y Varadero 7 Noches',
        'oferta_subtitulo'  => 'La <b>fiesta</b> de Hemingway en La Habana nunca acaba',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HV7N.pdf',
        'oferta_image'      => 'ofertas/HV7N.png',
        'oferta_favorita'   => '1',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Oferta de Prueba 1',
        'oferta_subtitulo'  => 'esta es una prueba',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HV7N.pdf',
        'oferta_image'      => 'ofertas/HV7N.png',
        'oferta_favorita'   => '0',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Prueba 2 de oferta',
        'oferta_subtitulo'  => 'oferta no favorita ',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HV7N.pdf',
        'oferta_image'      => 'ofertas/HV5N.png',
        'oferta_favorita'   => '0',
        'status'            => '1',      
      ],
      [
        'oferta_titulo'     => 'Oferta No Principal',
        'oferta_subtitulo'  => 'Tour de Cuba en ofertas ',
        'oferta_lang'       => 'es',
        'oferta_file'       => 'ofertas/HV4N.pdf',
        'oferta_image'      => 'ofertas/HV4N.png',
        'oferta_favorita'   => '0',
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
