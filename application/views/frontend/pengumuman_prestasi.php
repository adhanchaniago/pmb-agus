<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-caption">
                    <h2 class="page-title"><?=$title?></h2>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>
                            <li class="active"><?=$title1?></li>
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
                    <center>
                        <h1>Pengumuman Pendaftaran Jalur Prestasi</h1>
                        <h2><?=$setting->nama_sekolah;?></h2>
                        <p> Tahun Ajaran <?=$setting->tahun_ajaran?></p>
                    </center><br>
                    <table class='table table-bordered data'>
                        <thead>
                            <tr>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>Total Nilai</th>
                                <th>Peringkat</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($data as $row) { ?>
                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?=$row['nisn'];?></td>
                                    <td><?=$row['nama'];?></td>
                                    <td>
                                        <?php 
                                            $nilai = $this->db->get_where('nilai_raport', array('nisn' => $row['nisn']))->row();
                                            
                                            if (empty($nilai->total)) {
                                                echo "Nilai Kosong";
                                            }else{
                                                echo $nilai->total;
                                            }
                                        ?>
                                    </td>
                                    <td><?=$row['peringkat'];?></td>
                                    <td><?=$row['keterangan'];?></td>
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