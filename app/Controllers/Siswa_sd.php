<?php

namespace App\Controllers;

use App\Models\SdModel;
use App\Models\SdBeasiswaModel;
use App\Models\SdDapodikModel;
use App\Models\SdKeuanganModel;
use App\Models\SdPembayaranModel;
use App\Models\SdPernyataanModel;

class Siswa_sd extends BaseController
{
    protected $sdModel;
    protected $sdBeasiswaModel;
    protected $sdDapodikModel;
    protected $sdKeuanganModel;
    protected $sdPembayaranModel;
    protected $sdPernyataanModel;

    public function __construct()
    {
        $this->sdModel = new SdModel();
        $this->sdBeasiswaModel = new SdBeasiswaModel();
        $this->sdDapodikModel = new SdDapodikModel();
        $this->sdKeuanganModel = new SdKeuanganModel();
        $this->sdPembayaranModel = new SdPembayaranModel();
        $this->sdPernyataanModel = new SdPernyataanModel();
    }

	public function index()
	{
		return redirect()->to('/home');
	}

    public function data_pendaftaran()
    {
        $data = [
			'title' => 'Data Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswa()
		];
		return view('sd/data_pendaftaran', $data);
    }

    public function excel_data_pendaftaran($tab)
    {
        if($tab === '1') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD (Semua Data)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswa()
            ];
            return view('sd/excel/excel_data_pendaftaran_tab1', $data);
        } else if($tab === '2') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD (Belum Verifikasi)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswa()
            ];
            return view('sd/excel/excel_data_pendaftaran_tab2', $data);
        } else if($tab === '3') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD (Diterima)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswa()
            ];
            return view('sd/excel/excel_data_pendaftaran_tab3', $data);
        } else if($tab === '4') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD (Tidak Diterima)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswa()
            ];
            return view('sd/excel/excel_data_pendaftaran_tab4', $data);
        }
    }

	public function internal()
	{
        $asalSekolah = 'TK Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SD Internal',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswaInternal($asalSekolah)->getResult()
		];
		return view('sd/data_pendaftaran_internal', $data);
	}

    public function excel_data_internal($tab)
    {
        $asalSekolah = 'TK Santa Ursula Bandung';
        if($tab === '1') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD Internal (Semua Data)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_internal_tab1', $data);
        } else if($tab === '2') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD Internal (Belum Verifikasi)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_internal_tab2', $data);
        } else if($tab === '3') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD Internal (Diterima)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_internal_tab3', $data);
        } else if($tab === '4') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD Internal (Tidak Diterima)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaInternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_internal_tab4', $data);
        }
    }

    public function external()
	{
        $asalSekolah = 'TK Santa Ursula Bandung';
		$data = [
			'title' => 'Data Calon Peserta Didik SD External',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswaExternal($asalSekolah)->getResult()
		];
		return view('sd/data_pendaftaran_external', $data);
	}

    public function excel_data_external($tab)
    {
        $asalSekolah = 'TK Santa Ursula Bandung';
        if($tab === '1') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD External (Semua Data)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_external_tab1', $data);
        } else if($tab === '2') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD External (Belum Verifikasi)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_external_tab2', $data);
        } else if($tab === '3') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD External (Diterima)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_external_tab3', $data);
        } else if($tab === '4') {
            $data = [
                'title' => 'Data Pendaftaran Calon Peserta Didik SD External (Tidak Diterima)',
                'navbar' => 'siswa_sd',
                'sd' => $this->sdModel->getSiswaExternal($asalSekolah)->getResult()
            ];
            return view('sd/excel/excel_data_external_tab4', $data);
        }
    }

    public function detail($slug_nama_lengkap)
    {
        $sd = $this->sdModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Data Calon Peserta Didik',
            'navbar' => 'siswa_sd',
            'sd' => $sd,
            'beasiswa' => $this->sdBeasiswaModel->getBeasiswa($sd->id),
        ];

        if(empty($data['sd'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' tidak ditemukan');
        }

        return view('sd/detail_pendaftaran', $data);
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
            'sd' => $this->sdModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('sd/ganti_password', $data);
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

    public function data_beasiswa()
    {
        $data = [
			'title' => 'Data Beasiswa Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getBeasiswa()->getResult()
		];
		return view('sd/data_beasiswa', $data);
    }

    public function excel_data_beasiswa()
    {
        $data = [
			'title' => 'Data Beasiswa Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getBeasiswa()->getResult()
		];
		return view('sd/excel/excel_data_beasiswa', $data);
    }

    public function tambah_data_beasiswa($slug_nama_lengkap)
    {
        $data = [
			'title' => 'Tambah Data Beasiswa Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswa($slug_nama_lengkap),
            'validation' => \Config\Services::validation()
		];
		return view('sd/tambah_data_beasiswa', $data);
    }

    public function add_data_beasiswa($slug_nama_lengkap)
    {
        $sd = $this->sdModel->getSiswa($slug_nama_lengkap);
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
            return redirect()->to('/siswa_sd/tambah_data_beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->sdBeasiswaModel->save([
            'sd_id' => $sd->id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data Beasiswa Berhasil Ditambah.');
        return redirect()->to('/siswa_sd/data_beasiswa');
    }

    public function ubah_data_beasiswa($slug_nama_lengkap)
    {
        $sd = $this->sdModel->getSiswa($slug_nama_lengkap);
        $data = [
			'title' => 'Ubah Data Beasiswa Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $sd,
            'beasiswa' => $this->sdBeasiswaModel->getBeasiswa($sd->id),
            'validation' => \Config\Services::validation()
		];
		return view('sd/ubah_data_beasiswa', $data);
    }

    public function update_data_beasiswa($slug_nama_lengkap)
    {
        $sd = $this->sdModel->getSiswa($slug_nama_lengkap);
        $beasiswa = $this->sdBeasiswaModel->getBeasiswa($sd->id);
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
            return redirect()->to('/siswa_sd/ubah_data_beasiswa/' . $this->request->getVar('slug_nama_lengkap'))->withInput();
        };

        $this->sdBeasiswaModel->save([
            'id' => $beasiswa->id,
            'uang_pangkal' => $this->request->getVar('uang_pangkal'),
            'uang_sekolah' => $this->request->getVar('uang_sekolah'),
        ]);

        session()->setFlashdata('pesan', 'Data Beasiswa Berhasil Diubah.');
        return redirect()->to('/siswa_sd/data_beasiswa');
    }

    public function data_dapodik()
    {
        $data = [
			'title' => 'Data Dapodik Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswa(),
		];
		return view('sd/data_dapodik', $data);
    }

    public function status_dapodik($id, $var)
    {
        $this->sdModel->save([
            'id' => $id,
            'status_dapodik' => $var
        ]);
        return redirect()->to('/siswa_sd/data_dapodik');
    }

    public function detail_data_dapodik($slug_nama_lengkap)
    {
        $sd = $this->sdModel->getSiswa($slug_nama_lengkap);
        $data = [
            'title' => 'Detail Data Dapodik - '.$sd->nama_lengkap,
            'navbar' => 'siswa_sd',
            'sd' => $sd,
            'dapodik' => $this->sdDapodikModel->getDapodik($sd->id)
        ];

        if(empty($data['sd'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' Tidak Ditemukan');
        }

        return view('sd/detail_data_dapodik', $data);
    }

    public function data_pernyataan()
    {
        $data = [
			'title' => 'Data Pernyataan Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswa(),
		];
		return view('sd/data_pernyataan', $data);
    }

    public function status_pernyataan($id, $var)
    {
        $this->sdModel->save([
            'id' => $id,
            'status_pernyataan' => $var
        ]);
        return redirect()->to('/siswa_sd/data_pernyataan');
    }

    public function data_keuangan()
    {
        $data = [
			'title' => 'Data Keuangan Calon Peserta Didik SD',
			'navbar' => 'siswa_sd',
            'sd' => $this->sdModel->getSiswa(),
		];
		return view('sd/data_keuangan', $data);
    }

    public function status_keuangan($id, $var)
    {
        $this->sdModel->save([
            'id' => $id,
            'status_keuangan' => $var
        ]);
        return redirect()->to('/siswa_sd/data_keuangan');
    }

    public function detail_data_keuangan($slug_nama_lengkap)
    {
        setlocale(LC_ALL, 'id-ID', 'id_ID');
        $sd = $this->sdModel->getSiswa($slug_nama_lengkap);
        $month = strtotime($sd->created_at);
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
            'title' => 'Detail Data Keuangan - '.$sd->nama_lengkap,
            'navbar' => 'siswa_sd',
            'sd' => $sd,
            'bulan_tahap_1' => $bulan_tahap_1,
            'bulan_tahap_2' => $bulan_tahap_2,
            'bulan_tahap_3' => $bulan_tahap_3,
            'bulan_tahap_4' => $bulan_tahap_4,
            'beasiswa' => $this->sdBeasiswaModel->getBeasiswa($sd->id),
            'keuangan' => $this->sdKeuanganModel->getKeuangan($sd->id),
            'pembayaran' => $this->sdPembayaranModel->getPembayaran($sd->id),
            'pembayaran_tahap_1' => $this->sdPembayaranModel->getPembayaranTahap1($sd->id),
            'pembayaran_tahap_2' => $this->sdPembayaranModel->getPembayaranTahap2($sd->id),
            'pembayaran_tahap_3' => $this->sdPembayaranModel->getPembayaranTahap3($sd->id),
            'pembayaran_tahap_4' => $this->sdPembayaranModel->getPembayaranTahap4($sd->id),
        ];

        if(empty($data['sd'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama ' . $slug_nama_lengkap . ' Tidak Ditemukan');
        }

        return view('sd/detail_data_keuangan', $data);
    }
}