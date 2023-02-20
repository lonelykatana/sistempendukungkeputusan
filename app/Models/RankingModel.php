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
}
