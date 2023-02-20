<?php

namespace App\Models;

use CodeIgniter\Model;


class RankingModel extends Model
{
    protected $table = 'ranking';
    //protected $useTimestamps = true;
    protected $allowedFields = ['id_alternatif', 'nilai'];

    public function getRanking()
    {
        $query = $this->db->query("SELECT * FROM ranking ORDER BY nilai DESC");
        if (!$query) {
            echo 'Error!';
            exit();
        }
        return $query;
    }
    public function getRankingAndAlternatif()
    {
        return $this->db->query('SELECT alternatif.id,alternatif.nama,alternatif.harga, alternatif.kuota,alternatif.download,alternatif.upload,alternatif.jumlah_perangkat,alternatif.jangkauan,ranking.nilai FROM ranking INNER JOIN alternatif ON ranking.id_alternatif=alternatif.id ORDER BY ranking.nilai DESC')->getResult('array');
    }
}
