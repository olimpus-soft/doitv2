<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AgentsSeeder extends Seeder {
  protected $tableName = 'agents';
  protected $tableName2 = 'agents_contacts';
  public function run() {
    $data = [
      [
        'prefix'        => 'Srta.',        
        'firstname'     => 'Luisa',
        'lastname'      => 'Correa',
        'cargo'         => 'CEO',
        'photo'         => 'agents/001.jpg',
        'details'       => '',
        'orden'         => '1',
        'status'        => '1',
        'contacts' => [
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'whatsapp',
            'contact_value'   => '+57 304 531 97 69',
            'orden'           => '1',
            'status'          => '1',
          ], 
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'movil',
            'contact_value'   => '+57 304 531 97 69',
            'orden'           => '1',
            'status'          => '1',
          ], 
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'email',
            'contact_value'   => 'lcorrea@doitviajesyturismo.com',
            'orden'           => '2',
            'status'          => '1',
          ], 
        ]
      ], 
      [
        'prefix'        => 'Srta.',
        'firstname'     => 'María Fernanda',
        'lastname'      => 'González',
        'cargo'         => 'Operaciones',
        'photo'         => 'agents/003.jpg',
        'details'       => 'Es un gusto atender tus requerimientos, agregame a tus contactos para que te llegue toda la información.',
        'orden'         => '3',
        'status'        => '1',
        'contacts' => [
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'whatsapp',
            'contact_value'   => '+57 324 652 37 11',
            'orden'           => '1',
            'status'          => '1',
          ], 
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'movil',
            'contact_value'   => '+57 324 652 37 11',
            'orden'           => '2',
            'status'          => '1',
          ], 
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'email',
            'contact_value'   => 'operaciones@doitviajesyturismo.com',
            'orden'           => '1',
            'status'          => '1',
          ],
        ]
      ], 
      [
        'prefix'        => 'Sr.',
        'firstname'     => 'Fredy',
        'lastname'      => 'Rubio',
        'cargo'         => 'Ejecutivo Comercial',
        'photo'         => 'agents/002.jpg',
        'details'       => 'Es un gusto atender tus requerimientos, agregame a tus contactos para que te llegue toda la información.',
        'orden'         => '2',
        'status'        => '1',
        'contacts' => [
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'whatsapp',
            'contact_value'   => '+57 324 652 36 99',
            'orden'           => '1',
            'status'          => '1',
          ], 
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'movil',
            'contact_value'   => '+57 324 652 36 99',
            'orden'           => '2',
            'status'          => '1',
          ], 
          [
            //['phone', 'movil', 'whatsapp', 'email', 'facebook', 'twiter', 'instagram', 'telegram', 'tiktok', 'linkedin', 'pinterest', 'tumblr', 'reddit', 'flickr', 'viber', 'line'],
            'tipo'            => 'email',
            'contact_value'   => 'ejecutivocomercial@doitviajesyturismo.com',
            'orden'           => '1',
            'status'          => '1',
          ],
        ]
      ], 
    ];
    $this->db->table($this->tableName2)->emptyTable();
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName2} AUTO_INCREMENT = 1;");
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $details = $row['contacts'];
      unset($row['contacts']);
      $done = $this->db->table($this->tableName)->insert($row, true);
      $id = $this->db->insertID();
      if($done) {
        foreach ($details as $detail) {
          $detail['agent_id'] = $id;
          $idD = $this->db->table($this->tableName2)->insert($detail);
        }
      }
    }
  }
}
