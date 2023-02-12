<?php

namespace App\Models;

use CodeIgniter\Model;


class IrModel extends Model
{
    protected $table = 'ir';
    protected $allowedFields = ['jumlah', 'nilai'];

    public function getNilai($jmlKriteria)
    {
        $query = $this->db->query("SELECT nilai FROM ir WHERE jumlah=$jmlKriteria")->getResult();

        foreach ($query as $row) {
            $nilaiIr = $row->nilai;
        }
        return $nilaiIr;
    }
}
