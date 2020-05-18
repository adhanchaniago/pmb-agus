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
    			<strong style="font-size:18pt;"><span class="fa fa-bank"></span> Data Kriteria</strong>
    		</div>
    		<div class="col-md-6 text-right">
          <div class="btn-group">
      			<button type="button" onclick="location.href='<?=site_url('panitia/add_kriteria')?>'" class="btn btn-primary"><span class="fa fa-clone"></span> Tambah Data</button>
          </div>
    		</div>
    	</div>
    	<br/>
    	<table width="100%" class="table table-striped table-bordered data">
          <thead>
            <tr>
              <th width="10px">NO</th>
              <th>ID Kriteria</th>
              <th>Nama Kriteria</th>
              <th>Bobot Kriteria</th>
              <th width="100px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($kriteria as $row): ?>
              <tr>
                <td style="vertical-align:middle;"><?=$no++;?></td>
                <td style="vertical-align:middle;"><?php echo $row['id_kriteria'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['nama_kriteria'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['bobot_kriteria'] ?></td>
                <td style="text-align:center;vertical-align:middle;">
                  <a href="<?php echo site_url('panitia/edit_kriteria/'.$row['id_kriteria']) ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a href="<?php echo site_url('panitia/del_kriteria/'.$row['id_kriteria']) ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    </form>
  </div>
</div>