<?php

namespace App\Models;

use CodeIgniter\Model;

class FasilitasModel extends Model
{
    protected $table            = 'fasilitas_lab';
    protected $allowedFields    = ['id', 'lab_slug', 'kode_fasilitas', 'nama_fasilitas', 'good', 'broken', 'file_image', 'created_at', 'updated_at'];
    protected $useTimestamps    = true;
}
