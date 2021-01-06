<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class pages extends BaseController
{
	protected $siswaModel;
	public function __construct()
	{
		$this->siswaModel = new SiswaModel();
	}
	// profil
	public function profil()
	{
		$data = [
			'siswa' => $this->siswaModel->findAll()
		];


		return view('pages/ProfilSiswa', $data);
	}





	// about
	public function about()
	{
		return view('pages/About');
	}

	// contact
	public function contact()
	{
		return view('pages/Contact');
	}
	// tambah
	public function tambah()
	{
		$data = [
			'title' => 'Form Tambah Data Siswa',
			'validation' => \Config\Services::validation()
		];


		return view('pages/Tambah', $data);
	}

	public function save()
	{
		$foto = $this->request->getFile('foto');
		$fotoIjazah = $this->request->getFile('foto_ijazah');

		$namaFoto = $foto->getRandomName();
		$foto->move('img/foto', $namaFoto);

		$namaFotoI = $fotoIjazah->getRandomName();
		$fotoIjazah->move('img/ijazah', $namaFotoI);

		$this->siswaModel->save([
			'nama' => $this->request->getVar('nama'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'foto' => $namaFoto,
			'foto_ijazah' => $namaFotoI,
		]);
		session()->setFlashdata('pesan', 'Data berhasil ditambah.');
		return redirect()->to('/pages/profil');
	}



	public function delete($id)
	{
		$this->siswaModel->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');
		return redirect()->to('/pages/profil');
	}


	public function edit($id)
	{
		$data = [
			'title' => 'Form Ubah Data Siswa',
			'validation' => \Config\Services::validation(),
			'pages' => $this->siswaModel->getPages($id)
		];


		return view('pages/edit', $data);
	}



	public function update($id)
	{
		$foto = $this->request->getFile('foto');
		$fotoIjazah = $this->request->getFile('foto_ijazah');

		$namaFoto = $foto->getRandomName();
		$foto->move('img/foto', $namaFoto);

		$namaFotoI = $fotoIjazah->getRandomName();
		$fotoIjazah->move('img/ijazah', $namaFotoI);

		$this->siswaModel->save([
			'id'=> $id,
			'nama' => $this->request->getVar('nama'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'foto' => $namaFoto,
			'foto_ijazah' => $namaFotoI,
		]);
		session()->setFlashdata('pesan', 'Data berhasil diubah.');
		return redirect()->to('/pages/profil');
	}
}
