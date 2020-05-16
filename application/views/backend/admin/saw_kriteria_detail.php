<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <ol class="breadcrumb">
      <li><a href="<?=site_url('admin');?>">Beranda</a></li>
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
        <div class="col-md-6 text-right">
          <div class="btn-group">
            <button type="button" onclick="location.href='<?=site_url('admin/add_saw_kriteria')?>'" class="btn btn-primary"><span class="fa fa-clone"></span> Tambah Data</button>
          </div>
        </div>
      </div>
      <br/>
        <div class="form-group">
          <select id="kriteria" class="form-control" name="kriteria">
            <option value="">-Pilih Kriteria-</option>
            <?php foreach($kriteria as $row): ?>
              <option value="<?=$row['id_kriteria']?>"><?=$row['nama_kriteria']?></option>
            <?php endforeach; ?>
          </select>
        </div>
    	<table width="100%" class="table table-striped table-bordered data">
        <thead>
          <tr>
            <th width="10px">ID</th>
            <th>Detail</th>
            <th>Nilai</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="tampil">
        </tbody>
      </table>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#kriteria').change(function(){ 
            var id=$(this).val();
            $.ajax({
                url : "<?php echo site_url('admin/get_detail');?>",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                     
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id_kriteria+'</td>'+
                                '<td>'+data[i].nama_detail+'</td>'+
                                '<td>'+data[i].nilai+'</td>'+
                                '<td><a href="<?=site_url();?>'+'admin/edit_saw_kriteria/'+data[i].id_detail+'" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>'+
                                '<a href="<?=site_url();?>'+'admin/del_saw_kriteria/'+data[i].id_detail+'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>'+
                                '</tr>';
                    }
                    $('#tampil').html(html);

                }
            });
            return false;
        }); 
         
    });
</script>