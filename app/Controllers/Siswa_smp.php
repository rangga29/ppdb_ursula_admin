<?php

namespace App\Controllers;

use App\Models\SmpModel;
use App\Models\SmpBeasiswaModel;

class Siswa_smp extends BaseController
{
    protected $smpModel;
    protected $smpBeasiswaModel;

    public function __construct()
    {
        $this->smpModel = new SmpModel();
        $this->smpBeasiswaModel = new SmpBeasiswaModel();
    }

	public function index()
	{
		return redirect()->to('/home');
	}

	public function internal()
	{
        $asalSekolah = 'SD Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SMP Internal',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswaInternal($asalSekolah)->getResult()
		];
		return view('siswa/smp_internal', $data);
	}

    public function external()
	{
        $asalSekolah = 'SD Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SMP External',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswaExternal($asalSekolah)->getResult()
		];
		return view('siswa/smp_external', $data);
	}

    public function detail($slug_nama_lengkap)
    {
        $smp = $this->smpModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Data Calon Peserta Didik',
            'navbar' => 'siswa_smp',
            'smp' => $smp,
            'beasiswa' => $this->smpBeasiswaModel->getBeasiswa($smp['id']),
        ];

        if(empty($data['smp'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' tidak ditemukan');
        }

        return view('detail/smp', $data);
    }

    public function status_penerimaan($id, $var)
    {
        $this->smpModel->save([
            'id' => $id,
            'status_penerimaan' => $var
        ]);
        return redirect()->to('/siswa_smp');
    }

    public function status_pendaftaran($id, $var)
    {
        $this->smpModel->save([
            'id' => $id,
            'status_pendaftaran' => $var
        ]);
        return redirect()->to('/siswa_smp');
    }

    public function penggantian_password($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Penggantian Password',
			'navbar' => 'siswa_smp',
            'unit' => 'smp',
            'smp' => $this->smpModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('ganti_password/smp', $data);
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
            return redirect()->to('/siswa_smp/penggantian_password/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->smpModel->save([
            'id' => $id,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/siswa_smp/detail/' . $this->request->getVar('slug_nama_lengkap'));
    }

    public function delete($id)
    {
        $this->smpModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/siswa_smp');
    }

    public function beasiswa($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Beasiswa',
			'navbar' => 'siswa_smp',
            'unit' => 'smp',
            'smp' => $this->smpModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('beasiswa/smp', $data);
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
            return redirect()->to('/siswa_smp/beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->smpBeasiswaModel->save([
            'smp_id' => $id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/siswa_smp/detail/' . $this->request->getVar('slug_nama_lengkap'));
    }
}