<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AditionalPages extends Migration {
  public function up() {
		$this->forge->addField([
		  'id' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
		  ],
		  'title' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
		  ],
		  'subtitle' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
		  ],
		  'slug' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
		  ],
		  'lang' => [
				'type'           => 'VARCHAR',
				'constraint'     => '8',
		  ],
      'page_data'       => [
        'type'           => 'TEXT',
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
		$this->forge->createTable('aditional_pages', true);
		//$this->db->enableForeignKeyChecks();
  }

  public function down() {
		$this->forge->dropTable('aditional_pages', false, true);
  }
}
