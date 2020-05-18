<?php

class MPendaftar extends CI_Model{

    public $nisn;
    public $peserta_pendaftar;

    public function __construct(){
        parent::__construct();
    }

    private function getTable(){
        return 'peserta_pendaftar';
    }

    private function getData(){
        $data = array(
            'pesera_pendaftar' => $this->peserta_pendaftar
        );

        return $data;
    }

    public function getAll()
    {
        $peserta_pendaftar = array();
        $query = $this->db->get($this->getTable());
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $peserta_pendaftar[] = $row;
            }
        }
        return $peserta_pendaftar;
    }


    public function insert()
    {
        $this->db->insert($this->getTable(), $this->getData());
        return $this->db->insert_id();
    }

    public function update($where)
    {
        $status = $this->db->update($this->getTable(), $this->getData(), $where);
        return $status;

    }

    public function delete($id)
    {
        $this->db->where('nisn', $id);
        return $this->db->delete($this->getTable());
    }

    public function getLastID(){
        $this->db->select('nisn');
        $this->db->order_by('nisn', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get($this->getTable());
        return $query->row();
    }


}