<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\SiswaModel;
use App\Models\DatasekolahModel;

class Siswa extends BaseController
{

    public function __construct()
    {
        $this->siswa = new SiswaModel();
        $this->datasekolah = new DatasekolahModel();
    }
    public function index()
    {

        $data = [
            'title' => 'Data Siswa',
            'datasiswa' => $this->siswa->where('sedangsekolah', '1')->orderBy('nis', 'ASC')->findAll(),
            'datasekolah' => $this->datasekolah->findAll()
        ];
        return view('siswa/siswasekolah', $data);
    }

    public function detailSiswa($nis)
    {

        $data = [
            'title' => 'Data Siswa',
            'datasiswa' => $this->siswa->where('nis', $nis)->findAll(),
            'admin' => false,
            'datasekolah' => $this->datasekolah->findAll()
        ];

        if (!$data['datasiswa']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('siswa/detailsiswa', $data);
    }
}