<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('admin');?>">Beranda</a></li>
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
            <td><h4>Nama Sekolah</h4></td>
            <td><h4><?=$setting->nama_sekolah;?></h4></td>
          </tr>
          <tr>
            <td><h4>Tahun Ajaran</h4></td>
            <td><h4><?=$setting->tahun_ajaran;?></h4></td>
          </tr>
          <tr>
            <td><h4>Kouta Pendaftaran</h4></td>
            <td><h4><?=$setting->kouta_pendaftaran;?></h4></td>
          </tr>
          <tr>
            <td><h4>Alamat Sekolah</h4></td>
            <td><h4><?=$setting->alamat_sekolah;?></h4></td>
          </tr>
          <tr>
            <td><h4>Email Sekolah</h4></td>
            <td><h4><?=$setting->email_sekolah;?></h4></td>
          </tr>
          <tr>
            <td><h4>Telpon Sekolah</h4></td>
            <td><h4><?=$setting->tel_sekolah;?></h4></td>
          </tr>
        </thead>
      </table>
      <form method="post" action="<?=site_url('admin/edit_pengaturan');?>">
        <center>
          <input type='submit' class='btn btn-sm btn-warning' name='simpan' value='Edit'>
        </center>
      </form>
  </div>
</div>