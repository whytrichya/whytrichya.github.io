<?php
//Include file koneksi ke database
include "admin/koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$nama_lengkap=$_POST["nama_lengkap"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$tanggal_lahir=$_POST["tanggal_lahir"];
$alamat=$_POST["alamat"];
$hp=$_POST["hp"];



//Menginput data ke tabel
  $hasil=mysqli_query($koneksi, "INSERT INTO user (username,password,nama_lengkap,jenis_kelamin,tanggal_lahir,alamat,hp) VALUES('$username','$password','$nama_lengkap','$jenis_kelamin','$tanggal_lahir','$alamat','$hp')");

//Kondisi apakah berhasil atau tidak
  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='login.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='register.php';
		  </script>";
  }

?>