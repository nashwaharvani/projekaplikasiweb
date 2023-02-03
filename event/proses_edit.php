<?php
include("koneksi.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){
		//ambil data dari form
		$id = $_POST['id_daftar'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$ttl = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];
		//buat query update
		$sql ="UPDATE daftar SET nama='$nama', email='$email', tanggal_lahir='$ttl', alamat='$alamat' WHERE id_daftar = $id";
		$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
		//apakah update berhasil
		if($query){
		//kalau berhasil, alihkan ke halaman index.php dengan status=sukses
			header('location:pendaftaran.php?status=sukses');
		}else{
		// kalau gagal, alihkan ke halaman index.php dengan status=gagal
			header('location:pendaftaran.php?status=gagal');
		}
	}else{
		die("Akses dilarang...");
	}
	?>