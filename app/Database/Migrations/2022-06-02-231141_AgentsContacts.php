<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgentsContacts extends Migration {
  public $tableName = 'agents_contacts';

  public function up() {
    $this->db->disableForeignKeyChecks();
    $this->forge->addField([
      'id' => [
        'type'            => 'INT',
        'constraint'      => 5,
        'unsigned'        => TRUE,
        'auto_increment'  => TRUE
      ],
      'agent_id' => [
        'type'            => 'INT',
        'constraint'      => 5,
        'unsigned'        => TRUE,
        'NULL'            => FALSE,
      ],
      'tipo' => [
        'type'           => 'ENUM',
        'constraint'     => ['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line', 'zoom', 'skype'],
        'default'        => 'whatsapp',
      ],
      'contact_value'     => [
        'type'            => 'VARCHAR',
        'constraint'      => '200',
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
