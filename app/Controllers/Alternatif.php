<?php

namespace App\Controllers;

use App\Database\Migrations\Kriteria;
use App\Models\AlternatifModel;
use App\Models\EvaluasiModel;
use App\Models\KriteriaModel;
use App\Models\PerbandinganKriteriaModel;
use CodeIgniter\CodeIgniter;



class Alternatif extends BaseController
{
    protected $alternatifModel;
    protected $kriteriaModel;
    protected $perbandinganKriteriaModel;
    protected $evaluasiModel;
    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->perbandinganKriteriaModel = new PerbandinganKriteriaModel();
        $this->evaluasiModel = new EvaluasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Fixed Broadband',
            'wifi' => $this->alternatifModel->getWifi()
        ];
        return view('rekomendasi/opsi', $data);
    }

    public function aras()
    {
        $kriteria = $this->kriteriaModel->getKriteria();
        $w = $this->kriteriaModel->getBobotKriteria();
        $X = array();
        $x_0 = array();

        $result = $this->evaluasiModel->getEvaluasi();
        foreach ($result as $row) {
            $i = $row->id_alternatif;
            $j = $row->id_kriteria;
            if (!isset($x_0[$j])) $x_0[$j] = ($kriteria[$j][1] == 'cost' ? 10 : 0);
            $x_0[$j] = ($kriteria[$j][1] == 'cost') ? ($x_0[$j] < $aij ? $x_0[$j] : $aij) : ($x_0[$j] > $aij ? $x_0[$j] : $aij);
        }
    }
}
