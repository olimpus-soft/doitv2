<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Destinos extends Migration {
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'destino_titulo'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => FALSE,
      ],
      'destino_subtitulo'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '300',
        'NULL'           => TRUE,
      ],
      'destino_resumen'  => [
        'type'           => 'VARCHAR',
        'constraint'     => '500',
        'default'        => NULL,
      ],
      'destino_lang'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'destino_image'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'destino_slug'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
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
    $this->forge->addUniqueKey(['destino_titulo','destino_lang']);
    $this->forge->addUniqueKey(['destino_slug','destino_lang']);
    $this->forge->createTable('destinos', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('destinos', false, true);
  }
}
