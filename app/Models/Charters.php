<?php

namespace App\Models;

use CodeIgniter\Model;

class Charters extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'charters';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'charter_titulo', 'charter_categoria', 'charter_subtitulo', 'charter_resumen', 'charter_lang', 'charter_slug', 'charter_image', 'charter_favorito', 'charter_orden', 'charter_plans', 'charter_description', 'charter_itinerary', 'charter_conditions', 'charter_file', 'charter_file_type', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
