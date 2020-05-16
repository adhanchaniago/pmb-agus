<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="<?= base_url() ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/skins/blue.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/libs/select2/select2.min.css"/>
	<script src="<?= base_url() ?>assets/js/jquery-1.11.0.min.js"></script>
	<script src="<?=base_url();?>assets/libs/select2/select2.min.js"></script>

	<!--[if lt IE 9]><script src="<?= base_url() ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="page-body page-fade-only skin-blue" data-url="http://neon.dev">
    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    	<?php include 'navigation.php'; ?>
    	<div class="main-content">
    		<div class="row">
	        	<!-- Profile Info and Notifications -->
	        	<div class="col-md-6 col-sm-8 clearfix">

	        		<ul class="user-info pull-left pull-none-xsm">

	        			<!-- Profile Info -->
	        			<li class="profile-info dropdown">
	                    <!-- add class "pull-right" if you want to place this from right -->

	        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	        					<img src="<?= base_url() ?>assets/images/thumb-1@2xx.png" alt="" class="img-circle" width="44" />
	        					<?php echo$this->session->userdata('admin_username'); ?>
	        				</a>

	        				<ul class="dropdown-menu">

	        					<!-- Reverse Caret -->
	        					<li class="caret"></li>
	        					<!-- Profile sub-links -->

	        					<li>
	        						<a href="<?=site_url('admin/pesan');?>">
	        							<i class="entypo-mail"></i>
	        							Pesan
	        						</a>
	        					</li>

	        					<li>
	        						<a href="<?php echo site_url('login/logout'); ?>">
	        							<i class="entypo-logout"></i>
	        							Logout
	        						</a>
	        					</li>
	        				</ul>
	        			</li>

	        		</ul>

	        	</div>

	        </div>

	        <hr/>

			<!-- konten disini -->
    		<?php include $page.'.php'; ?>

      <!--   </div>
      </div> -->
    <br />

<?php include 'footer.php'; ?>

</div>
	<link rel="stylesheet" href="<?= base_url() ?>assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/js/rickshaw/rickshaw.min.css">
	<link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/dataTables.bootstrap.min.css">
	<!-- Bottom Scripts -->
	<script src="<?= base_url() ?>assets/js/jquery-1.11.0.min.js"></script>
	<script src="<?= base_url() ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	
	<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
	<script src="<?= base_url() ?>assets/js/joinable.js"></script>
	<script src="<?= base_url() ?>assets/js/resizeable.js"></script>
	<script src="<?= base_url() ?>assets/js/neon-api.js"></script>
	<script src="<?= base_url() ?>assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?= base_url() ?>assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="<?= base_url() ?>assets/js/jquery.sparkline.min.js"></script>
	<script src="<?= base_url() ?>assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="<?= base_url() ?>assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="<?= base_url() ?>assets/js/raphael-min.js"></script>
	<script src="<?= base_url() ?>assets/js/morris.min.js"></script>
	<script src="<?= base_url() ?>assets/js/toastr.js"></script>
	<script src="<?= base_url() ?>assets/js/neon-chat.js"></script>
	<script src="<?= base_url() ?>assets/js/neon-custom.js"></script>
	<script src="<?= base_url() ?>assets/js/neon-demo.js"></script>
	<script src="<?= base_url() ?>assets/js/fileinput.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>


<!-- modal hapus -->
<div class="modal fade" id="confirm-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Konfirmasi!</h4>
			</div>
			
			<div class="modal-body">
				Yakin ingin menghapus data ini ?
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger btn-ok">Hapus saja</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>


<script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>
