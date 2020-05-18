<?php

class MKriteria extends CI_Model{

    public $id_kriteria;
    public $nama_kriteria;
    public $bobot_kriteria;
    public $atribut_kriteria;

    public function __construct(){
        parent::__construct();
    }

    private function getTable()
    {
        return 'kriteria';
    }

    private function getData(){
        $data = array(
            'nama_kriteria' => $this->kriteria,
            'atribut_kriteria' => $this->atribut_kriteria,
            'bobot_kriteria' => $this->bobot_kriteria
        );

        return $data;
    }



    public function getAll()
    {
        $query = $this->db->get($this->getTable());
        if($query->num_rows() > 0){
            foreach ( $query->result() as $row) {
                $kriterias[] = $row;
            }
            return $kriterias;
        }
    }

    public function getById()
    {

        $this->db->from($this->getTable());
        $this->db->where('id_kriteria',$this->id_kriteria);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert()
    {
        $this->db->insert($this->getTable(), $this->getData());
        return $this->db->insert_id();
    }

    public function update($where)
    {
        $this->db->update($this->getTable(), $this->getData(), $where);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where('id_kriteria', $id);
        return $this->db->delete($this->getTable());
    }

    public function getLastID(){
        $this->db->select('id_kriteria');
        $this->db->order_by('id_kriteria', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get($this->getTable());
        return $query->row();
    }

    public function getBobotKriteria()
    {
        $query = $this->db->query('select nama_kriteria, bobot_kriteria from data_kriteria');
        if($query->num_rows() > 0){
            foreach ( $query->result() as $row) {
                $bobot_kriteria[] = $row;
            }
            return $bobot_kriteria;
        }
    }
}