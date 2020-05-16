<?php
$kriteriaCount = $kriteria->num_rows();

$r = [];
$kriterias = $kriteria->result_array();
foreach ($kriterias as $kr) {
    $kriteriass = $this->db->get_where('data_kriteria', array('id_kriteria' => $kr['id_kriteria']))->row();
    $pcs = explode("C", $kriteriass->id_kriteria);
    $c = $kriteriaCount - $pcs[1];

    if ($c>=1) {
        $r[$kr['id_kriteria']] = $c;
    }
}
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.php">Beranda</a></li>
			<li class="active">Analisa Kriteria</li>
			<li><a href="#">Tabel Analisa Kriteria</a></li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-bomb"></span> Analisa Kriteria</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" action="<?=site_url('admin/ahp_proses')?>">
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<label>Kriteria Pertama</label>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label>Pernilaian</label>
							</div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<label>Kriteria Kedua</label>
							</div>
						</div>
					</div>
					<?php $no=1;
				        foreach ($r as $k => $v){
				            for ($i=1; $i<=$v; $i++){
				                $cek = $this->db->get_where('data_kriteria', array('id_kriteria' => $k))->result_array();
				                foreach($cek as $data){ ?>
								<div class="row">
									<div class="col-xs-12 col-md-3">
										<div class="form-group">
											<?php $row = $this->db->get_where('data_kriteria', array('id_kriteria' => $k))->row(); ?>
												<input type="text" class="form-control" value="<?=$row->nama_kriteria;?>" readonly />
												<input type="hidden" name="<?=$k?><?=$no?>" value="<?=$row->id_kriteria;?>" />
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="form-group">
											<select class="form-control" name="nl<?=$no?>">
												<?php foreach($nilai as $n): ?>
													<option value="<?=$n['jum_nilai']?>"><?=$n['jum_nilai']?> - <?=$n['ket_nilai']?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-md-3">
										<div class="form-group">
											<?php
												$pcs = explode("C", $k); $nid = "C".($pcs[1]+$i);
                    							$rows = $this->db->get_where('data_kriteria', array('id_kriteria' => $nid))->row();?>
												<input type="text" class="form-control" value="<?=$rows->nama_kriteria;?>" readonly />
												<input type="hidden" name="<?=$nid?><?=$no?>" value="<?=$rows->id_kriteria;?>" />
										</div>
									</div>
								</div>
							<?php } $no++; ?>
						<?php } ?>
					<?php } ?>
					<button type="submit" name="submit" class="btn btn-dark"> Hitung <span class="fa fa-arrow-right"></span></button>
				</form>
			</div>
		</div>
	</div>
</div>