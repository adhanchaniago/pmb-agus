
        <h2 style="margin-top:0px"><?=$title;?></h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-3 text-right">
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        		<th>Email</th>
        		<th>Subject</th>
        		<th>Pesan</th>
                <th>Aksi</th>
            </tr>
                <?php
                    $no = 1;
                    foreach ($pesan as $row)
                    {
                ?>
            <tr>
    			<td width="80px"><?php echo $no++; ?></td>
    			<td><?php echo $row['email'] ?></td>
    			<td><?php echo $row['subject'] ?></td>
                <td><?php echo $row['pesan'] ?></td>
    			<td style="text-align:center" width="200px">
    				<?php 
    				echo site_url('sekolah/read/'.$row['id_pesan']); 
    				echo ' | '; 
    				echo site_url('sekolah/update/'.$row['id_pesan']);
    				echo ' | '; 
    				echo site_url('sekolah/delete/'.$row['id_pesan']); 
    				?>
    			</td>
            </tr>
                <?php } ?>
        </table>