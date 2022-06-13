<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Geleria extends Seeder {
  protected $tableName = 'geleria';
  public function run() {
    $data = [
      [
        'section'               => 'home',
        'recurso'               => 'destinos/0001/0001.png',
        'recurso_titulo'        => 'Habana',
        'recurso_descripcion'   => 'Destino la Habana, Cuba',
        'recurso_tipo'          => 'image',
        'recurso_tipo_destino'  => 'local',
      ],
      [
        'section'               => 'home',
        'recurso'               => 'https://www.youtube.com/watch?v=yKrdZincToo',
        'recurso_titulo'        => 'Conocimos campesinos cubanos',
        'recurso_descripcion'   => 'Hemos llegado a Cuba y nos hemos sorprendido con sus playas de arenas blancas y su mar hábitat de cientos de corales y especies de peces. Esta es la nueva forma de llegar a CUBA desde Colombia',
        'recurso_tipo'          => 'video',
        'recurso_tipo_destino'  => 'url',
      ],
      [
        'section'               => 'home',
        'recurso'               => 'https://www.youtube.com/watch?v=wqMfhQgzwns',
        'recurso_titulo'        => 'SORPRESA! NUEVA FORMA de conocer CUBA ¿EN SERIO, esto es LA ISLA? ASÍ se llega a CUBA diferente.',
        'recurso_descripcion'   => 'Hemos llegado a Cuba y nos hemos sorprendido con sus playas de arenas blancas y su mar hábitat de cientos de corales y especies de peces. Esta es la nueva forma de llegar a CUBA desde Colombia',
        'recurso_tipo'          => 'video', //image,video,pdf
        'recurso_tipo_destino'  => 'url', //local,url
      ],
      [
        'section'               => 'home',
        'recurso'               => 'galeria/1/16089.jpg',
        'recurso_titulo'        => '',
        'recurso_descripcion'   => '',
        'recurso_tipo'          => 'image', //image,video,pdf
        'recurso_tipo_destino'  => 'local', //local,url
      ],
      [
        'section'               => 'home',
        'recurso'               => 'galeria/1/16090.jpg',
        'recurso_titulo'        => '',
        'recurso_descripcion'   => '',
        'recurso_tipo'          => 'image', //image,video,pdf
        'recurso_tipo_destino'  => 'local', //local,url
      ],
      /*
      [
        'section'               => 'home',
        'recurso'               => ''
        'recurso_titulo'        => '',
        'recurso_descripcion'   => ''
        'recurso_tipo'          => 'image', //image,video,pdf
        'recurso_tipo_destino'  => 'local', //local,url
      ],
      //*/
    ];
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
