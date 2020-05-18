<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('panitia');?>">Beranda</a></li>
      <li class="active"><a href="#"><?=$title;?></a></li>
    </ol>
    	<div class="row">
    		<div class="col-md-6 text-left">
    			<strong style="font-size:18pt;"><span class="fa fa-bank"></span><?=$title;?></strong>
    		</div>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success" role="alert">
              <?=$this->session->flashdata('success');?>
            </div>
        <?php }else if ($this->session->flashdata('error')){?>
            <div class="alert alert-danger" role="alert">
              <?=$this->session->flashdata('error');?>
            </div>
        <?php } ?>
    	</div>
    	<br/>
		<table width="100%" class="table table-striped table-bordered data">
			<thead>
				<tr>
					<th>
						No.
					</th>
					<th>
						NISN
					</th>
					<th>
						Nama
					</th>
					<th>
						Asal Sekolah
					</th>
					<th>
						Aksi
					</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
					foreach ($pendaftar as $row):?>
					<tr>
						<td><?=$no++;?></td>
						<td><?=$row['nisn'];?></td>
						<td><?=$row['nama'];?></td>
						<td><?=$row['asal_sekolah'];?></td>
						<td>
							<a class='btn btn-sm btn-primary' 
								href="<?php echo site_url('panitia/edit_pendaftar/'.$row['nisn']);?>">Edit</a>
							<a class='btn btn-sm btn-danger' href="<?php echo site_url('panitia/del_pendaftar/'.$row['nisn']);?>" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">Hapus</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>