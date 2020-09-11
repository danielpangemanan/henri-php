
<?php 
	session_start();
	
	// cek apakah yang mengakses halaman ini sudah login
	if ($_SESSION['level']==""){
		header("location:/loginadmin/logout.php");
	}
	?>
	
	<?php 
	require '../../include/db_conn.php';
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}?>

<!DOCTYPE html>
<head>
<title>RSIA KIRANA</title>
<link rel="shortcut icon" href="/rsiakirana/images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rsud" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
<!------chart samping---->
<link href="/aksesadmin/manage1/demo/css/jquery.dvstr_jqp_graph.css" rel="stylesheet" type="text/css"/>
<script src="/aksesadmin/manage1/demo/js/jquery.dvstr_jqp_graph.js" type="text/javascript"></script>	
	
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="css/morris.css">
<!-- //charts -->
</head>
<body class="dashboard-page" style="background: #ebeced" >
<nav class="main-menu">
		<ul>
			<li>
				<a href="pimrs.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Beranda
					</span>
				</a>
			</li>
			
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-bar-chart nav_icon"></i>
						<span class="nav-text">Dashbord Pimpinan</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="">
							Aset
						</a>
					</li>
					<li>
						<a class="subnav-text" href="">
							Sumberdaya Manusia
						</a>
					</li>
					<li>
						<a class="subnav-text" href="">
							Keuangan
						</a>
					</li>
					<li>
						<a class="subnav-text" href="">
							Layanan
						</a>
					</li>
				</ul>
			</li>
			
			
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Akun Pengelola</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="">Pengaturan Akun</a>
					</li>
				</ul>
			</li>
			<li>
			<a href="/rsiakirana/index.php">
				<i class="icon-off nav-icon"></i>
					<span class="nav-text">
						Logout
					</span>
				</a>
			</li>
			
		</ul>
		
	</nav>
	
	
<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<a href=""><img src="/rsiakirana/images/logo.png" style="width: 40%; height: 40%;" alt="" />
				<br><strong><?php echo date ("d-F-Y ")?></strong></a>
			</div>
			<div class="full-screen">
				
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
									<li>
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
									</li>
									<li><a href="#">
									   <div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li class="odd"><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									</a></li>
									<li><a href="#">
									   <div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all messages</a>
										</div> 
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 <li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div> 
									</li>
								</ul>
							</li>	
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-task">
									<li>
										<div class="notification_header">
											<h3>You have 8 pending tasks</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>	
										</div>
									   <div class="progress progress-striped active">
											 <div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all pending tasks</a>
										</div> 
									</li>
								</ul>
							</li>	
							<div class="clearfix"> </div>
						</ul>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="/rsiakirana/index.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
								<li><a href="#"><?php echo $_SESSION['username'];?></li>		
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>











