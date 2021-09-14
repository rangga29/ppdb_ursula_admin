<?php

namespace App\Controllers;

use App\Models\TbtkModel;
use App\Models\TbtkBeasiswaModel;
use App\Models\TbtkDapodikModel;
use App\Models\TbtkKeuanganModel;
use App\Models\TbtkPembayaranModel;
use App\Models\TbtkPernyataanModel;

class Siswa_tbtk extends BaseController
{
    protected $tbtkModel;
    protected $tbtkBeasiswaModel;
    protected $tbtkDapodikModel;
    protected $tbtkKeuanganModel;
    protected $tbtkPembayaranModel;
    protected $tbtkPernyataanModel;

    public function __construct()
    {
        $this->tbtkModel = new TbtkModel();
        $this->tbtkBeasiswaModel = new TbtkBeasiswaModel();
        $this->tbtkDapodikModel = new TbtkDapodikModel();
        $this->tbtkKeuanganModel = new TbtkKeuanganModel();
        $this->tbtkPembayaranModel = new TbtkPembayaranModel();
        $this->tbtkPernyataanModel = new TbtkPernyataanModel();
    }

	public function index()
	{
		$data = [
			'title' => 'Data Pendaftaran Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getSiswa()
		];
		return view('tbtk/data_pendaftaran', $data);
	}

