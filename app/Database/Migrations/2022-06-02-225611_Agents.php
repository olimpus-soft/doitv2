<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agents extends Migration {
  public $tableName = 'agents';

  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'            => 'INT',
        'constraint'      => 5,
        'unsigned'        => TRUE,
        'auto_increment'  => TRUE
      ],
      'prefix'            => [
        'type'            => 'VARCHAR',
        'constraint'      => '10',
        'NULL'            => FALSE,
      ],
      'cargo'            => [
        'type'            => 'VARCHAR',
        'constraint'      => '100',
        'NULL'            => FALSE,
      ],
      'firstname'         => [
        'type'            => 'VARCHAR',
        'constraint'      => '150',
        'NULL'            => TRUE,
      ],
      'lastname'          => [
        'type'            => 'VARCHAR',
        'constraint'      => '150',
        'NULL'            => TRUE,
        'default'         => NULL,
      ],
      'photo'             => [
        'type'            => 'VARCHAR',
        'constraint'      => '200',
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
