<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Objetivos extends Migration {
    public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'title'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'lang'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => FALSE,
        'default'        => 'es',
      ],
      'icon'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
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
    $this->forge->addUniqueKey(['title', 'lang']);
    $this->forge->createTable('objetivos', true);
  }

  public function down() {
    $this->forge->dropTable('objetivos', false, true);
  }
}
