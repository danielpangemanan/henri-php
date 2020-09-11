<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database

include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai 
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	// cek jika user login sebagai 
	}else if($data['level']=="pimpinan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pimpinan";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	}else if($data['level']=="pimpinan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pimpinan";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	}else if($data['level']=="admisi"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admisi";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	}else if($data['level']=="admrmedis"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admrmedis";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	}else if($data['level']=="medis"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "medis";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	}else if($data['level']=="apotik"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "apotik";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	}else if($data['level']=="keukasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "keukasir";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");

	}else if($data['level']=="spvkasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "spvkasir";
		// alihkan ke halaman dashboard 
		header("location:/rsiakirana/book/paper/page");


	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>