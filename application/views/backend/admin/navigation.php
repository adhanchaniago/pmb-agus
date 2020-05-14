<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="menu_admin.php"><span>Admin</span></a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?=base_url();?>public/images/user.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= $this->session->userdata('admin_username'); ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li <?php if($page == 'dashboard') echo "class='active'";?>><a href="<?=site_url('admin');?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li <?php if($page == 'data_pendaftar' || $page == 'edit_pendaftar') echo "class='active'";?>><a href="<?=site_url('admin/data_pendaftar');?>"><em class="fa fa-calendar">&nbsp;</em> Data Pendaftar</a></li>
			<li <?php if($page == 'data_user' || $page == 'add_user' || $page == 'edit_user') echo "class='active'";?>><a href="<?=site_url('admin/data_user');?>"><em class="fa fa-calendar">&nbsp;</em> Data User</a></li>
			<li <?php if($page == 'ahp') echo "class='active'";?>><a href="<?=site_url('admin/ahp');?>"><em class="fa fa-calendar">&nbsp;</em> Metode AHP</a></li>
			<li <?php if($page == 'saw') echo "class='active'";?>><a href="<?=site_url('admin/saw');?>"><em class="fa fa-calendar">&nbsp;</em> Metode SAW</a></li>
			<li <?php if($page == 'pesan' || $page == 'lihat_pesan') echo "class='active'";?>><a href="<?=site_url('admin/pesan');?>"><em class="fa fa-bar-chart">&nbsp;</em> Pesan</a></li>
			<li <?php if($page == 'ubah_password') echo "class='active'";?>><a href="<?=site_url('admin/ubah_password');?>"><em class="fa fa-toggle-off">&nbsp;</em> Rubah Password</a></li>
			<li><a href="<?=site_url('login/logout');?>" title="Logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>