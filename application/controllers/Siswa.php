<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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

	public function dashboard()
	{

	}
}
