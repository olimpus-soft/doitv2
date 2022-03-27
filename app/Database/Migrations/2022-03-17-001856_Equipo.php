<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Equipo extends Migration {
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'equipo_titulo'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => FALSE,
      ],
      'equipo_subtitulo'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '300',
        'NULL'           => TRUE,
      ],
      'equipo_lang'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'equipo_image'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'orden' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'default'        => '1',
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
    $this->forge->addUniqueKey(['equipo_titulo','equipo_lang']);
    $this->forge->createTable('equipo', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('equipo', false, true);
  }
}
