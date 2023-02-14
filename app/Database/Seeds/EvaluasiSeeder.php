<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EvaluasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 1
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 2,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 2,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],
            [
                'id_alternatif' => 1,
                'id_kriteria'   => 1,
                'nilai'         => 5
            ],



        ];


        $this->db->table('evaluasi')->insertBatch($data);
    }
}
