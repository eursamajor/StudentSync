<?php
	include 'koneksi.php';
	session_start();


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

	<!-- Data Tables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

	<title>StudentSync</title>
</head>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dt').DataTable();
    });
</script>


<body>
	<nav class="navbar navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      StudentSync

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
		    FIF S1 Informatika<cite title="Source Title"></cite>
		  </figcaption>
		</figure>
		<a href="kelola.php" type="button" class="btn btn-primary mb-3">
			<i class="fa fa-plus"></i>
			Tambah Data
		</a>

		<?php
			if(isset($_SESSION['eksekusi'])): 
		?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?php
							echo $_SESSION['eksekusi'];
						?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
		<?php
			session_destroy();
			endif;
		?>

		<div class="table-responsive">
		  <table id="dt" class="table align-middle cell-border hover">
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
	<div class="mb-5"></div>
</body>
</html>