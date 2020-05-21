<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?=site_url('panitia')?>">Beranda</a></li>
			<li><a href="data-kriteria.php">Data Kriteria</a></li>
			<li class="active">Edit Data</li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Edit Kriteria</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" id="form" action="<?=site_url('panitia/update_kriteria')?>">
					<div class="form-group">
						<label for="id_kriteria">ID Kriteria</label>
					  <input type="text" class="form-control" id="id_kriteria" name="id_kriteria" required readonly="on" value="<?=$kriteria->id_kriteria;?>">
					</div>
					<div class="form-group">
						<label for="nama">Nama Kriteria</label>
						<input type="text" class="form-control" id="nama" name="nama" minlength="5" required="on" value="<?=$kriteria->nama_kriteria;?>">
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-dark">Simpan</button>
						<a href="<?=site_url('panitia/kriteria')?>" type="button" class="btn btn-default">Kembali</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>