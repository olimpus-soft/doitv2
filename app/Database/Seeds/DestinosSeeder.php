<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DestinosSeeder extends Seeder {
  protected $tableName = 'destinos';
  public function run() {
    $data = [
      //es
    ];
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
