<?php

namespace App\Models;

use App\Core\Model;

class Pembelian extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM pembelian";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
