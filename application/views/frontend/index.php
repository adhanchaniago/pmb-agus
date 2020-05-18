<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap -->
    <link href="<?=base_url();?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>public/css/datepicker.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url();?>public/css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="<?=base_url();?>public/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/dataTables.bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?=base_url();?>public/js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <?php $setting = $this->db->get('setting')->row();?>
    <div class="header">
        <?php include 'navigation.php'; ?>
    </div>

    <?php include $page.'.php'; ?>

    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url();?>public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>public/js/menumaker.js"></script>
    <script src="<?=base_url();?>public/js/jquery.sticky.js"></script>
    <script src="<?=base_url();?>public/js/sticky-header.js"></script>
    <script src="<?=base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>public/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</body>

</html>
