
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
                                    <label class='control-label'>nilai bahasa indonesia</label>
                                    <table>
                                        <tr>
                                            <td>Sems 1</td>
                                            <td>Sems 2</td>
                                            <td>Sems 3</td>
                                            <td>Sems 4</td>
                                            <td>Sems 5</td>
                                        </tr>
                                        <tr>
                                            <td><input type='number' name='bindo1' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bindo2' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bindo3' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bindo4' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bindo5' placeholder='' class='form-control' required></td>
                                        </tr>
                                    </table>
                                    
                                    <label class='control-label'>nilai bahasa inggris</label>
                                    <table>
                                        <tr>
                                            <td>Sems 1</td>
                                            <td>Sems 2</td>
                                            <td>Sems 3</td>
                                            <td>Sems 4</td>
                                            <td>Sems 5</td>
                                        </tr>
                                        <tr>
                                            <td><input type='number' name='bing1' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bing2' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bing3' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bing4' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='bing5' placeholder='' class='form-control' required></td>
                                        </tr>
                                    </table>

                                    <label class='control-label'>nilai ipa</label>
                                    <table>
                                        <tr>
                                            <td>Sems 1</td>
                                            <td>Sems 2</td>
                                            <td>Sems 3</td>
                                            <td>Sems 4</td>
                                            <td>Sems 5</td>
                                        </tr>
                                        <tr>
                                            <td><input type='number' name='ipa1' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ipa2' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ipa3' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ipa4' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ipa5' placeholder='' class='form-control' required></td>
                                        </tr>
                                    </table>

                                    <label class='control-label'>nilai ips</label>
                                    <table>
                                        <tr>
                                            <td>Sems 1</td>
                                            <td>Sems 2</td>
                                            <td>Sems 3</td>
                                            <td>Sems 4</td>
                                            <td>Sems 5</td>
                                        </tr>
                                        <tr>
                                            <td><input type='number' name='ips1' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ips2' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ips3' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ips4' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='ips5' placeholder='' class='form-control' required></td>
                                        </tr>
                                    </table>

                                    <label class='control-label'>nilai matematika</label>
                                    <table>
                                        <tr>
                                            <td>Sems 1</td>
                                            <td>Sems 2</td>
                                            <td>Sems 3</td>
                                            <td>Sems 4</td>
                                            <td>Sems 5</td>
                                        </tr>
                                        <tr>
                                            <td><input type='number' name='mtk1' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='mtk2' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='mtk3' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='mtk4' placeholder='' class='form-control' required></td>
                                            <td><input type='number' name='mtk5' placeholder='' class='form-control' required></td>
                                        </tr>
                                    </table>
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