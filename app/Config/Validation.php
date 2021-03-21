<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $create = [
		'nama' => [
			'rules' => 'required'
		],
		'nis' => [
			'rules' => 'required|is_unique[siswa.nis]|is_natural'
		],
		'kelas' => [
			'rules' => 'required'
		],
		'tahun_masuk' => [
			'rules' => 'required'
		],
		'ttl' => [
			'rules' => 'required'
		],
		'alamat' => [
			'rules' => 'required'
		],
		'agama' => [
			'rules' => 'required'
		],
		'sekolah_asal' => [
			'rules' => 'required'
		],
		'ibu' => [
			'rules' => 'required'
		],
		'ayah' => [
			'rules' => 'required'
		],
		'hp_wali' => [
			'rules' => 'is_natural'
		],
	];

	public $update_siswa = [
		'nis' => [
			'rules' => 'is_unique[siswa.nis,id,{id}]|is_natural'
		],
		'hp_wali' => [
			'rules' => 'is_natural'
		],
	];
}