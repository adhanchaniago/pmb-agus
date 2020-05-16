
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?=$title;?></h1>
		</div>
	</div><!--/.row-->
	
	<div class="panel panel-container">
		<div class="panel panel-container">
		<a class='btn btn-sm btn-primary' href="<?php echo site_url('admin/add_user');?>">Tambah User</a>
		<div class="bootstrap-table">
		<br>
			<div class="fixed-table-container">
				<?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                      <?=$this->session->flashdata('success');?>
                    </div>
                <?php }else if ($this->session->flashdata('error')){?>
                    <div class="alert alert-danger" role="alert">
                      <?=$this->session->flashdata('error');?>
                    </div>
                <?php } ?>
				<div class="fixed-table-header">
					<table></table>
				</div>
				<div class="fixed-table-body">
					<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>
						<table data-toggle="table" data-url="tables/data1.json" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" class="table table-hover">
						<thead>
							<tr>
								<th style="">
									<div class="th-inner sortable" align="center">No.</div>
									<div class="fht-cell"></div>
								</th>
								<th style="">
									<div class="th-inner sortable" align="center">Username</div>
									<div class="fht-cell"></div>
								</th>
								<th style="">
									<div class="th-inner sortable" align="center">Hak Akses</div>
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
								foreach ($user as $row):?>
								<tr>
									<td><?=$no++;?></td>
									<td><?=$row['username'];?></td>
									<td><?=$row['type'];?></td>
									<td width='35' align='center'>
										<a class='btn btn-sm btn-primary' 
											href="<?php echo site_url('admin/edit_user/'.$row['adm_id']);?>">Edit</a>
									</td>
									<td width='35' align='center'>
										<a class='btn btn-sm btn-danger' href="<?php echo site_url('admin/del_user/'.$row['adm_id']);?>" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>		
</div>