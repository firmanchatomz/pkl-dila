<!DOCTYPE html>
<html>
<head>
	<title>halaman data kategori</title>
</head>
<body>
	<?php foreach ($data['kategori'] as $row):?>
		nama kategori adalah <?php echo $row['nama_kategori'];?><br>
	<?php endforeach ?>
</body>
</html>
