<?php
	if (isset($_POST['aksi'])) {
		if ($_POST['aksi'] == 'add') {
			echo "Tambah Data <a href='index.php'></>";
		} elseif ($_POST['aksi'] == 'edit') {
			echo 'Edit Data';
		}
	}
?>