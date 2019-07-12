<div class="container-fluid">
	<div"row">	
		<div class="col-md-12">
			<h1 class="text-center">Data Peminjaman</h1>
			<table class="table">
			<tr>
			<th>Id Pinjam</th>
			<th>Tgl Pinjam</th>
			<th>Kode Buku</th>
			</tr>
				<?php foreach ($data['peminjaman'] as $row } ?>

			<tr>
			<th><?php echo $row['Id Pinjam'];?></th>
			<th><?php echo $row['Tgl Pinjam'];?></th>
			<th><?php echo $row['Kode Buku'];?></th>
			<tr>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>