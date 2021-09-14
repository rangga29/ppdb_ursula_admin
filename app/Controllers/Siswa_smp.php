<?php

namespace App\Controllers;

use App\Models\SmpModel;
use App\Models\SmpBeasiswaModel;
use App\Models\SmpDapodikModel;
use App\Models\SmpKeuanganModel;
use App\Models\SmpPembayaranModel;
use App\Models\SmpPernyataanModel;


class Siswa_smp extends BaseController
{
    protected $smpModel;
    protected $smpBeasiswaModel;
    protected $smpDapodikModel;
    protected $smpKeuanganModel;
    protected $smpPembayaranModel;
    protected $smpPernyataanModel;

    public function __construct()
    {
        $this->smpModel = new SmpModel();
        $this->smpBeasiswaModel = new SmpBeasiswaModel();
        $this->smpDapodikModel = new SmpDapodikModel();
        $this->smpKeuanganModel = new SmpKeuanganModel();
        $this->smpPembayaranModel = new SmpPembayaranModel();
        $this->smpPernyataanModel = new SmpPernyataanModel();
    }

	public function index()
	{
		return redirect()->to('/home');
	}

    public function data_pendaftaran()
    {
        $data = [
			'title' => 'Data Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswa()
		];
		return view('smp/data_pendaftaran', $data);
    }

