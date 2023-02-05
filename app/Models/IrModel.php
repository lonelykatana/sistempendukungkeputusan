<?php

namespace App\Models;

use CodeIgniter\Model;


class IrModel extends Model
{
    protected $table = 'ir';
    //protected $useTimestamps = true;
    protected $allowedFields = ['jumlah', 'nilai'];

    // public function getKomik($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }
}
