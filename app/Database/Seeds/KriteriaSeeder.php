<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'harga',
                'atribut' => 'cost'
            ],
            [
                'nama' => 'kuota',
                'atribut' => 'benefit'
            ],
            [
                'nama' => 'download',
                'atribut' => 'benefit'
            ],
            [
                'nama' => 'upload',
                'atribut' => 'benefit'
            ],

            [
                'nama' => 'jumlah_perangkat',
                'atribut' => 'benefit'
            ],
            [
                'nama' => 'jangkauan',
                'atribut' => 'benefit'
            ]


        ];

        $this->db->table('kriteria')->insertBatch($data);
    }
}
