<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ObjetivosDetales extends Migration {
  public function up() {
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'objetivo_id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
      ],
      'descripcion' => [
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
    //$this->forge->addForeignKey('objetivo_id', 'objetivos', 'id', 'RESTRICT', 'RESTRICT');
    $this->forge->createTable('objetivos_detalles', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('objetivos_detalles', false, true);
  }
}
