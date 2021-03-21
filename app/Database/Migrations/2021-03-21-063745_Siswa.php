<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 100,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'nis' => [
				'type' => 'INT',
				'constraint' => 100,
			],
			'kelas' => [
				'type' => 'TEXT',
			],
			'tahun_masuk' => [
				'type' => 'DATE',
			],
			'ttl' => [
				'type' => 'TEXT',
				'constraint' => 3,
			],
			'alamat' => [
				'type' => 'TEXT',
			],
			'agama' => [
				'type' => 'TEXT',
			],
			'sekolah_asal' => [
				'type' => 'TEXT',
			],
			'ibu' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'ayah' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'hp_wali' => [
				'type' => 'INT',
				'constraint' => 15,
			],
			'created_date' => [
				'type' => 'DATETIME',
			],
			'created_by' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => 'Administrator',
			],
			'updated_date' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'updated_by' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => true,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('siswa');
	}

	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}