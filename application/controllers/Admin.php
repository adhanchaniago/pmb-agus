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

	public function data_pendaftar()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $pendaftar = $this->db->get('peserta_pendaftar')->result_array();

        $data['page']  = 'data_pendaftar';
        $data['title'] = 'Data Pendaftar';
        $data['pendaftar'] = $pendaftar;
        $this->load->view('backend/admin/index', $data);
	}

	public function edit_pendaftar($nisn)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $pendaftar = $this->db->get_where('peserta_pendaftar', array('nisn' => $nisn))->row();

        $data['page']  = 'edit_pendaftar';
        $data['title'] = 'Edit Data Siswa';
        $data['pendaftar'] = $pendaftar;
        $this->load->view('backend/admin/index', $data);
	}

	public function update_pendaftar()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $nisn = $this->input->post('nisn');
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
        $this->session->set_flashdata('success', 'Data Berhasil Di Rubah');
        redirect('admin/data_pendaftar','refresh');
    }

	public function del_pendaftar($nisn)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $this->db->where('nisn' , $nisn);
        $this->db->delete('peserta_pendaftar');

        $this->db->where('nisn' , $nisn);
        $this->db->delete('nilai_raport');

        $this->db->where('username' , $nisn);
        $this->db->delete('user');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/data_pendaftar'), 'refresh');
	}

	public function data_user()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $user = $this->db->select('*')->from('user')->where('type !=','siswa')->get()->result_array();

        $data['page']  = 'data_user';
        $data['title'] = 'Data User';
        $data['user'] = $user;
        $this->load->view('backend/admin/index', $data);
	}

	public function add_user()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'add_user';
        $data['title'] = 'Tambah User Baru';
        $this->load->view('backend/admin/index', $data);
	}

	public function save_user()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['username']       = $this->input->post('username');
        $data['password']       = md5($this->input->post('password'));
        $data['type']       = $this->input->post('type');

        $this->db->insert('user' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Simpan');
        redirect('admin/data_user','refresh');
	}

	public function edit_user($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $user = $this->db->get_where('user', array('adm_id' => $id))->row();

        $data['page']  = 'edit_user';
        $data['title'] = 'Edit Data User';
        $data['user'] = $user;
        $this->load->view('backend/admin/index', $data);
	}

	public function update_user()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id       = $this->input->post('id');
        $data['username']       = $this->input->post('username');
        $data['password']       = md5($this->input->post('password'));
        $data['type']       = $this->input->post('type');

        $this->db->where('adm_id' , $id);
        $this->db->update('user' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Rubah');
        redirect('admin/data_user','refresh');
    }

	public function del_user($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $this->db->where('adm_id' , $id);
        $this->db->delete('user');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/data_user'), 'refresh');
	}

	public function pesan()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

		$pesan = $this->db->get('pesan_peserta')->result_array();

        $data['page']  = 'pesan';
        $data['title'] = 'Pesan';
        $data['pesan'] = $pesan;
        $this->load->view('backend/admin/index', $data);
	}

	public function lihat_pesan($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

		$pesan = $this->db->get_where('pesan_peserta', array('id_pesan' => $id))->row();

        $data['page']  = 'lihat_pesan';
        $data['title'] = 'Pesan';
        $data['pesan'] = $pesan;
        $this->load->view('backend/admin/index', $data);
	}

	public function del_pesan($id)
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

		$this->db->where('id_pesan' , $id);
        $this->db->delete('pesan_peserta');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/pesan'), 'refresh');
	}

	public function ubah_password()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'ubah_password';
        $data['title'] = 'Ubah Password';
        $this->load->view('backend/admin/index', $data);
	}

	public function update_password()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $un = $this->session->userdata('admin_username');
        $pass_lama      = $this->db->get_where('user', array('username' => $un))->row()->password;
        $pass  = md5($this->input->post('password'));
        $pass1  = md5($this->input->post('password1'));
        $pass2 = md5($this->input->post('password2'));
        $data['password'] = md5($this->input->post('password1'));

        if ($pass1 == $pass2) {
            if ($pass_lama == $pass) {
                $this->db->where('username' , $un);
                $this->db->update('user' , $data);
                $this->session->set_flashdata('success', 'Username & Password Berhasil Dirubah');
                redirect('admin/dashboard', 'refresh');
            }
            $this->session->set_flashdata('error', 'Password Lama yang Anda Masukkan Salah');
            redirect('admin/ubah_password', 'refresh');
        }else{
            $this->session->set_flashdata('error', 'Password Baru Tidak Sama');
            redirect('admin/ubah_password', 'refresh');
        }
    }

    public function kriteria()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $kriteria = $this->db->get('data_kriteria')->result_array();

        $data['page']  = 'kriteria';
        $data['title'] = 'Metode AHP';
        $data['kriteria'] = $kriteria;
        $this->load->view('backend/admin/index', $data);
    }

    public function add_kriteria()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $kriteria = $this->db->get('data_kriteria');
        $id = ($kriteria->num_rows()) + 1;
        // if ($kriteria->num_row() > 0) {
        //     $row = $kriteria->row();
        //     $result = "C".($pcs[1]+1);
        // } else {
        //     $result = "C1";
        // }

        $data['page']  = 'add_kriteria';
        $data['id'] = 'C'.$id;
        $data['title'] = 'Tambah Kriteria Baru';
        $this->load->view('backend/admin/index', $data);
    }

    public function save_kriteria()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['id_kriteria']       = $this->input->post('id_kriteria');
        $data['nama_kriteria']       = $this->input->post('nama');
        $data['jumlah_kriteria']       = 0;
        $data['bobot_kriteria']       = 0;

        $this->db->insert('data_kriteria' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Simpan');
        redirect('admin/kriteria','refresh');
    }

    public function edit_kriteria($id)
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id_k = $id;
        $sql = $this->db->get_where('data_kriteria', array('id_kriteria' => $id_k))->row();

        $data['page']  = 'edit_kriteria';
        $data['title'] = 'Edit Data Kriteria';
        $data['kriteria'] = $sql;
        $this->load->view('backend/admin/index', $data);
    }

    public function update_kriteria()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id       = $this->input->post('id_kriteria');
        $data['nama_kriteria']       = $this->input->post('nama');

        $this->db->where('id_kriteria' , $id);
        $this->db->update('data_kriteria' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Rubah');
        redirect('admin/kriteria','refresh');
    }

    public function del_kriteria($id)
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id_k = $id;
        $this->db->where('id_kriteria' , $id_k);
        $this->db->delete('data_kriteria');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/kriteria'), 'refresh');
    }

    public function nilai()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $nilai = $this->db->get('nilai')->result_array();

        $data['page']  = 'nilai';
        $data['title'] = 'Metode AHP';
        $data['nilai'] = $nilai;
        $this->load->view('backend/admin/index', $data);
    }

    public function add_nilai()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['page']  = 'add_nilai';
        $data['title'] = 'Tambah Nilai Baru';
        $this->load->view('backend/admin/index', $data);
    }

    public function save_nilai()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $data['jum_nilai']       = $this->input->post('jum_nilai');
        $data['ket_nilai']       = $this->input->post('ket_nilai');

        $this->db->insert('nilai' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Simpan');
        redirect('admin/nilai','refresh');
    }

    public function edit_nilai($id)
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id_k = $id;
        $sql = $this->db->get_where('nilai', array('id_nilai' => $id_k))->row();

        $data['page']  = 'edit_nilai';
        $data['title'] = 'Edit Data Nilai';
        $data['nilai'] = $sql;
        $this->load->view('backend/admin/index', $data);
    }

    public function update_nilai()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id       = $this->input->post('id_nilai');
        $data['jum_nilai']       = $this->input->post('jum_nilai');
        $data['ket_nilai']       = $this->input->post('ket_nilai');

        $this->db->where('id_nilai' , $id);
        $this->db->update('nilai' , $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Rubah');
        redirect('admin/nilai','refresh');
    }

    public function del_nilai($id)
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $id_k = $id;
        $this->db->where('id_nilai' , $id_k);
        $this->db->delete('nilai');
        $this->session->set_flashdata('success' , 'Data Berhasil Dihapus!');
        redirect(site_url('admin/nilai'), 'refresh');
    }

    public function ahp()
    {
        $analisa = $this->db->get('analisa_kriteria');
        if ($analisa->num_rows() > 0) {
            redirect(site_url('admin/analisa_kriteria_table'), 'refresh');
        }else{
            redirect(site_url('admin/analisa_kriteria'), 'refresh');
        }
    }

    public function del_analisa()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $this->db->empty_table('analisa_kriteria');
        redirect(site_url('admin/ahp'), 'refresh');
    }

    public function analisa_kriteria()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $kriteria = $this->db->get('data_kriteria');
        $nilai = $this->db->get('nilai')->result_array();
        // $kriteriaCount = $kriteria->num_rows();

        // $r = [];
        // $kriterias = $kriteria->result_array();
        // foreach ($kriterias as $kr) {
        //     $kriteriass = $this->db->get_where('data_kriteria', array('id_kriteria' => $kr['id_kriteria']))->row();
        //     $pcs = explode("C", $kriteriass->id_kriteria);
        //     $c = $kriteriaCount - $pcs[1];

        //     if ($c>=1) {
        //         $r[$kr['id_kriteria']] = $c;
        //     }
        // }
        // var_dump($r);
        // $no=1;
        // foreach ($r as $k => $v){
        //     for ($i=1; $i<=$v; $i++){
        //         $cek = $this->db->get_where('data_kriteria', array('id_kriteria' => $k))->result_array();
        //         foreach($cek as $data){
        //             $row = $this->db->get_where('data_kriteria', array('id_kriteria' => $k))->row();
        //             $baris1 = $row->nama_kriteria;
        //             $pcs = explode("C", $k); $nid = "C".($pcs[1]+$i);
        //             $rows = $this->db->get_where('data_kriteria', array('id_kriteria' => $nid))->row();
        //             $baris2 = $rows->nama_kriteria;

        //             var_dump($baris1);
        //             var_dump($baris2);
        //         }$no++;
        //     }
        // }
        

        $data['page']  = 'analisa_kriteria';
        $data['title'] = 'Metode AHP';
        $data['kriteria'] = $kriteria;
        $data['nilai'] = $nilai;
        $this->load->view('backend/admin/index', $data);
    }

    public function ahp_proses()
    {
        $kriteria = $this->db->get('data_kriteria');
        $kriteriaCount = $kriteria->num_rows();

        $r = [];
        $kriterias = $kriteria->result_array();
        foreach ($kriterias as $row){
            $kriteriass = $this->db->get_where('data_kriteria', array('id_kriteria' => $row['id_kriteria']))->row();
            $pcs = explode("C", $kriteriass->id_kriteria);
            $c = $kriteriaCount - $pcs[1];

            if ($c>=1) {
                $r[$row['id_kriteria']] = $c;
            }
        }

        $no=1;
        foreach ($r as $k => $v) {
            for ($i=1; $i<=$v; $i++) {
                $pcs = explode("C", $k);
                $nid = "C".($pcs[1]+$i);
                $a = $this->input->post($k.$no);
                $b = $this->input->post('nl'.$no);
                $c = $this->input->post($nid.$no);
                $data['kriteria_pertama'] = $a;
                $data['nilai_analisa_kriteria'] = $b;
                $data_up['nilai_analisa_kriteria'] = $b;
                $data['kriteria_kedua'] = $c;
                $data1['kriteria_pertama'] = $c;
                $data1['nilai_analisa_kriteria'] = 1/$b;
                $data1_up['nilai_analisa_kriteria'] = 1/$b;
                $data1['kriteria_kedua'] = $a;
                $save = $this->db->insert('analisa_kriteria', $data);
                $save1 = $this->db->insert('analisa_kriteria', $data1);

                if ($save) {

                } else {
                    $this->db->where('kriteria_pertama' , $a);
                    $this->db->where('kriteria_kedua' , $c);
                    $this->db->update('analisa_kriteria', $data_up);
                }

                if ($save1) {
                } else {
                    $this->db->where('kriteria_pertama' , $c);
                    $this->db->where('kriteria_kedua' , $a);
                    $this->db->update('analisa_kriteria', $data1_up);
                }
                $no++;
            }
        }
        redirect(site_url('admin/ahp_proses1'), 'refresh');
    }

    public function ahp_proses1()
    {

        $bobots2 = $this->db->get('data_kriteria')->result_array();
        foreach ($bobots2 as $baris){
            $bobots3 = $this->db->get('data_kriteria')->result_array();
            foreach ($bobots3 as $kolom){
                if ($baris['id_kriteria'] == $kolom['id_kriteria']) {

                    $dt['kriteria_pertama'] = $baris['id_kriteria'];
                    $dt['nilai_analisa_kriteria'] = 1;
                    $satu['nilai_analisa_kriteria'] = 1;
                    $dt['kriteria_kedua'] = $kolom['id_kriteria'];

                    if ($this->db->insert('analisa_kriteria', $dt)) {
                        
                    } else {
                        $this->db->where('kriteria_pertama', $baris['id_kriteria']);
                        $this->db->where('kriteria_kedua', $kolom['id_kriteria']);
                        $this->db->update('analisa_kriteria', $satu);
                    }
                }
            }
        }

        $stmt5 = $this->db->get('data_kriteria')->result_array();
        foreach ($stmt5 as $row){
            $data = $this->db->select('SUM(nilai_analisa_kriteria) AS jumlah')->from('analisa_kriteria')->where('kriteria_kedua', $row['id_kriteria'])->get()->row();
            $data_kr['jumlah_kriteria'] = $data->jumlah;
            $this->db->where('id_kriteria' , $row['id_kriteria']);
            $this->db->update('data_kriteria', $data_kr);
        }
        redirect(site_url('admin/ahp_proses2'), 'refresh');
    }

    public function ahp_proses2()
    {
        $bobots2x = $this->db->get('data_kriteria')->result_array();
        foreach ($bobots2x as $baris){
            $stmt4x = $this->db->get('data_kriteria')->result_array();
            foreach ($stmt4x as $kolom){
                if ($baris['id_kriteria'] == $kolom['id_kriteria']) {
                    $c = 1/$kolom['jumlah_kriteria'];
                    $dk['hasil_analisa_kriteria'] = $c;

                    $this->db->where('kriteria_pertama' , $baris['id_kriteria']);
                    $this->db->where('kriteria_kedua' , $kolom['id_kriteria']);
                    $this->db->update('analisa_kriteria', $dk);
                } else {
                    $sql = $this->db->get_where('analisa_kriteria', array('kriteria_pertama' => $baris['id_kriteria'], 'kriteria_kedua' => $kolom['id_kriteria']))->row();
                    $c = $sql->nilai_analisa_kriteria/$kolom['jumlah_kriteria'];
                    $dk1['hasil_analisa_kriteria'] = $c;

                    $this->db->where('kriteria_pertama' , $baris['id_kriteria']);
                    $this->db->where('kriteria_kedua' , $kolom['id_kriteria']);
                    $this->db->update('analisa_kriteria', $dk1);
                }
            }
            $bobots = $this->db->select('AVG(hasil_analisa_kriteria) AS rt')->from('analisa_kriteria')->where('kriteria_pertama', $baris['id_kriteria'])->get()->row();
            $bobot['bobot_kriteria'] = $bobots->rt;
            $this->db->where('id_kriteria' , $baris['id_kriteria']);
            $this->db->update('data_kriteria', $bobot);
        }
        redirect(site_url('admin/analisa_kriteria_table'), 'refresh');
    }

    public function analisa_kriteria_table()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $kriteria = $this->db->get('data_kriteria');
        $analisa = $this->db->get('analisa_kriteria');
        $nilai = $this->db->get('nilai')->result_array();

        $data['page']  = 'analisa_kriteria_table';
        $data['title'] = 'Metode AHP';
        $data['data_kriteria'] = $kriteria->result_array();
        $data['kriteria'] = $kriteria;
        $data['analisa'] = $analisa;
        $data['nilai'] = $nilai;
        $data['count'] = $kriteria->num_rows();
        $this->load->view('backend/admin/index', $data);
    }

}
