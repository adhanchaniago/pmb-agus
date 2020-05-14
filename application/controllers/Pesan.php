<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
    }

	public function index()
	{
		$data['page'] = 'pesan';
		$this->load->view('frontend/index', $data);
	}

	public function kirim()
	{
		$data['email']       = $this->input->post('email');
		$data['subject']		= $this->input->post('subject');
		$data['pesan']		= $this->input->post('textarea');

		$this->db->insert('pesan_peserta', $data);
		$this->session->set_flashdata('success' , 'Pesan Berhasil Dikirim');
		redirect(site_url('pesan'), 'refresh');
	}
}
