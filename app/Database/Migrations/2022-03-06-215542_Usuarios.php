<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration {
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'username'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
        'NULL'           => FALSE,
      ],
      'password'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
        'NULL'           => FALSE,
      ],
      'prefixname' => [
        'type'           => 'VARCHAR',
        'constraint'     => '10',
        'NULL'           => FALSE,
      ],
      'name' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'lastname' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'NULL'           => FALSE,
      ],
      'phone1' => [
        'type'           => 'NUMERIC',
        'constraint'     => '11',
        'NULL'           => FALSE,
      ],
      'phone2' => [
        'type'           => 'NUMERIC',
        'constraint'     => '11',
        'NULL'           => TRUE,
      ],
      'profile'      => [
        'type'           => 'ENUM',
        'constraint'     => ['root', 'admin', 'consult'],
        'default'        => 'consult',
      ],
      'status'      => [
        'type'           => 'ENUM',
        'constraint'     => ['blocked', 'active', 'reset', 'create', 'forgot'],
        'default'        => 'create',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp', 
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->addUniqueKey(['username']);
    $this->forge->addUniqueKey(['phone1']);
    $this->forge->createTable('usuarios', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('usuarios', false, true);
  }
}
