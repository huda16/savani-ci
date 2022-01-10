<?php

namespace App\Models;

use CodeIgniter\Model;

class AdoptionModel extends Model
{
    protected $table = 'adoptions';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'animal_id', 'confirm', 'created_at', 'updated_at'];

    public function getAllAdoption($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['user_id' => $id])->findAll();
    }
}
