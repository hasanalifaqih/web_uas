<?php

namespace App\Controllers;

use App\Models\MobilModel;
use CodeIgniter\Controller;

class MobilController extends Controller
{
    protected $mobilModel;

    public function __construct()
    {
        $this->mobilModel = new MobilModel();
    }

    public function index()
    {
        $data['mobils'] = $this->mobilModel->findAll();
        return view('mobil/index', $data);
    }

    public function create()
    {
        return view('mobil/create');
    }

    public function store()
    {
        $this->mobilModel->save([
            'nama_mobil' => $this->request->getPost('nama_mobil'),
            'merek' => $this->request->getPost('merek'),
            'tahun' => $this->request->getPost('tahun'),
            'harga_sewa' => $this->request->getPost('harga_sewa'),
        ]);
        return redirect()->to('/mobil');
    }

    public function edit($id)
    {
        $data['mobil'] = $this->mobilModel->find($id);
        return view('mobil/edit', $data);
    }

    public function update($id)
    {
        $this->mobilModel->update($id, [
            'nama_mobil' => $this->request->getPost('nama_mobil'),
            'merek' => $this->request->getPost('merek'),
            'tahun' => $this->request->getPost('tahun'),
            'harga_sewa' => $this->request->getPost('harga_sewa'),
        ]);
        return redirect()->to('/mobil');
    }

    public function delete($id)
    {
        $this->mobilModel->delete($id);
        return redirect()->to('/mobil');
    }

    public function search()
    {
        $keyword = $this->request->getPost('keyword');
        $data['mobils'] = $this->mobilModel->like('nama_mobil', $keyword)->findAll();
        return view('mobil/index', $data);
    }
}
