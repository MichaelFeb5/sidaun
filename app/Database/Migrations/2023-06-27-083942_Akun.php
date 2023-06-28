<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Akun extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'primary' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->createTable('tb_akun');
    }

    public function down()
    {
        $this->forge->dropTable('tb_akun');
    }
}
