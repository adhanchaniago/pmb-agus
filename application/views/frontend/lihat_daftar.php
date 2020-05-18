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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <center>
                        <h1>Pendaftar Calon Siswa Baru Tahun Ajaran <?=$setting->tahun_ajaran;?></h1>
                        </center>
                        <br>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table class='table table-striped data'>
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