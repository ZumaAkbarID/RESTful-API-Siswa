<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

use function PHPSTORM_META\type;

class Datasekolah extends Migration
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
			'nama_sekolah' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'alamat' => [
				'type' => 'TEXT',
			],
			'notelp' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('datasekolah');
	}

	public function down()
	{
		$this->forge->dropTable('datasekolah');
	}
}