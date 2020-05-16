<h2 style="margin-top:0px"><?=$title;?></h2>
<div class="row" style="margin-bottom: 10px">
	<div class="col-md-3 text-right">
    </div>
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
<table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover">
	<thead>
		<tr>
			<th style="">
				<div class="th-inner sortable" align="center">No.</div>
				<div class="fht-cell"></div>
			</th>
			<th style="">
				<div class="th-inner sortable" align="center">NISN</div>
				<div class="fht-cell"></div>
			</th>
			<th style="">
				<div class="th-inner sortable" align="center">Nama</div>
				<div class="fht-cell"></div>
			</th>
			<th style="">
				<div class="th-inner sortable" align="center">Asal Sekolah</div>
				<div class="fht-cell"></div>
			</th>
			<th style="" colspan="2">
				<div class="th-inner sortable" align="center">Aksi</div>
				<div class="fht-cell"></div>
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
				<td width='35' align='center'>
					<a class='btn btn-sm btn-primary' 
						href="<?php echo site_url('admin/edit_pendaftar/'.$row['nisn']);?>">Edit</a>
				</td>
				<td width='35' align='center'>
					<a class='btn btn-sm btn-danger' href="<?php echo site_url('admin/del_pendaftar/'.$row['nisn']);?>" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">Hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>