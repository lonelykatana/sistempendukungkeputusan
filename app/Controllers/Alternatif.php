<?php

namespace App\Controllers;

use App\Database\Migrations\Kriteria;
use App\Models\AlternatifModel;
use App\Models\EvaluasiModel;
use App\Models\KriteriaModel;
use App\Models\PerbandinganKriteriaModel;
use App\Models\RankingModel;
use CodeIgniter\CodeIgniter;
use PhpParser\Node\Expr\Cast\Array_;

class Alternatif extends BaseController
{
    protected $alternatifModel;
    protected $kriteriaModel;
    protected $perbandinganKriteriaModel;
    protected $evaluasiModel;
    protected $rankingModel;
    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->perbandinganKriteriaModel = new PerbandinganKriteriaModel();
        $this->evaluasiModel = new EvaluasiModel();
        $this->rankingModel = new RankingModel();
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
        session();

        if (!isset($_SESSION['tekan'])) {
            session()->setFlashdata('mauApa', 'Silahkan isi form terlebih dahulu!');
            return redirect()->to(base_url() . '/kriteria/preferensi');
        };
        $alternatif = $this->alternatifModel->getAlternatif();
        $harga = $this->alternatifModel->getAlternatifHarga();
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
        $db = \Config\Database::connect();
        $builder = $db->table('ranking');
        $builder->truncate();

        foreach ($K as $key => $value) {
            //$mykey = $key;
            $this->inputRanking($key, $value);
            //next($K);
        }

        $data = [
            'pilih' => $pilih,
            //'nilai' => $nilai,
            'alternatif' => $alternatif,
            'harga' => $harga,
            'K' => $K,
            'title' => 'output ARAS',
        ];

        return view('/rekomendasi/ranking', $data);
    }

    public function inputRanking($id, $nilai)
    {


        $result = $this->rankingModel->getRanking();
        $this->rankingModel->save([
            'id_alternatif' => $id,
            'nilai' => $nilai
        ]);
        //  else {
        //     $builder->set('nilai', $nilai, false);
        //     $builder->where('id_alternatif', $id);
        //     $builder->update();

        //     // session()->setFlashdata('pesan', 'Data berhasil diupdate');
        //     // return redirect()->to(base_url() . '/alternatif');
        //     echo 'berhasil update data!!!';
        // }
    }
}
