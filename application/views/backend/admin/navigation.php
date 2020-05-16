	<div class="sidebar-menu">
		<header class="logo-env">
			<!-- logo -->
			<!-- <div class="logo">
				<a href="index.html">
					<img src="<?= base_url() ?>assets/images/logo-light.jpg" width="120" alt="" />
				</a>
			</div> -->


			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
		</header>

		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<li><a href=" <?php echo base_url('home') ?> " target="_blank"><i class="entypo-monitor"></i><span>Halaman Depan</span></a></li>

			<li <?php if($page=="dahsboard") echo 'class="active opened active" '; ?> ><?= anchor('admin/dashboard','<i class=entypo-gauge></i><span>Dashboard</span>'); ?></li>

			<li <?php if($page =="data_pendaftar" || $page =="data_user" || $page =="edit_pendaftar" || $page =="add_user" || $page =="edit_user") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="#">
					<i class="entypo-layout"></i>
					<span>Data User</span>
				</a>
				<ul>
					<li <?php if($page=="data_pendaftar" ) echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/data_pendaftar','<span class=entypo-layout>Siswa/Pendaftar</span>'); ?></li>
					<li <?php if($page=="data_user") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/data_user','<span class=entypo-menu>Panitia/Admin</span>'); ?></li>
				</ul>
			</li>

			<li <?php if($page=="kriteria" || $page=="add_kriteria" || $page=="edit_kriteria" || $page=="banding" || $page=="Hasil" || $page=="hasil") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="#">
					<i class="entypo-book"></i>
					<span>Metode AHP</span>
				</a>
				<ul>
					<li <?php if($page=="kriteria" || $page=="add_kriteria" || $page=="edit_kriteria") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/kriteria','<span class=entypo-direction>Kriteria</span>'); ?></li>
					<li <?php if($page=="banding" || $page=="Banding") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/skala','<span class=entypo-switch> Skala Dasar AHP</span>'); ?></li>
					<li <?php if($page=="hasil" || $page=="Hasil") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/perbandingan','<span class=entypo-chart-bar>Perbandingan Kriteria</span>'); ?></li>
				</ul>
			</li>
			<li <?php if($page=="Alternatif" || $page=="alternatif" || $page=="Banding" || $page=="banding" || $page=="Hasil" || $page=="hasil") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="ui-panels.html">
					<i class="entypo-book"></i>
					<span>Metode SAW</span>
				</a>
				<ul>
					<li <?php if($page=="alternatif" || $page=="Alternatif") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Alternatif','<span class=entypo-direction>Alternatif</span>'); ?></li>
					<li <?php if($page=="banding" || $page=="Banding") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Perbandingan/banding','<span class=entypo-switch> Perbandingan</span>'); ?></li>
					<li <?php if($page=="hasil" || $page=="Hasil") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('Perbandingan/hasil','<span class=entypo-chart-bar>Hasil Perhitungan</span>'); ?></li>
				</ul>
			</li>
			<li <?php if($page=="pesan" || $page=="lihat_pesan") echo 'class="active opened active" '; ?>><?= anchor('admin/pesan','<i class=entypo-mail></i><span>Pesan</span>'); ?></li>
			<li <?php if($page=="Auth" ||$page=="auth") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="ui-panels.html">
					<i class="entypo-tools"></i>
					<span>Pengaturan</span>
				</a>
				<ul>
					<li <?php if($page=="Auth" || $page=="auth") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('admin/Auth','<span class=entypo-user> Users</span>'); ?></li>
				</ul>
			</li>
			<li><?= anchor('login/logout','<i class=entypo-logout></i><span>Logout</span>'); ?></li>
		</ul>
	</div>