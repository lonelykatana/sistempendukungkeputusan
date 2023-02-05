<?php

namespace App\Models;

use CodeIgniter\Model;


class AlternatifModel extends Model
{
    protected $table = 'alternatif';
    //protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'harga', 'kuota', 'download', 'jumlah_perangkat', 'jangkauan', 'gambar'];

    public function getWifi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
