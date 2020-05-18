<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
    }

	public function index()
	{
		if ($this->session->userdata('admin_login') == 1)
            redirect(site_url('admin/dashboard'), 'refresh');
        if ($this->session->userdata('panitia_login') == 1)
            redirect(site_url('panitia/dashboard'), 'refresh');
        if ($this->session->userdata('siswa_login') == 1)
            redirect(site_url('siswa/dashboard'), 'refresh');

		$data['page'] = 'login';
		$data['title'] = 'login';
		$this->load->view('frontend/index', $data);
	}

	public function login()
	{
		$user = $this->input->post('user');
		$password = md5($this->input->post('password'));

		$cek = $this->db->get_where('user', array('username' => $user, 'password' => $password));
		if ($cek->num_rows() > 0) {
			// echo 'berhasil';
			$row = $cek->row();
			if ($row->type == 'admin') {
				$this->session->set_userdata('admin_login', '1');
				$this->session->set_userdata('admin_id', $row->adm_id);
				$this->session->set_userdata('admin_username', $row->username);
				$this->session->set_userdata('login_type', 'admin');
				$this->session->set_flashdata('success', 'berhasil login');
				redirect(site_url('admin/dashboard'), 'refresh');
			}elseif($row->type == 'panitia'){
				$this->session->set_userdata('panitia_login', '1');
				$this->session->set_userdata('panitia_id', $row->adm_id);
				$this->session->set_userdata('panitia_username', $row->username);
				$this->session->set_userdata('login_type', 'panitia');
				$this->session->set_flashdata('success', 'berhasil login');
				redirect(site_url('panitia/dashboard'), 'refresh');
			}else{
				$this->session->set_userdata('siswa_login', '1');
				$this->session->set_userdata('siswa_id', $row->adm_id);
				$this->session->set_userdata('siswa_username', $row->username);
				$this->session->set_userdata('login_type', 'siswa');
				$this->session->set_flashdata('success', 'berhasil login');
				redirect(site_url('siswa/dashboard'), 'refresh');
			}
		}else{
			$this->session->set_flashdata('error', 'Username & Password Salah!');
			redirect(site_url('login'), 'refresh');
		}
	}

	public function logout() {
      $this->session->sess_destroy();
      $this->session->set_flashdata('logout_notification', 'logged_out');
      redirect(site_url('login'), 'refresh');
    }
}
