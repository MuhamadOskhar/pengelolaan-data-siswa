<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model
{
    // ...
    protected $table = 'siswa';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getData()
    {
        $result = $this->orderBy('nis')
            ->findAll();
        return $result;
    }
    public function doSoftDelete($nis) {
        // Menghapus lembut pengguna dengan mengatur deleted_at menjadi waktu saat ini
        $this->set('deleted_at', date('Y-m-d H:i:s'));
        $this->where('id', $nis);
        $this->update('users');
    }

}