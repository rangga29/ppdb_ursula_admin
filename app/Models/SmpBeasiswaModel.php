<?php

namespace App\Models;

use CodeIgniter\Model;

class SmpBeasiswaModel extends Model
{
    protected $table            = 'smp_beasiswa';
    protected $returnType       = "object";
    protected $allowedFields    = [
        'smp_id',
        'uang_pangkal',
        'uang_sekolah'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getBeasiswa($smp_id = false)
    {
        if($smp_id == false) {
            return $this->where([
                'deleted_at' => null
            ])->findAll();
        }
        return $this->where([
            'smp_id' => $smp_id,
            'deleted_at' => null,
        ])->first();
    }
}