<!-----GRAFIK KEUANGAN------>
<div class="main-grid">
<div class="agile-grids">	
	
	<div class="chart-heading">
		<h2>DASHBOARD PIMPINAN</h2>
	</div>
		<br>

		
			
					<div class="table-responsive">
						<table class="table table-bordered" class="table-condensed" id="" style="background-color: white;">
						  <thead>
							<tr style="text-align: center;">
								<th>Debet</th>
								<th>Kredit</th>
								<th>Keterangan</th>
								<th>Saldo Kas</th>
							</tr>
		     				</thead>
						   	<tbody>

							<?php 

								$no= 1;

								$sql = $koneksi->query("select *from jurnal_masuk ");
								while ($data=$sql->fetch_assoc()) {

							?>
							<?php
								$total_masuk=@$total_masuk+$data['jumlah'];
							   // $saldo_akhir=$total_masuk-$total_keluar;
								}
							?>

							<?php 

								$no= 1;

								$sql = $koneksi->query("select *from jurnal_keluar ");
								while ($data=$sql->fetch_assoc()) {

							?>
							<?php
								$total_keluar=@$total_keluar+$data['jumlah_kredit'];
							   // $saldo_akhir=$total_masuk-$total_keluar;
								}
							?>


							<?php 

								$sql = $koneksi->query("select *from jurnal_umum ");
								while ($data=$sql->fetch_assoc()) {

							?>
							<?php 
								}
							?>

							<tr class="odd gradeX" style="text-align: center;">
								<td><?php echo "Rp." .number_format($total_masuk).",-";?></td>
								<td><?php echo "Rp." .number_format($total_keluar).",-";?></td>
								<td>Laporan Jurnal Umum</td>
								<td><?php echo "Rp." .number_format($saldo_akhir=$total_masuk-$total_keluar).",-";?></td>
							</tr>
						  </tbody>
						</table>
					</div>
					
		
	<div class="w3l-chart events-chart">
			<h3>PEMASUKKAN PER/BULAN</h3>
			<div class="events-chart-info">
				<div id="graph11"></div>
				<script>
				var neg_data = [
				  {"period": "2020-01", "a":<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'januari' OR bulan LIKE '01'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaljan=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaljan"; ?> 
				  },
				  {"period": "2020-02", "a": 					<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'februari' OR bulan LIKE '02'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalfeb=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalfeb"; ?>
				},
				   
				  {"period": "2020-03", "a":<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'maret' OR bulan LIKE '03'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalmar=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalmar"; ?> 
				  },

				   
				  {"period": "2020-04", "a": 					<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'april' OR bulan LIKE '04'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalapr=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalapr"; ?>
				  },
				  {"period": "2020-05", "a": 					<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'mei' OR bulan LIKE '05'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalmei=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalmei"; ?>
				},
				{"period": "2020-06", "a": 					<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'juni' OR bulan LIKE '06'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaljun=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaljun"; ?>
				},
				{"period": "2020-07", "a": 					<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'juli' OR bulan LIKE '07'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaljul=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaljul"; ?>
				},
				{"period": "2020-08", "a": 					<?php
				   												
																?>					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'agustus' OR bulan LIKE '08'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalags=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalags"; ?>
				},
				{"period": "2020-09", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'september' OR bulan LIKE '09'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalsep=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalsep"; ?>
				},
				{"period": "2020-10", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'oktober' OR bulan LIKE '10'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalokt=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalokt"; ?>
				},
				{"period": "2020-11", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'november' OR bulan LIKE '11'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalnov=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalnov"; ?>
				},
				{"period": "2020-012", "a": 									
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'desember' OR bulan LIKE '12'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaldes=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaldes"; ?>
				}
				  
				];
				Morris.Line({
				  element: 'graph11',
				  data: neg_data,
				  xkey: 'period',
				  ykeys: ['a'],
				  labels: ['Pemasukkan'],
				  units: '(Rp)'
				});
				</script>
			</div>
		</div>
	
	<div class="w3l-chart events-chart">
			<h3>PENGELUARAN PER/BULAN</h3>
			<div class="events-chart-info">
				<div id="graph12"></div>
				<script>
				var neg_data = [
				  {"period": "2020-01", "a":					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'januari' OR bulan LIKE '01'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaljan=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaljan"; ?> 
				  },
				  {"period": "2020-02", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'februari' OR bulan LIKE '02'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalfeb=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalfeb"; ?>
				},
				   
				  {"period": "2020-03", "a":					
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'maret' OR bulan LIKE '03'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalmar=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalmar"; ?> 
				  },

				   
				  {"period": "2020-04", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'april'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalapr=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalapr"; ?>
				  },
				  {"period": "2020-05", "a": 									
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'mei'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalmei=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalmei"; ?>
				},
				{"period": "2020-06", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'juni'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaljun=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaljun"; ?>
				},
				{"period": "2020-07", "a": 									
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'juli' OR bulan LIKE '07'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaljul=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaljul"; ?>
				},
				{"period": "2020-08", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'agustus'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalags=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalags"; ?>
				},
				{"period": "2020-09", "a": 									
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'september'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalsep=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalsep"; ?>
				},
				{"period": "2020-10", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'oktober'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalokt=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalokt"; ?>
				},
				{"period": "2020-11", "a": 									
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'november'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totalnov=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totalnov"; ?>
				},
				{"period": "2020-012", "a": 										
				   												<?php 
			   													
																	$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'desember'");
																	while ($data=$sql->fetch_assoc()) {
																	
																?>
				   												
				   												<?php
																	$totaldes=$data['total'];
																	}
																?>
				   												
				   												<?php echo "$totaldes"; ?>
				}
				   
				];
				Morris.Line({
				  element: 'graph12',
				  data: neg_data,
				  xkey: 'period',
				  ykeys: ['a'],
				  labels: ['Pengeluaran'],
				  units: '(Rp)'
				});
				</script>
			</div>
		</div>
















