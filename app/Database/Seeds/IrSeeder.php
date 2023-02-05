<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class IrSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jumlah' => 1,
                'nilai' => 0
            ],
            [
                'jumlah' => 2,
                'nilai' => 0
            ],
            [
                'jumlah' => 3,
                'nilai' => 0.58
            ],
            [
                'jumlah' => 4,
                'nilai' => 0.90
            ],

            [
                'jumlah' => 5,
                'nilai' => 1.12
            ],
            [
                'jumlah' => 6,
                'nilai' => 1.24
            ],
            [
                'jumlah' => 7,
                'nilai' => 1.32
            ],
            [
                'jumlah' => 8,
                'nilai' => 1.41
            ],
            [
                'jumlah' => 9,
                'nilai' => 1.45
            ],
            [
                'jumlah' => 10,
                'nilai' => 1.49
            ],
            [
                'jumlah' => 11,
                'nilai' => 1.51
            ],
            [
                'jumlah' => 12,
                'nilai' => 1.48
            ],
            [
                'jumlah' => 13,
                'nilai' => 1.56
            ],
            [
                'jumlah' => 14,
                'nilai' => 1.57
            ],
            [
                'jumlah' => 15,
                'nilai' => 1.59
            ]
        ];

        $this->db->table('ir')->insertBatch($data);
    }
}
