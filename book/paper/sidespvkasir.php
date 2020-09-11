


<!DOCTYPE html>
<html>
<head>
	<title>SPV RS</title>
</head>
<body>
	

	
		<div class="container">
			<h3>SUPERVISI KASIR</h3>
			<div class="row panel2">
				<div class="col-md-12 info-panel">
					<div class="row">
						<div class="col-lg-6" >
							<img style="display: block; margin: 0 auto; text-align: center; width: 70px; height: 70px;" src="/rsiakirana/images/logoadmin.png">
							<h3>
								<?php
								include "koneksi.php";
								$username = $_SESSION['username'];
								$pesan = mysqli_query($koneksi, "SELECT nomor FROM tabel_pesan
								    WHERE kepada='$username' and sudahbaca='NO'");
								$j = mysqli_num_rows($pesan);
								if($j>0){
								    
								?>
								<a class="label label-warning"><?php echo $j; ?></a>
								<?php } ?>
								<a href="?page=spv1" class="label label-info">KONFIRMASI PEMASUKKAN</a>
								
							</h3>
							<p class="paragraf2">Setoran Keuangan</p>
						</div>

						<div class="col-lg-6" >
							<img style="display: block; margin: 0 auto; text-align: center; width: 70px; height: 70px;" src="/rsiakirana/images/logoadmin.png">
							<h3>
								<?php
								include "koneksi.php";
								$username = $_SESSION['username'];
								$pesan = mysqli_query($koneksi, "SELECT nomor FROM tabel_pesan1
								    WHERE kepada='$username' and sudahbaca='NO'");
								$j = mysqli_num_rows($pesan);
								if($j>0){
								    
								?>
								<a class="label label-warning"><?php echo $j; ?></a>
								<?php } ?>
								<a href="?page=spv2" class="label label-info">KONFIRMASI PENGELUARAN</a>
								
							</h3>
							<p class="paragraf2">Pengeluaran Dana</p>
						</div>

					</div>
				</div>
			</div>
		</div>

		
 <script>
setTimeout(function() {
  
}, 60000);
</script>        



<style>

	.info-panel{
	background-color: lightyellow;
	box-shadow: 0 3px 8px rgba(0,0,0,0.5);
	border-radius: 12px;
	background-color: white;
	padding: 30px;
	}

	.paragraf1{
		margin-bottom: 100px;
		text-align: center;
	}

	.paragraf2{
	text-align: center;
	margin-top: 12px;
	}

	.info-panel img{
		width: 80px;
		height: 80px;
		margin-right: 20px;
		margin-bottom: 20px;
	}

	.info-panel h3{
		text-align: center;
		font-size: 22px;
		text-transform: uppercase;
		font-weight: bold;
	}

	h3{
		margin-top: 25px;
		text-align: center;
		font-size: 28px;
		text-transform: uppercase;
		font-weight: bold;
	}

	.info{
		margin-top: 100px;
	}

	.dashboard{
		margin-top: 50px;
	}

	.panelhome{
		margin-top: 50px;
	}

	.panel2{
		margin-top: 25px;
		margin-bottom: 50px;
	}
</style>

</body>
</html>



		