<?php

namespace App\Controllers;

use App\Database\Migrations\Kriteria;
use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use App\Models\PerbandinganKriteriaModel;
use CodeIgniter\CodeIgniter;



class Alternatif extends BaseController
{



    protected $alternatifModel;
    protected $kriteriaModel;
    protected $perbandinganKriteriaModel;
    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->perbandinganKriteriaModel = new PerbandinganKriteriaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Fixed Broadband',
            'wifi' => $this->alternatifModel->getWifi()
        ];
        return view('rekomendasi/opsi', $data);
    }

    public function preferensi()
    {
        $data = [
            'title' => 'Proses Perbandingan Kriteria',
            'pilihan' => $this->kriteriaModel->getListNamaPilihan(),
            'n' => $this->kriteriaModel->getJumlahKriteria()
        ];
        return view('rekomendasi/perbandingan_kriteria', $data);
    }

    public function proses()
    {
        $n = $this->kriteriaModel->getJumlahKriteria();
        $matriks = array();
        $urut = 0;

        for ($x = 0; $x <= ($n - 2); $x++) {
            for ($y = ($x + 1); $y <= ($n - 1); $y++) {
                $urut++;
                $pilih = "pilih" . $urut;
                $bobot = "bobot" . $urut;
                if ($this->request->getVar($pilih) == 1) {
                    $matriks[$x][$y] = $this->request->getVar($bobot);
                    $matriks[$y][$x] = 1 / $this->request->getVar($bobot);
                } else {
                    $matriks[$x][$y] = 1 / $this->request->getVar($bobot);
                    $matriks[$y][$x] = $this->request->getVar($bobot);
                }
                $this->inputDataPerbandinganKriteria($x, $y, $matriks[$x][$y]);
            }
        }

        for ($i = 0; $i <= ($n - 1); $i++) {
            $matriks[$i][$i] = 1;
        }

        $jmlmpb = array();
        $jmlmpk = array();
        for ($i = 0; $i <= ($n - 1); $i++) {
            $jmlmpb[$i] = 0;
            $jmlmpk[$i] = 0;
        }

        for ($x = 0; $x <= ($n - 1); $x++) {
            for ($y = 0; $y <= ($n - 1); $y++) {
                $value = $matriks[$x][$y];
                $jmlmpb[$y] += $value;
            }
        }
    }


    public function inputDataPerbandinganKriteria($kriteria1, $kriteria2, $nilai)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perbandingan_kriteria');

        $id_kriteria1 = $this->kriteriaModel->getKriteriaId($kriteria1);
        $id_kriteria2 = $this->kriteriaModel->getKriteriaId($kriteria2);

        $result = $this->kriteriaModel->getNilaiPerbandinganKriteria($kriteria1, $kriteria2);

        if (($result->getNumRows) == 0) {
            $this->perbandinganKriteriaModel->save([
                'kriteria1' => $kriteria1,
                'kriteria2' => $kriteria2,
                'nilai' => $nilai
            ]);
        } else {
            $builder->set('nilai', $nilai, false);
            $builder->where('kriteria1', $id_kriteria1)->where('kriteria2', $id_kriteria2);
            $builder->update();
        }
    }
}
