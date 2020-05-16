<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="<?=site_url('admin')?>">Beranda</a></li>
			<li><a href="data-kriteria.php"><?=$title;?></a></li>
			<li class="active"><?=$title1;?></li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Kriteria</strong>
		</p>
		<div class="panel panel-default">
			<?php if ($this->session->flashdata('success')) { ?>
              <div class="alert alert-success" role="alert">
                <?=$this->session->flashdata('success');?>
              </div>
          <?php }else if ($this->session->flashdata('error')){?>
              <div class="alert alert-danger" role="alert">
                <?=$this->session->flashdata('error');?>
              </div>
          <?php } ?>
			<div class="panel-body">
				<form method="post" id="form" action="<?=site_url('admin/save_saw_kriteria')?>">
					<div class="form-group">
						<label for="id_kriteria">Kriteria</label>
					  	<select class="form-control" name="id_kriteria">
			            	<option value="">-Pilih Kriteria-</option>
			            	<?php foreach($kriteria as $row): ?>
			              	<option value="<?=$row['id_kriteria']?>"><?=$row['nama_kriteria']?></option>
			            	<?php endforeach; ?>
			          	</select>
					</div>
					<div class="form-group">
						<label for="nama">Nama Detail</label>
						<input type="text" class="form-control" id="nama" name="nama" required="on">
					</div>
					<div class="form-group">
						<label for="nilai">Nilai</label>
						<input type="text" class="form-control" id="nilai" name="nilai" required="on">
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-dark">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>