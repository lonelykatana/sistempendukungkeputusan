<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use CodeIgniter\CodeIgniter;

class Alternatif extends BaseController
{

    protected $alternatifModel;
    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Fixed Broadband',
            'wifi' => $this->alternatifModel->getWifi()
        ];
        return view('pages/opsi', $data);
    }
}
