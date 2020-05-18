
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
                        <h1>Nilai Rapor Calon Peserta Didik</h1>
                        <p> Please complete the form below.</p>
                        <form method='post' action='<?=site_url('siswa/input_raport');?>'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <label class='control-label'>nisn*</label>
                                    <h3><?php echo $this->session->userdata('siswa_username');?></h3>
                                    <label class='control-label'>Jumlah Nilai Semester 1 (Bahasa Indonesia, Matematika, IPA, IPA, Bahasa Inggris)</label>
                                    <div class="col-md-6">
                                        <input type='number' name='sem1' placeholder='' class='form-control' value="<?=$raport->sem1;?>" required>
                                    </div>
                                    <label class='control-label'>Jumlah Nilai Semester 2 (Bahasa Indonesia, Matematika, IPA, IPA, Bahasa Inggris)</label>
                                    <div class="col-md-6">
                                        <input type='number' name='sem2' placeholder='' class='form-control' value="<?=$raport->sem2;?>" required>
                                    </div>
                                    <label class='control-label'>Jumlah Nilai Semester 3 (Bahasa Indonesia, Matematika, IPA, IPA, Bahasa Inggris)</label>
                                    <div class="col-md-6">
                                        <input type='number' name='sem3' placeholder='' class='form-control' value="<?=$raport->sem3;?>" required>
                                    </div>
                                    <label class='control-label'>Jumlah Nilai Semester 4 (Bahasa Indonesia, Matematika, IPA, IPA, Bahasa Inggris)</label>
                                    <div class="col-md-6">
                                        <input type='number' name='sem4' placeholder='' class='form-control' value="<?=$raport->sem4;?>" required>
                                    </div>
                                    <label class='control-label'>Jumlah Nilai Semester 5 (Bahasa Indonesia, Matematika, IPA, IPA, Bahasa Inggris)</label>
                                    <div class="col-md-6">
                                        <input type='number' name='sem5' placeholder='' class='form-control' value="<?=$raport->sem5;?>" required>
                                    </div>

                                    <label class='control-label'>Total Semua Nilai Semester 1-5 (Bahasa Indonesia, Matematika, IPA, IPA, Bahasa Inggris)</label>
                                    <div class="col-md-6">
                                        <?php foreach ($nilai as $row): ?>
                                            <input type="radio" id="<?=$row['id_detail']?>" name="nilai" value="<?=$row['id_detail']?>" <?php if ($raport->nilai == $row['id_detail']) { echo 'checked';}?>>
                                            <label for="<?=$row['id_detail']?>"><?=$row['nama_detail']?></label><br>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class='col-md-12'>
                                    <div class='form-group'>
                                        <input name='singlebutton' class='btn btn-default' type='submit' value='Simpan'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sidenav">
                    <ul class="listnone">
                        <li> <a href="<?=site_url('siswa/dashboard');?>">Biodata</a></li>
                        <li> <a href="<?=site_url('siswa/nilai_raport');?>" class="active">Input Nilai Rapor</a></li>
                        <li> <a href="<?=site_url('siswa/ubah_password');?>">Ubah Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>