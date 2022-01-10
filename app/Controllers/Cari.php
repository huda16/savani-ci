<?php

namespace App\Controllers;

use App\Models\AnimalModel;

class Cari extends BaseController
{
    protected $userModel, $animalModel;
    public function __construct()
    {
        $this->animalModel = new AnimalModel();
    }

    public function index()
    {
        $data = [
            'title' => "Cari Informasi",
            'footer' => false,
            'animals' => $this->animalModel->getAnimalsByStatus(1),
        ];
        return view('cari/index', $data);
    }

    public function penangkaran()
    {
        $data = [
            'title' => "Penangkaran",
            'footer' => true,
        ];
        return view('cari/penangkaran', $data);
    }

    public function detail($id = false)
    {
        $getAnimal = $this->animalModel->getAnimalById($id);
        if ($getAnimal == null) {
            return redirect()->to('cari');
        }
        // d($getAnimal);
        $data = [
            'title' => "Detail Hewan",
            'footer' => true,
            'animal' => $getAnimal,
        ];
        return view('cari/detail', $data);
    }
}
