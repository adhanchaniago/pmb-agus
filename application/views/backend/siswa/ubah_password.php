
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
                    <h1>Edit password</h1>
                    <p> For secure your account.</p>
                    <form method='post' action='<?=site_url('siswa/update_password');?>'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <label class='control-label'>nisn*</label>
                                <h3><?=$this->session->userdata('siswa_username');?></h3>
                                <label class='control-label'>password lama</label>
                                <input type='password' name='password' placeholder='' class='form-control' required>
                                <label class='control-label'>password baru</label>
                                <input type='password' name='password1' placeholder='' class='form-control' required>
                                <label class='control-label'>konfirmasi password</label>
                                <input type='password' name='password2' placeholder='' class='form-control' required>
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
                        <li> <a href="<?=site_url('siswa/nilai_raport');?>">Input Nilai Rapor</a></li>
                        <li> <a href="<?=site_url('siswa/ubah_password');?>" class="active">Ubah Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>