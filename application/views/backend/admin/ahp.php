<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active"><?=$title;?></li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?=$title;?></h1>
		</div>
	</div><!--/.row-->
	
	<div class="panel panel-container" style="padding: 5px">
		<div class="bootstrap-table">
			<div class="row-fluid">
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Pair Comparation Kriteria</a></li>
						<li><a href="#tab2" data-toggle="tab">Pair Comparation 1</a></li>
						<li><a href="#tab3" data-toggle="tab">Pair Comparation 2</a></li>
						<li><a href="#tab4" data-toggle="tab">Pair Comparation 3</a></li>
						<li><a href="#tab5" data-toggle="tab">Pair Comparation 4</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab1">
								<b>Matrik Kriteria</b>
							 	<form method="post" action="proses.php#tab6" id="test" name="test">
							 	<table class="table table-bordered">
								  	<tr>
										<td></td>
										<td>Lokasi</td>
										<td>Nilai</td>
										<td>Prestasi</td>
									</tr>
									<tr>
										<td>Lokasi</td>
										<td><input type="text" name="data1" value="1" class="span12" /></td>
										<td><input type="text" name="data1" value="1" class="span12" /></td>
										<td><input type="text" name="data1" value="1" class="span12" /></td>
									</tr>
									<tr>
										<td>Nilai</td>
										<td><input type="text" name="data1" value="0" class="span12" /></td>
										<td><input type="text" name="data1" value="0" class="span12" /></td>
										<td><input type="text" name="data1" value="0" class="span12" /></td>
									</tr>
									<tr>
										<td>Prestasi</td>
										<td><input type="text" name="data1" value="0" class="span12" /></td>
										<td><input type="text" name="data1" value="0" class="span12" /></td>
										<td><input type="text" name="data1" value="0" class="span12" /></td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								  </table>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>