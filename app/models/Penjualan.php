<?php

namespace App\Models;

use App\Core\Model;

class Penjualan extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM penjualan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
