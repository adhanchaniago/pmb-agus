<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {


	public function __construct()
	{
		parent::__construct();;
		$this->load->database();
    }

	public function index()
	{
		$data['page'] = 'home';		
		$this->load->view('frontend/index', $data);
	}

	public function umum()
	{
		$this->db->select('*')
         ->from('peserta_pendaftar')
         ->join('hasil', 'peserta_pendaftar.nisn = hasil.nisn')
         ->where('jalur', 'umum')
         ->order_by('jumlah','DESC');
		$pengumuman = $this->db->get();
		$setting = $this->db->get('setting')->row();

		$data['page'] = 'pengumuman_umum';
		$data['title'] = 'Pengumuman';
		$data['title1'] = 'Pengumuman Hasil Pendaftaran';
		$data['jalur'] = 'umum';
		$data['setting'] = $setting;
		$data['data'] = $pengumuman->result_array();
		$this->load->view('frontend/index', $data);
	}

	public function prestasi()
	{
		$this->db->select('*')
         ->from('peserta_pendaftar')
         ->join('hasil', 'peserta_pendaftar.nisn = hasil.nisn')
         ->where('jalur', 'prestasi')
         ->order_by('jumlah','DESC');
		$pengumuman = $this->db->get();
		$setting = $this->db->get('setting')->row();

		$data['page'] = 'pengumuman_prestasi';
		$data['title'] = 'Pengumuman';
		$data['title1'] = 'Pengumuman Hasil Pendaftaran';
		$data['jalur'] = 'prestasi';
		$data['setting'] = $setting;
		$data['data'] = $pengumuman->result_array();
		$this->load->view('frontend/index', $data);
	}
}
