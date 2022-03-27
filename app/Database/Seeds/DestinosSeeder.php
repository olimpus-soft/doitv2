<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DestinosSeeder extends Seeder {
  public function run() {
    $data = [
      //es
    ];

    foreach ($data as $row) {
      $this->db->table('destinos')->insert($row);
    }
}
