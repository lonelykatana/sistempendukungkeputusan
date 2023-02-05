<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ir extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 3,
            ],
            'nilai' => [
                'type' => 'FLOAT',
                'constraint' => 5,
            ],
        ]);

        $this->forge->createTable('ir');
    }

    public function down()
    {
        $this->forge->dropTable('ir');
    }
}
