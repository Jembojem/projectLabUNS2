<?php

namespace App\Models;

use CodeIgniter\Model;

class ViewFasilitasModel extends Model
{
    protected $table            = 'view_fasilitas';
    protected $allowedFields    = ['id', 'lab_slug', 'nama_lab', 'kode_fasilitas', 'nama_fasilitas', 'good', 'broken', 'file_image', 'created_at', 'updated_at'];
    // Dates
    protected $useTimestamps = true;
}
