<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('panitia');?>">Beranda</a></li>
      <li><a href="#"><?=$title;?></a></li>
      <li class="active"><?=$title1;?></li>
    </ol>
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
      </div>
      <br/>
      <table width="100%" class="table table-striped table-bordered data">
        <thead>
          <tr>
            <th width="10px">NO</th>
            <th>ID Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Atribut</th>
            <th>Bobot Kriteria</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($kriteria as $row): ?>
            <tr>
              <td style="vertical-align:middle;"><?=$no++;?></td>
              <td style="vertical-align:middle;"><?php echo $row['id_kriteria'] ?></td>
              <td style="vertical-align:middle;"><?php echo $row['nama_kriteria'] ?></td>
              <td style="vertical-align:middle;">
                <?php echo $row['atribut_kriteria'] ?>&nbsp
                <a type="button" class="btn btn-warning pull-right" data-toggle="modal" data-target="#kriteria<?=$row['id_kriteria']?>"><i class="entypo-pencil"></i>Edit</a>
              </td>
              <td style="vertical-align:middle;"><?php echo $row['bobot_kriteria'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</div>