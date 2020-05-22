<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
		  <li><a href="<?=site_url('panitia');?>">Beranda</a></li>
		  <li><a href="#"><?=$title;?></a></li>
		  <li class="active"><?=$title1;?></li>
		</ol>
		<?php if ($this->session->flashdata('success')) { ?>
		  <div class="alert alert-success" role="alert">
		    <?=$this->session->flashdata('success');?>
		  </div>
		<?php }else if ($this->session->flashdata('error')){?>
		  <div class="alert alert-danger" role="alert">
		    <?=$this->session->flashdata('error');?>
		  </div>
		<?php } ?>
		<div class="row">
			<div class="col-md-6 text-left">
				<strong style="font-size:18pt;"><span class="fa fa-table"></span> Nilai Awal</strong>
			</div>
		</div>
		<br/>
		<table width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
				  <th>No</th>
				  <th>Nama</th>
				  <?php foreach($kriteria as $row): ?>
				    <th><?=$row['nama_kriteria']; ?></th>
				  <?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($peserta as $s): ?>
				<tr>
					<td><?=$no++;?></td>
					<td><?=$s['nama'];?></td>
					<td><?php 
							$jarak = $this->db->get_where('kriteria_detail', array('id_detail' => $s['jarak_sekolah']))->row();
							echo $jarak->nama_detail;?>
					</td>
					<td>
					  	<?php 
					  		$query = $this->db->get_where('nilai_raport', array('nisn' => $s['nisn']));
					  		if ($query->num_rows() > 0) {
					  			$data = $query->row();
					  			if ($data->nilai == null) {
					  				echo "Nilai Kosong";
					  			}else{
						  			$nilai = $this->db->get_where('kriteria_detail', array('id_detail' => $data->nilai))->row();
									echo $nilai->nama_detail;
								}
					  		}else{
					  			echo "Nilai Kosong";
					  		}
							?>
					</td>
					<td><?php 
							$ranking = $this->db->get_where('kriteria_detail', array('id_detail' => $s['ranking']))->row();
							echo $ranking->nama_detail;?>
					</td>
				</tr>
				<?php endforeach; ?>
	    	</tbody>
		</table>

		<div class="row">
			<div class="col-md-6 text-left">
				<strong style="font-size:18pt;"><span class="fa fa-table"></span> Tabel Matriks</strong>
			</div>
		</div>
		<br/>
		<table width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
				  <th>No</th>
				  <th>Nama</th>
				  <?php foreach($kriteria as $row): ?>
				    <th><?=$row['nama_kriteria']; ?></th>
				  <?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($peserta as $p): ?>
				<tr>
					<td><?=$no++;?></td>
					<td><?=$p['nama'];?></td>
					<?php foreach ($kriteria as $k): ?>
						<?php $matrik = $this->db->get_where(nilai_awal_prestasi, array('nisn' => $p['nisn'], 'id_kriteria' => $k['id_kriteria']));
							$matriks = $matrik->row();
						?>
						<td><?php 
							if ($matrik->num_rows() > 0) {
								echo $matriks->nilai;
							}else {
								echo "Nilai Kosong";
							}
							?></td>
					<?php endforeach; ?>
				</tr>
				<?php endforeach; ?>
	    	</tbody>
		</table>

		<div class="row">
			<div class="col-md-6 text-left">
				<strong style="font-size:18pt;"><span class="fa fa-table"></span> Tabel Normalisasi Matriks</strong>
			</div>
		</div>
		<br/>
		<table width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
				  <th>No</th>
				  <th>Nama</th>
				  <?php foreach($kriteria as $row): ?>
				    <th><?=$row['nama_kriteria']; ?></th>
				  <?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($peserta as $p): ?>
				<tr>
					<td><?=$no++;?></td>
					<td><?=$p['nama'];?></td>
					<?php foreach ($kriteria as $k): ?>
						<?php $matrik = $this->db->get_where(nilai_awal_prestasi, array('nisn' => $p['nisn'], 'id_kriteria' => $k['id_kriteria']))->row();
							$matriks = $this->db->get_where(nilai_awal_prestasi, array('nisn' => $p['nisn'], 'id_kriteria' => $k['id_kriteria']));
							$min = $this->db->select('*')->from(nilai_awal_prestasi)->where('id_kriteria', $k['id_kriteria'])->order_by('nilai','ASC')->limit(1)->get()->row();
							$max = $this->db->select('*')->from(nilai_awal_prestasi)->where('id_kriteria', $k['id_kriteria'])->order_by('nilai','DESC')->limit(1)->get()->row();

							if ($matriks->num_rows() > 0) {
								$c = $min->nilai / $matrik->nilai;
								$b = $matrik->nilai / $max->nilai;
							}else{
								$c = "Nilai kosong";
								$b = "Nilai kosong";
							}
						?>
						<td>
							<?php 
									if($k['atribut_kriteria'] == 'cost'){
										echo $c;
									}else if($k['atribut_kriteria'] == 'benefit'){
										echo $b;
									}else{
										echo "Error";
									}
								// echo "Max ".$k['id_kriteria']." = ".$max->nilai;
								// echo "Min ".$k['id_kriteria']." = ".$min->nilai;
								// echo $matrik->nilai." ".$b;
							?>
						</td>
					<?php endforeach; ?>
				</tr>
				<?php endforeach; ?>
	    	</tbody>
		</table>

		<div class="row">
			<div class="col-md-6 text-left">
				<strong style="font-size:18pt;"><span class="fa fa-table"></span> Tabel Normalisasi Matriks Dikalikan Bobot</strong>
			</div>
		</div>
		<br/>
		<form action='<?=site_url("panitia/saw_hasil_prestasi_simpan");?>' method='post'>
			<table width="100%" class="table table-striped table-bordered">
				<thead>
					<tr>
					  <th>No</th>
					  <th>Nama</th>
					  <?php foreach($kriteria as $row): ?>
					    <th><?=$row['nama_kriteria']; ?></th>
					  <?php endforeach; ?>
					  <th>Jumlah</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($peserta as $p): ?>
					<tr>
						<td><?=$no;?></td>
						<td>
							<?=$p['nama'];?>
							<input type="hidden" name="nisn<?=$no;?>" value="<?=$p['nisn'];?>">
						</td>
						<?php 
							$hitung = 0;
							foreach ($kriteria as $k): ?>
							<?php 
								$matrik = $this->db->get_where(nilai_awal_prestasi, array('nisn' => $p['nisn'], 'id_kriteria' => $k['id_kriteria']))->row();
								$matriks = $this->db->get_where(nilai_awal_prestasi, array('nisn' => $p['nisn'], 'id_kriteria' => $k['id_kriteria']));
								$min = $this->db->select('*')->from(nilai_awal_prestasi)->where('id_kriteria', $k['id_kriteria'])->order_by('nilai','ASC')->limit(1)->get()->row();
								$max = $this->db->select('*')->from(nilai_awal_prestasi)->where('id_kriteria', $k['id_kriteria'])->order_by('nilai','DESC')->limit(1)->get()->row();
								if ($matriks->num_rows() > 0) {
									$c = $min->nilai / $matrik->nilai;
									$b = $matrik->nilai / $max->nilai;
								}else{
									$c = "Nilai kosong";
									$b = "Nilai kosong";
								}
							?>
							<td>
								<?php 
								if ($matriks->num_rows() > 0) {
									if($k['atribut_kriteria'] == 'cost'){
										$bobot = $c * $k['bobot_kriteria'];
										$jumlah = $bobot;
										echo $bobot;
									}else if($k['atribut_kriteria'] == 'benefit'){
										$bobot = $b * $k['bobot_kriteria'];
										$jumlah = $bobot;
										echo $bobot;
									}else{
										echo "Error";
									}
									$hitung = $jumlah + $hitung;
								}else{
									echo $c;
								}
								?>
							</td>
						<?php endforeach; ?>
						<td>
							<?=$hitung;?>
							<input type="hidden" name="jumlah<?=$no;?>" value="<?=$hitung;?>">
						</td>
					</tr>
					<?php 
						$no++;
						endforeach; ?>
		    	</tbody>
			</table>
			<center>
				<input type='submit' class='btn btn-sm btn-primary' name='simpan' value='Simpan Hasil'>
			</center>
		</form>
	</div>
</div>