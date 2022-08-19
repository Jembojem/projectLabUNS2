<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use \Hermawan\DataTables\DataTable;
use App\Models\HistoryModel;

class History extends BaseController
{
    protected $db;
    protected $history;
    public function __construct()
    {
        $this->db = db_connect();
        $this->history = new HistoryModel();
    }

    public function index()
    {
        $data =
            [
                "title" => "Riwayat Transaksi",
                "page" => "riwayat",
            ];

        return view("/panel/riwayat", $data);
    }


    public function getData()
    {
        if ($this->request->isAjax()) {
            $getVar = $this->request->getVar();
            $table = $getVar['table'];
            if ($getVar['ids'] && !in_groups('admin')) {
                $data['riwayat'] = $this->db->table('view_history')->where('username', $getVar['ids'])->get()->getResultArray();
            } else {
                $data['riwayat'] = $this->history->findAll();
            }
            $res = ['data' => $data];
            if ($table) {
                $res['table'] = view('panel/reservation-table', $data);
            }
            echo json_encode($res);
        } else {
            exit("<h1>Data Tidak Bisa Diload</h1>");
        }
    }
}
