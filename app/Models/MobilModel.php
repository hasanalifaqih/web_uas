<?php

namespace App\Models;

use CodeIgniter\Model;

class MobilModel extends Model
{
    protected $table = 'mobil';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_mobil', 'merek', 'tahun', 'harga_sewa'];
    protected $useTimestamps = true;
}
