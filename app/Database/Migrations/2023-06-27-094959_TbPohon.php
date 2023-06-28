<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPohon extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pohon' => [
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
            'nama_pohon' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'umur_pohon' => [
                'type' => 'INT',
                'constraint' => '5',
            ],
            'tinggi_pohon' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi_pohon' => [
                'type'       => 'TEXT',
            ],
            'musim_pohon' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true, // Jika kolom gambar tidak wajib diisi
            ],
        ]);
        $this->forge->addPrimaryKey('id_pohon');
        $this->forge->addForeignKey('id_jenis', 'data_jenis', 'id_jenis');
        $this->forge->createTable('data_pohon');

    }

    public function down()
    {
        // Drop tabel data pohon
        $this->forge->dropTable('data_pohon');
    }
}
