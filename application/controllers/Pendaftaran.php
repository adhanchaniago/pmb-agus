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
		$data['no_peserta']		= $this->input->post('no_peserta');
		$data['asal_sekolah']		= $this->input->post('asal_sekolah');
		$data['jurusan']		= $this->input->post('jurusan');
		$data['jarak_sekolah']		= $this->input->post('jarak_sekolah');
		$data['tempat_lahir']		= $this->input->post('tmpt_lahir');
		$data['tanggal_lahir']		= $this->input->post('tgl_lahir');
		$data['jenis_kelamin']		= $this->input->post('jenis_kelamin');
		$data['agama']		= $this->input->post('agama');
		$data['kabupaten']		= $this->input->post('kabupaten');
		$data['kecamatan']		= $this->input->post('kecamatan');
		$data['alamat_siswa']		= $this->input->post('alamat_siswa');
		$data['nama_ayah']		= $this->input->post('nama_ayah');
		$data['nama_ibu']		= $this->input->post('nama_ibu');
		$data['alamat_ortu']		= $this->input->post('alamat_ortu');
		$data['hp_ortu']		= $this->input->post('hp_ortu');
		$data['kerja_ayah']		= $this->input->post('kerja_ayah');
		$data['kerja_ibu']		= $this->input->post('kerja_ibu');
		$data['penghasilan_ayah']		= $this->input->post('penghasilan_ayah');
		$data['penghasilan_ibu']		= $this->input->post('penghasilan_ibu');
		$data['ranking']		= $this->input->post('rangking');
		$data['jalur']		= 'umum';

		$cek = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn));
		if($cek->num_rows() > 0){
			
			$this->session->set_flashdata('error', 'nisn sudah ada, silahkan login');
            redirect(site_url('pendaftaran/umum'), 'refresh');

		}else{
			$this->db->insert('peserta_pendaftar', $data);

			$data2['username'] = $this->input->post('nisn');
			$data2['password'] = md5($this->input->post('nisn'));
			$data2['type'] = 'siswa';

			$this->db->insert('user', $data2);

			$data3['nisn'] = $this->input->post('nisn');

			$this->db->insert('nilai_raport', $data3);
			$this->session->set_flashdata('success' , 'Berhasil Daftar, Silahkan Login');
			redirect(site_url('login'), 'refresh');
		}
	}

	public function prestasi()
	{
		$data['page'] = 'prestasi';
		$data['title'] = 'Pendaftaran Jalur Prestasi';
		$this->load->view('frontend/index', $data);
	}

	public function prestasi_daftar()
	{
		$nisn       = html_escape($this->input->post('nisn'));
		$data['nisn']       = $this->input->post('nisn');
		$data['nama']		= $this->input->post('nama');
		$data['no_peserta']		= $this->input->post('no_peserta');
		$data['asal_sekolah']		= $this->input->post('asal_sekolah');
		$data['jurusan']		= $this->input->post('jurusan');
		$data['jarak_sekolah']		= $this->input->post('jarak_sekolah');
		$data['tempat_lahir']		= $this->input->post('tmpt_lahir');
		$data['tanggal_lahir']		= $this->input->post('tgl_lahir');
		$data['jenis_kelamin']		= $this->input->post('jenis_kelamin');
		$data['agama']		= $this->input->post('agama');
		$data['kabupaten']		= $this->input->post('kabupaten');
		$data['kecamatan']		= $this->input->post('kecamatan');
		$data['alamat_siswa']		= $this->input->post('alamat_siswa');
		$data['nama_ayah']		= $this->input->post('nama_ayah');
		$data['nama_ibu']		= $this->input->post('nama_ibu');
		$data['alamat_ortu']		= $this->input->post('alamat_ortu');
		$data['hp_ortu']		= $this->input->post('hp_ortu');
		$data['kerja_ayah']		= $this->input->post('kerja_ayah');
		$data['kerja_ibu']		= $this->input->post('kerja_ibu');
		$data['penghasilan_ayah']		= $this->input->post('penghasilan_ayah');
		$data['penghasilan_ibu']		= $this->input->post('penghasilan_ibu');
		$data['ranking']		= $this->input->post('rangking');
		$data['jalur']		= 'prestasi';

		$cek = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn));
		if($cek->num_rows() > 0){
			
			$this->session->set_flashdata('error' , 'nisn sudah ada, silahkan login');
            redirect(site_url('pendaftaran/prestasi'), 'refresh');

		}else{
			$this->db->insert('peserta_pendaftar', $data);

			$data2['username'] = $this->input->post('nisn');
			$data2['password'] = md5($this->input->post('nisn'));
			$data2['type'] = 'siswa';

			$this->db->insert('user', $data2);

			$data3['nisn'] = $this->input->post('nisn');

			$this->db->insert('nilai_raport', $data3);
			$this->session->set_flashdata('success' , 'Berhasil Daftar, Silahkan Login');
			redirect(site_url('login'), 'refresh');
		}
	}

	public function lihat_daftar()
	{

		$daftar = $this->db->get('peserta_pendaftar')->result_array();

		$data['daftar'] = $daftar;
		$data['page'] = 'lihat_daftar';
		$data['title'] = 'Daftar Pendaftar';
		$this->load->view('frontend/index', $data);
	}
}
