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
			'rules' => 'required',
			'errors' => [
				'required' => 'Nama siswa harus diisi'
			]
		],
		'nis' => [
			'rules' => 'required|is_unique[siswa.nis]|is_natural',
			'errors' => [
				'required' => 'NIS harus diisi',
				'is_unique' => 'Tidak diizinkan terdapat data {field} yang sama',
				'is_natural' => 'NIS harus berisi angka dan bernilai positif'
			]
		],
		'kelas' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Kelas siswa harus diisi'
			]
		],
		'tahun_masuk' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Tahun Masuk siswa harus diisi'
			]
		],
		'ttl' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Tempat, tanggal lahir siswa harus diisi'
			]
		],
		'alamat' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Alamat siswa harus diisi'
			]
		],
		'agama' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Agama siswa harus diisi'
			]
		],
		'sekolah_asal' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Sekolah asal siswa harus diisi'
			]
		],
		'ibu' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Nama ibu atau wali siswa harus diisi'
			]
		],
		'ayah' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Nama ayah atau wali siswa harus diisi'
			]
		],
		'hp_wali' => [
			'rules' => 'is_natural',
			'errors' => [
				'is_natural' => 'Nomor HP wali siswa harus berisi angka dan bernilai positif'
			]
		],
		'sedangsekolah' => [
			'rules' => 'required|max_length[1]|is_natural',
			'errors' => [
				'required' => 'Status siswa harus diisi',
				'max_length' => 'Status siswa harus terdiri 1 angka antara 0 sampai 2',
				'is_natural' => 'Status siswa harus berisi angka dan bernilai positif'
			]
		],
		'urlfoto' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'URL foto siswa harus diisi'
			]
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