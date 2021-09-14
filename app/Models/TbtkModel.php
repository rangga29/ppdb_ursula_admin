<?php

namespace App\Models;

use CodeIgniter\Model;

class TbtkModel extends Model
{
    protected $table            = 'tbtk';
    protected $returnType       = "object";
    protected $allowedFields    = [
        'nama_lengkap',
        'slug_nama_lengkap', 
        'kota_lahir', 
        'tanggal_lahir',
        'asal_sekolah', 
        'pilihan_tingkat', 
        'nama_orangtua',
        'email',
        'no_whatsapp',
        'bukti_pembayaran',
        'no_registrasi',
        'no_virtual',
        'password',
        'status_pendaftaran',
        'status_penerimaan',
        'status_dapodik',
        'status_pernyataan',
        'status_keuangan',
        'status_seragam',
        'status_buku'
    ];
    protected $useTimestamps    = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getSiswa($slug_nama_lengkap = false)
    {
        if($slug_nama_lengkap == false) {
            return $this->where([
                'deleted_at' => null
            ])->findAll();
        }
        return $this->where([
            'slug_nama_lengkap' => $slug_nama_lengkap,
            'deleted_at' => null
        ])->first();
    }

    public function countDiterima()
    {
        return $this->where([
            'status_penerimaan' => '2',
            'deleted_at' => null
        ])->findAll();
    }

    public function countTidakDiterima()
    {
        return $this->where([
            'status_penerimaan' => '1',
            'deleted_at' => null
        ])->findAll();
    }

    public function countDapodik()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbtk');
        $builder->groupStart()
    	            ->where('deleted_at', null)
	                ->groupStart()
		                ->where('status_dapodik', 2)
		                ->orGroupStart()
                            ->where('status_dapodik', 3)
		                ->groupEnd()
	                ->groupEnd()
                ->groupEnd();
        return $builder->get();
    }

    public function countPernyataan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbtk');
        $builder->groupStart()
    	            ->where('deleted_at', null)
	                ->groupStart()
		                ->where('status_pernyataan', 2)
		                ->orGroupStart()
                            ->where('status_pernyataan', 3)
		                ->groupEnd()
	                ->groupEnd()
                ->groupEnd();
        return $builder->get();
    }

    public function countKeuangan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbtk');
        $builder->groupStart()
    	            ->where('deleted_at', null)
	                ->groupStart()
		                ->where('status_keuangan', 2)
		                ->orGroupStart()
                            ->where('status_keuangan', 3)
		                ->groupEnd()
	                ->groupEnd()
                ->groupEnd();
        return $builder->get();
    }

    public function getBeasiswa()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbtk');
        $builder->select('*');
        $builder->join('tbtk_beasiswa', 'tbtk_beasiswa.tbtk_id = tbtk.id', 'left outer');
        return $builder->get();
    }

    public function getDapodik()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbtk');
        $builder->select('*');
        $builder->join('tbtk_dapodik', 'tbtk_dapodik.tbtk_id = tbtk.id', 'left outer');
        return $builder->get();
    }

    public function getKeuangan()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbtk');
        $builder->select('*');
        $builder->join('tbtk_keuangan', 'tbtk_keuangan.tbtk_id = tbtk.id', 'left outer');
        return $builder->get();
    }

    public function getPembayaran()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbtk');
        $builder->select('*');
        $builder->join('tbtk_pembayaran', 'tbtk_pembayaran.tbtk_id = tbtk.id', 'left outer');
        return $builder->get();
    }
}