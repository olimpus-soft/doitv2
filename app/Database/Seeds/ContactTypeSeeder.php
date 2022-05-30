<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactTypeSeeder extends Seeder {
  protected $tableName = 'tipo_contacto';
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
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
