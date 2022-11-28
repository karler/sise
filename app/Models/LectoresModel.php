<?php

namespace App\Models;

use CodeIgniter\Model;

class LectoresModel extends Model
{
    protected $table      = 'lectores';
    protected $primaryKey = 'Idlector';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nombre', 'Apellidos','DNI', 'Celular','Direccion','Activo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}