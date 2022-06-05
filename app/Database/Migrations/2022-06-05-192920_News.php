<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration{
  public $tableName = 'news';

  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'            => 'INT',
        'constraint'      => 5,
        'unsigned'        => TRUE,
        'auto_increment'  => TRUE
      ],
      'photo'             => [
        'type'            => 'VARCHAR',
        'constraint'      => '200',
        'NULL'            => TRUE,
        'default'         => NULL,
      ],
      'title'             => [
        'type'            => 'VARCHAR',
        'constraint'      => '200',
        'NULL'            => TRUE,
        'default'         => NULL,
      ],
      'tipo' => [
        'type'           => 'ENUM',
        'constraint'     => ['youtube', 'enlace'],
        'default'        => 'enlace',
      ],
      'news_link'             => [
        'type'            => 'VARCHAR',
        'constraint'      => '500',
        'NULL'            => TRUE,
        'default'         => NULL,
      ],
      'details'             => [
        'type'            => 'TEXT',
        'NULL'            => TRUE,
        'default'         => NULL,
      ],
      'orden' => [
        'type'            => 'INT',
        'constraint'      => 5,
        'unsigned'        => TRUE,
        'default'         => '1',
      ],
      'lang' => [
        'type'            => 'VARCHAR',
        'constraint'      => '10',
        'default'         => NULL,
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
    $this->forge->createTable($this->tableName, true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable($this->tableName, false, true);
  }
}
