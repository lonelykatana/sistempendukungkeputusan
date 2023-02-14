<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;
use mysqli;
use PhpParser\Node\Expr\Cast\Array_;

class KriteriaModel extends Model
{
    protected $table = 'kriteria';
    protected $allowedFields = ['nama', 'bobot', 'atribut'];

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
        return $query;
    }

    public function getKriteriaId($no_urut)
    {
        $query = $this->db->query('SELECT id FROM kriteria ORDER BY id')->getResult();
        foreach ($query as $row) {
            $listId[] = $row->id;
        }
        return $listId[($no_urut)];
    }

    public function getBobot($id)
    {
        return $this->db->query("SELECT bobot FROM kriteria WHERE id=$id");
    }

    public function getLambdaMax($matriks_a, $matriks_b, $n)
    {
        $lambdaMax = 0;
        for ($i = 0; $i <= ($n - 1); $i++) {
            $lambdaMax += ($matriks_a[$i] * (($matriks_b[$i]) / $n));
        }
        return $lambdaMax;
    }

    public function getConsIndex($matriks_a, $matriks_b, $n)
    {
        $lambdmax = $this->getLambdaMax($matriks_a, $matriks_b, $n);
        $consIndex = (($lambdmax - $n) / ($n - 1));

        return $consIndex;
    }

    public function getConsRatio($matriks_a, $matriks_b, $n)
    {
        $irModel = new IrModel();
        $consIndex = $this->getConsIndex($matriks_a, $matriks_b, $n);
        $consRatio = $consIndex / ($irModel->getNilai($n));

        return $consRatio;
    }

    public function getKriteria()
    {
        $kriteria = array();
        $query = $this->db->query('SELECT * FROM kriteria')->getResult();
        foreach ($query as $row) {
            $kriteria[$row->id] = array($row->nama, $row->atribut);
        }
        return $kriteria;
    }

    public function getBobotKriteria()
    {
        $query = $this->db->query('SELECT * FROM kriteria')->getResult();
        foreach ($query as $row) {
            $w[$row->id] = $row->bobot;
        }
        return $w;
    }
}
