<?php

namespace App\Controllers;

class Pages extends BaseController
{
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
}
