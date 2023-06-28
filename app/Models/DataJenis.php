<?php

namespace App\Models;

use CodeIgniter\Model;

class DataJenis extends Model
{
    protected $table            = 'data_jenis';
    protected $primaryKey       = 'id_jenis';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_jenis',
        'nama_family'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
