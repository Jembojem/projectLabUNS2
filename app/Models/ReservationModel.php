<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table            = 'reservasi';
    protected $allowedFields    = ['id', 'username', 'kode_transaksi', 'lab_slug', 'tanggal', 'time_id', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;


    public function getReservasi()
    {
         return $this->db->table('reservasi')
         ->join('jam_reservasi', 'jam_reservasi.id=reservasi.time_id')
         ->get()->getResultArray();  
    }
}
