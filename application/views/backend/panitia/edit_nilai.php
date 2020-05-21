<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?=site_url('panitia')?>">Beranda</a></li>
			<li><a href="data-kriteria.php">Data Nilai</a></li>
			<li class="active"><?=$title;?></li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Edit Nilai</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" id="form" action="<?=site_url('panitia/update_nilai')?>">
					<div class="form-group">
						<label for="jum_nilai">Jumlah</label>
					  <input type="text" class="form-control" id="jum_nilai" name="jum_nilai" value="<?=$nilai->jum_nilai;?>">
					  <input type="hidden" class="form-control" name="id_nilai" value="<?=$nilai->id_nilai;?>">
					</div>
					<div class="form-group">
						<label for="ket_nilai">Keterangan</label>
						<input type="text" class="form-control" id="ket_nilai" name="ket_nilai" minlength="5" required="on" value="<?=$nilai->ket_nilai;?>">
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-dark">Simpan</button>
						<a href="<?=site_url('panitia/nilai')?>" type="button" class="btn btn-default">Kembali</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>