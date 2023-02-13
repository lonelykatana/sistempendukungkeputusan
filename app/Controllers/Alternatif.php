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
}
