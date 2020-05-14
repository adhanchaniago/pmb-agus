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
		if ($this->session->userdata('siswa_login') != 1)
            redirect(site_url('login'), 'refresh');
        if ($this->session->userdata('siswa_login') == 1)
            redirect(site_url('siswa/dashboard'), 'refresh');	}

	public function dashboard()
	{
		if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->session->userdata('siswa_username');
        $siswa = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn))->row();

        $data['page']  = 'biodata';
        $data['title'] = 'Biodata Siswa';
        $data['siswa'] = $siswa;
        $this->load->view('backend/siswa/index', $data);
	}

    public function update_bio()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->session->userdata('siswa_username');
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
        $this->session->set_flashdata('success', 'Data Berhasil Di Simpan');
        redirect('siswa/dashboard','refresh');
    }

    public function nilai_raport()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->session->userdata('siswa_username');
        $siswa = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn))->row();
        if ($siswa->jalur == 'umum') {
            $page = 'nilai_raport_umum';
        }else{
            $page = 'nilai_raport_prestasi';
        }

        $data['page']  = $page;
        $data['title'] = 'Nilai Raport Siswa';
        $this->load->view('backend/siswa/index', $data);
    }

    public function input_raport()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $data['b_ind1'] = $this->input->post('bindo1');
        $data['b_ind2'] = $this->input->post('bindo2');
        $data['b_ind3'] = $this->input->post('bindo3');
        $data['b_ind4'] = $this->input->post('bindo4');
        $data['b_ind5'] = $this->input->post('bindo5');
        $data['mtk1'] = $this->input->post('mtk1');
        $data['mtk2'] = $this->input->post('mtk2');
        $data['mtk3'] = $this->input->post('mtk3');
        $data['mtk4'] = $this->input->post('mtk4');
        $data['mtk5'] = $this->input->post('mtk5');
        $data['ipa1'] = $this->input->post('ipa1');
        $data['ipa2'] = $this->input->post('ipa2');
        $data['ipa3'] = $this->input->post('ipa3');
        $data['ipa4'] = $this->input->post('ipa4');
        $data['ipa5'] = $this->input->post('ipa5');
        $data['ips1'] = $this->input->post('ips1');
        $data['ips2'] = $this->input->post('ips2');
        $data['ips3'] = $this->input->post('ips3');
        $data['ips4'] = $this->input->post('ips4');
        $data['ips5'] = $this->input->post('ips5');
        $data['b_ing1'] = $this->input->post('bing1');
        $data['b_ing2'] = $this->input->post('bing2');
        $data['b_ing3'] = $this->input->post('bing3');
        $data['b_ing4'] = $this->input->post('bing4');
        $data['b_ing5'] = $this->input->post('bing5');

        $this->db->insert('nilai_raport', $data);
        $this->session->set_flashdata('success' , 'Berhasil Daftar, Silahkan Login');
        redirect(site_url('login'), 'refresh');
    }

    public function pesan()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'pesan';
        $data['title'] = 'Kirim Pesan';
        $this->load->view('backend/siswa/index', $data);
    }

    public function kirim_pesan()
    {
        $data['email']       = $this->input->post('email');
        $data['subject']        = $this->input->post('subject');
        $data['pesan']      = $this->input->post('textarea');

        $this->db->insert('pesan_peserta', $data);
        $this->session->set_flashdata('success' , 'Pesan Berhasil Dikirim');
        redirect(site_url('siswa/pesan'), 'refresh');
    }

    public function ubah_password()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'ubah_password';
        $data['title'] = 'Ubah Password';
        $this->load->view('backend/siswa/index', $data);
    }

    public function update_password()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $un = $this->session->userdata('siswa_username');
        $pass_lama      = $this->db->get_where('user', array('username' => $un))->row()->password;
        $pass1  = md5($this->input->post('password1'));
        $pass2 = md5($this->input->post('password2'));
        $data['password'] = md5($this->input->post('password1'));

        if ($pass1 == $pass2) {
            $this->db->where('username' , $un);
            $this->db->update('user' , $data);
            $this->session->set_flashdata('success', 'Username & Password Berhasil Dirubah');
            redirect('siswa/ubah_password', 'refresh');
        }else{
            $this->session->set_flashdata('error', 'Password Baru Tidak Sama');
            redirect('siswa/ubah_password', 'refresh');
        }
    }


    public function bantuan()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'bantuan';
        $data['title'] = 'Bantuan';
        $this->load->view('backend/siswa/index', $data);
    }

    public function pengumuman()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'biodata';
        $data['title'] = 'Biodata Siswa';
        $this->load->view('backend/siswa/index', $data);
    }
}
