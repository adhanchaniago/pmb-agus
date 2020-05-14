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

}