    public function excel_data_pendaftaran($tab)
    {
        if($tab === '1') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP (Semua Data)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswa()
            ];
            return view('smp/excel/excel_data_pendaftaran_tab1', $data);
        } else if($tab === '2') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP (Belum Verifikasi)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswa()
            ];
            return view('smp/excel/excel_data_pendaftaran_tab2', $data);
        } else if($tab === '3') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP (Diterima)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswa()
            ];
            return view('smp/excel/excel_data_pendaftaran_tab3', $data);
        } else if($tab === '4') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP (Tidak Diterima)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswa()
            ];
            return view('smp/excel/excel_data_pendaftaran_tab4', $data);
        }
    }

	public function internal()
	{
        $asalSekolah = 'SD Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SMP Internal',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswaInternal($asalSekolah)->getResult()
		];
		return view('smp/data_pendaftaran_internal', $data);
	}

    public function excel_data_internal($tab)
    {
        $asalSekolah = 'SD Santa Ursula Bandung';
        if($tab === '1') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP Internal (Semua Data)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_internal_tab1', $data);
        } else if($tab === '2') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP Internal (Belum Verifikasi)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_internal_tab2', $data);
        } else if($tab === '3') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP Internal (Diterima)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_internal_tab3', $data);
        } else if($tab === '4') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP Internal (Tidak Diterima)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_internal_tab4', $data);
        }
    }

    public function external()
	{
        $asalSekolah = 'SD Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SMP External',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswaExternal($asalSekolah)->getResult()
		];
		return view('smp/data_pendaftaran_external', $data);
	}

    public function excel_data_external($tab)
    {
        $asalSekolah = 'SD Santa Ursula Bandung';
        if($tab === '1') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP External (Semua Data)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_external_tab1', $data);
        } else if($tab === '2') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP External (Belum Verifikasi)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_external_tab2', $data);
        } else if($tab === '3') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP External (Diterima)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_external_tab3', $data);
        } else if($tab === '4') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SMP External (Tidak Diterima)',
                'navbar' => 'siswa_smp',
                'smp' => $this->smpModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('smp/excel/excel_data_external_tab4', $data);
        }
    }

    public function detail($slug_nama_lengkap)
    {
        $smp = $this->smpModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Data Calon Peserta Didik',
            'navbar' => 'siswa_smp',
            'smp' => $smp,
            'beasiswa' => $this->smpBeasiswaModel->getBeasiswa($smp->id),
        ];

        if(empty($data['smp'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' tidak ditemukan');
        }

        return view('smp/detail_pendaftaran', $data);
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
            'smp' => $this->smpModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('smp/ganti_password', $data);
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

    public function data_beasiswa()
    {
        $data = [
			'title' => 'Data Beasiswa Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getBeasiswa()->getResult()
		];
		return view('smp/data_beasiswa', $data);
    }

    public function excel_data_beasiswa()
    {
        $data = [
			'title' => 'Data Beasiswa Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getBeasiswa()->getResult()
		];
		return view('smp/excel/excel_data_beasiswa', $data);
    }

    public function tambah_data_beasiswa($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Tambah Data Beasiswa Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('smp/tambah_data_beasiswa', $data);
    }

    public function add_data_beasiswa($slug_nama_lengkap)
    {
        $smp = $this->smpModel->getSiswa($slug_nama_lengkap);
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
            return redirect()->to('/siswa_smp/tambah_data_beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->smpBeasiswaModel->save([
            'smp_id' => $smp->id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data Beasiswa Berhasil Ditambah.');
        return redirect()->to('/siswa_smp/data_beasiswa');
    }

    public function ubah_data_beasiswa($slug_nama_lengkap)
    {
        $smp = $this->smpModel->getSiswa($slug_nama_lengkap);
        $data = [
			'title' => 'Ubah Data Beasiswa Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $smp,
            'beasiswa' => $this->smpBeasiswaModel->getBeasiswa($smp->id),
            'validation' => \Config\Services::validation()
		];
		return view('smp/ubah_data_beasiswa', $data);
    }

    public function update_data_beasiswa($slug_nama_lengkap)
    {
        $smp = $this->smpModel->getSiswa($slug_nama_lengkap);
        $beasiswa = $this->smpBeasiswaModel->getBeasiswa($smp->id);
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
            return redirect()->to('/siswa_smp/ubah_data_beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->smpBeasiswaModel->save([
            'id' => $beasiswa->id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data Beasiswa Berhasil Diubah.');
        return redirect()->to('/siswa_smp/data_beasiswa');
    }

    public function data_dapodik()
    {
        $data = [
			'title' => 'Data Dapodik Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswa(),
		];
		return view('smp/data_dapodik', $data);
    }

    public function status_dapodik($id, $var)
    {
        $this->smpModel->save([
            'id' => $id,
            'status_dapodik' => $var
        ]);
        return redirect()->to('/siswa_smp/data_dapodik');
    }

    public function detail_data_dapodik($slug_nama_lengkap)
    {
        $smp = $this->smpModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Detail Data Dapodik - '.$smp->nama_lengkap,
            'navbar' => 'siswa_smp',
            'smp' => $smp,
            'dapodik' => $this->smpDapodikModel->getDapodik($smp->id)
        ];

        if(empty($data['smp'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' Tidak Ditemukan');
        }

        return view('smp/detail_data_dapodik', $data);
    }

    public function excel_data_dapodik()
    {
        $data = [
			'title' => 'Data Dapodik Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getDapodik()->getResult()
		];
		return view('smp/excel/excel_data_dapodik', $data);
    }

    public function data_pernyataan()
    {
        $data = [
			'title' => 'Data Pernyataan Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswa(),
		];
		return view('smp/data_pernyataan', $data);
    }

    public function status_pernyataan($id, $var)
    {
        $this->smpModel->save([
            'id' => $id,
            'status_pernyataan' => $var
        ]);
        return redirect()->to('/siswa_smp/data_pernyataan');
    }

    public function data_keuangan()
    {
        $data = [
			'title' => 'Data Keuangan Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getSiswa(),
		];
		return view('smp/data_keuangan', $data);
    }

    public function status_keuangan($id, $var)
    {
        $this->smpModel->save([
            'id' => $id,
            'status_keuangan' => $var
        ]);
        return redirect()->to('/siswa_smp/data_keuangan');
    }

    public function detail_data_keuangan($slug_nama_lengkap)
    {
        setlocale(LC_ALL, 'id-ID', 'id_ID');
        $smp = $this->smpModel->getSiswa($slug_nama_lengkap);
        $month = strtotime($smp->created_at);
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
            'title' => 'Detail Data Keuangan - '.$smp->nama_lengkap,
            'navbar' => 'siswa_smp',
            'smp' => $smp,
            'bulan_tahap_1' => $bulan_tahap_1,
            'bulan_tahap_2' => $bulan_tahap_2,
            'bulan_tahap_3' => $bulan_tahap_3,
            'bulan_tahap_4' => $bulan_tahap_4,
            'beasiswa' => $this->smpBeasiswaModel->getBeasiswa($smp->id),
            'keuangan' => $this->smpKeuanganModel->getKeuangan($smp->id),
            'pembayaran' => $this->smpPembayaranModel->getPembayaran($smp->id),
            'pembayaran_tahap_1' => $this->smpPembayaranModel->getPembayaranTahap1($smp->id),
            'pembayaran_tahap_2' => $this->smpPembayaranModel->getPembayaranTahap2($smp->id),
            'pembayaran_tahap_3' => $this->smpPembayaranModel->getPembayaranTahap3($smp->id),
            'pembayaran_tahap_4' => $this->smpPembayaranModel->getPembayaranTahap4($smp->id),
        ];

        if(empty($data['smp'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' Tidak Ditemukan');
        }

        return view('smp/detail_data_keuangan', $data);
    }

    public function excel_data_keuangan()
    {
        $data = [
			'title' => 'Data Keuangan Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getKeuangan()->getResult()
		];
		return view('smp/excel/excel_data_keuangan', $data);
    }
    
    public function excel_data_pembayaran()
    {
        $data = [
			'title' => 'Data Pembayaran Calon Peserta Didik SMP',
			'navbar' => 'siswa_smp',
            'smp' => $this->smpModel->getPembayaran()->getResult()
		];
		return view('smp/excel/excel_data_pembayaran', $data);
    }
}