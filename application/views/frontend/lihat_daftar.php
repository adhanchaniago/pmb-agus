<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-caption">
                    <h2 class="page-title">Daftar Sekarang</h2>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="home.php">Beranda</a></li>
                            <li class="active">List Pendaftar</li>
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
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <h1>Pendaftar Tahun Ajaran 2017/2018</h1>
                        <p> Thank you for your submit.</p>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table class='table table-striped'>                 
                                <thead>
                                    <tr>                         
                                        <th>No.</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Asal Sekolah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($daftar as $row) { ?>
                                        <tr>
                                            <td><?=$no++;?></td>
                                            <td><?=$row['nisn'];?></td>
                                            <td><?=$row['nama'];?></td>
                                            <td><?=$row['asal_sekolah'];?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>