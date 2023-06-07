<?php

namespace App\Models;

use App\Core\Model;

class Supplier extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM supplier";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
