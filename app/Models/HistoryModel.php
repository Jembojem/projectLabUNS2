<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModel extends Model
{
    protected $table            = 'view_history';
    protected $allowedFields    = ['username, nama_lab, lab_slug, text_status, kode_transaksi, nama_file, sign'];
}
