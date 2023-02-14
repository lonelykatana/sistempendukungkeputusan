<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\EvaluasiModel;
use App\Models\KriteriaModel;
use App\Models\PerbandinganKriteriaModel;

class Pages extends BaseController
{

    protected $kriteriaModel;
    protected $perbandinganKriteriaModel;
    protected $alternatifModel;
    protected $evaluasiModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
        $this->perbandinganKriteriaModel = new PerbandinganKriteriaModel();
        $this->alternatifModel = new AlternatifModel();
        $this->evaluasiModel = new EvaluasiModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | SPK Rekomendasi WiFi'
        ];
        return view('pages/home', $data);
    }

    public function rekomendasi()
    {
        $data = [
            'title' => 'Opsi'
        ];
        return view('pages/opsi', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);
    }

    public function evaluasi()
    {
        $result = $this->alternatifModel->getAll();
        foreach ($result as $row) {
            $harga[] = $row->harga;
            if ($harga < 427800) {
                $harga = 1;
            }
        }
        $data = [
            'title' => 'data evaluasi',
            'harga' => $harga
        ];

        return view('pages/input_data_evaluasi', $data);
    }

    public function inputEvaluasi()
    {
        $result = $this->alternatifModel->getAll();

        foreach ($result as $row) {
            $harga[] = $row->harga;
            $kuota[] = $row->kuota;
            $download[] = $row->download;
            $upload[] = $row->upload;
            $jumlah_perangkat[] = $row->jumlah_perangkat;
            $jangkauan[] = $row->jangkauan;
        }
        $n = $this->alternatifModel->getJumlahAlternatif();
        $y = 1;
        for ($i = 0; $i <= $n - 1; $i++) {
            if ($harga[$i] <= 427800) {
                $nilai = 1;
            } elseif ($harga[$i] <= 670600 and $harga[$i] > 427800) {
                $nilai = 2;
            } elseif ($harga[$i] <= 913400 and $harga[$i] > 670600) {
                $nilai = 3;
            } elseif ($harga[$i] <= 1156200 and $harga[$i] > 913400) {
                $nilai = 4;
            } elseif ($harga[$i] > 1156200) {
                $nilai = 5;
            }

            $this->inputHarga($y, 1, $nilai);

            if ($kuota[$i] == 0) {
                $nilai = 5;
            } else $nilai = 1;

            $this->inputKuota($y, 2, $nilai);

            if ($download[$i] <= 50) {
                $nilai = 1;
            } elseif ($download[$i] <= 150 and $download[$i] > 50) {
                $nilai = 2;
            } elseif ($download[$i] <= 250 and $download[$i] > 150) {
                $nilai = 3;
            } elseif ($download[$i] <= 250 and $download[$i] > 350) {
                $nilai = 4;
            } elseif ($download[$i] > 350) {
                $nilai = 5;
            }

            $this->inputDownload($y, 3, $nilai);



            if ($upload[$i] <= 50) {
                $nilai = 1;
            } elseif ($upload[$i] <= 150 and $upload[$i] > 50) {
                $nilai = 2;
            } elseif ($upload[$i] <= 250 and $upload[$i] > 150) {
                $nilai = 3;
            } elseif ($upload[$i] <= 250 and $upload[$i] > 350) {
                $nilai = 4;
            } elseif ($upload[$i] > 350) {
                $nilai = 5;
            }

            $this->inputUpload($y, 4, $nilai);



            if ($jumlah_perangkat[$i] <= 5) {
                $nilai = 1;
            } elseif ($jumlah_perangkat[$i] <= 10 and $jumlah_perangkat[$i] > 5) {
                $nilai = 2;
            } elseif ($jumlah_perangkat[$i] <= 15 and $jumlah_perangkat[$i] > 10) {
                $nilai = 3;
            } elseif ($jumlah_perangkat[$i] <= 20 and $jumlah_perangkat[$i] > 15) {
                $nilai = 4;
            } elseif ($jumlah_perangkat[$i] > 20) {
                $nilai = 5;
            }

            $this->inputJumlahPerangkat($y, 5, $nilai);



            if ($jangkauan[$i] <= 10) {
                $nilai = 1;
            } elseif ($jangkauan[$i] <= 20 and $jangkauan[$i] > 10) {
                $nilai = 3;
            } elseif ($jangkauan[$i] > 20) {
                $nilai = 5;
            }

            $this->inputJangkauan($y, 6, $nilai);


            $y++;
        }
    }

    public function inputHarga($id_alternatif, $id_kriteria, $nilai)
    {
        $this->evaluasiModel->save([
            'id_alternatif' => $id_alternatif,
            'id_kriteria'   => $id_kriteria,
            'nilai'         => $nilai
        ]);
    }
    public function inputKuota($id_alternatif, $id_kriteria, $nilai)
    {
        $this->evaluasiModel->save([
            'id_alternatif' => $id_alternatif,
            'id_kriteria'   => $id_kriteria,
            'nilai'         => $nilai
        ]);
    }
    public function inputDownload($id_alternatif, $id_kriteria, $nilai)
    {
        $this->evaluasiModel->save([
            'id_alternatif' => $id_alternatif,
            'id_kriteria'   => $id_kriteria,
            'nilai'         => $nilai
        ]);
    }
    public function inputUpload($id_alternatif, $id_kriteria, $nilai)
    {
        $this->evaluasiModel->save([
            'id_alternatif' => $id_alternatif,
            'id_kriteria'   => $id_kriteria,
            'nilai'         => $nilai
        ]);
    }
    public function inputJumlahPerangkat($id_alternatif, $id_kriteria, $nilai)
    {
        $this->evaluasiModel->save([
            'id_alternatif' => $id_alternatif,
            'id_kriteria'   => $id_kriteria,
            'nilai'         => $nilai
        ]);
    }
    public function inputJangkauan($id_alternatif, $id_kriteria, $nilai)
    {
        $this->evaluasiModel->save([
            'id_alternatif' => $id_alternatif,
            'id_kriteria'   => $id_kriteria,
            'nilai'         => $nilai
        ]);
    }
}
