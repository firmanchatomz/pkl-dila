<div class="container-fluid">
	<div "row">
		<div class="col-md-12">
		<table class="table">
		<h1 class="text-center">Kategori Buku</h1>
		<tr>
		<th>Id Buku</th>
		<th>Judul</th>
		<th>Penulis</th>
		<th>Penerbit</th>	
		</tr>
				<?php foreach ($data['kategori'] as $row } ?>
		<tr>
		<th><?php echo $row['Id Buku']; ?></th>
		<th><?php echo $row['Judul']; ?></th>
		<th><?php echo $row['Penulis']; ?></th>
		<th><?php echo $row['Penerbit']; ?></th>	
		</tr>
	<?php endforeach?>
				</table>
			</div>	
		</div>