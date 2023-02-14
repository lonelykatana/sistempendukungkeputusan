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

    public function getJumlahAlternatif()
    {
        $query = $this->db->query('SELECT * FROM alternatif');
        return $query->getNumRows();
    }

    public function getAll()
    {
        return $this->db->query('SELECT * FROM alternatif')->getResult();
    }

    public function getAlternatif()
    {
        $alternatif = array();
        $query = $this->db->query('SELECT * FROM alternatif')->getResult();
        foreach ($query as $row) {
            $alternatif[$row->id] = $row->nama;
        }
        return $alternatif;
    }
}
