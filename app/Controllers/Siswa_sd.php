<?php

namespace App\Controllers;

use App\Models\SdModel;
use App\Models\SdBeasiswaModel;

class Siswa_sd extends BaseController
{
    protected $sdModel;
    protected $sdBeasiswaModel;

    public function __construct()
    {
        $this->sdModel = new SdModel();
        $this->sdBeasiswaModel = new SdBeasiswaModel();
    }

	public function index()
	{
		return redirect()->to('/home');
	}

	public function internal()
	{
        $asalSekolah = 'TK Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SD Internal',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswaInternal($asalSekolah)->getResult()
		];
		return view('siswa/sd_internal', $data);
	}

    public function external()
	{
        $asalSekolah = 'TK Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SD External',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswaExternal($asalSekolah)->getResult()
		];
		return view('siswa/sd_external', $data);
	}

    public function detail($slug_nama_lengkap)
    {
        $sd = $this->sdModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Data Calon Peserta Didik',
            'navbar' => 'siswa_sd',
            'sd' => $sd,
            'beasiswa' => $this->sdBeasiswaModel->getBeasiswa($sd['id']),
        ];

        if(empty($data['sd'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' tidak ditemukan');
        }

        return view('detail/sd', $data);
    }

    public function status_penerimaan($id, $var)
    {
        $this->sdModel->save([
            'id' => $id,
            'status_penerimaan' => $var
        ]);
        return redirect()->to('/siswa_sd');
    }

    public function status_pendaftaran($id, $var)
    {
        $this->sdModel->save([
            'id' => $id,
            'status_pendaftaran' => $var
        ]);
        return redirect()->to('/siswa_sd');
    }

    public function penggantian_password($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Penggantian Password',
			'navbar' => 'siswa_sd',
            'unit' => 'sd',
            'sd' => $this->sdModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('ganti_password/sd', $data);
    }

    public function change_password($id)
    {
        if(!$this->validate([
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password Harus Diisi.',
                    'min_length' => 'Password Minimal 8 Karakter'
                ]
            ],
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Confirm Password Harus Diisi.',
                    'matches' => 'Confirm Password Tidak Sama'
                ]
            ],
        ])) {
            return redirect()->to('/siswa_sd/penggantian_password/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->sdModel->save([
            'id' => $id,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/siswa_sd/detail/' . $this->request->getVar('slug_nama_lengkap'));
    }

    public function delete($id)
    {
        $this->sdModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/siswa_sd');
    }

    public function beasiswa($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Beasiswa',
			'navbar' => 'siswa_sd',
            'unit' => 'sd',
            'sd' => $this->sdModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('beasiswa/sd', $data);
    }

    public function add_beasiswa($id)
    {
        if(!$this->validate([
            'uang_pangkal' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Pengurangan Uang Pangkal Harus Diisi.',
                    'numeric' => 'Masukan Angka Tanpa Tanda Titik.'
                ]
            ],
            'uang_sekolah' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Pengurangan Uang Sekolah Harus Diisi.',
                    'numeric' => 'Masukan Angka Tanpa Tanda Titik.'
                ]
            ],
        ])) {
            return redirect()->to('/siswa_sd/beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->sdBeasiswaModel->save([
            'sd_id' => $id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/siswa_sd/detail/' . $this->request->getVar('slug_nama_lengkap'));
    }
}