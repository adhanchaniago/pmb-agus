<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?=site_url('panitia')?>">Beranda</a></li>
			<li><a href="<?=site_url('panitia/nilai')?>"><?=$title;?></a></li>
			<li class="active">Tambah Data</li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Nilai</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" id="form" action="<?=site_url('panitia/save_nilai')?>">
					<div class="form-group">
						<label for="jum_nilai">Jumlah</label>
					  <input type="text" class="form-control" id="jum_nilai" name="jum_nilai">
					</div>
					<div class="form-group">
						<label for="ket_nilai">Keterangan</label>
						<input type="text" class="form-control" id="ket_nilai" name="ket_nilai" required="on">
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