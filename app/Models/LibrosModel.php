<?php

namespace App\Models;

use CodeIgniter\Model;

class LectoresModel extends Model
{
    protected $table      = 'libros';
    protected $primaryKey = 'Idlibro';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Titulo', 'Autor','Idpe', 'Cantidad','Activo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}