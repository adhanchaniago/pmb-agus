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
	
	<div class="panel panel-container" style="padding: 50px">
		<div class="bootstrap-table">
			<?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                      <?=$this->session->flashdata('success');?>
                    </div>
                <?php }else if ($this->session->flashdata('error')){?>
                    <div class="alert alert-danger" role="alert">
                      <?=$this->session->flashdata('error');?>
                    </div>
                <?php } ?>

			<form class='form-horizontal row-border' action='<?=site_url("admin/update_password");?>' method='post' target="_parent">
				<div class='form-group'>
					<label class='col-md-2 control-label'>Username</label>
					<div class='col-md-10'>
						<input type='text' name='username' class='form-control' value="<?=$this->session->userdata('admin_username');?>" readonly='readonly'/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Password Lama</label>
					<div class='col-md-10'>
						<input type='password' name='password' class='form-control' required/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Password Baru</label>
					<div class='col-md-10'>
						<input type='password' name='password1' class='form-control' required/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Konfirmasi Password</label>
					<div class='col-md-10'>
						<input type='password' name='password2' class='form-control' required/>
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