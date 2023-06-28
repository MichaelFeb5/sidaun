<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbJenis extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_jenis' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_family' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addPrimaryKey('id_jenis');
        $this->forge->createTable('data_jenis');
    }

    public function down()
    {
        // Drop tabel data pohon
        $this->forge->dropTable('data_jenis');
    }
}
