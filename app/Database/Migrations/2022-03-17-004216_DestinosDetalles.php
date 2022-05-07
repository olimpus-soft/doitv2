<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DestinosDetalles extends Migration {
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
      'descripcion' => [
        'type'           => 'TEXT',
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
    //$this->forge->addForeignKey('objetivo_id', 'objetivos', 'id', 'RESTRICT', 'RESTRICT');
    $this->forge->createTable('destinos_detalles', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('destinos_detalles', false, true);
  }
}
