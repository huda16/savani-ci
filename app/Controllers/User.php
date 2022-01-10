<?php

namespace App\Controllers;

use App\Models\AdoptionModel;
use App\Models\AnimalModel;
use App\Models\UserModel;
use \Config\Services;
use \Config\Database;

class User extends BaseController
{
    protected $userModel, $animalModel, $adoptionModel;
    public function __construct()
    {
        $this->animalModel = new AnimalModel();
        $this->adoptionModel = new AdoptionModel();
    }

    public function index()
    {
        $id = user_id();
        $getAnimals = $this->animalModel->getAllAnimal($id);
        $getAnimalsAndAdoption = $this->animalModel->getAnimalsAndAdoption($id);
        $getAdoptions = $this->adoptionModel->getAllAdoption($id);
        // dd($getAnimals);
        $data = [
            'title' => "Daftar Informasi",
            'footer' => true,
            'animals' => $getAnimals,
            'animalsadoption' => $getAnimalsAndAdoption,
            'adoptions' => $getAdoptions,
        ];
        return view('user/index', $data);
    }

    public function buat()
    {
        $data = [
            'title' => "Buat Informasi",
            'validation' => Services::validation(),
            'footer' => false,
        ];
        return view('user/buat', $data);
    }

    public function profil()
    {
        $data['title'] = "Profil";
        $data['footer'] = true;
        return view('user/profile', $data);
    }

    public function chat()
    {
        $data = [
            'title' => "Chat",
            'footer' => false,
        ];
        return view('user/chat', $data);
    }

    public function insertFile(iterable $file)
    {
        foreach ($file['gambar'] as $files) {
            $data[] = $files->getName();
        }
        return $data;
    }

    public function tambahinfo()
    {
        if (user_id() == null) {
            return redirect()->to('login');
        }

        // validasi input
        if (!$this->validate([
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} hewan harus diisi.',
                ]
            ],
            'judul' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => '{field} hewan harus diisi.',
                    'string' => '{field} hewan harus berupa huruf.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} hewan harus diisi.',
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} hewan harus diisi.',
                ]
            ],
            'setuju' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} hewan harus diisi.',
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => "Gambar belum di upload",
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/user/buat')->withInput();
        }

        // ambil semua gambar
        $file = $this->request->getFiles();
        // d($this->request->getVar());
        // d(user()->email);
        // d(user_id());
        // d($file);
        // memindahkan file ke foler img
        if ($file) {
            foreach ($file['gambar'] as $files) {
                if ($files->isValid() && !$files->hasMoved()) {
                    // generate nama sampul random
                    $newName = $files->getRandomName();
                    // pindahkan file ke folder img
                    // d($newName);
                    $files->move('img/animal', $newName);
                }
            }
        }
        // d($this->insertFile($file));
        $this->animalModel->save([
            'user_id' => user_id(),
            'category' => $this->request->getVar('kategori'),
            'title' => $this->request->getVar('judul'),
            'description' => $this->request->getVar('deskripsi'),
            'location' => trim($this->request->getVar('lokasi'), "LngLat()"),
            'image' => join(",", $this->insertFile($file)),
            'status' => true,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/user');
    }

    public function hapus($id)
    {
        $id = user_id();
        if ($id == null) {
            return redirect()->to('login');
        }
        $getAnimals = $this->animalModel->getAllAnimal($id);
        dd($getAnimals);
        $data = [
            'title' => "Daftar Informasi",
            'footer' => true,
            'animals' => $getAnimals,
        ];
        return view('user/index', $data);
    }

    public function tambahadopsi()
    {
        $animalId = $this->request->getVar('id');
        $userId = $this->request->getVar('user');
        $confirm = 1;
        if ($animalId == null) {
            return redirect()->to('login');
        }
        // dd($animalId);
        $this->adoptionModel->save([
            'user_id' => $userId,
            'animal_id' => $animalId,
            'confirm' => $confirm,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        if ($confirm == 1) {
            $data = [
                'status' => 0,
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->animalModel->update($animalId, $data);
        }
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/user');
    }
}
