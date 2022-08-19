<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\ReservationModel;
use App\Models\TransaksiModel;

class Reservation extends BaseController
{
    protected $Reservasi;
    protected $Transaksi;
    protected $db;

    public function __construct()
    {
        $this->Reservasi = new ReservationModel();
        $this->Transaksi = new TransaksiModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data =
            [
                "title" => "Resesrvasi",
                "page" => "Reservasi",
                "list_jam" => $this->db->table('jam_reservasi')->get()->getResult(),
                "order_counter" => $this->db->table('transaksi')->where('username', user()->username)->countAllResults(),
                "list_lab" => $this->db->table('daftar_lab')->get()->getResult()
            ];
        return view('panel/reservation.php', $data);
    }

    public function getBookList()
    {
        if ($this->request->isAJAX()) {
            echo json_encode(["list_jam" => $this->db->table('jam_reservasi')->get()->getResult(), "booked" => $this->Reservasi->where($this->request->getVar())->get()->getResult()]);
        } else {
            return redirect()->to('/panel/reservasi');
        }
    }

    public function prosesBooking()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getVar();
            $jam = count($data['time_id']);

            foreach ($this->request->getVar('time_id') as $time) {
                $data['time_id'] = $time;
                $this->Reservasi->save($data);
            }

            unset($data['time_id']);
            unset($data['tanggal']);
            $data['total'] = $this->db->table('daftar_lab')->where('lab_slug', $data['lab_slug'])->get()->getResult()[0]->price_per_hour * $jam;
            // $this->db->table('transaksi')->insert($data);
            if ($this->Transaksi->save($data)) {
                echo json_encode(["pesan" => "Sukses"]);
            }
        } else {
            return redirect()->to('/panel/reservasi');
        }
    }

    public function getPaymentDetail()
    {
        if ($this->request->isAJAX()) {
            $getVar = $this->request->getVar();

            $lab = $this->db->table('daftar_lab')->where('lab_slug', $getVar['lab_slug'])->get()->getResult()[0];
            $transaksi = $this->db->table('transaksi')->where('kode_transaksi', $getVar['kode_transaksi'])->get()->getResult()[0];
            $reservasi = $this->db->table('reservasi')->where('kode_transaksi', $getVar['kode_transaksi'])->get()->getResult();
            $status = $this->db->query("SELECT * FROM status WHERE id=" . $transaksi->status)->getResult('array')[0];
            // var_dump($status);
            $time = array();
            foreach ($reservasi as $s) {
                array_push($time, $this->db->table('jam_reservasi')->where('id', $s->time_id)->get()->getResult()[0]);
            }
            echo json_encode(['transaksi' => $transaksi, 'reservasi' => $reservasi, 'time' => $time, 'lab' => $lab, 'status' => $status]);
        } else {
            return redirect()->to('/panel/reservasi');
        }
    }

    public function uploadBukti()
    {
        // echo json_encode(['nama' => $this->request->getVar()]);
        // echo json_encode($this->request->getVar());
        // exit;
        if ($this->request->isAJAX()) {
            $fileBukti = $this->request->getFile('nama_file');
            $namaBukti = $fileBukti->getRandomName();
            $fileBukti->move('document/bukti', $namaBukti);

            $kode = $this->request->getVar('kode_transaksi');
            $ids = $this->db->query("SELECT * FROM transaksi WHERE kode_transaksi='$kode'")->getResult()[0];
            $data = [
                'id' => $ids->id,
                'nama_file' => $namaBukti
            ];
            if ($this->Transaksi->save($data)) {
                echo json_encode(["icon" => "success", "title" => "Berhasil Submit Bukti", "text" => "Reservasi Sudah Disubmit, Menunggu Accept Dari Admin"]);
            } else {
                echo json_encode(["icon" => "error", "title" => "Gagal Submit Bukti", "text" => "File Gagal Diupload, silahkan upload ulang di panel history"]);
            }
        }
    }

    public function setStatus()
    {
        if ($this->request->isAJAX()) {
            $getVar = $this->request->getVar();
            // $status = 2;
            if ($getVar['act'] == 'terima') {
                $status = 3;
            } else {
                $status = 1;
            }
            if ($this->Transaksi->save([
                'id' => $getVar['id'],
                'status' => $status
            ])) {
                echo json_encode(["icon" => "success", "title" => "Berhasil Verifikasi", "text" => "Verifikasi Sukses, Status Telah Diubah"]);
            }
        } else {
            echo json_encode(["Error" => "Access Denied"]);
        }
    }
}
