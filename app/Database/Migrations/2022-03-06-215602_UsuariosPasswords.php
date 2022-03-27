<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosPasswords extends Migration {
  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'user_id'          => [
        'type'           => 'INT',
        'constraint'     => 5,
        'unsigned'       => TRUE,
        'NULL'           => FALSE,
      ],
      'password'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],      
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp', 
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->addUniqueKey(['user_id', 'password']);
    //$this->forge->addForeignKey(['user_id'], 'usuarios', ['id'], 'RESTRICT', 'RESTRICT');
    $this->forge->createTable('usuarios_passwords', true);
    //$this->db->enableForeignKeyChecks();
  }

  public function down() {
    $this->forge->dropTable('usuarios_passwords', false, true);
  }
}
