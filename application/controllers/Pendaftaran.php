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

        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nama_detail, kriteria_detail.id_detail, kriteria_detail.nilai')
         ->from('kriteria_detail')
         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
         ->where('data_kriteria.nama_kriteria', 'Lokasi');
        $lokasi = $this->db->get();

        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nama_detail, kriteria_detail.id_detail, kriteria_detail.nilai')
         ->from('kriteria_detail')
         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
         ->where('data_kriteria.nama_kriteria', 'Prestasi');
        $prestasi = $this->db->get();

		$data['page'] = 'umum';
		$data['title'] = 'Pendaftaran Jalur Umum';
		$data['lokasi'] = $lokasi->result_array();
		$data['prestasi'] = $prestasi->result_array();
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

			$id_jarak = $this->input->post('jarak_sekolah');
			$this->db->select('data_kriteria.id_kriteria, kriteria_detail.nilai')
			         ->from('kriteria_detail')
			         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
			         ->where('kriteria_detail.id_detail', $id_jarak);
	        $jarak = $this->db->get()->row();
	        $data4['nisn'] = $this->input->post('nisn');
			$data4['id_kriteria'] = $jarak->id_kriteria;
			$data4['nilai'] = $jarak->nilai;
			$this->db->insert('nilai_awal_umum', $data4);

			$id_rank = $this->input->post('rangking');
			$this->db->select('data_kriteria.id_kriteria, kriteria_detail.nilai')
			         ->from('kriteria_detail')
			         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
			         ->where('kriteria_detail.id_detail', $id_rank);
	        $rank = $this->db->get()->row();
	        $data5['nisn'] = $this->input->post('nisn');
			$data5['id_kriteria'] = $rank->id_kriteria;
			$data5['nilai'] = $rank->nilai;
			$this->db->insert('nilai_awal_umum', $data5);

			$this->session->set_flashdata('success' , 'Berhasil Daftar, Silahkan Login');
			redirect(site_url('login'), 'refresh');
		}
	}

	public function prestasi()
	{
		$this->db->select('data_kriteria.id_kriteria, kriteria_detail.nama_detail, kriteria_detail.id_detail, kriteria_detail.nilai')
         ->from('kriteria_detail')
         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
         ->where('data_kriteria.nama_kriteria', 'Lokasi');
        $lokasi = $this->db->get();

        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nama_detail, kriteria_detail.id_detail, kriteria_detail.nilai')
         ->from('kriteria_detail')
         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
         ->where('data_kriteria.nama_kriteria', 'Prestasi');
        $prestasi = $this->db->get();

		$data['lokasi'] = $lokasi->result_array();
		$data['prestasi'] = $prestasi->result_array();
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

			$id_jarak = $this->input->post('jarak_sekolah');
			$this->db->select('data_kriteria.id_kriteria, kriteria_detail.nilai')
			         ->from('kriteria_detail')
			         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
			         ->where('kriteria_detail.id_detail', $id_jarak);
	        $jarak = $this->db->get()->row();
	        $data4['nisn'] = $this->input->post('nisn');
			$data4['id_kriteria'] = $jarak->id_kriteria;
			$data4['nilai'] = $jarak->nilai;
			$this->db->insert('nilai_awal_prestasi', $data4);

			$id_rank = $this->input->post('rangking');
			$this->db->select('data_kriteria.id_kriteria, kriteria_detail.nilai')
			         ->from('kriteria_detail')
			         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
			         ->where('kriteria_detail.id_detail', $id_rank);
	        $rank = $this->db->get()->row();
	        $data5['nisn'] = $this->input->post('nisn');
			$data5['id_kriteria'] = $rank->id_kriteria;
			$data5['nilai'] = $rank->nilai;
			$this->db->insert('nilai_awal_prestasi', $data5);

			$this->session->set_flashdata('success' , 'Berhasil Daftar, Silahkan Login');
			redirect(site_url('login'), 'refresh');
		}
	}

	public function lihat_daftar()
	{

		$daftar = $this->db->get('peserta_pendaftar')->result_array();
		$setting = $this->db->get('setting')->row();

		$data['daftar'] = $daftar;
		$data['setting'] = $setting;
		$data['page'] = 'lihat_daftar';
		$data['title'] = 'Daftar Pendaftar';
		$this->load->view('frontend/index', $data);
	}
}
