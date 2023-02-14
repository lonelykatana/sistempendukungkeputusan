<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlternatifSeeder extends Seeder
{
    public function run()
    {
        $data =
            [
                [
                    'nama' => 'Biznet Home Internet OAS',
                    'harga' => 250000,
                    'kuota' => 0,
                    'download' => 20,
                    'upload' => 20,
                    'jumlah_perangkat' => 3,
                    'jangkauan' => 20,
                    'gambar' => 'biznet.png'
                ],
                [
                    'nama' => 'Biznet Home Internet 1AS',
                    'harga' => 350000,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 250,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 20,
                    'gambar' => 'biznet.png'
                ],
                [
                    'nama' => 'Biznet Home Internet 2AS',
                    'harga' => 550000,
                    'kuota' => 0,
                    'download' => 110,
                    'upload' => 110,
                    'jumlah_perangkat' => 20,
                    'jangkauan' => 30,
                    'gambar' => 'biznet.png'
                ],
                [
                    'nama' => 'Biznet Home Gamer 3AS',
                    'harga' => 650000,
                    'kuota' => 0,
                    'download' => 125,
                    'upload' => 125,
                    'jumlah_perangkat' => 20,
                    'jangkauan' => 30,
                    'gambar' => 'biznet.png'
                ],
                [
                    'nama' => 'Indihome Paket JITU 1 - 1P',
                    'harga' => 280000,
                    'kuota' => 450,
                    'download' => 30,
                    'upload' => 20,
                    'jumlah_perangkat' => 7,
                    'jangkauan' => 10,
                    'gambar' => 'indihome.png'
                ],
                [
                    'nama' => 'Indihome Paket JITU 2 - 1P',
                    'harga' => 310000,
                    'kuota' => 500,
                    'download' => 40,
                    'upload' => 30,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 10,
                    'gambar' => 'indihome.png'
                ],
                [
                    'nama' => 'MyRepublic VALUE',
                    'harga' => 309000,
                    'kuota' => 0,
                    'download' => 30,
                    'upload' => 30,
                    'jumlah_perangkat' => 7,
                    'jangkauan' => 10,
                    'gambar' => 'myrepublic.png'
                ],
                [
                    'nama' => 'MyRepublic FAST',
                    'harga' => 409000,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 50,
                    'jumlah_perangkat' => 12,
                    'jangkauan' => 10,
                    'gambar' => 'myrepublic.png'
                ],
                [
                    'nama' => 'MyRepublic HYPE',
                    'harga' => 489000,
                    'kuota' => 0,
                    'download' => 75,
                    'upload' => 75,
                    'jumlah_perangkat' => 15,
                    'jangkauan' => 10,
                    'gambar' => 'myrepublic.png'
                ],
                [
                    'nama' => 'MyRepublic NOVA',
                    'harga' => 637000,
                    'kuota' => 0,
                    'download' => 100,
                    'upload' => 100,
                    'jumlah_perangkat' => 20,
                    'jangkauan' => 10,
                    'gambar' => 'myrepublic.png'
                ],
                [
                    'nama' => 'MyRepublic GAMER',
                    'harga' => 749000,
                    'kuota' => 0,
                    'download' => 150,
                    'upload' => 150,
                    'jumlah_perangkat' => 20,
                    'jangkauan' => 30,
                    'gambar' => 'myrepublic.png'
                ],
                [
                    'nama' => 'CBN FIBER 20',
                    'harga' => 299000,
                    'kuota' => 0,
                    'download' => 20,
                    'upload' => 20,
                    'jumlah_perangkat' => 3,
                    'jangkauan' => 10,
                    'gambar' => 'cbn.png'
                ],
                [
                    'nama' => 'CBN FIBER 50',
                    'harga' => 399000,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 50,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 20,
                    'gambar' => 'cbn.png'
                ],
                [
                    'nama' => 'CBN FIBER 100',
                    'harga' => 799000,
                    'kuota' => 0,
                    'download' => 100,
                    'upload' => 100,
                    'jumlah_perangkat' => 20,
                    'jangkauan' => 30,
                    'gambar' => 'cbn.png'
                ],
                [
                    'nama' => 'CBN FIBER 300',
                    'harga' => 1399000,
                    'kuota' => 0,
                    'download' => 300,
                    'upload' => 300,
                    'jumlah_perangkat' => 30,
                    'jangkauan' => 30,
                    'gambar' => 'cbn.png'
                ],
                [
                    'nama' => 'hi-speed 20',
                    'harga' => 269000,
                    'kuota' => 0,
                    'download' => 20,
                    'upload' => 20,
                    'jumlah_perangkat' => 3,
                    'jangkauan' => 10,
                    'gambar' => 'hispeed.png'
                ],
                [
                    'nama' => 'hi-speed 30',
                    'harga' => 299000,
                    'kuota' => 0,
                    'download' => 30,
                    'upload' => 30,
                    'jumlah_perangkat' => 5,
                    'jangkauan' => 10,
                    'gambar' => 'hispeed.png'
                ],
                [
                    'nama' => 'hi-speed 50',
                    'harga' => 369000,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 50,
                    'jumlah_perangkat' => 8,
                    'jangkauan' => 10,
                    'gambar' => 'hispeed.png'
                ],
                [
                    'nama' => 'hi-speed 100',
                    'harga' => 569000,
                    'kuota' => 0,
                    'download' => 100,
                    'upload' => 100,
                    'jumlah_perangkat' => 12,
                    'jangkauan' => 30,
                    'gambar' => 'hispeed.png'
                ],
                [
                    'nama' => 'First Media STREAM VALUE',
                    'harga' => 275000,
                    'kuota' => 0,
                    'download' => 30,
                    'upload' => 30,
                    'jumlah_perangkat' => 4,
                    'jangkauan' => 10,
                    'gambar' => 'firstmedia.png'
                ],
                [
                    'nama' => 'First Media STREAM PRO',
                    'harga' => 525000,
                    'kuota' => 0,
                    'download' => 150,
                    'upload' => 150,
                    'jumlah_perangkat' => 8,
                    'jangkauan' => 10,
                    'gambar' => 'firstmedia.png'
                ],
                [
                    'nama' => 'First Media STREAM PREMIUM',
                    'harga' => 695000,
                    'kuota' => 0,
                    'download' => 250,
                    'upload' => 250,
                    'jumlah_perangkat' => 15,
                    'jangkauan' => 30,
                    'gambar' => 'firstmedia.png'
                ],
                [
                    'nama' => 'MNC Family Pack 30',
                    'harga' => 339000,
                    'kuota' => 0,
                    'download' => 30,
                    'upload' => 30,
                    'jumlah_perangkat' => 4,
                    'jangkauan' => 10,
                    'gambar' => 'mnc.png'
                ],
                [
                    'nama' => 'MNC Family Pack 50',
                    'harga' => 459000,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 50,
                    'jumlah_perangkat' => 6,
                    'jangkauan' => 10,
                    'gambar' => 'mnc.png'
                ],
                [
                    'nama' => 'MNC Family Pack 70',
                    'harga' => 629000,
                    'kuota' => 0,
                    'download' => 70,
                    'upload' => 70,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 30,
                    'gambar' => 'mnc.png'
                ],
                [
                    'nama' => 'Groovy Level 1 Personal',
                    'harga' => 298590,
                    'kuota' => 0,
                    'download' => 20,
                    'upload' => 20,
                    'jumlah_perangkat' => 4,
                    'jangkauan' => 10,
                    'gambar' => 'groovy.png'
                ],
                [
                    'nama' => 'Groovy Level 2 Couples',
                    'harga' => 409590,
                    'kuota' => 0,
                    'download' => 30,
                    'upload' => 30,
                    'jumlah_perangkat' => 6,
                    'jangkauan' => 10,
                    'gambar' => 'groovy.png'
                ],
                [
                    'nama' => 'Groovy Level 3 Familiy',
                    'harga' => 520590,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 50,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 10,
                    'gambar' => 'groovy.png'
                ],
                [
                    'nama' => 'Megavision Silver 20',
                    'harga' => 229000,
                    'kuota' => 0,
                    'download' => 20,
                    'upload' => 20,
                    'jumlah_perangkat' => 30,
                    'jangkauan' => 10,
                    'gambar' => 'megavision.png'
                ],
                [
                    'nama' => 'Megavision Silver 30',
                    'harga' => 329000,
                    'kuota' => 0,
                    'download' => 30,
                    'upload' => 30,
                    'jumlah_perangkat' => 5,
                    'jangkauan' => 10,
                    'gambar' => 'megavision.png'
                ],
                [
                    'nama' => 'Megavision Silver 40',
                    'harga' => 369000,
                    'kuota' => 0,
                    'download' => 40,
                    'upload' => 40,
                    'jumlah_perangkat' => 6,
                    'jangkauan' => 10,
                    'gambar' => 'megavision.png'
                ],
                [
                    'nama' => 'Megavision Silver 50',
                    'harga' => 399000,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 50,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 10,
                    'gambar' => 'megavision.png'
                ],
                [
                    'nama' => 'Megavision Silver 100',
                    'harga' => 499000,
                    'kuota' => 0,
                    'download' => 100,
                    'upload' => 100,
                    'jumlah_perangkat' => 15,
                    'jangkauan' => 20,
                    'gambar' => 'megavision.png'
                ],
                [
                    'nama' => 'XL Home Family',
                    'harga' => 387390,
                    'kuota' => 0,
                    'download' => 100,
                    'upload' => 100,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 20,
                    'gambar' => 'xlhome.png'
                ],
                [
                    'nama' => 'XL Home Super Users',
                    'harga' => 553000,
                    'kuota' => 0,
                    'download' => 300,
                    'upload' => 300,
                    'jumlah_perangkat' => 15,
                    'jangkauan' => 20,
                    'gambar' => 'xlhome.png'
                ],
                [
                    'nama' => 'XL Home Ultimate',
                    'harga' => 1108890,
                    'kuota' => 0,
                    'download' => 1000,
                    'upload' => 1000,
                    'jumlah_perangkat' => 20,
                    'jangkauan' => 30,
                    'gambar' => 'xlhome.png'
                ],
                [
                    'nama' => 'ICONNET10',
                    'harga' => 185000,
                    'kuota' => 0,
                    'download' => 10,
                    'upload' => 10,
                    'jumlah_perangkat' => 3,
                    'jangkauan' => 10,
                    'gambar' => 'iconnet.png'
                ],
                [
                    'nama' => 'ICONNET20',
                    'harga' => 207000,
                    'kuota' => 0,
                    'download' => 20,
                    'upload' => 20,
                    'jumlah_perangkat' => 5,
                    'jangkauan' => 10,
                    'gambar' => 'iconnet.png'
                ],
                [
                    'nama' => 'ICONNET50',
                    'harga' => 297000,
                    'kuota' => 0,
                    'download' => 50,
                    'upload' => 50,
                    'jumlah_perangkat' => 10,
                    'jangkauan' => 10,
                    'gambar' => 'iconnet.png'
                ],
                [
                    'nama' => 'ICONNET100',
                    'harga' => 427000,
                    'kuota' => 0,
                    'download' => 100,
                    'upload' => 100,
                    'jumlah_perangkat' => 15,
                    'jangkauan' => 30,
                    'gambar' => 'iconnet.png'
                ],




            ];

        $this->db->table('alternatif')->insertBatch($data);
    }
}
