<?php

namespace App\Models;

use CodeIgniter\Model;

class Alamat extends Model
{
    // ...
    protected $table = 'alamat';
    protected $dateFormat = 'datetime';
    protected $allowedFields = ['jalan', 'kecamatan', 'kelurahan', 'kota', 'provinsi', 'nis_siswa'];

    public function getData()
    {
        $result = $this->orderBy('nis')
            ->findAll();
        return $result;
    }
    public function getSpecificData($target)
    {
        $result = $this->where('nis_siswa', $target)
            ->first();
        return $result;
    }
    public function insertDataPost($data) {
        // Insert data alamat
        $data_alamat = [
            'id' => 0,
            'jalan' => $data['jalan'],
            'kecamatan' => $data['kecamatan'],
            'kelurahan' => $data['kelurahan'],
            'kota' => $data['kota'],
            'provinsi' => $data['provinsi'],
            'nis_siswa' => $data['nis'],
        ];
        $this->insert($data_alamat);
    }

}