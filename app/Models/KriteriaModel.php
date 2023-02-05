<?php

namespace App\Models;

use CodeIgniter\Model;


class KriteriaModel extends Model
{
    protected $table = 'kriteria';
    //protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'bobot', 'atribut'];

    // public function getKomik($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }
}