    public function excel_data_pendaftaran($tab)
    {
        if($tab === '1') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik TB TK (Semua Data)',
                'navbar' => 'siswa_tbtk',
                'tbtk' => $this->tbtkModel->getSiswa()
            ];
            return view('tbtk/excel/excel_data_pendaftaran_tab1', $data);
        } else if($tab === '2') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik TB TK (Belum Verifikasi)',
                'navbar' => 'siswa_tbtk',
                'tbtk' => $this->tbtkModel->getSiswa()
            ];
            return view('tbtk/excel/excel_data_pendaftaran_tab2', $data);
        } else if($tab === '3') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik TB TK (Diterima)',
                'navbar' => 'siswa_tbtk',
                'tbtk' => $this->tbtkModel->getSiswa()
            ];
            return view('tbtk/excel/excel_data_pendaftaran_tab3', $data);
        } else if($tab === '4') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik TB TK (Tidak Diterima)',
                'navbar' => 'siswa_tbtk',
                'tbtk' => $this->tbtkModel->getSiswa()
            ];
            return view('tbtk/excel/excel_data_pendaftaran_tab4', $data);
        }
    }

    public function detail($slug_nama_lengkap)
    {
        $tbtk = $this->tbtkModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Data Calon Peserta Didik',
            'navbar' => 'siswa_tbtk',
            'tbtk' => $tbtk,
            'beasiswa' => $this->tbtkBeasiswaModel->getBeasiswa($tbtk->id),
        ];

        if(empty($data['tbtk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' Tidak Ditemukan');
        }

        return view('tbtk/detail_pendaftaran', $data);
    }

    public function status_penerimaan($id, $var)
    {
        $this->tbtkModel->save([
            'id' => $id,
            'status_penerimaan' => $var
        ]);
        return redirect()->to('/siswa_tbtk');
    }

    public function status_pendaftaran($id, $var)
    {
        $this->tbtkModel->save([
            'id' => $id,
            'status_pendaftaran' => $var
        ]);
        return redirect()->to('/siswa_tbtk');
    }

    public function penggantian_password($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Penggantian Password',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('tbtk/ganti_password', $data);
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
            return redirect()->to('/siswa_tbtk/penggantian_password/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->tbtkModel->save([
            'id' => $id,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/siswa_tbtk/detail/' . $this->request->getVar('slug_nama_lengkap'));
    }

    public function delete($id)
    {
        $this->tbtkModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/siswa_tbtk');
    }

    public function data_beasiswa()
    {
        $data = [
			'title' => 'Data Beasiswa Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getBeasiswa()->getResult()
		];
		return view('tbtk/data_beasiswa', $data);
    }

    public function excel_data_beasiswa()
    {
        $data = [
			'title' => 'Data Beasiswa Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getBeasiswa()->getResult()
		];
		return view('tbtk/excel/excel_data_beasiswa', $data);
    }

    public function tambah_data_beasiswa($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Tambah Data Beasiswa Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('tbtk/tambah_data_beasiswa', $data);
    }

    public function add_data_beasiswa($slug_nama_lengkap)
    {
        $tbtk = $this->tbtkModel->getSiswa($slug_nama_lengkap);
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
            return redirect()->to('/siswa_tbtk/tambah_data_beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->tbtkBeasiswaModel->save([
            'tbtk_id' => $tbtk->id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data Beasiswa Berhasil Ditambah.');
        return redirect()->to('/siswa_tbtk/data_beasiswa');
    }

    public function ubah_data_beasiswa($slug_nama_lengkap)
    {
        $tbtk = $this->tbtkModel->getSiswa($slug_nama_lengkap);
        $data = [
			'title' => 'Ubah Data Beasiswa Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $tbtk,
            'beasiswa' => $this->tbtkBeasiswaModel->getBeasiswa($tbtk->id),
            'validation' => \Config\Services::validation()
		];
		return view('tbtk/ubah_data_beasiswa', $data);
    }

    public function update_data_beasiswa($slug_nama_lengkap)
    {
        $tbtk = $this->tbtkModel->getSiswa($slug_nama_lengkap);
        $beasiswa = $this->tbtkBeasiswaModel->getBeasiswa($tbtk->id);
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
            return redirect()->to('/siswa_tbtk/ubah_data_beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->tbtkBeasiswaModel->save([
            'id' => $beasiswa->id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data Beasiswa Berhasil Diubah.');
        return redirect()->to('/siswa_tbtk/data_beasiswa');
    }

    public function data_dapodik()
    {
        $data = [
			'title' => 'Data Dapodik Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getSiswa(),
		];
		return view('tbtk/data_dapodik', $data);
    }

    public function status_dapodik($id, $var)
    {
        $this->tbtkModel->save([
            'id' => $id,
            'status_dapodik' => $var
        ]);
        return redirect()->to('/siswa_tbtk/data_dapodik');
    }

    public function detail_data_dapodik($slug_nama_lengkap)
    {
        $tbtk = $this->tbtkModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Detail Data Dapodik - '.$tbtk->nama_lengkap,
            'navbar' => 'siswa_tbtk',
            'tbtk' => $tbtk,
            'dapodik' => $this->tbtkDapodikModel->getDapodik($tbtk->id)
        ];

        if(empty($data['tbtk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' Tidak Ditemukan');
        }

        return view('tbtk/detail_data_dapodik', $data);
    }

    public function excel_data_dapodik()
    {
        $data = [
			'title' => 'Data Dapodik Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getDapodik()->getResult()
		];
		return view('tbtk/excel/excel_data_dapodik', $data);
    }

    public function data_pernyataan()
    {
        $data = [
			'title' => 'Data Pernyataan Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getSiswa(),
		];
		return view('tbtk/data_pernyataan', $data);
    }

    public function status_pernyataan($id, $var)
    {
        $this->tbtkModel->save([
            'id' => $id,
            'status_pernyataan' => $var
        ]);
        return redirect()->to('/siswa_tbtk/data_pernyataan');
    }

    public function data_keuangan()
    {
        $data = [
			'title' => 'Data Keuangan Calon Peserta Didik TB TK',
			'navbar' => 'siswa_tbtk',
            'tbtk' => $this->tbtkModel->getSiswa(),
		];
		return view('tbtk/data_keuangan', $data);
    }

    public function status_keuangan($id, $var)
    {
        $this->tbtkModel->save([
            'id' => $id,
            'status_keuangan' => $var
        ]);
        return redirect()->to('/siswa_tbtk/data_keuangan');
    }

    public function detail_data_keuangan($slug_nama_lengkap)
    {
        setlocale(LC_ALL, 'id-ID', 'id_ID');
        $tbtk = $this->tbtkModel->getSiswa($slug_nama_lengkap);
        $month = strtotime($tbtk->created_at);
        if(strftime("%m",$month) <= 8) {
            $bulan_tahap_1 = strftime("%B %Y",strtotime("+1 month", $month));
            $bulan_tahap_2 = strftime("%B %Y",strtotime("+2 month", $month));
            $bulan_tahap_3 = strftime("%B %Y",strtotime("+3 month", $month));
            $bulan_tahap_4 = strftime("%B %Y",strtotime("+4 month", $month));
        } else {
            $bulan_tahap_1 = strftime("%B %Y",$month);
            $bulan_tahap_2 = strftime("%B %Y",strtotime("+1 month", $month));
            $bulan_tahap_3 = strftime("%B %Y",strtotime("+2 month", $month));
            $bulan_tahap_4 = strftime("%B %Y",strtotime("+3 month", $month));
        }
        $data = [
            'title' => 'Detail Data Keuangan - '.$tbtk->nama_lengkap,
            'navbar' => 'siswa_tbtk',
            'tbtk' => $tbtk,
            'bulan_tahap_1' => $bulan_tahap_1,
            'bulan_tahap_2' => $bulan_tahap_2,
            'bulan_tahap_3' => $bulan_tahap_3,
            'bulan_tahap_4' => $bulan_tahap_4,
            'beasiswa' => $this->tbtkBeasiswaModel->getBeasiswa($tbtk->id),
            'keuangan' => $this->tbtkKeuanganModel->getKeuangan($tbtk->id),
            'pembayaran' => $this->tbtkPembayaranModel->getPembayaran($tbtk->id),
            'pembayaran_tahap_1' => $this->tbtkPembayaranModel->getPembayaranTahap1($tbtk->id),
            'pembayaran_tahap_2' => $this->tbtkPembayaranModel->getPembayaranTahap2($tbtk->id),
            'pembayaran_tahap_3' => $this->tbtkPembayaranModel->getPembayaranTahap3($tbtk->id),
            'pembayaran_tahap_4' => $this->tbtkPembayaranModel->getPembayaranTahap4($tbtk->id),
        ];

        if(empty($data['tbtk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' Tidak Ditemukan');
        }

        return view('tbtk/detail_data_keuangan', $data);
    }
}