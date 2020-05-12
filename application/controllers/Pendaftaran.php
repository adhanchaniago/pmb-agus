<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
    }

	public function index()
	{
		$data['page'] = 'home';		
		$this->load->view('frontend/index', $data);
	}

	public function umum()
	{
		$data['page'] = 'umum';
		$data['title'] = 'Pendaftaran Jalur Umum';
		$this->load->view('frontend/index', $data);
	}

	public function umum_daftar()
	{
		$nisn       = html_escape($this->input->post('nisn'));
		$data['nisn']       = $this->input->post('nisn');
		$data['nama']		= $this->input->post('nama');
		$data['tempat_lahir']		= $this->input->post('tmpt_lahir');
		$data['tanggal_lahir']		= $this->input->post('tgl_lahir');
		$data['jenis_kelamin']		= $this->input->post('jenis_kelamin');
		$data['agama']		= $this->input->post('agama');
		$data['anak_ke']		= $this->input->post('anak_ke');
		$data['jml_saudara']		= $this->input->post('jml_saudara');
		$data['hp_siswa']		= $this->input->post('hp_siswa');
		$data['alamat_siswa']		= $this->input->post('alamat_siswa');
		$data['berat_badan']		= $this->input->post('berat_badan');
		$data['tinggi_badan']		= $this->input->post('tinggi_badan');
		$data['gol_darah']		= $this->input->post('gol_darah');
		$data['asal_sekolah']		= $this->input->post('asal_sekolah');
		$data['alamat_sekolah']		= $this->input->post('alamat_sekolah');
		$data['nama_ayah']		= $this->input->post('nama_ayah');
		$data['nama_ibu']		= $this->input->post('nama_ibu');
		$data['alamat_ortu']		= $this->input->post('alamat_ortu');
		$data['hp_ortu']		= $this->input->post('hp_ortu');
		$data['kerja_ayah']		= $this->input->post('kerja_ayah');
		$data['kerja_ibu']		= $this->input->post('kerja_ibu');
		$data['penghasilan_ortu']		= $this->input->post('penghasilan_ortu');
		$data['tanggungan_anak']		= $this->input->post('tanggungan');
		$data['tahun']		= '2020';

		$cek = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn));
		if($cek->num_rows() > 0){
			
			$this->session->set_flashdata('flash_message' , 'nisn sudah ada, silahkan login');
            redirect(site_url('pendaftaran/umum'), 'refresh');

		}else{
			$this->db->insert('peserta_pendaftar', $data);

			$data2['username'] = $this->input->post('nisn');
			$data2['password'] = md5($this->input->post('nisn'));
			$data2['type'] = 'siswa';

			$this->db->insert('user', $data2);

			$data3['nisn'] = $this->input->post('nisn');

			$this->db->insert('nilai_ijazah', $data3);
			$this->session->set_flashdata('flash_message' , 'data berhasil disimpan');
		}
	}

	public function prestasi()
	{
		$data['page'] = 'prestasi';
		$data['title'] = 'Pendaftaran Jalur Prestasi';
		$this->load->view('frontend/index', $data);
	}

	public function lihat_daftar()
	{
		$data['page'] = 'lihat_daftar';
		$data['title'] = 'Daftar Pendaftar';
		$this->load->view('frontend/index', $data);
	}
}
