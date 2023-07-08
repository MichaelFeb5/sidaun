<?php

namespace App\Models;

use CodeIgniter\Model;

class DataJenis extends Model
{
    protected $table            = 'data_jenis';
    protected $primaryKey       = 'id_genus';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_genus',
        'deskripsi_genus',
        'nama_family',
        'deskripsi_family'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
