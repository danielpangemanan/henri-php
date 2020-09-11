<?php

$id         = $_GET['id'];
$user  		= mysqli_query($koneksi, "select * from login where id='$id'");
$data       = mysqli_fetch_array($user);

?>


<br>
	  <div class="container">
		<div class="row">
		 <div class="col-md-8 col-sm-12">
	  					<!-- SECTION INPUT -->
						
	  					<form id="form" role="form" method="post" action="">
	  						
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>PERUBAHAN DATA AKUN PENGGUNA</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s" >
                                   
                                   		
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'];?>">		

                                        <label for="nama">Nama User</label><br>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'];?>">
                                  		<br>
										                               
                                        <label for="username">Username</label><br>
                                        <input type="text" class="form-control" name="username" value="<?php echo $data['username'];?>">
                                  		<br>

                                   
                                        <label for="password">Password Pengguna</label><br>
                                        <input type="text" class="form-control" name="password" placeholder="masukkan password baru/isi kembali password lama anda..." required="">
                                   		<br>

                                   		<label for="level">Jenis Akun</label>
										<select name="level" class="form-control">
											<option value="<?php echo $data['level'];?>">Jenis Akun Tidak Perlu Peubahan</option>
											<option value="pimpinan">Pimpinan</option>
											<option value="admin">Admin</option>
											<option value="dokter">Dokter</option>
											<option value="perawat">Perawat</option>
											<option value="rmedis">Rekam Medis</option>
										</select>
                                        <br>

                                        <!-- <label for="is_aktif">Status Akun</label>
										<select name="is_aktif" class="form-control">
											<option value="">.....</option>
											<option value="y">Aktif</option>
											<option value="n">Non Aktif</option>
										</select>
                                        <br> -->
                                            
									   <div>
											<button type="submit" name="tambah"
													class="btn btn-primary" >Simpan</button>

											<a type="button" href="/rsudprovsulut/aksesadmin/manage1/adminrs.php?page=admin"
													class="btn btn-primary" >Batal</a>
										</div>
								  		
								  </form>
								
						</div>
	  					
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

							mysqli_query($koneksi, "INSERT henri SET akun2='$nama', akun2='$username', password='$password', level='$level' where id='$id'"); 
							
							echo "<script>alert('Perubahan Data Berhasil');window.location=''</script>";
						  }
						?>
	  					

		</div>
	</div>
  </div>  
<br><br>
<br><br>    