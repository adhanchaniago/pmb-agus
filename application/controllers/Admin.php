<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
    }

	public function index()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(site_url('login'), 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(site_url('admin/dashboard'), 'refresh');
	}

	public function dashboard()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $pendaftar = $this->db->get('peserta_pendaftar')->result_array();

        $data['page']  = 'dashboard';
        $data['title'] = 'Admin Dashboard';
        $data['pendaftar'] = $pendaftar;
        $this->load->view('backend/admin/index', $data);
	}

	public function data_pendaftar()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $pendaftar = $this->db->get('peserta_pendaftar')->result_array();

        $data['page']  = 'data_pendaftar';
        $data['title'] = 'Data Pendaftar';
        $data['pendaftar'] = $pendaftar;
        $this->load->view('backend/admin/index', $data);
	}

	public function edit_pendaftar($nisn)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $pendaftar = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn))->row();

        $data['page']  = 'edit_pendaftar';
        $data['title'] = 'Edit Data Siswa';
        $data['pendaftar'] = $pendaftar;
        $this->load->view('backend/admin/index', $data);
	}

	public function update_pendaftar()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->input->post('nisn');
        $data['nama']       = $this->input->post('nama');
        $data['no_peserta']     = $this->input->post('no_peserta');
        $data['asal_sekolah']       = $this->input->post('asal_sekolah');
        $data['jurusan']        = $this->input->post('jurusan');
        $data['jarak_sekolah']      = $this->input->post('jarak_sekolah');
        $data['tempat_lahir']       = $this->input->post('tmpt_lahir');
        $data['tanggal_lahir']      = $this->input->post('tgl_lahir');
        $data['jenis_kelamin']      = $this->input->post('jenis_kelamin');
        $data['agama']      = $this->input->post('agama');
        $data['kabupaten']      = $this->input->post('kabupaten');
        $data['kecamatan']      = $this->input->post('kecamatan');
        $data['alamat_siswa']       = $this->input->post('alamat_siswa');
        $data['nama_ayah']      = $this->input->post('nama_ayah');
        $data['nama_ibu']       = $this->input->post('nama_ibu');
        $data['alamat_ortu']        = $this->input->post('alamat_ortu');
        $data['hp_ortu']        = $this->input->post('hp_ortu');
        $data['kerja_ayah']     = $this->input->post('kerja_ayah');
        $data['kerja_ibu']      = $this->input->post('kerja_ibu');
        $data['penghasilan_ayah']       = $this->input->post('penghasilan_ayah');
        $data['penghasilan_ibu']        = $this->input->post('penghasilan_ibu');
        $data['ranking']        = $this->input->post('rangking');

        $this->db->where('nisn' , $nisn);
        $this->db->update('peserta_pendaftar' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Rubah');
        redirect('admin/data_pendaftar','refresh');
    }

	public function del_pendaftar($nisn)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $this->db->where('nisn' , $nisn);
        $this->db->delete('peserta_pendaftar');

        $this->db->where('nisn' , $nisn);
        $this->db->delete('nilai_raport');

        $this->db->where('username' , $nisn);
        $this->db->delete('user');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/data_pendaftar'), 'refresh');
	}

	public function data_user()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $user = $this->db->select('*')->from('user')->where('type !=','siswa')->get()->result_array();

        $data['page']  = 'data_user';
        $data['title'] = 'Data User';
        $data['user'] = $user;
        $this->load->view('backend/admin/index', $data);
	}

	public function add_user()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'add_user';
        $data['title'] = 'Tambah User Baru';
        $this->load->view('backend/admin/index', $data);
	}

	public function save_user()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['username']       = $this->input->post('username');
        $data['password']       = md5($this->input->post('password'));
        $data['type']       = $this->input->post('type');

        $this->db->insert('user' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Simpan');
        redirect('admin/data_user','refresh');
	}

	public function edit_user($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $user = $this->db->get_where('user', array('adm_id' => $id))->row();

        $data['page']  = 'edit_user';
        $data['title'] = 'Edit Data User';
        $data['user'] = $user;
        $this->load->view('backend/admin/index', $data);
	}

	public function update_user()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id       = $this->input->post('id');
        $data['username']       = $this->input->post('username');
        $data['password']       = md5($this->input->post('password'));
        $data['type']       = $this->input->post('type');

        $this->db->where('adm_id' , $id);
        $this->db->update('user' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Rubah');
        redirect('admin/data_user','refresh');
    }

	public function del_user($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $this->db->where('adm_id' , $id);
        $this->db->delete('user');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/data_user'), 'refresh');
	}

	public function pesan()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

		$pesan = $this->db->get('pesan_peserta')->result_array();

        $data['page']  = 'pesan';
        $data['title'] = 'Pesan';
        $data['pesan'] = $pesan;
        $this->load->view('backend/admin/index', $data);
	}

	public function lihat_pesan($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

		$pesan = $this->db->get_where('pesan_peserta', array('id_pesan' => $id))->row();

        $data['page']  = 'lihat_pesan';
        $data['title'] = 'Pesan';
        $data['pesan'] = $pesan;
        $this->load->view('backend/admin/index', $data);
	}

	public function del_pesan($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

		$this->db->where('id_pesan' , $id);
        $this->db->delete('pesan_peserta');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/pesan'), 'refresh');
	}

	public function ubah_password()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'ubah_password';
        $data['title'] = 'Ubah Password';
        $this->load->view('backend/admin/index', $data);
	}

	public function update_password()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $un = $this->session->userdata('admin_username');
        $pass_lama      = $this->db->get_where('user', array('username' => $un))->row()->password;
        $pass  = md5($this->input->post('password'));
        $pass1  = md5($this->input->post('password1'));
        $pass2 = md5($this->input->post('password2'));
        $data['password'] = md5($this->input->post('password1'));

        if ($pass1 == $pass2) {
            if ($pass_lama == $pass) {
                $this->db->where('username' , $un);
                $this->db->update('user' , $data);
                $this->session->set_flashdata('success', 'Username & Password Berhasil Dirubah');
                redirect('admin/dashboard', 'refresh');
            }
            $this->session->set_flashdata('error', 'Password Lama yang Anda Masukkan Salah');
            redirect('admin/ubah_password', 'refresh');
        }else{
            $this->session->set_flashdata('error', 'Password Baru Tidak Sama');
            redirect('admin/ubah_password', 'refresh');
        }
    }

}
