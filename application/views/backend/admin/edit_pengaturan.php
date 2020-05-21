<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?=site_url('admin')?>">Beranda</a></li>
			<li><a href="#"><?=$title;?></a></li>
			<li class="active"><?=$title1;?></li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span><?=$title1;?></strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" id="form" action="<?=site_url('admin/update_pengaturan')?>">
					<div class="form-group">
						<label for="nama_sekolah">Nama Sekolah</label>
					  <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?=$setting->nama_sekolah;?>">
					</div>
					<div class="form-group">
						<label for="tahun_ajaran">Tahun Ajaran</label>
					  <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" value="<?=$setting->tahun_ajaran;?>">
					</div>
					<div class="form-group">
						<label for="kouta_pendaftaran">Kouta Pendaftaran Umum</label>
					  <input type="number" class="form-control" id="kouta_pendaftaran" name="kouta_pendaftaran" value="<?=$setting->kouta_pendaftaran;?>">
					</div>
					<div class="form-group">
						<label for="kouta_prestasi">Kouta Pendaftaran Prestasi</label>
					  <input type="number" class="form-control" id="kouta_prestasi" name="kouta_prestasi" value="<?=$setting->kouta_prestasi;?>">
					</div>
					<div class="form-group">
						<label for="alamat_sekolah">Alamat Sekolah</label>
					  <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="<?=$setting->alamat_sekolah;?>">
					</div>
					<div class="form-group">
						<label for="email_sekolah">Email Sekolah</label>
					  <input type="email" class="form-control" id="email_sekolah" name="email_sekolah" value="<?=$setting->email_sekolah;?>">
					</div>
					<div class="form-group">
						<label for="tel_sekolah">Telepon Sekolah</label>
					  <input type="tel" class="form-control" id="tel_sekolah" name="tel_sekolah" value="<?=$setting->tel_sekolah;?>">
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-dark">Simpan</button>
						<a href="<?=site_url('admin/pengaturan')?>" type="button" class="btn btn-default">Kembali</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>