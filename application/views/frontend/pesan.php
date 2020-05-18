<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-caption">
                    <h2 class="page-title">Daftar Sekarang</h2>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?=base_url();?>">Beranda</a></li>
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
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Kirim Pesan Anda Untuk Kami</h1>
                    <p></p>
                        <form method="post" action="<?=site_url('pesan/kirim');?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="email">email</label>
                                    <input type="email" name="email" id="email" placeholder="" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="Subject">Subject</label>
                                    <input type="text" name="subject" id="Subject" placeholder="" class="form-control" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Message</label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder="" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                     <div class="form-group">
                                            <input name="singlebutton" class="btn btn-default" type="submit" value="Kirim">
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