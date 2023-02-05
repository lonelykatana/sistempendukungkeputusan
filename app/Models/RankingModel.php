<?php

namespace App\Models;

use CodeIgniter\Model;


class RankingModel extends Model
{
    protected $table = 'ranking';
    //protected $useTimestamps = true;
    protected $allowedFields = ['id_alternatif', 'nilai'];

    // public function getKomik($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }
}
