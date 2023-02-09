<?php

namespace App\Models;

use CodeIgniter\Model;

class PerbandinganKriteriaModel extends Model
{

    protected $table = 'perbandingan_kriteria';
    protected $allowedFields = ['kriteria1', 'kriteria2', 'nilai'];
}
