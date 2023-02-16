<?php

namespace App\Controllers;

use App\Database\Migrations\Kriteria;
use App\Models\AlternatifModel;
use App\Models\EvaluasiModel;
use App\Models\KriteriaModel;
use App\Models\PerbandinganKriteriaModel;
use CodeIgniter\CodeIgniter;
use PhpParser\Node\Expr\Cast\Array_;

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
        $alternatif = $this->alternatifModel->getAlternatif();
        $kriteria = $this->kriteriaModel->getKriteria();
        $w = $this->kriteriaModel->getBobotKriteria();
        $X = array();
        $x_0 = array();

        $result = $this->evaluasiModel->getEvaluasi();
        foreach ($result as $row) {
            $i = $row->id_alternatif;
            $j = $row->id_kriteria;
            $aij = $row->nilai;
            if (!isset($x_0[0][$j])) $x_0[0][$j] = ($kriteria[$j][1] == 'cost') ? 10 : 0;
            $x_0[0][$j] = ($kriteria[$j][1] == 'cost') ? ($x_0[0][$j] < $aij ? $x_0[0][$j] : $aij) : ($x_0[0][$j] > $aij ? $x_0[0][$j] : $aij);

            $X[$i][$j] = $aij;
        }
        //dd($X);
        ($x_0);

        $X = array_merge($x_0, $X);
        //dd($X);

        $sum_j = array();

        foreach ($X as $i => $xi) {

            foreach ($xi as $j => $xij) {

                if (!isset($sum_j[$j])) $sum_j[$j] = 0;
                $sum_j[$j] += ($kriteria[$j][1] == 'cost') ? 1 / $xij : $xij;
            }
        }

        $R = array();
        foreach ($X as $i => $xi) {
            foreach ($xi  as $j => $xij) {
                $R[$i][$j] = ($kriteria[$j][1] == 'cost') ? ((1 / $xij) / $sum_j[$j]) : ($xij / $sum_j[$j]);
            }
        }

        $D = array();
        foreach ($R as $i => $ri) {
            foreach ($ri as $j => $rij) {
                $D[$i][$j] = $rij * $w[$j];
            }
        }

        $S = array();
        foreach ($D as $i => $di) {
            $S[$i] = array_sum($di);
        }

        $K = array();
        foreach ($S as $i => $si) {
            if ($i != 0) {
                $K[$i] = $si / $S[0];
            }
        }
        arsort($K);
        $pilih = key($K);
        //$nilai = array_shift($K);

        $data = [
            'pilih' => $pilih,
            //'nilai' => $nilai,
            'alternatif' => $alternatif,
            'K' => $K,
            'title' => 'output ARAS',
        ];

        return view('/rekomendasi/ranking', $data);
    }
}
