<?php 

	$bobots2 = $this->db->get('data_kriteria')->result_array();
	foreach ($bobots2 as $baris){
		$bobots3 = $kriteria->result_array();
		foreach ($bobots3 as $kolom){
			if ($baris['id_kriteria'] == $kolom['id_kriteria']) {

	      		$dt['kriteria_pertama'] = $baris['id_kriteria'];
	      		$dt['nilai_analisa_kriteria'] = 1;
	      		$satu['nilai_analisa_kriteria'] = 1;
	      		$dt['kriteria_kedua'] = $kolom['id_kriteria'];

	      		if ($this->db->insert('analisa_kriteria', $dt)) {
					
				} else {
					$this->db->where('kriteria_pertama', $baris['id_kriteria']);
					$this->db->where('kriteria_kedua', $kolom['id_kriteria']);
					$this->db->update('analisa_kriteria', $satu);
			  	}
	      	}
		}
	}

	$stmt5 = $this->db->get('data_kriteria')->result_array();
	foreach ($stmt5 as $row){
		$data = $this->db->select('SUM(nilai_analisa_kriteria) AS jumlah')->from('analisa_kriteria')->where('kriteria_kedua', $row['id_kriteria'])->get()->row();
		$data_kr['jumlah_kriteria'] = $data->jumlah;
		$this->db->where('kriteria_kedua' , $row['id_kriteria']);
		$this->db->update('data_kriteria', $data_kr);
	} 
?>



<?php 
	$bobots1x = $kriteria->result_array();
	foreach ($bobots1x as $row2x){ 
		$row2x['nama_kriteria'];
	}

	$bobots2x = $kriteria->result_array();
	foreach ($bobots2x as $baris){
		$baris['nama_kriteria'];
		$stmt4x = $kriteria->result_array();
		foreach ($stmt4x as $kolom){
			if ($baris['id_kriteria'] == $kolom['id_kriteria']) {
				$c = 1/$kolom['jumlah_kriteria'];
				$dk['hasil_analisa_kriteria'] = $c;

				$this->db->where('kriteria_pertama' , $baris['id_kriteria']);
				$this->db->where('kriteria_kedua' , $kolom['id_kriteria']);
				$this->db->update('analisa_kriteria', $dk);
				echo number_format($c, 4, '.', ',');
			} else {
				$sql = $this->db->get_where('analisa_kriteria', array('kriteria_pertama' => $baris['id_kriteria'], 'kriteria_kedua' => $kolom['id_kriteria']))->row();
				$c = $sql->nilai_analisa_kriteria/$kolom['jumlah_kriteria'];
				$dk1['hasil_analisa_kriteria'] = $c;

				$this->db->where('kriteria_pertama' , $baris['id_kriteria']);
				$this->db->where('kriteria_kedua' , $kolom['id_kriteria']);
				$this->db->update('analisa_kriteria', $dk1);
				echo number_format($c, 4, '.', ',');
			}
		}
		
		$bobot = $this->db->select('SUM(hasil_analisa_kriteria) AS hasil')->from('analisa_kriteria')->where('kriteria_pertama', $baris['id_kriteria'])->get()->row();
		$j = $bobot->hasil;
		echo number_format($j, 4, '.', ',');
		$bobot = $this->db->select('AVG(hasil_analisa_kriteria) AS rt')->from('analisa_kriteria')->where('kriteria_pertama', $baris['id_kriteria'])->get()->row();
		$b = $bobot->rt;
		$bobot['bobot_kriteria'] = $b;
		$this->db->where('id_kriteria' , $baris['id_kriteria']);
		$this->db->update('data_kriteria', $bobot);
		echo number_format($b, 4, '.', ',');
	}
?>




<?php 

	$bobots1y = $kriteria->result_array(); 
	foreach ($bobots1y as $row){
		$row['nama_kriteria'];
	}

	$sumRow = [];
	$bobots2y = $kriteria->result_array();
	foreach ($bobots2y as $baris){
		$baris['nama_kriteria'];
		$jumlah = 0;
		$bobots3y = $kriteria->result_array();
		foreach ($bobots3y as $kolom){
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
		}

		$sumRow[$baris['id_kriteria']] = $jumlah;
		echo number_format($jumlah, 4, '.', ',');
	}
?>




<?php

	$total=0; 
	$bobots1z = $kriteria->result_array();
	foreach ($bobots1z as $row1){
		$row1["nama_kriteria"];
		number_format($sumRow[$row1["id_kriteria"]], 4, '.', ',');
		number_format($row1["bobot_kriteria"], 4, '.', ',');
		$jumlah = $sumRow[$row1["id_kriteria"]] + $row1["bobot_kriteria"];
		number_format($jumlah, 4, '.', ',');
		$total += $jumlah;
	}

	$rata = $total/$count;
	echo number_format($rata, 4, '.', ',');
	$count;
	number_format($rata, 4, '.', ',');
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

	echo $ir;
	$ci = ($rata-$count)/($count-1);
	echo number_format($ci, 4, '.', ',');
	$cr = $ci/$ir; echo number_format($cr, 4, '.', ',');

?>