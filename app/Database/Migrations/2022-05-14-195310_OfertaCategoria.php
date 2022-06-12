<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OfertaCategoria extends Migration {
    public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id'               => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'categoria'    => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'categoria_descripcion' => [
        'type'           => 'VARCHAR',
        'constraint'     => '1000',
        'NULL'           => TRUE,
      ],
      'categoria_slug'   => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'categoria_image'   => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => FALSE,
      ],
      'categoria_lang'      => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => TRUE,
        'default'        => NULL,
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
    $this->forge->addUniqueKey(['categoria','categoria_lang']);
    $this->forge->createTable('categoria_ofertas', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('categoria_ofertas', false, true);
  }
}
