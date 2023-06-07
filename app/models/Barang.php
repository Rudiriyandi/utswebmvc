<?php

namespace App\Models;

use App\Core\Model;

class Barang extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM barang";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}



