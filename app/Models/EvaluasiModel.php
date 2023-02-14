<?php

namespace App\Models;

use CodeIgniter\Model;


class EvaluasiModel extends Model
{
    protected $table = 'evaluasi';
    protected $allowedFields = ['id_alternatif', 'id_kriteria', 'nilai'];

    public function getEvaluasi()
    {
        return $this->db->query('SELECT * FROM evaluasi')->getResult();
    }
}
