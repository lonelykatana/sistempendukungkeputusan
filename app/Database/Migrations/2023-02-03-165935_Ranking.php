<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ranking extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_alternatif' => [
                'type'       => 'TINYINT',
                'constraint' => 3,
            ],
            'nilai' => [
                'type' => 'FLOAT',
                'constraint' => 3,
            ],
        ]);

        $this->forge->createTable('ranking');
    }

    public function down()
    {
        $this->forge->dropTable('ranking');
    }
}
