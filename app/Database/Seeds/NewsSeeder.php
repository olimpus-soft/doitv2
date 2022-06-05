<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder {
  protected $tableName = 'news';
  public function run() {
    $data = [
      //es
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/001.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/05/30/cuba-por-un-turismo-sostenible-y-respetuoso-del-medio-ambiente',
        'title'     => 'Cuba por un turismo sostenible',
        'details'   => 'Cuba abogó hoy por un turismo sostenible, enfrentado al cambio climático y cuidadoso del medio ambiente',
        'orden'     => '1',
        'lang'      => NULL,
        'status'    => '1',
      ],
      [
        'tipo'      => 'youtube',
        'photo'     => 'news/002.jpg',
        'news_link' => 'https://www.youtube.com/watch?v=yKrdZincToo',
        'title'     => 'Conocimos campesinos cubanos',
        'details'   => 'Hemos llegado a Cuba y nos hemos sorprendido con sus playas de arenas blancas y su mar hábitat de cientos de corales y especies de peces. Esta es la nueva forma de llegar a CUBA desde Colombia',
        'orden'     => '3',
        'lang'      => NULL,
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/003.jpg',
        'news_link' => 'https://www.prensa-latina.cu/2022/06/01/elogian-recuperacion-y-posicionamiento-del-turismo-caribeno',
        'title'     => 'Elogian recuperación del turismo',
        'details'   => 'La Asociación de Hoteles y Turismo del Caribe (CHTA) reconoció hoy a las autoridades de la industria turística, sanitarias y gobiernos de la región por su trabajo',
        'orden'     => '4',
        'lang'      => NULL,
        'status'    => '1',
      ],
      [
        'tipo'      => 'enlace',
        'photo'     => 'news/004.jpg',
        'news_link' => 'https://www.youtube.com/watch?v=yKrdZincToo',
        'title'     => 'Conocimos campesinos cubanos.',
        'details'   => 'Llegamos a esta isla y nos metimos en las profundidades del campo para dialogar un poco con los campesinos y nuestra sorpresa fue grande. Estuvimos en la provincia de Sancti Spíritus, cerca al municipio de Yaguajay. Definitivamente tienen que ir a Cuba y específicamente a ese lugar',
        'orden'     => '2',
        'lang'      => 'es',
        'status'    => '1',
      ],
      [
        'tipo'      => 'youtube',
        'photo'     => 'news/005.jpg',
        'news_link' => 'https://www.youtube.com/watch?v=RzVvThhjAKw',
        'title'     => 'Nature Sounds of Jungle, Rainforest',
        'details'   => 'Nature Soundscape and Relaxing Music "Breath of Forest" Meditation of your days',
        'orden'     => '2',
        'lang'      => 'es',
        'status'    => '1',
      ],
    ];
    $this->db->table($this->tableName)->emptyTable();
    $this->db->query("ALTER TABLE {$this->tableName} AUTO_INCREMENT = 1;");
    foreach ($data as $row) {
      $this->db->table($this->tableName)->insert($row);
    }
  }
}
