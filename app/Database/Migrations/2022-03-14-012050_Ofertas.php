<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ofertas extends Migration {
  public $tableName = 'ofertas';
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
      'oferta_categoria' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
      ],
      'oferta_subtitulo' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => TRUE,
      ],
      'oferta_resumen' => [
        'type'           => 'VARCHAR',
        'constraint'     => '1000',
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
      'oferta_file_type'      => [
        'type'           => 'ENUM',
        'constraint'     => ['local', 'url'],
        'default'        => 'local',
      ],
      'oferta_slug'      => [
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
    $this->forge->addUniqueKey(['oferta_slug','oferta_lang']);
    $this->forge->addForeignKey(['oferta_categoria'], 'categoria_ofertas', ['id'], 'RESTRICT', 'RESTRICT');
    $this->forge->createTable('ofertas', true);
    //$this->forge->db->query("ALTER TABLE {$this->tableName} ADD FOREIGN KEY (oferta_categoria) REFERENCES categoria_ofertas(id) ON DELETE RESTRICT ON UPDATE RESTRICT;");
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('ofertas', false, true);
  }
}
