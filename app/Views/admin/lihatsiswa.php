<div class="container-fluid">
	<div"row">	
		<div class="col-md-12">
			<h1 class="text-center">Data Siswa</h1>
			<table class="table">
			<tr>
			<th>Id Siswa</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusa</th>
			<th>No Telephone</th>
			</tr>
			<?php foreach ($data['siswa'] as $row): ?>
			<tr>
				<td><?php echo $row['id_siswa'];?></td>
				<td><?php echo $row['nis'];?></td>
				<td><?php echo $row['nama'];?></td>
				<td><?php echo $row['jk'];?></td>
				<td><?php echo $row['id_jurusan'];?></td>
				<td><?php echo $row['no_telephone'];?></td>
			</tr>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>