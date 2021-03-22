<?php

namespace App\Models;

use CodeIgniter\Model;

class DatasekolahModel extends Model
{
    protected $table = 'datasekolah';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nama_sekolah', 'notelp', 'email'
    ];
}