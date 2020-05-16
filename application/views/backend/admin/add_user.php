
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?=$title;?></h1>
		</div>
	</div><!--/.row-->
	
	<div class="panel panel-container" style="padding: 50px">
		<div class="bootstrap-table">

			<form class='form-horizontal row-border' action='<?=site_url("admin/save_user");?>' method='post' target="_parent">
				<div class='form-group'>
					<label class='col-md-2 control-label'>Username</label>
					<div class='col-md-10'>
						<input type='text' name='username' class='form-control' required />
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Password</label>
					<div class='col-md-10'>
						<input type='password' name='password' class='form-control' required />
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Hak Akses</label>
					<div class='col-md-10'>
						<select class='form-control' name='type' required>
							<option value=''>--Pilih--</option>
                            <option value='admin'>Admin</option>
                            <option value='panitia'>Panitia</option>
                        </select>
					</div>
				</div>
				<center>
					<input type='submit' class='btn btn-sm btn-primary' name='simpan' value='Simpan'>
					<a href="<?=site_url('admin/data_user');?>" class='btn btn-sm btn-primary' >Cancel</a>
				</center>
			</form>
		</div>
	</div>
</div>