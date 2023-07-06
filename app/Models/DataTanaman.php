<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTanaman extends Model
{
    protected $table            = 'data_tanaman';
    protected $primaryKey       = 'id_tanaman';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_tanaman',
        'umur_tanaman',
        'tinggi_tanaman',
        'deskripsi_tanaman',
        'musim_tanaman',
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
        $builder = $this->db->table('data_tanaman');
        $builder->join('data_jenis', 'data_jenis.id_jenis = data_tanaman.id_jenis');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getDetailWithJenis($id)
    {
        $this->select('data_tanaman.*, data_jenis.*');
        $this->join('data_jenis', 'data_jenis.id_jenis = data_tanaman.id_jenis', 'left');
        $this->where('data_tanaman.id_tanaman', $id);
        $query = $this->get();

        return $query->getRow();
    }
}

