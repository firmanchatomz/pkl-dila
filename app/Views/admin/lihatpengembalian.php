<div class="container-fluid">
	<div"row">	
		<div class="col-md-12">
			<h1 class="text-center">Data Pengembalian</h1>
			<table class="table">
			<tr>
			<th>Id Kembali</th>
			<th>Tgl Kembali</th>
			<th>Keterlambatan</th>
			<th>Kode Buku</th>
			</tr>
					<?php foreach ($data['pengembalian'] as $row } ?>
			<tr>
			<th><?php echo $row['Id Kembali'];?></th>
			<th><?php echo $row['Tgl Kembali'];?></th>
			<th><?php echo $row['Keterlambatan'];?></th>
			<th><?php echo $row['Kode Buku'];?></th>
			</tr>
				<?php endforeach ?>
			</table>
		</div>
	</div>
</div>