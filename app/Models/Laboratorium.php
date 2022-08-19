<?php

namespace App\Models;

use CodeIgniter\Model;

class Laboratorium extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'daftar_lab';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


 
    public function get_all_lab() {
//       $query = $this->db->table('lab');
       $query = $this->db->query('select * from daftar_lab');
//      print_r($query->getResult());
       // $query = $this->db->get();
        return $query->getResult();
    }
 
    public function get_by_id($id) {
      $sql = 'select * from daftar_lab where id ='.$id ;
      $query =  $this->db->query($sql);
       
      return $query->getRow();
    }
 
    public function lab_add($data) {
         
        $query = $this->db->table($this->table)->insert($data);
        
        return $this->db->insertID();
    }
 
    public function lab_update($where, $data) {
        $this->db->table($this->table)->update($data, $where);
//        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }
 

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function tambah($data)
    {
        $this->builder = $this->db->table($this->table);

        return $this->builder->insert($data);
    }

    public function edit($id)
    {
        $this->builder = $this->db->table($this->table);
        $query = $this->builder->getWhere(['id' => $id]);
        return $query->getRow();
    }

    public function ubah($data, $id)
    {
        $this->builder = $this->db->table($this->table);

        $this->builder->where('id', $id);
        return $this->builder->update($data);
    }

    public function hapus($id)
    {
        $this->builder = $this->db->table($this->table);
        $this->builder->where('id', $id);
        return $this->builder->delete();
    }
}
