<?php

namespace App\Controllers;

use App\Models\KriteriaModel;
use App\Models\PerbandinganKriteriaModel;




class Kriteria extends BaseController
{
    protected $kriteriaModel;
    protected $perbandinganKriteriaModel;
    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
        $this->perbandinganKriteriaModel = new PerbandinganKriteriaModel();
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


        // diagonal --> bernilai 1
        for ($i = 0; $i <= ($n - 1); $i++) {
            $matriks[$i][$i] = 1;
        }

        // inisialisasi jumlah tiap kolom dan baris kriteria
        $jmlmpb = array();
        $jmlmnk = array();
        for ($i = 0; $i <= ($n - 1); $i++) {
            $jmlmpb[$i] = 0;
            $jmlmnk[$i] = 0;
        }

        // menghitung jumlah pada kolom kriteria tabel perbandingan berpasangan
        for ($x = 0; $x <= ($n - 1); $x++) {
            for ($y = 0; $y <= ($n - 1); $y++) {
                $value        = $matriks[$x][$y];
                $jmlmpb[$y] += $value;
            }
        }

        // menghitung jumlah pada baris kriteria tabel nilai kriteria yang telah dinormalisasi
        // matrikb merupakan matrik yang telah dinormalisasi
        for ($x = 0; $x <= ($n - 1); $x++) {
            for ($y = 0; $y <= ($n - 1); $y++) {
                $matriksb[$x][$y] = $matriks[$x][$y] / $jmlmpb[$y];
                $value    = $matriksb[$x][$y];
                $jmlmnk[$x] += $value;
            }

            // nilai priority vektor
            $bobotKriteria[$x]     = round(($jmlmnk[$x] / $n), 6);

            // memasukkan nilai priority vektor ke dalam tabel pv_kriteria dan pv_alternatif
            $id_kriteria = $this->kriteriaModel->getKriteriaId($x);
            $this->inputBobotKriteria($id_kriteria, $bobotKriteria[$x]);
        }
        // cek konsistensi
        $lambdaMax  = $this->kriteriaModel->getLambdaMax($jmlmpb, $jmlmnk, $n);
        $consIndex   = $this->kriteriaModel->getConsIndex($jmlmpb, $jmlmnk, $n);
        $consRatio   = $this->kriteriaModel->getConsRatio($jmlmpb, $jmlmnk, $n);

        $data = [
            'title' => 'output AHP',
            'lambdaMax' => $lambdaMax,
            'consIndex' => $consIndex,
            'consRatio' => $consRatio
        ];

        return view('/rekomendasi/output_ahp', $data);
    }


    public function inputDataPerbandinganKriteria($kriteria1, $kriteria2, $nilai)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perbandingan_kriteria');

        $id_kriteria1 = $this->kriteriaModel->getKriteriaId($kriteria1);
        $id_kriteria2 = $this->kriteriaModel->getKriteriaId($kriteria2);

        $result = $this->kriteriaModel->getNilaiPerbandinganKriteria($kriteria1, $kriteria2);
        if ($result->getNumRows() == 0) {
            $this->perbandinganKriteriaModel->save([
                'kriteria1' => $id_kriteria1,
                'kriteria2' => $id_kriteria2,
                'nilai' => $nilai
            ]);

            // session()->setFlashdata('pesan', 'Data berhasil ditambah');
            // return redirect()->to(base_url() . '/alternatif');

            echo 'berhasil tambah data!!!';
        } else {
            $builder->set('nilai', $nilai, false);
            $builder->where('kriteria1', $id_kriteria1)->where('kriteria2', $id_kriteria2);
            $builder->update();

            // session()->setFlashdata('pesan', 'Data berhasil diupdate');
            // return redirect()->to(base_url() . '/alternatif');
            echo 'berhasil update data!!!';
        }
    }

    public function inputBobotKriteria($id_kriteria, $bobot)
    {
        $this->kriteriaModel->save([
            'id' => $id_kriteria,
            'bobot' => $bobot
        ]);
    }
}
