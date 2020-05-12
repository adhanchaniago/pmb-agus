<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-caption">
                    <h2 class="page-title">Daftar Sekarang</h2>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="home.php">Beranda</a></li>
                            <li class="active">Daftar Sekarang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="widget widget-contact">
                    <!-- widget search -->
                    <h3 class="widget-title">Contact Info</h3>
                    <address>
                        <strong>Anawai</strong>
                        <br> H.E.A. Mokodompit Street,
                        <br> Kendari, POS 93232
                        <br>
                        <abbr title="Phone">P:</abbr> (+62) 822-4332-9590
                    </address>
                    <address>
                        <strong>Contact Name</strong>
                        <br>
                        <a href="mailto:#">muazharin.alfan@studentpartner.com</a>
                    </address>
                </div>
                <!-- /.widget search -->
                <div class="widget widget-social">
                    <div class="social-circle">
                        <a href="#" class="#"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="#"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            
            <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
                <div class='row'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <h1>Form Pendaftaran</h1>
                        <p> Please complete the form below. We'll do everything we can to respond to you as quickly as possible.</p>

                        <form method='post' action='<?=site_url('Pendaftaran/umum_daftar');?>'>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label class='control-label'>nisn*</label>
                                    <input type='text' name='nisn' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>nama*</label>
                                    <input type='text' name='nama' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>tempat lahir*</label>
                                    <input type='text' name='tmpt_lahir' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>jenis kelamin*</label>
                                    <select class='form-control' name='jenis_kelamin' required>
                                        <option value='Laki-Laki'>Laki-Laki</option>
                                        <option value='Perempuan'>Perempuan</option>
                                    </select>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>tanggal lahir*</label>
                                    <div class='datepicker-center'>
                                        <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                            <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                            <input class='form-control' type='text' name='tgl_lahir' readonly='readonly'>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class='col-md-6'>
                                    <label class='control-label'>agama*</label>
                                    <select class='form-control' name='agama' required>
                                        <option value='Islam'>Islam</option>
                                        <option value='Khatolik'>Khatolik</option>
                                        <option value='Protestan'>Protestan</option>
                                        <option value='Hindu'>Hindu</option>
                                        <option value='Budha'>Budha</option>
                                    </select>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>anak ke</label>
                                    <input type='number' name='anak_ke' placeholder='' class='form-control'>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>jumlah saudara</label>
                                    <input type='number' name='jml_saudara' placeholder='' class='form-control'>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Siswa*</label>
                                    <textarea class='form-control' name='alamat_siswa' rows='6' placeholder='' required></textarea>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>No. HP Siswa*</label>
                                    <input type='tel' name='hp_siswa' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Berat Badan</label>
                                    <input type='number' name='berat_badan' placeholder='' class='form-control'>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tinggi Badan</label>
                                    <input type='number' name='tinggi_badan' placeholder='' class='form-control'>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Gol. Darah</label>
                                    <select class='form-control' name='gol_darah'>
                                        <option value='A'>A</option>
                                        <option value='B'>B</option>
                                        <option value='AB'>AB</option>
                                        <option value='O'>O</option>
                                    </select>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Sekolah</label>
                                    <textarea class='form-control' name='alamat_sekolah' rows='6' placeholder=''></textarea>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Asal Sekolah*</label>
                                    <input type='text' name='asal_sekolah' placeholder='' class='form-control' required>
                                </div>
                                
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ayah*</label>
                                    <input type='text' name='nama_ayah' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Orang Tua*</label>
                                    <textarea class='form-control' name='alamat_ortu' rows='6' placeholder='' required></textarea>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ibu*</label>
                                    <input type='text' name='nama_ibu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>No. HP Orang Tua*</label>
                                    <input type='tel' name='hp_ortu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ayah*</label>
                                    <input type='text' name='kerja_ayah' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ibu*</label>
                                    <input type='text' name='kerja_ibu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Penghasilan Orang Tua*</label>
                                    <input type='number' name='penghasilan_ortu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tanggungan Anak</label>
                                    <input type='number' name='tanggungan' placeholder='' class='form-control'>
                                </div>
                                <div class='col-md-12'>
                                    <div class='form-group'>
                                        <input name='singlebutton' class='btn btn-default' type='submit' value='Daftar'>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>