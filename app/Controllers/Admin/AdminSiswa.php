<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

use App\Models\DatasekolahModel;
use App\Models\SiswaModel;

class AdminSiswa extends BaseController
{

    public function __construct()
    {
        $this->siswa = new SiswaModel();
        $this->datasekolah = new DatasekolahModel();

        $this->validation = \Config\Services::validation();
    }

    public function index()
    {

        $data = [
            'title' => 'Admin-Siswa',
            'datasekolah' => $this->datasekolah->findAll(),
            'datasiswa' => $this->siswa->where('sedangsekolah', '1')->findAll(),
            'admin' => true
        ];

        return view('admin/siswa', $data);
    }

    public function detail($nis)
    {
        $data = [
            'title' => 'Admin-Siswa',
            'datasekolah' => $this->datasekolah->findAll(),
            'datasiswa' => $this->siswa->where('nis', $nis)->findAll(),
            'admin' => true
        ];

        if (!$data['datasiswa']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('admin/siswadetail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Admin-Siswa',
            'datasekolah' => $this->datasekolah->findAll(),
            'admin' => true,
            'validation' => $this->validation
        ];
        return view('admin/formcreate', $data);
    }

    public function saveCreate()
    {
        $data = $this->request->getVar();
        $dataValid = $this->validation->run($data, 'create');

        if (!empty($this->request->getVar('created_by'))) {
            $created_by = $this->request->getVar('created_by');
        } else {
            $created_by = 'Administrator';
        }

        if ($dataValid) {
            $this->siswa->insert([
                'nama' => $this->request->getVar('nama'),
                'nis' => $this->request->getVar('nis'),
                'kelas' => $this->request->getVar('kelas'),
                'tahun_masuk' => $this->request->getVar('tahun_masuk'),
                'ttl' => $this->request->getVar('ttl'),
                'alamat' => $this->request->getVar('alamat'),
                'agama' => $this->request->getVar('agama'),
                'sekolah_asal' => $this->request->getVar('sekolah_asal'),
                'ibu' => $this->request->getVar('ibu'),
                'ayah' => $this->request->getVar('ayah'),
                'hp_wali' => $this->request->getVar('hp_wali'),
                'urlfoto' => $this->request->getVar('urlfoto'),
                'sedangsekolah' => $this->request->getVar('sedangsekolah'),
                'created_date' => date('Y-m-d'),
                'created_by' => $created_by,
            ]);
            session()->setFlashdata('pesan', "Data siswa {$this->request->getVar('nama')} berhasil ditambahkan");
            return redirect()->to('/admin/siswa/new');
        }
        return redirect()->to('/admin/siswa/new')->withInput()->with('validation', $this->validation);
    }

    public function edit($nis)
    {
        $data = [
            'title' => 'Admin-Siswa',
            'datasekolah' => $this->datasekolah->findAll(),
            'datasiswa' => $this->siswa->where('nis', $nis)->findAll(),
            'admin' => true
        ];

        if (!$data['datasiswa']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('admin/siswaedit', $data);
    }
}