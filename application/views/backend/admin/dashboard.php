<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Data Pendaftar</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Pendaftar</h1>
		</div>
	</div><!--/.row-->
	
	<div class="panel panel-container">
		<div class="panel panel-container" style="padding: 50px">
		<div class="bootstrap-table">
		<br>
			<div class="fixed-table-container">
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
									<td width='35' align='center'><a class='btn btn-sm btn-primary' href=editpeserta.php?id=$data[0]>Edit</a></td>
									<td width='35' align='center'><a class='btn btn-sm btn-danger' href="admin_user.php?tombol=delete&adm_id='1'" title="Hapus" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Hapus</a>
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