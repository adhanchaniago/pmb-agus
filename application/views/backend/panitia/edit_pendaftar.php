
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?=$title;?></h1>
		</div>
	</div><!--/.row-->
	
	<div class="panel panel-container" style="padding: 50px">
		<div class="bootstrap-table">

			<form class='form-horizontal row-border' action='<?=site_url("panitia/update_pendaftar");?>' method='post' target="_parent">
				<div class='form-group'>
					<label class='col-md-2 control-label'>Jalur Pendaftaran</label>
					<div class='col-md-10'>
						<input type='text' name='jalur' value="<?=$pendaftar->jalur;?>" class='form-control' readonly='readonly'/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>NISN</label>
					<div class='col-md-10'>
						<input type='text' name='nisn' value="<?=$pendaftar->nisn;?>" class='form-control' readonly='readonly'/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Nama</label>
					<div class='col-md-10'>
						<input type='text' name='nama' value="<?=$pendaftar->nama;?>" class='form-control'/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>No Peserta UN</label>
					<div class='col-md-10'>
						<input type='number' name='no_peserta' value="<?=$pendaftar->no_peserta;?>" class='form-control'/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Asal Sekolah</label>
					<div class='col-md-10'>
						<input type='text' name='asal_sekolah' value="<?=$pendaftar->asal_sekolah;?>" class='form-control'/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Jurusan</label>
					<div class='col-md-10'>
						<select class='form-control' name='jurusan' required>
                            <option value='IPA' <?php if($pendaftar->jurusan=='IPA'){echo 'selected'; }?> >IPA</option>
                            <option value='IPS'<?php if($pendaftar->jurusan=='IPS'){echo 'selected'; }?> >IPS</option>
                        </select>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Jarak ke Sekolah</label>
					<div class='col-md-10'>
                        <?php foreach ($lokasi as $row): ?>
                            <input type="radio" id="<?=$row['id_detail']?>" name="jarak_sekolah" value="<?=$row['id_detail']?>" <?php if ($pendaftar->jarak_sekolah == $row['id_detail']) { echo 'checked';}?>>
                            <label for="<?=$row['id_detail']?>"><?=$row['nama_detail']?></label><br>
                        <?php endforeach; ?>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Tempat Lahir</label>
					<div class='col-md-10'>
						<input type='text' name='tempat_lahir' value="<?=$pendaftar->tempat_lahir;?>" class='form-control'/>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Tanggal Lahir</label>
					<div class='col-md-10'>
						<div class='datepicker-center'>
                            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                    <input class='form-control' type='text' name='tgl_lahir' value="<?=$pendaftar->tanggal_lahir;?>" readonly='readonly'>
                            </div>
                        </div>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label'>Jenis Kelamin</label>
					<div class='col-md-10'>
						<select class='form-control' name='jenis_kelamin' required>
                            <option value='Laki-Laki' <?php if($pendaftar->jenis_kelamin=='Laki-Laki'){echo 'selected'; }?> >Laki-Laki</option>
                            <option value='Perempuan'<?php if($pendaftar->jenis_kelamin=='Perempuan'){echo 'selected'; }?> >Perempuan</option>
                        </select>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Agama</label>
					<div class='col-md-10'>
						<select class='form-control' name='agama' required>
							<option value='Islam'<?php if($pendaftar->agama=='Islam'){echo 'selected'; }?> >Islam</option>
                            <option value='Khatolik' <?php if($pendaftar->agama=='Khatolik'){echo 'selected'; }?> >Khatolik</option>
                            <option value='Protestan' <?php if($pendaftar->agama=='Protestan'){echo 'selected'; }?> >Protestan</option>
                            <option value='Hindu' <?php if($pendaftar->agama=='Hindu'){echo 'selected'; }?> >Hindu</option>
                            <option value='Budha' <?php if($pendaftar->agama=='Budha'){echo 'selected'; }?> >Budha</option>
                        </select>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Alamat Siswa</label>
					<div class='col-md-10'>
						<textarea class='form-control' name='alamat_siswa' rows='6' placeholder='' required><?=$pendaftar->alamat_siswa;?></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Kabupaten</label>
					<div class='col-md-10'>
						<input type='text' name='kabupaten' placeholder='' class='form-control' value="<?=$pendaftar->kabupaten;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Kecamatan</label>
					<div class='col-md-10'>
						<input type='text' name='kecamatan' placeholder='' class='form-control' value="<?=$pendaftar->kecamatan;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Nama Ayah</label>
					<div class='col-md-10'>
						<input type='text' name='nama_ayah' placeholder='' class='form-control' value="<?=$pendaftar->nama_ayah;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Nama Ibu</label>
					<div class='col-md-10'>
						<input type='text' name='nama_ibu' placeholder='' class='form-control' value="<?=$pendaftar->nama_ibu;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Alamat Orang Tua</label>
					<div class='col-md-10'>
						<textarea class='form-control' name='alamat_ortu' rows='6' placeholder='' required><?=$pendaftar->alamat_ortu;?></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Pekerjaan Ayah</label>
					<div class='col-md-10'>
						<input type='text' name='pekerjaan_ayah' placeholder='' class='form-control' value="<?=$pendaftar->kerja_ayah;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Pekerjaan Ibu</label>
					<div class='col-md-10'>
						<input type='text' name='pekerjaan_ibu' placeholder='' class='form-control' value="<?=$pendaftar->kerja_ibu;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Penghasilan Ayah</label>
					<div class='col-md-10'>
						<input type='number' name='penghasilan_ayah' placeholder='' class='form-control' value="<?=$pendaftar->penghasilan_ayah;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Penghasilan Ibu</label>
					<div class='col-md-10'>
						<input type='number' name='penghasilan_ibu' placeholder='' class='form-control' value="<?=$pendaftar->penghasilan_ibu;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >No. HP Org Tua</label>
					<div class='col-md-10'>
						<input type='tel' name='hp_ortu' placeholder='' class='form-control' value="<?=$pendaftar->hp_ortu;?>">
					</div>
				</div>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Ranking Semester Terakhir</label>
					<div class='col-md-10'>
						<?php foreach ($prestasi as $row): ?>
                            <input type="radio" id="<?=$row['id_detail']?>" name="rangking" value="<?=$row['id_detail']?>" <?php if ($pendaftar->ranking == $row['id_detail']) { echo 'checked';}?>>
                            <label for="<?=$row['id_detail']?>"><?=$row['nama_detail']?></label><br>
                        <?php endforeach; ?>
					</div>
				</div>
				<hr>
				<div class='form-group'>
					<label class='col-md-2 control-label' >Total Nilai Raport</label>
					<div class='col-md-10'>
						<input type='number' name='nilai' placeholder='' class='form-control' value="<?=$nilai->total;?>" readonly="on">
					</div>
				</div>
				
				</div>
				<center>
					<input type='submit' class='btn btn-sm btn-primary' name='simpan' value='Update'>
					<a href="<?=site_url('panitia/data_pendaftar');?>" class='btn btn-sm btn-primary' >Cancel</a>
				</center>
			</form>
			</div>
		</div>		
</div>