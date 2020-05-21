<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?=site_url('admin')?>">Beranda</a></li>
			<li><a href="data-kriteria.php">Data Kriteria</a></li>
			<li class="active">Tambah Data</li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Kriteria</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" id="form" action="<?=site_url('admin/save_kriteria')?>">
					<div class="form-group">
						<label for="id_kriteria">ID Kriteria</label>
					  <input type="text" class="form-control" id="id_kriteria" name="id_kriteria" required readonly="on" value="<?=$id;?>">
					</div>
					<div class="form-group">
						<label for="nama">Nama Kriteria</label>
						<input type="text" class="form-control" id="nama" name="nama" minlength="5" required="on">
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-dark">Simpan</button>
						<a href="<?=site_url('admin/kriteria')?>" type="button" class="btn btn-default">Kembali</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>