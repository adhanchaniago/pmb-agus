<div class="page-header"><!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Login</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="../home.php">Beranda</a></li>
                                <li class="active">akun</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page header -->
    <div class="content">
        <div class="container">
            <div class="col-md-offset-2 col-md-8">
                <div class="mb60 text-center section-title">
                    <!-- section title start-->
                    <h1>FORM LOGIN</h1>
                    <h5 class="small-title ">Make sure you have registed!</h5>
                </div>
                    <!-- /.section title start-->
                <div class="container1">
                <img src="<?=base_url();?>public/images/user.png">
                    <form action="<?=site_url('Login/login');?>" method="post"> 
                        <div class="form-input">
                            <input type="text" name="user" placeholder="Enter Username" required="">
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Enter Password" required="">
                        </div>
                        <input type="submit" name="submit" class="btn-submit" value="Submit">
                    </form>
                </div><br>
                <h5 class="small-title">Catatan:</h5>
                <p>1. Pastikan Anda sudah terdaftar sebagai calon siswa baru.<br>
                2. Login menggunakan NISN sebagai username dan password awal.<br>
                3. Jangan lupa untuk mengubah password Anda jika berhasil login.</p>
            </div>
        </div>
    </div>