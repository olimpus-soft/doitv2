<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DestinosImagenes extends Migration {
  public function up() {
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'destino_id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
      ],
      'imagen' => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
      ],
      'status' => [
        'type'           => 'SMALLINT',
        'constraint'     => 2,
        'unsigned'       => TRUE,
        'default'        => '1',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp', 
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('destino_imagenes', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('destino_imagenes', false, true);
  }
}
