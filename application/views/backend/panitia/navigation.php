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

			<li <?php if($page=="dashboard") echo 'class="active opened active" '; ?> ><?= anchor('panitia/dashboard','<i class=entypo-gauge></i><span>Dashboard</span>'); ?></li>

			<li <?php if($page=="data_pendaftar") echo 'class="active opened active" '; ?> ><?= anchor('panitia/data_pendaftar','<i class=entypo-layout></i><span>Data Pendaftar/Siswa</span>'); ?></li>
>

			<li <?php if($page=="kriteria" || $page=="add_kriteria" || $page=="edit_kriteria" || $page=="nilai" || $page=="add_nilai" || $page=="edit_nilai" || $page=="analisa_kriteria" || $page=="analisa_kriteria_table") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="#">
					<i class="entypo-book"></i>
					<span>Metode AHP</span>
				</a>
				<ul>
					<li <?php if($page=="kriteria" || $page=="add_kriteria" || $page=="edit_kriteria") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/kriteria','<span class=entypo-direction>Kriteria</span>'); ?></li>
					<li <?php if($page=="nilai" || $page=="add_nilai" || $page=="edit_nilai") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/nilai','<span class=entypo-switch> Skala Dasar AHP</span>'); ?></li>
					<li <?php if($page=="analisa_kriteria" || $page=="analisa_kriteria_table") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/ahp','<span class=entypo-chart-bar>Perbandingan Kriteria</span>'); ?></li>
				</ul>
			</li>
			<li <?php if($page=="saw_kriteria" || $page=="saw_kriteria_detail" || $page=="add_saw_kriteria" || $page=="edit_saw_kriteria" || $page=="saw_hasil_umum" || $page=="saw_hasil_prestasi") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="ui-panels.html">
					<i class="entypo-book"></i>
					<span>Metode SAW</span>
				</a>
				<ul>
					<li <?php if($page=="saw_kriteria") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/saw_kriteria','<span class=entypo-direction>Kriteria</span>'); ?></li>
					<li <?php if($page=="saw_kriteria_detail" || $page=="add_saw_kriteria" || $page=="edit_saw_kriteria") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/saw_kriteria_detail','<span class=entypo-switch> Kriteria Detail</span>'); ?></li>
					<li <?php if($page=="saw_hasil_umum") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/saw_hasil_umum','<span class=entypo-chart-bar>Seleksi Jalur Umum</span>'); ?></li>
					<li <?php if($page=="saw_hasil_prestasi") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/saw_hasil_prestasi','<span class=entypo-chart-bar>Seleksi Jalur Prestasi</span>'); ?></li>
				</ul>
			</li>
			<li <?php if($page=="pengumuman_umum" || $page=="pengumuman_prestasi") echo 'class="active opened active multiple-expanded" '; ?>>
				<a href="ui-panels.html">
					<i class="entypo-book"></i>
					<span>Pengumuman</span>
				</a>
				<ul>
					<li <?php if($page=="pengumuman_umum") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/pengumuman_umum','<span class=entypo-direction>Jalur Umum</span>'); ?></li>
					<li <?php if($page=="pengumuman_prestasi") echo 'class="active opened active multiple-expanded" '; ?>><?= anchor('panitia/pengumuman_prestasi','<span class=entypo-switch> Jalur Prestasi</span>'); ?></li>
				</ul>
			</li>
			<li <?php if($page=="pesan" || $page=="lihat_pesan") echo 'class="active opened active" '; ?>><?= anchor('panitia/pesan','<i class=entypo-mail></i><span>Pesan</span>'); ?></li>
			<li <?php if($page=="pengaturan") echo 'class="active opened active multiple-expanded" '; ?>>
				<?= anchor('panitia/pengaturan','<i class=entypo-tools></i><span>Pengaturan</span>'); ?>
			</li>
			<li><?= anchor('login/logout','<i class=entypo-logout></i><span>Logout</span>'); ?></li>
		</ul>
	</div>