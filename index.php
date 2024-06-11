<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_siswa;";
	$sql = mysqli_query($conn, $query);
	$no = 0;
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	
	<title>StudentSync</title>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      CRUD - BS5

	    </a>
	  </div>
	</nav>

	<!-- Judul -->
	<div class="container">
		<h1 class="mt-4">Data Mahasiswa</h1>
		<figure>
		  <blockquote class="blockquote">
		    <p>Data yang telah disimpan di database.</p>
		  </blockquote>
		  <figcaption class="blockquote-footer">
		    CRUD <cite title="Source Title">Create Read Update Delete</cite>
		  </figcaption>
		</figure>
		<a href="kelola.php" type="button" class="btn btn-primary mb-3">
			<i class="fa fa-plus"></i>
			Tambah Data
		</a>
		<div class="table-responsive">
		  <table class="table align-middle table-bordered table-hover">
		    <thead>
		      <tr>
		        <th><center>No.</center></th>
		        <th><center>NIM</center></th>
		        <th><center>Nama Mahasiswa</center></th>
		        <th><center>Jenis Kelamin</center></th>
		        <th><center>Foto Mahasiswa</center></th>
		        <th><center>Alamat</center></th>
		        <th><center>Aksi</center></th>
		      </tr>
		    </thead>
		    <tbody>
			<?php
				while($result = mysqli_fetch_assoc($sql)){
			?>
				<tr>
					<td><center>
						<?php echo ++$no; ?>.
					</center></td>
					<td>
					<?php echo $result['nisn']; ?>
					</td>
					<td>
					<?php echo $result['nama_siswa']; ?>
					</td>
					<td>
					<?php echo $result['jenis_kelamin']; ?>
					</td>
					<td>
						<img src="img/<?php echo $result['foto_siswa']; ?>" style="width: 150px;">
					</td>
					<td>
					<?php echo $result['alamat']; ?>
					</td>
					<td>
						<a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success btn-sm">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin mnghapus data tersebut?')">
							<i class="fa fa-trash"></i>
						</a>
					</td>
				</tr>
			<?php
				}
			?>
			</tbody>
		  </table>
		</div>
	</div>
</body>
</html>