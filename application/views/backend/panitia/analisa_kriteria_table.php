<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
		  <li><a href="<?=site_url('panitia');?>">Beranda</a></li>
		  <li><a href="#">Analisa Kriteria</a></li>
		  <li class="active">Tabel Analisa Kriteria</li>
		</ol>
		<div class="row">
			<div class="col-md-6 text-left">
				<strong style="font-size:18pt;"><span class="fa fa-table"></span> Perbandingan Kriteria</strong>
			</div>
			<div class="col-md-6 text-right">
				<form method="post" action="<?=site_url('panitia/del_analisa');?>">
          			<button name="hapus" class="btn btn-danger">Hapus Data/Ulang</button>
				</form>
			</div>
		</div>
		<br/>
		<table width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
				  <th>Antar Kriteria</th>
				  <?php $bobots1 = $kriteria->result_array();
				  	foreach($bobots1 as $row): ?>
				    <th><?=$row['nama_kriteria']; ?></th>
				  <?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
				<?php $bobots2 = $kriteria->result_array();
				foreach ($bobots2 as $baris): ?>
				<tr>
					<th class="active"><?=$baris['nama_kriteria'] ?></th>
					<?php 
					    $bobots3 = $kriteria->result_array();
					    foreach ($bobots3 as $kolom){
					?>
					<td>
					  	<?php
							if ($baris['id_kriteria'] == $kolom['id_kriteria']) {
								echo '1';
							} else {
					      		$kp = $this->db->get_where('analisa_kriteria', array('kriteria_pertama' => $baris['id_kriteria'], 'kriteria_kedua' => $kolom['id_kriteria']))->row();
					      		echo number_format($kp->nilai_analisa_kriteria, 4, '.', ',');
					      	}
					  	?>
					</td>
					<?php } ?>
				</tr>
				<?php endforeach; ?>
	    	</tbody>
	    	<tfoot>
				<tr class="info">
					<th>Jumlah</th>
					<?php $stmt5 = $this->db->get('data_kriteria')->result_array();
						foreach ($stmt5 as $row): ?>
						<th>
							<?php
								$data = $this->db->select('SUM(nilai_analisa_kriteria) AS jumlah')->from('analisa_kriteria')->where('kriteria_kedua', $row['id_kriteria'])->get()->row();
								echo number_format($data->jumlah, 4, '.', ',');
							?>
						</th>
					<?php endforeach; ?>
				</tr>
			</tfoot>
		</table>

		<table width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Perbandingan</th>
					<?php $bobots1x = $kriteria->result_array();
						foreach ($bobots1x as $row2x): ?>
						<th><?=$row2x['nama_kriteria'] ?></th>
					<?php endforeach; ?>
					<th class="info">Jumlah</th>
					<th class="success">Prioritas</th>
				</tr>
			</thead>
			<tbody>
				<?php $bobots2x = $kriteria->result_array();
					foreach ($bobots2x as $baris): ?>
					<tr>
						<th class="active"><?=$baris['nama_kriteria'] ?></th>
						<?php $stmt4x = $kriteria->result_array();
							foreach ($stmt4x as $kolom): ?>
							<td>
								<?php
								if ($baris['id_kriteria'] == $kolom['id_kriteria']) {
									$c = 1/$kolom['jumlah_kriteria'];
									echo number_format($c, 4, '.', ',');
								} else {
									$sql = $this->db->get_where('analisa_kriteria', array('kriteria_pertama' => $baris['id_kriteria'], 'kriteria_kedua' => $kolom['id_kriteria']))->row();
									$c = $sql->nilai_analisa_kriteria/$kolom['jumlah_kriteria'];
									echo number_format($c, 4, '.', ',');
								}
								?>
							</td>
						<?php endforeach; ?>
						<th class="info">
							<?php
							$bobot = $this->db->select('SUM(hasil_analisa_kriteria) AS hasil')->from('analisa_kriteria')->where('kriteria_pertama', $baris['id_kriteria'])->get()->row();
							$j = $bobot->hasil;
							echo number_format($j, 4, '.', ',');
							?>
						</th>
						<th class="success">
							<?php
							$bobot = $this->db->select('AVG(hasil_analisa_kriteria) AS rt')->from('analisa_kriteria')->where('kriteria_pertama', $baris['id_kriteria'])->get()->row();
							$b = $bobot->rt;
							echo number_format($b, 4, '.', ',');
							?>
						</th>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<table width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Penjumlahan</th>
					<?php $bobots1y = $kriteria->result_array(); 
					foreach ($bobots1y as $row): ?>
						<th><?=$row['nama_kriteria'] ?></th>
					<?php endforeach; ?>
					<th class="info">Jumlah</th>
				</tr>
			</thead>
			<tbody>
				<?php $sumRow = []; $bobots2y = $kriteria->result_array();
				foreach ($bobots2y as $baris): ?>
					<tr>
						<th class="active"><?=$baris['nama_kriteria'] ?></th>
						<?php $jumlah = 0; 
						$bobots3y = $kriteria->result_array();
						foreach ($bobots3y as $kolom): ?>
							<td>
							<?php
								if ($baris['id_kriteria'] == $kolom['id_kriteria']) {
									$c = $kolom['bobot_kriteria'] * 1;
									echo number_format($c, 4, '.', ',');
									$jumlah += $c;
								} else {
									$bobot = $this->db->get_where('analisa_kriteria', array('kriteria_pertama' => $baris['id_kriteria'], 'kriteria_kedua' => $kolom['id_kriteria']))->row();
									$c = $kolom['bobot_kriteria'] * $bobot->nilai_analisa_kriteria;
									echo number_format($c, 4, '.', ',');
									$jumlah += $c;
								}
								?>
							</td>
						<?php endforeach; ?>
						<th class="info">
							<?php
							$sumRow[$baris['id_kriteria']] = $jumlah;
							echo number_format($jumlah, 4, '.', ',');
							?>
						</th>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>

		<table width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Rasio Konsistensi</th>
					<th class="info">Jumlah</th>
					<th class="success">Prioritas</th>
					<th class="warning">Hasil</th>
				</tr>
			</thead>
			<tbody>
				<?php $total=0; 
				$bobots1z = $kriteria->result_array();
				foreach ($bobots1z as $row1): ?>
					<tr>
						<th class="active"><?=$row1["nama_kriteria"]?></th>
						<th class="info"><?=number_format($sumRow[$row1["id_kriteria"]], 4, '.', ',')?></th>
						<th class="success"><?=number_format($row1["bobot_kriteria"], 4, '.', ',');?></th>
						<?php $jumlah = $sumRow[$row1["id_kriteria"]] + $row1["bobot_kriteria"]; ?>
						<th class="warning"><?=number_format($jumlah, 4, '.', ',');?></th>
						<?php $total += $jumlah; ?>
					</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr class="danger">
					<th colspan="3">Rata-rata</th>
					<th><?php $rata = $total/$count; echo number_format($rata, 4, '.', ','); ?></th>
				</tr>
			</tfoot>
		</table>

		<table width="100%" class="table table-striped table-bordered">
			<tbody>
				<tr>
					<th>N (kriteria)</th>
					<td><?=$count?></td>
				</tr>
				<tr>
					<th>Hasil Akhir (X maks)</th>
					<td><?=number_format($rata, 4, '.', ',');?></td>
				</tr>
				<tr>
					<th>IR</th>
					<td><?php 
						if ($count == 3) {
							$ir = '0.58';
						} elseif ($count == 4) {
							$ir = '0.90';
						} elseif ($count == 5) {
							$ir = '1.12';
						} elseif ($count == 6) {
							$ir = '1.24';
						} elseif ($count == 7) {
							$ir = '1.32';
						} elseif ($count == 8) {
							$ir = '1.41';
						} elseif ($count == 9) {
							$ir = '1.45';
						} elseif ($count == 10) {
							$ir = '1.49';
						} elseif ($count == 11) {
							$ir = '1.51';
						} elseif ($count == 12) {
							$ir = '1.48';
						} elseif ($count == 13) {
							$ir = '1.56';
						} elseif ($count == 14) {
							$ir = '1.57';
						} elseif ($count == 15) {
							$ir = '1.59';
						} else {
							$ir = '0.00';
						}
						echo $ir; ?>
						
					</td>
				</tr>
				<tr>
					<th>CI</th>
					<td><?php $ci = ($rata-$count)/($count-1); echo number_format($ci, 4, '.', ',');?></td>
				</tr>
				<tr>
					<th>CR</th>
					<td><?php $cr = $ci/$ir; echo number_format($cr, 4, '.', ',');?></td>
				</tr>
			</tbody>
	</table>
	</div>
</div>