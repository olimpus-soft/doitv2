<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OfertasSeeder extends Seeder {
  protected $tableName  = 'categoria_ofertas';
  protected $tableName2 = 'ofertas';
  public function run() {

    $data = [
      //es
      [ 
        'categoria'             => 'Planes Con Tiquetes Aereos',
        'categoria_slug'        => 'planes-con-tiquetes-aereos',
        'categoria_descripcion' => 'Planes Con Tiquetes Aereos por medio de la aerolínea Wingo',
        'categoria_image'       => 'categories/con-tiquetes.jpg',
        'categoria_lang'        => 'es',
        'status'                => '1',
        'ofertas'               => [
          [ 
            'oferta_titulo'     => 'Circuito Mini Fantasia Cubana',
            'oferta_slug'       => 'circuito-mini-fantasia-cubana',
            'oferta_subtitulo'  => 'Disfruta de toda la fantasia Cubana',
            'oferta_resumen'    => 'Vive la fantasia Cubana',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/CirMiniFantasia.pdf',
            'oferta_image'      => 'ofertas/CirMiniFantasia.png',
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [
            'oferta_titulo'     => 'Habana - Cayo Santa Maria',
            'oferta_slug'       => 'habana-cayo-santa-maria',
            'oferta_subtitulo'  => 'A tu aire con estancia en playa',
            'oferta_resumen'    => 'Vive tus sueños',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HCayoSantaMaria.pdf',
            'oferta_image'      => 'ofertas/HCayoSantaMaria.png',
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [
            'oferta_titulo'     => 'Habana y Varadero 4 Noches',
            'oferta_slug'       => 'habana-y-varadero-4-noches',
            'oferta_subtitulo'  => 'Déjate llevar y descubre una isla que bulle cada día',
            'oferta_resumen'    => 'Crea tus propias historias',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HV4N.pdf',
            'oferta_image'      => 'ofertas/HV4N.png',
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
        ],
      ],
      [ 
        'categoria'             => 'Planes Sin Tiquetes Aereos',        
        'categoria_slug'        => 'planes-sin-tiquetes-aereos',
        'categoria_descripcion' => 'Planes Sin Tiquetes Aereos, no se incluyen dentro de los costos de los planes',
        'categoria_image'       => 'categories/sin-tiquetes.jpg',
        'categoria_lang'        => 'es',
        'status'                => '1',
        'ofertas'               => [
          [
            'oferta_titulo'     => 'Habana y Varadero 5 Noches',
            'oferta_slug'       => 'habana-y-varadero-5-noches',
            'oferta_subtitulo'  => 'Cualquiera es el mejor mes para viajar a Cuba',
            'oferta_resumen'    => 'Crea tus propias historias',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HV5N.pdf',
            'oferta_image'      => 'ofertas/HV5N.png',
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [
            'oferta_titulo'     => 'Habana y Varadero 6 Noches',
            'oferta_slug'       => 'habana-y-varadero-6-noches',
            'oferta_subtitulo'  => 'Cuba es turismo',
            'oferta_resumen'    => 'Crea tus propias historias',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HV6N.pdf',
            'oferta_image'      => 'ofertas/HV6N.png',
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
          [
            'oferta_titulo'     => 'Habana y Varadero 7 Noches',
            'oferta_slug'       => 'habana-y-varadero-7-noches',
            'oferta_subtitulo'  => 'La <b>fiesta</b> de Hemingway en La Habana nunca acaba',
            'oferta_resumen'    => 'Crea tus propias historias',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HV7N.pdf',
            'oferta_image'      => 'ofertas/HV7N.png',
            'oferta_favorita'   => '1',
            'status'            => '1',      
          ],
        ],
      ],
      [ 
        'categoria'             => 'Festividades y Eventos',
        'categoria_slug'        => 'festividades-y-eventos',
        'categoria_descripcion' => 'Planes para festividades y eventos, con ofertas especiales',
        'categoria_image'       => 'categories/festividades.jpg',
        'categoria_lang'        => 'es',
        'status'                => '1',
        'ofertas'               => [
          [
            'oferta_titulo'     => 'Oferta de Prueba 1',
            'oferta_slug'       => 'oferta-de-prueba-1',
            'oferta_subtitulo'  => 'esta es una prueba',
            'oferta_resumen'    => 'Oferta de prueba',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HV7N.pdf',
            'oferta_image'      => 'ofertas/HV7N.png',
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
          [
            'oferta_titulo'     => 'Prueba 2 de oferta',
            'oferta_slug'       => 'prueba-2-de-oferta',
            'oferta_subtitulo'  => 'oferta no favorita ',
            'oferta_resumen'    => 'Oferta de prueba 2',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HV7N.pdf',
            'oferta_image'      => 'ofertas/HV5N.png',
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
          [
            'oferta_titulo'     => 'Oferta No Principal',
            'oferta_slug'       => 'oferta-no-principal',
            'oferta_subtitulo'  => 'Tour de Cuba en ofertas ',
            'oferta_resumen'    => 'Oferta de prueba 2 tour',
            'oferta_lang'       => 'es',
            'oferta_file'       => 'ofertas/HV4N.pdf',
            'oferta_image'      => 'ofertas/HV4N.png',
            'oferta_favorita'   => '0',
            'status'            => '1',      
          ],
        ],
      ],
    ];
    $this->db->table($this->tableName2)->emptyTable();
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName2} AUTO_INCREMENT = 1;");
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $ofertas = $row['ofertas'];
      unset($row['ofertas']);
      $done = $this->db->table($this->tableName)->insert($row, true);
      $id = $this->db->insertID();
      if($done) {
        foreach ($ofertas as $oferta) {
          $oferta['oferta_categoria'] = $id;
          $idD = $this->db->table($this->tableName2)->insert($oferta);
        }
      }
    }
  }
}
