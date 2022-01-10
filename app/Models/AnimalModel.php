<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model
{
    protected $table = 'animals';
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'category', 'title', 'description', 'location', 'image', 'status', 'created_at', 'updated_at'];

    public function getAllAnimal($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['user_id' => $id])->findAll();
    }

    public function getAnimalsByStatus($status)
    {
        return $this->where(['status' => $status])->findAll();
    }

    public function getAnimalById($id)
    {
        return $this->where('id', $id)->first();
    }

    public function getAnimalsAndAdoption($id)
    {
        $builder = $this->db->table('animals');
        $builder->select('*');
        $builder->where('animals.user_id', $id);
        $builder->join('adoptions', 'adoptions.animal_id = animals.id');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
