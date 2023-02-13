<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EvaluasiSeeder extends Seeder
{
    public function run()
    {
        $data=[
            [
                'id_alternatif' =>,
                'id_kriteria'   =>,
                'nilai'         =>
            ]
        ];

        $this->db->table('evaluasi')->insertBatch($data);
    }
    
}
