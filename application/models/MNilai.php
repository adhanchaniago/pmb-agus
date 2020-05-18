<?php

class MNilai extends CI_Model{

    public $nisn;
    public $id_kriteria;
    public $nilai;

    public function __construct(){
        parent::__construct();
    }

    private function getTable()
    {
        return 'nilai_awal';
    }

    private function getData()
    {
        $data = array(
            'nisn' => $this->nisn,
            'id_kriteria' => $this->id_kriteria,
            'nilai' => $this->nilai
        );

        return $data;
    }

    public function insert()
    {
        $status = $this->db->insert($this->getTable(), $this->getData());
        return $status;
    }

    public function getNilaiBySiswa($id)
    {
        $query = $this->db->query(
            'select p.nisn, p.nama, k.id_kriteria, n.nilai from peserta_pendaftar p, nilai_awal n, data_kriteria k, kriteria_detail kd where p.nisn = n.nisn AND k.id_kriteria = n.id_kriteria and k.id_kriteria = kd.id_kriteria and p.nisn = '.$id.' GROUP by n.nilai '
        );
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $nilai[] = $row;
            }

            return $nilai;
        }
    }

    public function getNilaiSiswa()
    {
        $query = $this->db->query(
            'select p.nisn, p.universitas, k.id_kriteria, k.kriteria ,n.nilai from peserta_pendaftar p, nilai_awal n, data_kriteria k where p.nisn = n.nisn AND k.id_kriteria = n.id_kriteria '
        );
        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $nilai[] = $row;
            }

            return $nilai;
        }
    }

    public function update()
    {
        $data = array('nilai' => $this->nilai);
        $this->db->where('nisn', $this->nisn);
        $this->db->where('id_kriteria', $this->id_kriteria);
        $this->db->update($this->getTable(), $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where('id_nilai_awal', $id);
        return $this->db->delete($this->getTable());
    }
}