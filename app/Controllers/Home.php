<?php

namespace App\Controllers;

use App\Models\TbtkModel;
use App\Models\TbtkBeasiswaModel;
use App\Models\TbtkDapodikModel;
use App\Models\TbtkKeuanganModel;
use App\Models\TbtkPembayaranModel;
use App\Models\TbtkPernyataanModel;
use App\Models\SdModel;
use App\Models\SdBeasiswaModel;
use App\Models\SdDapodikModel;
use App\Models\SdKeuanganModel;
use App\Models\SdPembayaranModel;
use App\Models\SdPernyataanModel;
use App\Models\SmpModel;
use App\Models\SmpBeasiswaModel;
use App\Models\SmpDapodikModel;
use App\Models\SmpKeuanganModel;
use App\Models\SmpPembayaranModel;
use App\Models\SmpPernyataanModel;

class Home extends BaseController
{
	protected $tbtkModel;
	protected $sdModel;
	protected $smpModel;

    public function __construct()
    {
        $this->tbtkModel = new TbtkModel();
        $this->sdModel = new SdModel();
        $this->smpModel = new SmpModel();
    }

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'navbar' => 'dashboard',
			'tbtk_pendaftaran' => $this->tbtkModel->getSiswa(),
			'tbtk_diterima' => $this->tbtkModel->countDiterima(),
			'tbtk_tidak_diterima' => $this->tbtkModel->countTidakDiterima(),
			'tbtk_dapodik' => $this->tbtkModel->countDapodik()->getResult(),
			'tbtk_pernyataan' => $this->tbtkModel->countPernyataan()->getResult(),
			'tbtk_keuangan' => $this->tbtkModel->countKeuangan()->getResult(),
			'sd_pendaftaran' => $this->sdModel->getSiswa(),
			'sd_diterima' => $this->sdModel->countDiterima(),
			'sd_tidak_diterima' => $this->sdModel->countTidakDiterima(),
			'sd_dapodik' => $this->sdModel->countDapodik()->getResult(),
			'sd_pernyataan' => $this->sdModel->countPernyataan()->getResult(),
			'sd_keuangan' => $this->sdModel->countKeuangan()->getResult(),
			'smp_pendaftaran' => $this->smpModel->getSiswa(),
			'smp_diterima' => $this->smpModel->countDiterima(),
			'smp_tidak_diterima' => $this->smpModel->countTidakDiterima(),
			'smp_dapodik' => $this->smpModel->countDapodik()->getResult(),
			'smp_pernyataan' => $this->smpModel->countPernyataan()->getResult(),
			'smp_keuangan' => $this->smpModel->countKeuangan()->getResult(),
		];
		return view('home/index', $data);
	}
}