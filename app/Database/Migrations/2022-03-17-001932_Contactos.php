<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contactos extends Migration {
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'tipo'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '80',
        'NULL'           => FALSE,
      ],
      'empresa'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '150',
        'NULL'           => TRUE,
      ],
      'nombre'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'telefono'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '20',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'ciudad'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'asunto'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'lang'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '8',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'mensaje'       => [
        'type'           => 'TEXT',
        'NULL'           => FALSE,
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
    $this->forge->createTable('contactos', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('contactos', false, true);
  }
}
