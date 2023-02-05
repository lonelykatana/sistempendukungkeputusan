<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alternatif extends Migration
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
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type'          => 'DECIMAL',
                'constraint'    => 20,
                'unsigned'      => true,

            ],
            'kuota' => [
                'type'          => 'INT',
                'constraint'    => 20,
                'unsigned'      => true,

            ],
            'download' => [
                'type'          => 'INT',
                'constraint'    => 20,
                'unsigned'      => true,

            ],
            'upload' => [
                'type'          => 'INT',
                'constraint'    => 20,
                'unsigned'      => true,

            ],
            'jumlah_perangkat' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,

            ],
            'jangkauan' => [
                'type'          => 'FLOAT',
                'constraint'    => 20,
                'unsigned'      => true,

            ],
            'gambar' => [
                'type'  => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('alternatif');
    }

    public function down()
    {
        $this->forge->dropTable('alternatif');
    }
}
