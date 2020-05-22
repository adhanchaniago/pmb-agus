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
            redirect(site_url('siswa/dashboard'), 'refresh');	
    }

	public function dashboard()
	{
		if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->session->userdata('siswa_username');
        $siswa = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn))->row();

        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nama_detail, kriteria_detail.id_detail, kriteria_detail.nilai')
         ->from('kriteria_detail')
         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
         ->where('data_kriteria.nama_kriteria', 'Lokasi');
        $lokasi = $this->db->get();

        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nama_detail, kriteria_detail.id_detail, kriteria_detail.nilai')
         ->from('kriteria_detail')
         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
         ->where('data_kriteria.nama_kriteria', 'Prestasi');
        $prestasi = $this->db->get();

        $data['page']  = 'biodata';
        $data['title'] = 'Biodata Siswa';
        $data['siswa'] = $siswa;
        $data['lokasi'] = $lokasi->result_array();
        $data['prestasi'] = $prestasi->result_array();
        $this->load->view('backend/siswa/index', $data);
	}

    public function update_bio()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->session->userdata('siswa_username');
        $jalur        = $this->input->post('jalur');
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

        $id_jarak = $this->input->post('jarak_sekolah');
        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nilai')
                 ->from('kriteria_detail')
                 ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
                 ->where('kriteria_detail.id_detail', $id_jarak);
        $jarak = $this->db->get()->row();

        $tbl = 'nilai_awal_'.$jalur;
        $cek = $this->db->get_where($tbl, array('nisn' => $nisn, 'id_kriteria' => $jarak->id_kriteria));
        $a = $cek->row();
        if ($cek->num_rows() == null) {
            $data5['nisn'] = $nisn;
            $data5['id_kriteria'] = $jarak->id_kriteria;
            $data5['nilai'] = $jarak->nilai;
            $this->db->insert($tbl, $data5);
        }else{
            $data6['nilai'] = $jarak->nilai;
            $this->db->where('id_nilai_awal' , $a->id_nilai_awal);
            $this->db->update($tbl , $data6);
        }

        $id_rank = $this->input->post('rangking');
        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nilai')
                 ->from('kriteria_detail')
                 ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
                 ->where('kriteria_detail.id_detail', $id_rank);
        $rank = $this->db->get()->row();

        $cek = $this->db->get_where($tbl, array('nisn' => $nisn, 'id_kriteria' => $rank->id_kriteria));
        $a = $cek->row();
        if ($cek->num_rows() == null) {
            $data7['nisn'] = $nisn;
            $data7['id_kriteria'] = $rank->id_kriteria;
            $data7['nilai'] = $rank->nilai;
            $this->db->insert($tbl, $data7);
        }else{
            $data8['nilai'] = $rank->nilai;
            $this->db->where('id_nilai_awal' , $a->id_nilai_awal);
            $this->db->update($tbl, $data8);
        }

        $this->session->set_flashdata('success', 'Data Berhasil Di Simpan');
        redirect('siswa/dashboard','refresh');
    }

    public function nilai_raport()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->session->userdata('siswa_username');
        $raport = $this->db->get_where('nilai_raport', array('nisn' => $nisn))->row();
        $siswa = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn))->row();
        if ($siswa->jalur == 'umum') {
            $page = 'nilai_raport_umum';
        }else{
            $page = 'nilai_raport_prestasi';
        }

        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nama_detail, kriteria_detail.id_detail')
         ->from('kriteria_detail')
         ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
         ->where('data_kriteria.nama_kriteria', 'Nilai');
        $nilai = $this->db->get();

        
        $data['page']  = $page;
        $data['raport']  = $raport;
        $data['nilai'] = $nilai->result_array();
        $data['title'] = 'Nilai Raport Siswa';
        $data['jalur'] = $siswa->jalur;
        $this->load->view('backend/siswa/index', $data);
    }

    public function input_raport()
    {
        if ($this->session->userdata('siswa_login') != 1)
            redirect(base_url(), 'refresh');

        $jalur = $this->session->userdata('jalur');
        $nisn = $this->session->userdata('siswa_username');
        $data['sem1'] = $this->input->post('sem1');
        $data['sem2'] = $this->input->post('sem2');
        $data['sem3'] = $this->input->post('sem3');
        $data['sem4'] = $this->input->post('sem4');
        $data['sem5'] = $this->input->post('sem5');
        $data['total'] = ($data['sem1'] + $data['sem2'] + $data['sem3'] + $data['sem4'] + $data['sem5']);
        $data['nilai'] = $this->input->post('nilai');
        $this->db->where('nisn' , $nisn);
        $this->db->update('nilai_raport' , $data);

        $tbl = 'nilai_awal_'.$jalur;
        $id_nilai = $this->input->post('nilai');
        $this->db->select('data_kriteria.id_kriteria, kriteria_detail.nilai')
                 ->from('kriteria_detail')
                 ->join('data_kriteria', 'kriteria_detail.id_kriteria = data_kriteria.id_kriteria')
                 ->where('kriteria_detail.id_detail', $id_nilai);
        $nilai = $this->db->get()->row();

        $cek = $this->db->get_where($tbl, array('nisn' => $nisn, 'id_kriteria' => $nilai->id_kriteria));
        $a = $cek->row();
        if ($cek->num_rows() == null) {
            $data5['nisn'] = $nisn;
            $data5['id_kriteria'] = $nilai->id_kriteria;
            $data5['nilai'] = $nilai->nilai;
            $this->db->insert($tbl, $data5);
        }else{
            $data6['nilai'] = $nilai->nilai;
            $this->db->where('id_nilai_awal' , $a->id_nilai_awal);
            $this->db->update($tbl , $data6);
        }

        $this->session->set_flashdata('success' , 'Nilai Berhasil Disimpan');
        redirect(site_url('siswa/nilai_raport'), 'refresh');
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
            redirect('siswa/dashboard', 'refresh');
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
