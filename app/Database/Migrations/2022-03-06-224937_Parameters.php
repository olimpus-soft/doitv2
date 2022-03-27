<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Parameters extends Migration {
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'parameter'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'parameter_lang'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => TRUE,
        'default'        => NULL,
      ],
      'parameter_value'       => [
        'type'           => 'TEXT',
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
    $this->forge->addUniqueKey(['parameter','parameter_lang']);
    $this->forge->createTable('parameters', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('parameters', false, true);
  }
}
