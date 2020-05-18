<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('panitia');?>">Beranda</a></li>
      <li class="active"><a href="#"><?=$title;?></a></li>
    </ol>
        <div class="row">
            <div class="col-md-6 text-left">
                <strong style="font-size:18pt;"><span class="fa fa-bank"></span><?=$title;?></strong>
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
        <br>
        <table width="100%" class="table table-striped table-bordered data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($pesan as $row)
                    {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['subject'] ?></td>
                    <td><?php echo $row['pesan'] ?></td>
                    <td>
                        <a class="btn btn-s btn-primary" data-toggle="modal" data-target="#pesan<?=$row['id_pesan']?>"><i class="entypo-eye"></i>Lihat</a>
                        <a class='btn btn-sm btn-danger' href="<?php echo site_url('panitia/del_pesan/'.$row['id_pesan']);?>" onclick="return confirm('Apakah anda yakin ingin menghapus pesan ?')"><i class="entypo-trash"></i>Hapus</a>
                    </td>
                </tr>
            </tbody>
                <?php } ?>
        </table>
    </div>      
</div>