<!-----GRAFIK KEUANGAN2------>
<div class="main-grid">
<div class="agile-grids">
	<div class="w3l-chart events-chart">
			<h3>PEMASUKKAN BULANAN</h3>
			<div class="events-chart-info">

				<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
				<script src="https://code.highcharts.com/highcharts.js"></script>
				<script src="https://code.highcharts.com/highcharts-more.js"></script>
				<script src="https://code.highcharts.com/modules/exporting.js"></script>
				<script src="https://code.highcharts.com/modules/export-data.js"></script>
				<script src="https://code.highcharts.com/modules/accessibility.js"></script>


				<figure class="highcharts-figure">
				    <div id="container"></div>
				    <button id="inverted0">Grafik Batang</button>
				    <button id="polar0">Grafik Lingkaran</button>
				</figure>


				<script>
					var chart = Highcharts.chart('container', {

					    title: {
					        text: 'Tabel Kas Masuk'
					    },

					    subtitle: {
					        text: 'Data Pemasukkan'
					    },
					    
					    credits: {
                             enabled: false
                            },

					    xAxis: {
					        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'Desember']
					    },
					    

					    series: [{
					        type: 'column',
					        colorByPoint: true,
					        data: [<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'januari' OR bulan LIKE '01'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaljan=$data['total'];
							}
							?>								
					   												<?php echo "$totaljan"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'februari' OR bulan LIKE '02'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalfeb=$data['total'];
							}
							?>								
					   												<?php echo "$totalfeb"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'maret' OR bulan LIKE '03'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalmar=$data['total'];
							}
							?>								
					   												<?php echo "$totalmar"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'april' OR bulan LIKE '04'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalapr=$data['total'];
							}
							?>								
					   												<?php echo "$totalapr"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'mei' OR bulan LIKE '05'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalmei=$data['total'];
							}
							?>								
					   												<?php echo "$totalmei"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'juni' OR bulan LIKE '06'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaljuni=$data['total'];
							}
							?>								
					   												<?php echo "$totaljuni"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'juli' OR bulan LIKE '07'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaljul=$data['total'];
							}
							?>								
					   												<?php echo "$totaljul"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'agustus' OR bulan LIKE '08'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalagustus=$data['total'];
							}
							?>								
					   												<?php echo "$totalagustus"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'september' OR bulan LIKE '09'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalsep=$data['total'];
							}
							?>								
					   												<?php echo "$totalsep"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'oktober' OR bulan LIKE '10'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalokt=$data['total'];
							}
							?>								
					   												<?php echo "$totalokt"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'november' OR bulan LIKE '11'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalnov=$data['total'];
							}
							?>								
					   												<?php echo "$totalnov"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_masuk, SUM(jumlah) AS total FROM `jurnal_masuk` GROUP BY bulan LIKE 'desember' OR bulan LIKE '12'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaldes=$data['total'];
							}
							?>								
					   												<?php echo "$totaldes"; ?>],
					        showInLegend: false
					    }]

					});


					
					$('#inverted0').click(function () {
					    chart.update({
					        chart: {
					            inverted: true,
					            polar: false
					        },
					        credits: {
                             enabled: false
                            },
					        subtitle: {
					            text: 'Grafik Batang'
					        }
					    });
					});

					$('#polar0').click(function () {
					    chart.update({
					        chart: {
					            inverted: false,
					            polar: true
					        },
					        credits: {
                             enabled: false
                            },
					        subtitle: {
					            text: 'Grafik Lingkaran'
					        }
					    });
					});
					
				</script>

				

				<style>
				#container {
				 height: auto; 
				}

				.highcharts-figure, .highcharts-data-table table {
				    min-width: 50px; 
				    max-width: 1100px;
				    margin: 0em;
				}

				.highcharts-data-table table {
				    font-family: Verdana, sans-serif;
				    border-collapse: collapse;
				    border: 1px solid #EBEBEB;
				    margin: 10px auto;
				    text-align: center;
				    width: 100%;
				    max-width: auto;
				}
				.highcharts-data-table caption {
				    padding: 1em 0;
				    font-size: 1.2em;
				    color: #555;
				}
				.highcharts-data-table th {
					font-weight: 600;
				    padding: 0.5em;
				}
				.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
				    padding: 0.5em;
				}
				.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
				    background: #f8f8f8;
				}
				.highcharts-data-table tr:hover {
				    background: #f1f7ff;
				}                  
				
				</style>

			</div>
		</div>

</div>
</div>


