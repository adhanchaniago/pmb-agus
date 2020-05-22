
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-caption">
                    <h2 class="page-title">Update Data Pribadi Anda</h2>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <!--li><a href="index.html"></a></li>
                            <li class="active">Service Single</li-->
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
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success" role="alert">
                  <?=$this->session->flashdata('success');?>
                </div>
            <?php }else if ($this->session->flashdata('error')){?>
                <div class="alert alert-danger" role="alert">
                  <?=$this->session->flashdata('error');?>
                </div>
            <?php } ?>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <h1>Biodata Peserta</h1>
                <p> Please complete the form below.</p>
                    <form method='post' action='<?=site_url('siswa/update_bio');?>'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <label class='control-label'>nisn*</label>
                                <h3><?=$siswa->nisn;?></h3>
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>nama*</label>
                                <input type='text' name='nama' placeholder='' class='form-control' value="<?=$siswa->nama;?>">
                                <input type='hidden' name='jalur' placeholder='' class='form-control' value="<?=$siswa->jalur;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>no. peserta un</label>
                                <input type='text' name='no_peserta' placeholder='' class='form-control' value="<?=$siswa->no_peserta;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>nama sekolah asal</label>
                                <input type='text' name='asal_sekolah' placeholder='' class='form-control' value="<?=$siswa->asal_sekolah;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>jurusan</label>
                                <select class='form-control' name='jurusan'>
                                    <option value='IPA' <?php if($siswa->jurusan == 'IPA'){echo "selected";}?>>IPA</option>
                                    <option value='IPS' <?php if($siswa->jurusan == 'IPS'){echo "selected";}?>>IPS</option>
                                </select>
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>jarak ke sekolah</label><br>
                                <?php foreach ($lokasi as $row): ?>
                                    <input type="radio" id="<?=$row['id_detail']?>" name="jarak_sekolah" value="<?=$row['id_detail']?>" <?php if ($siswa->jarak_sekolah == $row['id_detail']) { echo 'checked';}?>>
                                    <label for="<?=$row['id_detail']?>"><?=$row['nama_detail']?></label><br>
                                <?php endforeach; ?>
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>tempat lahir*</label>
                                <input type='text' name='tmpt_lahir' placeholder='' class='form-control' value="<?=$siswa->tempat_lahir;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>jenis kelamin*</label>
                                <select class='form-control' name='jenis_kelamin' required>
                                    <option value='Laki-Laki' <?php if($siswa->jenis_kelamin == 'Laki-Laki'){echo "selected";}?>>Laki-Laki</option>
                                    <option value='Perempuan' <?php if($siswa->jenis_kelamin == 'Perempuan'){echo "selected";}?>>Perempuan</option>
                                </select>
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>tanggal lahir*</label>
                                <div class='datepicker-center'>
                                    <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                        <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                        <input class='form-control' type='text' name='tgl_lahir' readonly='readonly' value="<?=$siswa->tanggal_lahir;?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class='col-md-6'>
                                <label class='control-label'>agama*</label>
                                <select class='form-control' name='agama'>
                                    <option value='Islam' <?php if($siswa->agama == 'Islam'){echo "selected";}?>>Islam</option>
                                    <option value='Khatolik' <?php if($siswa->agama == 'Khatolik'){echo "selected";}?>>Khatolik</option>
                                    <option value='Protestan' <?php if($siswa->agama == 'Protestan'){echo "selected";}?>>Protestan</option>
                                    <option value='Hindu' <?php if($siswa->agama == 'Hindu'){echo "selected";}?>>Hindu</option>
                                    <option value='Budha' <?php if($siswa->agama == 'Budha'){echo "selected";}?>>Budha</option>
                                </select>
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Alamat Siswa*</label>
                                <textarea class='form-control' name='alamat_siswa' rows='6' placeholder=''><?=$siswa->alamat_siswa?></textarea>
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Kabupaten</label>
                                <input type='text' name='kabupaten' placeholder='' class='form-control' value="<?=$siswa->kabupaten;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Kecamatan</label>
                                <input type='text' name='kecamatan' placeholder='' class='form-control' value="<?=$siswa->kecamatan;?>">
                            </div>
                            
                            <div class='col-md-6'>
                                <label class='control-label'>Nama Ayah*</label>
                                <input type='text' name='nama_ayah' placeholder='' class='form-control' value="<?=$siswa->nama_ayah;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Nama Ibu*</label>
                                <input type='text' name='nama_ibu' placeholder='' class='form-control' value="<?=$siswa->nama_ibu;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Alamat Orang Tua*</label>
                                <textarea class='form-control' name='alamat_ortu' rows='6' placeholder=''><?=$siswa->alamat_ortu?></textarea>
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Pekerjaan Ayah*</label>
                                <input type='text' name='kerja_ayah' placeholder='' class='form-control' value="<?=$siswa->kerja_ayah;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Pekerjaan Ibu*</label>
                                <input type='text' name='kerja_ibu' placeholder='' class='form-control' value="<?=$siswa->kerja_ibu;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Penghasilan Ayah</label>
                                <input type='number' name='penghasilan_ayah' placeholder='' class='form-control' value="<?=$siswa->penghasilan_ayah;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Penghasilan Ibu</label>
                                <input type='number' name='penghasilan_ibu' placeholder='' class='form-control' value="<?=$siswa->penghasilan_ibu;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>No. HP Orang Tua*</label>
                                <input type='tel' name='hp_ortu' placeholder='' class='form-control' value="<?=$siswa->hp_ortu;?>">
                            </div>
                            <div class='col-md-6'>
                                <label class='control-label'>Rangking semester terakhir</label><br>
                                <?php foreach ($prestasi as $row): ?>
                                    <input type="radio" id="<?=$row['id_detail']?>" name="rangking" value="<?=$row['id_detail']?>" <?php if ($siswa->ranking == $row['id_detail']) { echo 'checked';}?>>
                                    <label for="<?=$row['id_detail']?>"><?=$row['nama_detail']?></label><br>
                                <?php endforeach; ?>
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidenav">
                    <ul class="listnone">
                        <li> <a href="<?=site_url('siswa/dashboard');?>" class="active">Biodata</a></li>
                        <li> <a href="<?=site_url('siswa/nilai_raport');?>">Input Nilai Rapor</a></li>
                        <li> <a href="<?=site_url('siswa/ubah_password');?>">Ubah Password</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>