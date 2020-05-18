<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('panitia');?>">Beranda</a></li>
      <li class="active"><a href="#"><?=$title;?></a></li>
    </ol>
    	<div class="row">
    		<div class="col-md-6 text-left">
    			<strong style="font-size:18pt;"><span class="fa fa-bank"></span><?=$title1;?></strong>
    		</div>
        <div class="col-md-6 text-right">
          <div class="btn-group">
            <button type="button" onclick="location.href='<?=site_url('panitia/up_pengumuman')?>'" class="btn btn-primary"><span class="fa fa-clone"></span> Refresh</button>
          </div>
        </div>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success" role="alert">
              <?=$this->session->flashdata('success');?>
            </div>
        <?php }else if ($this->session->flashdata('error')){?>
            <div class="alert alert-danger" role="alert">
              <?=$this->session->flashdata('error');?>
            </div>
        <?php } ?>
    	</div>
    	<br/>
    	<table width="100%" class="table table-striped table-bordered data">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Asal Sekolah</th>
            <th>Total</th>
            <th>Peringkat</th>
            <th>Ket</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($siswa as $row): ?>
            <tr>
              <td style="vertical-align:middle;"><?=$no++;?></td>
              <td style="vertical-align:middle;"><?php echo $row['nama'] ?></td>
              <td style="vertical-align:middle;"><?php echo $row['asal_sekolah'] ?></td>
              <td style="vertical-align:middle;"><?php echo $row['jumlah'] ?></td>
              <td style="vertical-align:middle;"><?php echo $row['peringkat'] ?></td>
              <td style="vertical-align:middle;"><?php echo $row['keterangan'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</div>