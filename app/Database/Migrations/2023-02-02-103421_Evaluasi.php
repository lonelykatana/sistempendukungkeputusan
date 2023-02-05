<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Evaluasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'TINYINT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_alternatif' => [
                'type'           => 'TINYINT',
                'constraint'     => 3,
                'unsigned'       => true,
            ],
            'nilai' => [
                'type' => 'INT',
                'null' => false
            ]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('evaluasi');
    }

    public function down()
    {
        $this->forge->dropTable('evaluasi');
    }
}
