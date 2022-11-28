<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestamosModel extends Model
{
    protected $table      = 'prestamos';
    protected $primaryKey = 'Idprestamo';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Idlibro', 'Idlector','fecha de prestamo', 'fecha de devolucion','Observacion','Activo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}