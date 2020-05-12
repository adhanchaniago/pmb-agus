<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {


	public function index()
	{
		$data['page'] = 'home';		
		$this->load->view('frontend/index', $data);
	}
}
