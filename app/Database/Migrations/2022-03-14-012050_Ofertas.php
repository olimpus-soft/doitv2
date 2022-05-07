<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ofertas extends Migration {
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id'               => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'oferta_titulo'    => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'oferta_subtitulo' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => TRUE,
      ],
      'oferta_lang'      => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'oferta_file'      => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'oferta_image'     => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'oferta_favorita'  => [
        'type'           => 'SMALLINT',
        'constraint'     => 2,
        'unsigned'       => TRUE,
        'default'        => '0',
      ],
      'oferta_orden'  => [
        'type'           => 'INT',
        'constraint'     => 2,
        'unsigned'       => TRUE,
        'default'        => '0',
      ],
      'status'           => [
        'type'           => 'SMALLINT',
        'constraint'     => 2,
        'unsigned'       => TRUE,
        'default'        => '1',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp', 
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->addUniqueKey(['oferta_titulo','oferta_lang']);
    $this->forge->createTable('ofertas', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('ofertas', false, true);
  }
}
