<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactTypeSeeder extends Seeder {
  public function run() {
    $data = [
      //es
      [
        'descripcion'     => 'Agencia',
        'lang'            => 'es', 
        'status'            => '1',
      ],
      [
        'descripcion'     => 'Independiente',
        'lang'            => 'es', 
        'status'            => '1',
      ],
      //es_CO
      [
        'descripcion'     => 'Agencia',
        'lang'            => 'es_CO', 
        'status'            => '1',
      ],
      [
        'descripcion'     => 'Independiente',
        'lang'            => 'es_CO', 
        'status'            => '1',
      ],
      //en
      [
        'descripcion'     => 'Agency',
        'lang'            => 'en', 
        'status'            => '1',
      ],
      [
        'descripcion'     => 'Freelancer',
        'lang'            => 'en', 
        'status'            => '1',
      ],
      //de
      [
        'descripcion'     => 'Agentur',
        'lang'            => 'de', 
        'status'            => '1',
      ],
      [
        'descripcion'     => 'Unabhängig',
        'lang'            => 'de', 
        'status'            => '1',
      ],
    ];

    foreach ($data as $row) {
      $this->db->table('tipo_contacto')->insert($row);
    }
  }
}
