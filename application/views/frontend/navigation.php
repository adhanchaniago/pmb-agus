
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <a href="<?php echo base_url();?>"><img src="<?=base_url();?>public/images/logo.jpg" alt="Hair Salon Website Templates Free Download"></a>
        </div>
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="navigation">
                <div id="navigation">
                    <ul>
                        <li class="active"><a href="<?php echo base_url();?>" title="Beranda">Beranda</a></li>
                        <li class="has-sub"><a href="#" title="">Pendaftaran</a>
                            <ul>
                                <li><a href="<?php echo site_url('pendaftaran/umum');?>" title="Formulir Jalur Umum">Formulir Jalur Umum</a></li>
                                <li><a href="<?php echo site_url('pendaftaran/prestasi');?>" title="Formulir Jalur Prestasi">Formulir Jalur Prestasi</a></li>
                                <li><a href="<?php echo site_url('pendaftaran/lihat_daftar');?>" title="Lihat Pendaftar">Lihat Pendaftar</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="<?php echo site_url('login');?>" title="Akun">Akun</a></li>
                        <li class="has-sub"><a href="#" title="">Pengumuman</a>
                            <ul>
                                <li><a href="<?php echo site_url('pengumuman/umum');?>" title="Jalur Umum">Jalur Umum</a></li>
                                <li><a href="<?php echo site_url('pengumuman/prestasi');?>" title="Jalur Prestasi">Jalur Prestasi</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="<?php echo site_url('pesan');?>" title="Pesan">Kirim Pesan</a></li>
                        <li class="active"><a href="<?php echo site_url('bantuan');?>" title="Bantuan">Bantuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>