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
		$data['page'] = 'login';		
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
			$this->session->set_userdata('siswa_login', '1');
			$this->session->set_userdata('siswa_id', $row->username);
			$this->session->set_flashdata('success', 'berhasil login');
			redirect(site_url('siswa/dashboard'), 'refresh');
			
		}else{
			$this->session->set_flashdata('gagal', 'Username & Password Salah!');
			redirect(site_url('login'), 'refresh');
		}
	}

	public function logout() {
      $this->session->sess_destroy();
      $this->session->set_flashdata('logout_notification', 'logged_out');
      redirect(site_url('login'), 'refresh');
    }
}
