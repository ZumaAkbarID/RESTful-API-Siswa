<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'nis', 'kelas', 'tahun_masuk', 'ttl', 'alamat', 'agama', 'sekolah_asal', 'ibu', 'ayah', 'hp_wali', 'created_date', 'created_by', 'updated_date', 'updated_by'
    ];
    // protected $returnType = 'App\Entities\Siswa';
    protected $useTimestamps = false;

    public function findById($id)
    {
        $data = $this->find($id);
        if ($data) {
            return $data;
        }
        return false;
    }
}