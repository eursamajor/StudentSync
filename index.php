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
		<h1 class="mt-4">Data Siswa</h1>
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
		        <th><center>NISN</center></th>
		        <th><center>Nama Siswa</center></th>
		        <th><center>Jenis Kelamin</center></th>
		        <th><center>Foto Siswa</center></th>
		        <th><center>Alamat</center></th>
		        <th><center>Aksi</center></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td><center>1</center></td>
		        <td>11223340</td>
		        <td>Muhamad Khoir Fahni Nur Islami</td>
		        <td>Laki-laki</td>
		        <td>
		        	<img src="img/img1.jpeg" style="width: 150px;">
		        </td>
		        <td>Jl. Pidana 1</td>
		        <td>
		        	<a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
		        		<i class="fa fa-pencil"></i>
		        	</a>
		        	<button type="button" class="btn btn-danger btn-sm">
		        		<i class="fa fa-trash"></i>
		        	</button>
		        </td>
		      </tr>
		      <tr>
		        <td><center>2</center></td>
		        <td>11223341</td>
		        <td>Annisaa Alya Hafiza</td>
		        <td>Perempuan</td>
		        <td>
		        	<img src="img/img2.jpeg" style="width: 150px;">
		        </td>
		        <td>Jl. Pekanbaru 1</td>
		        <td>
		        	<a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm">
		        		<i class="fa fa-pencil"></i>
		        	</a>
		        	<button type="button" class="btn btn-danger btn-sm">
		        		<i class="fa fa-trash"></i>
		        	</button>
		        </td>
		      </tr>
		  </table>
		</div>
	</div>
</body>
</html>