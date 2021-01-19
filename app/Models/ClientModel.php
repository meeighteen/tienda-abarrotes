<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model{
	protected $table      = 'cliente';
    protected $primaryKey = 'Idcliente';

    protected $returnType     = 'array';
    protected $allowedFields = ['Nombrecli', 'Apellidocli','Dnicli','Celularcli'];
}