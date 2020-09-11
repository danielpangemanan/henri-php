<?php
			 				 
						  if(isset($_POST['tambah'])) {
						  	$id = htmlspecialchars($_POST['id']);
							$nama = htmlspecialchars($_POST['nama']);
							$username= htmlspecialchars($_POST['username']);
							$password= htmlspecialchars($_POST['password']);
							$level = htmlspecialchars($_POST['level']);
							// $is_aktif= htmlspecialchars($_POST['is_aktif']); 
							
							// Insert user data into table
							mysqli_query($koneksi, "UPDATE login SET nama='$nama', username='$username', password='$password', level='$level' where id='$id'"); 
							
							echo "<script>alert('Perubahan Data Berhasil');window.location='../aksesadmin/manage1/adminrs.php?page=admin'</script>";
						  }
						?>