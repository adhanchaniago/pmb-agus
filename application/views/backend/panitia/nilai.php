    <form method="post">
    	<div class="row">
        <?php if ($this->session->flashdata('success')) { ?>
              <div class="alert alert-success" role="alert">
                <?=$this->session->flashdata('success');?>
              </div>
          <?php }else if ($this->session->flashdata('error')){?>
              <div class="alert alert-danger" role="alert">
                <?=$this->session->flashdata('error');?>
              </div>
          <?php } ?>
    		<div class="col-md-6 text-left">
    			<strong style="font-size:18pt;"><span class="fa fa-bank"></span><?=$title;?></strong>
    		</div>
    		<div class="col-md-6 text-right">
          <div class="btn-group">
      			<button type="button" onclick="location.href='<?=site_url('panitia/add_nilai')?>'" class="btn btn-primary"><span class="fa fa-clone"></span> Tambah Data</button>
          </div>
    		</div>
    	</div>
    	<br/>
    	<table width="100%" class="table table-striped table-bordered data">
          <thead>
            <tr>
              <th width="10px">NO</th>
              <th>Jumlah Nilai</th>
              <th>Keterangan Nilai</th>
              <th width="100px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($nilai as $row): ?>
              <tr>
                <td style="vertical-align:middle;"><?=$no++;?></td>
                <td style="vertical-align:middle;"><?php echo $row['jum_nilai'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['ket_nilai'] ?></td>
                <td style="text-align:center;vertical-align:middle;">
                  <a href="<?php echo site_url('panitia/edit_nilai/'.$row['id_nilai']) ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a href="<?php echo site_url('panitia/del_nilai/'.$row['id_nilai']) ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    </form>
  </div>
</div>