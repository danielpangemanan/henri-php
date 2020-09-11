
<br>
<form id="form" role="form" method="post" action="#">
  <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
       <h2 style="text-align: center;">KELOLA AKUN </h2>
  </div>

<br>


<div class="col-md-12">
	  
	<div class="col-md-6">
	<!-- SECTION INPUT -->
	<div class="container-fluid">
			<div class="table-responsive">
					 <table class="table  table-bordered">
						 <thead>
								<tr>
									<th>No</th>
									<th>Nama User</th>
									<th>Username</th>
									<th>Password
									<br>
									<i>password dienkripsi, silahkan merubah password jika diperlukan</i>		
									</th>
									<th>Edit Data</th>
								</tr>
							</thead>
							<tbody>


								<?php 

									$no=1;
									
									$sql = $koneksi->query("SELECT * FROM login ORDER BY id ASC");
								
								
									while ($data=$sql->fetch_assoc()) {

								?>


									

								<tr class="odd gradeX">
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo $data['username']; ?></td>
									<td style="text-align: center"><i>xxxxxxxxxx</i></td>
									<td><a href="?l=editakun&id=<?php echo $data['id'];?>">edit</a></td>
								</tr>

								<?php

								}

								?>
							   </tbody>
							 </table>

						</div>

					</div>
															
				</div>		

				<div class="col-md-6">	
                        <div class="wow fadeInUp" data-wow-delay="0.8s" >
                           
                                <label for="nama">Nama User</label><br>
                                <input type="text" class="form-control" name="nama" placeholder="...." required>
                          		<br>
								                               
                                <label for="username">Username</label><br>
                                <input type="text" class="form-control" name="username" placeholder="...."required>
                          		<br>

                           
                                <label for="password">Password Pengguna</label><br>
                                <input type="text" class="form-control" name="password" placeholder="...."required>
                           		<br>

                           		<label for="level">Jenis Akun</label>
								<select name="level" class="form-control" required>
									<option value="">.....</option>
									<option value="pimpinan">Pimpinan</option>
									<option value="admin">Admin</option>
									<option value="medis">Dokter</option>
									<option value="keukasir">Perawat</option>
									<option value="admrmedis">Rekam Medis</option>
									<option value="spvkasir">Rekam Medis</option>
									<option value="apotik">Rekam Medis</option>
									<option value="admisi">Rekam Medis</option>
								</select>
                                <br>

                                    
							   <div>
									<button type="submit" name="tambah"
											class="btn btn-primary" >Input </button>
								</div>
						  		
							  </form>
							</div>
					</div>
	  </div>
   <br><br>
<br><br>
	  					






	  					<?php
						  
						  if(isset($_POST['tambah'])) {
							$nama = htmlspecialchars($_POST['nama']);
							$username= htmlspecialchars($_POST['username']);
							$password= htmlspecialchars($_POST['password']);
							$level = htmlspecialchars($_POST['level']);
							// $is_aktif= htmlspecialchars($_POST['is_aktif']);

							$cekdulu= "select * from login where username='$_POST[username]'"; 
							$prosescek= mysqli_query($koneksi, $cekdulu);
							if (mysqli_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
								echo "<script>alert('maaf $username sudah terdaftar'); </script>";
							} else {
							// Insert user data into table
							$result = mysqli_query($koneksi, "INSERT INTO login (nama,username,password,level) VALUES('$nama','$username','$password','$level')"); 
							}
							
							echo "<script>alert('User Baru Sudah Aktif');window.location='/rsudprovsulut/aksesadmin/manage1/adminrs.php?page=admin' </script>"; 
						  }
						?>




		</div>
	</div>
  </div>  
<br><br>
<br><br>    