<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPohon extends Model
{
    protected $table            = 'data_pohon';
    protected $primaryKey       = 'id_pohon';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_pohon',
        'umur_pohon',
        'tinggi_pohon',
        'deskripsi_pohon',
        'musim_pohon',
        'gambar'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function dataJenis()
    {
        return $this->belongsTo(DataJenis::class, 'id_jenis', 'id_jenis');
    }

    public function getAll() {
        $builder = $this->db->table('data_pohon');
        $builder->join('data_jenis', 'data_jenis.id_jenis = data_pohon.id_jenis');
        $query = $builder->get();
        return $query->getResult();
    }
}

