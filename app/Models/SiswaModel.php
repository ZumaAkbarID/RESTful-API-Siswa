<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{

    protected $table = 'siswa';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nama', 'nis', 'kelas', 'tahun_masuk', 'ttl', 'alamat', 'agama', 'sekolah_asal', 'ibu', 'ayah', 'hp_wali', 'urlfoto', 'sedangsekolah', 'created_date', 'created_by', 'updated_date', 'updated_by'
    ];
}