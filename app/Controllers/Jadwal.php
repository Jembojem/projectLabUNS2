<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservationModel;

class Jadwal extends BaseController
{
    public function index() {


        $db      = \Config\Database::connect();
        // $builder = $db->table('reservasi');
        // $query = $builder->select('*')
        //             ->join('jam_reservasi', 'reservasi.time_id = jam_reservasi.id')
        //             ->limit(9)
        //             ->get();
        // $data = $query->getResult();

        $builder = $db->table("reservasi");
        $builder->select('*');
        // ->join('jam_reservasi', 'reservasi.time_id = jam_reservasi.id', 'righ');
        $builder->join('jam_reservasi', 'jam_reservasi.id = reservasi.time_id', 'right outer');
        $data = $builder->get()->getResult(); 
       foreach ($data as $key => $value) {
          $data['data'][$key]['title'] = $value->lab_slug;
          $data['data'][$key]['start'] = $value->tanggal.'T'.$value->start;
          $data['data'][$key]['end'] = $value->tanggal.'T'.$value->end;
          if ($value->lab_slug =='laboratorium-komputer'){
            $data['data'][$key]['color'] = 'purple';
          }
          else if ($value->lab_slug =='laboratorium-robotika'){
            $data['data'][$key]['color'] = 'red';
          }
          else if ($value->lab_slug =='laboratorium-multimedia'){
            $data['data'][$key]['color'] = 'green';
          }
          else {
            $data['data'][$key]['color'] = 'blue';
          }
          $data['data'][$key]['waktu'] = $value->text;
          $data['data'][$key]['hari'] = $value->tanggal;
        } 

      return view('jadwal' ,$data);
    }


}
