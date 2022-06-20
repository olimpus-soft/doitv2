<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Charters extends Migration
{
  public $tableName = 'charters';
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id'               => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'charter_titulo'    => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'charter_categoria' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
      ],
      'charter_subtitulo' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => TRUE,
      ],
      'charter_resumen' => [
        'type'           => 'VARCHAR',
        'constraint'     => '1000',
        'NULL'           => TRUE,
      ],
      'charter_lang'      => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'charter_slug'      => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'charter_image'     => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'charter_file'     => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'charter_file_type' => [
        'type'           => 'ENUM',
        'constraint'     => ['local', 'url'],
        'default'        => 'local',
      ],
      'charter_favorito'  => [
        'type'           => 'SMALLINT',
        'constraint'     => 2,
        'unsigned'       => TRUE,
        'default'        => '0',
      ],
      'charter_orden'  => [
        'type'           => 'INT',
        'constraint'     => 2,
        'unsigned'       => TRUE,
        'default'        => '0',
      ],
      'charter_plans'      => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'charter_description'      => [
        'type'           => 'TEXT',        
        'default'        => NULL,
      ],
      'charter_itinerary'      => [
        'type'           => 'VARCHAR',
        'constraint'     => '200',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'charter_conditions'      => [
        'type'           => 'TEXT',        
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
    $this->forge->addUniqueKey(['charter_titulo','charter_lang']);
    $this->forge->addUniqueKey(['charter_slug','charter_lang']);
    $this->forge->addForeignKey(['charter_categoria'], 'categoria_ofertas', ['id'], 'RESTRICT', 'RESTRICT');
    $this->forge->createTable($this->tableName, true);
    //$this->forge->db->query("ALTER TABLE {$this->tableName} ADD FOREIGN KEY (oferta_categoria) REFERENCES categoria_ofertas(id) ON DELETE RESTRICT ON UPDATE RESTRICT;");
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable($this->tableName, false, true);
  }
}
