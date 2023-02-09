<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;
use mysqli;

class KriteriaModel extends Model
{
    protected $table = 'kriteria';
    //protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'bobot', 'atribut'];

    // public function showTabelPerbandinganKriteria()
    // {
    //     $n = $this->getJumlahKriteria();
    //     $query = $this->db->query('SELECT nama from kriteria ORDER BY id');
    //     if (!$query) {
    //         echo 'Error koneksi database!';
    //         exit();
    //     }

    //     while ($query) {
    //         $pilihan[] = $query['nama'];
    //     }

    // }

    public function getListNamaPilihan()
    {
        $query =  $this->db->query('SELECT nama from kriteria ORDER BY id')->getResult();
        foreach ($query as $row) {
            $pilihan[] = $row->nama;
        }
        return $pilihan;
    }

    public function getJumlahKriteria()
    {
        $query = $this->db->query('SELECT * FROM kriteria');
        return $query->getNumRows();
    }

    public function getNilaiPerbandinganKriteria($kriteria1, $kriteria2)
    {
        $id_kriteria1 = $this->getKriteriaId($kriteria1);
        $id_kriteria2 = $this->getKriteriaId($kriteria2);

        $query = $this->db->query("SELECT nilai FROM perbandingan_kriteria WHERE kriteria1=$id_kriteria1 AND kriteria2=$id_kriteria2");
        if (!$query) {
            echo 'Error!';
            exit();
        }

        if ($query->getNumRows() == 0) {
            $nilai = 1;
        } else {
            foreach ($query as $row) {
                $nilai = $row->nilai;
            }
        }
        return $nilai;
    }

    public function getKriteriaId($no_urut)
    {
        $query = $this->db->query('SELECT id FROM kriteria ORDER BY id');
        foreach ($query as $row) {
            $listId[] = $row->id;
        }
        return $listId[($no_urut)];
    }
}
