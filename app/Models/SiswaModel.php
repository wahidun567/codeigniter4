<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    // protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jenis_kelamin', 'foto', 'foto_ijazah'];
    
    public function getpages($id = false)
    {
        if ($id == false){
            return $this->findAll();
        }return $this->where (['id'=> $id])->first();
    }
}
