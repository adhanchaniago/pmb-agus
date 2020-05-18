<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends CI_Controller {


	public function index()
	{
		$setting = $this->db->get('setting')->row();

		$data['page'] = 'bantuan';
		$data['title'] = 'Bantuan';
		$data['setting'] = $setting;
		$this->load->view('frontend/index', $data);
	}
}
