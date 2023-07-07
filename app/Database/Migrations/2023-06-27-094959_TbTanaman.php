<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbTanaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tanaman' => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_jenis' => [
                'type'           => 'INT',
                'constraint'     => 50,
                'unsigned'       => true,
            ],
            'nama_tanaman' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'umur_tanaman' => [
                'type' => 'INT',
                'constraint' => '5',
            ],
            'tinggi_tanaman' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi_tanaman' => [
                'type'       => 'TEXT',
            ],
            'musim_tanaman' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true, // Jika kolom gambar tidak wajib diisi
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_tanaman');
        $this->forge->addForeignKey('id_jenis', 'data_jenis', 'id_jenis');
        $this->forge->createTable('data_tanaman');

    }

    public function down()
    {
        // Drop tabel data pohon
        $this->forge->dropTable('data_tanaman');
    }
}
