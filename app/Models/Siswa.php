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
    protected $allowedFields = ['nama', 'nis', 'nisn', 'agama', 'no_telp', 'gender', 'status_anak', 'status_data', 'nama_ayah', 'nama_ibu'];

    public function getData()
    {
        $result = $this->orderBy('nis')
            ->findAll();
        return $result;
    }
    public function getSpecificData($target)
    {
        $result = $this->where('nis', $target)
            ->first();
        return $result;
    }
    public function doSoftDelete($nis) {
        // Menghapus lembut pengguna dengan mengatur deleted_at menjadi waktu saat ini
        $this->set('deleted_at', date('Y-m-d H:i:s'));
        $this->where('id', $nis);
        $this->update('users');
    }
    public function insertDataPost($data) {
        // Insert data siswa
        $data_siswa = [
            'nama' => $data['nama'],
            'nis' => $data['nis'],
            'nisn' => $data['nisn'],
            'agama' => $data['agama'],
            'no_telp' => $data['no_telp'],
            'gender' => $data['gender'],
            'status_anak' => $data['status_anak'],
            'status_data' => $data['status_data'],
            'nama_ayah' => $data['nama_ayah'],
            'nama_ibu' => $data['nama_ibu'],
        ];
        $this->insert($data_siswa);
    }

}