<div class="main-grid">
<div class="agile-grids">
	<div class="w3l-chart events-chart">
			<h3>PENGELUARAN BULANAN</h3>
			<div class="events-chart-info">

				<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
				<script src="https://code.highcharts.com/highcharts.js"></script>
				<script src="https://code.highcharts.com/highcharts-more.js"></script>
				<script src="https://code.highcharts.com/modules/exporting.js"></script>
				<script src="https://code.highcharts.com/modules/export-data.js"></script>
				<script src="https://code.highcharts.com/modules/accessibility.js"></script>


				<figure class="highcharts-figure">
				    <div id="containerkeukeluar"></div>
				    <button id="inverted1">Grafik Batang</button>
				    <button id="polar1">Grafik Lingkaran</button>
				</figure>


				<script>
					var chart = Highcharts.chart('containerkeukeluar', {

					    title: {
					        text: 'Tabel Kas Keluar'
					    },

					    subtitle: {
					        text: 'Data Pengeluaran'
					    },
					    
					    credits: {
                             enabled: false
                            },

					    xAxis: {
					        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'Desember']
					    },
					    

					    series: [{
					        type: 'column',
					        colorByPoint: true,
					        data: [<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'januari' OR bulan LIKE '01'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaljan=$data['total'];
							}
							?>								
					   												<?php echo "$totaljan"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'februari' OR bulan LIKE '02'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalfeb=$data['total'];
							}
							?>								
					   												<?php echo "$totalfeb"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'maret' OR bulan LIKE '03'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalmar=$data['total'];
							}
							?>								
					   												<?php echo "$totalmar"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'april' OR bulan LIKE '04'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalapr=$data['total'];
							}
							?>								
					   												<?php echo "$totalapr"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'mei' OR bulan LIKE '05'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalmei=$data['total'];
							}
							?>								
					   												<?php echo "$totalmei"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'juni' OR bulan LIKE '06'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaljuni=$data['total'];
							}
							?>								
					   												<?php echo "$totaljuni"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'juli' OR bulan LIKE '07'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaljul=$data['total'];
							}
							?>								
					   												<?php echo "$totaljul"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'agustus' OR bulan LIKE '08'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalagustus=$data['total'];
							}
							?>								
					   												<?php echo "$totalagustus"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'september' OR bulan LIKE '09'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalsep=$data['total'];
							}
							?>								
					   												<?php echo "$totalsep"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'oktober' OR bulan LIKE '10'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalokt=$data['total'];
							}
							?>								
					   												<?php echo "$totalokt"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'november' OR bulan LIKE '11'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totalnov=$data['total'];
							}
							?>								
					   												<?php echo "$totalnov"; ?>, 

					   												<?php 
			   													
							$sql = $koneksi->query("SELECT tanggal_kredit, SUM(jumlah_kredit) AS total FROM `jurnal_keluar` GROUP BY bulan LIKE 'desember' OR bulan LIKE '12'");
							
							while ($data=$sql->fetch_assoc()) 
							{
							?>
				   												
								<?php $totaldes=$data['total'];
							}
							?>								
					   												<?php echo "$totaldes"; ?>],
					        showInLegend: false
					    }]

					});


					
					$('#inverted1').click(function () {
					    chart.update({
					        chart: {
					            inverted: true,
					            polar: false
					        },
					        credits: {
                             enabled: false
                            },
					        subtitle: {
					            text: 'Grafik Batang'
					        }
					    });
					});

					$('#polar1').click(function () {
					    chart.update({
					        chart: {
					            inverted: false,
					            polar: true
					        },
					        credits: {
                             enabled: false
                            },
					        subtitle: {
					            text: 'Grafik Lingkaran'
					        }
					    });
					});
					
				</script>

				

				<style>
				#containerkeukeluar {
				 height: auto; 
				}

				.highcharts-figure, .highcharts-data-table table {
				    min-width: 50px; 
				    max-width: 1100px;
				    margin: 0em;
				}

				.highcharts-data-table table {
				    font-family: Verdana, sans-serif;
				    border-collapse: collapse;
				    border: 1px solid #EBEBEB;
				    margin: 10px auto;
				    text-align: center;
				    width: 100%;
				    max-width: auto;
				}
				.highcharts-data-table caption {
				    padding: 1em 0;
				    font-size: 1.2em;
				    color: #555;
				}
				.highcharts-data-table th {
					font-weight: 600;
				    padding: 0.5em;
				}
				.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
				    padding: 0.5em;
				}
				.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
				    background: #f8f8f8;
				}
				.highcharts-data-table tr:hover {
				    background: #f1f7ff;
				}
				
				</style>

			</div>
		</div>

</div>
</div>
		







	
<!-- //agile-grid-right -->
<script src="js/bootstrap.js"></script>
<!-- agile-grid-right -->
<script src="js/graph.js"></script>
<!-- //agile-grid-right -->
<script src="js/proton.js"></script>


<!-- chart baru -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


</body>

</html>




 


			



