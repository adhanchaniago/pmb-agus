<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
    }
    
	public function index()
	{
        if ($this->session->userdata('siswa_login') == 1)
            redirect(site_url('siswa/dashboard'), 'refresh');

		$this->load->view('frontend/home');
	}
}
