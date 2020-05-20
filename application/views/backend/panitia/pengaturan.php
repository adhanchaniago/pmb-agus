<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('panitia');?>">Beranda</a></li>
      <li class="active"><a href="#"><?=$title;?></a></li>
    </ol>
    	<div class="row">
    		<div class="col-md-6 text-left">
    			<strong style="font-size:18pt;"><span class="fa fa-bank"></span><?=$title1;?></strong>
    		</div>
    	</div>
    	<br/>
    	<table width="100%" class="table table-striped table-bordered">
        <thead>
          <tr>
            <td>Nama Sekolah</td>
            <td><?=$setting->nama_sekolah;?></td>
          </tr>
          <tr>
            <td>Tahun Ajaran</td>
            <td><?=$setting->tahun_ajaran;?></td>
          </tr>
          <tr>
            <td>Kouta Pendaftaran Jalur Umum</td>
            <td><?=$setting->kouta_pendaftaran;?></td>
          </tr>
          <tr>
            <td>Kouta Pendaftaran Jalur Prestasi</td>
            <td><?=$setting->kouta_prestasi;?></td>
          </tr>
          <tr>
            <td>Alamat Sekolah</td>
            <td><?=$setting->alamat_sekolah;?></td>
          </tr>
          <tr>
            <td>Email Sekolah</td>
            <td><?=$setting->email_sekolah;?></td>
          </tr>
          <tr>
            <td>Telpon Sekolah</td>
            <td><?=$setting->tel_sekolah;?></td>
          </tr>
        </thead>
      </table>
        <center>
          <a href="<?=site_url('panitia/edit_pengaturan');?>" class="btn btn-sm btn-warning">Ubah Pengaturan Dasar</a>
        </center>
  </div>
</div>