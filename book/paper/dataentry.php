<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:/loginadmin/logout.php");
	}

	?>
	
	<?php 
	require '../../include/db_conn.php';
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}?>

<!DOCTYPE html><head>
<title>RSIA KIRANA</title>
<link rel="shortcut icon" href="/rsudprovsulut/images/logo.png">
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
<body class="dashboard-page" style="background: #ebeced">
<nav class="main-menu">
			<li>
				<a href="adminrs">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">Beranda</span>
				</a>
			</li>		
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
					<input type="text" name="search" value="pencarian" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
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
									<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
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






<h3 style="text-align: center;">INPUT DATA</h3>
<div class="container">
	<div class="row panel2">
		<div class="col-md-12 info-panel">
			<div class="row">

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">ASET BERGERAK</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=iaset1" class="list-group-item list-group-item-primary"><strong>Input Aset Bergerak</strong>
					    </a>
					    
					    <a href="../manage1/adminrs.php?page=aset1" class="list-group-item list-group-item-primary"><strong>Edit Aset Bergerak</strong>
					    </a>
					</div>					
				</div>

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">ASET TIDAK BERGERAK</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=iaset2" class="list-group-item list-group-item-primary"><strong>Input Aset Tidak Bergerak</strong>
					    </a>
					    
					    <a href="../manage1/adminrs.php?page=aset2" class="list-group-item list-group-item-primary"><strong>Edit Aset Bergerak</strong>
					    </a>
					</div>					
				</div>

				
			</div>
		</div>
	</div>
</div>




<div class="container">
	<div class="row panel2">
		<div class="col-md-12 info-panel">
			<div class="row">

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">PEMASUKKAN</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=j1" class="list-group-item list-group-item-primary"><strong>Input Pemasukkan</strong>
					    </a>
					</div>					
				</div>

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">PENGELUARAN</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=j2" class="list-group-item list-group-item-primary"><strong>Input Pengeluaran</strong>
					    </a>
					</div>					
				</div>

				
			</div>
		</div>
	</div>
</div>




<div class="container">
	<div class="row panel2">
		<div class="col-md-12 info-panel">
			<div class="row">

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">DPA</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=idpa" class="list-group-item list-group-item-primary"><strong>Input DPA</strong>
					    </a>
					</div>					
				</div>

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">DAU</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=dau" class="list-group-item list-group-item-primary"><strong>Input DAU</strong>
					    </a>
					</div>					
				</div>

				
			</div>
		</div>
	</div>
</div>




<div class="container">
	<div class="row panel2">
		<div class="col-md-12 info-panel">
			<div class="row">

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">STAF SDM/DOKTER</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=isdm" class="list-group-item list-group-item-primary"><strong>Input Sumberdaya Manusia</strong>
					    </a>
					</div>	

				<div class="col-lg-12" >
					
					<h3><a cass="label label-info">TAMBAHAN DATA</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=ket1" class="list-group-item list-group-item-primary"><strong>Kompetensi</strong>
					    </a>
					</div>	
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=ket2" class="list-group-item list-group-item-primary"><strong>Pendidikan</strong>
					    </a>
					</div>	
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=ket3" class="list-group-item list-group-item-primary"><strong>Golongan</strong>
					    </a>
					</div>	
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=ket4" class="list-group-item list-group-item-primary"><strong>Jabatan</strong>
					    </a>
					</div>	
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=ket5" class="list-group-item list-group-item-primary"><strong>Diklat</strong>
					    </a>
					</div>	

				</div>				
				</div>

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">PPTK</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=pptk" class="list-group-item list-group-item-primary"><strong>Input PPTK</strong>
					    </a>
					</div>	

					<div class="col-lg-12" >
					<h3><a cass="label label-info">TAMBAH DATA ICD</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrs.php?page=inicd" class="list-group-item list-group-item-primary"><strong>Input Data ICD</strong>
					    </a>
					</div>					
					</div>
				</div>

				<div class="col-lg-6" >
					
					<h3><a cass="label label-info">Tambah Data Obat</a></h3>
					
					<div class="list-group">
					    <a href="../manage1/adminrmedis.php?page=addobt" class="list-group-item list-group-item-primary"><strong>Input Data Obat</strong>
					    </a>
					</div>	

				</div>
				
			</div>
		</div>
	</div>
</div>





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

	h4{
		margin-top: 25px;
		text-align: center;
		font-size: 16px;
		text-transform: uppercase;
		font-weight: bold;
	}
	a{
		margin-top: 15px;
		text-align: center;
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






















		<!-- <div class="main-grid">
			<div class="agile-grids">	
				
				<div class="chart-heading">
					<h2>DATA ENTRY</h2>
					
				</div>
				
		<div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>ASET BERGERAK</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
									
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=iaset1">
												  		<div>+ &nbsp; Input Aset Bergerak</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data Aset Bergerak</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
											
		</div>
		<br>
				
		<div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>ASET TIDAK BERGERAK</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=iaset2">
												  		<div>+ &nbsp; Input Aset Tidak Bergerak</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data Aset Tidak Bergerak</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
											
		</div>
		<br>	
				
		<div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>KAS MASUK</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=j1">
												  		<div>+ &nbsp; Input Pemasukkan</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data Pemasukkan</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
											
		</div>
		<br>	
				
		<div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>KAS KELUAR</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=j2">
												  		<div>+ &nbsp; Input Pengeluaran</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data Pengeluaran</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
											
		</div>
		<br>	 -->
				
		<!-- <div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>DANA PENGGUNA ANGGARAN</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="adminrs.php?page=idpa">
												  		<div>+ &nbsp; Input DPA</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data DPA</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
											
		</div>
		<br>	 -->
				
		<!-- <div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>DANA ALOKASI UMUM</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="adminrs.php?page=dau">
												  		<div>+ &nbsp; Input DAU</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data DAU</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
											
		</div>
		<br>	 -->
				
		<!-- <div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>DANA ALOKASI KHUSUS</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="adminrs.php?page=dak">
												  		<div>+ &nbsp; Input DAK</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data DAK</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
											
		</div>
		<br>	 -->
				
		<!-- <div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>SDM</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=isdm">
												  		<div>+ &nbsp; Tambah SDM</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data SDM</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
			
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>Pilihan Input SDM</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=ket1">
												  		<div>+ &nbsp; Tambah Kompetensi</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=ket2">
												  		<div>+ &nbsp; Tambah Pendidikan</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=ket3">
												  		<div>+ &nbsp; Tambah Golongan</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=ket4">
												  		<div>+ &nbsp; Tambah Jabatan</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										<a class="btn btn-danger" href="../manage1/adminrs.php?page=ket5">
												  		<div>+ &nbsp; Tambah Keterangan Diklat</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
											
		</div>	
		<br>	 -->
				
		<!-- <div class="area-grids" class="col-md-3">
						<div class="area-grids-heading">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
							<h3>PEJABAT PELAKSANAN TEKNIS KEGIATAN</h3>
						</div>
											
										
										<p class="text-justify">
										</p>
			
										<a class="btn btn-danger" href="adminrs.php?page=pptk">
												  		<div>+ &nbsp; Tambah PPTK</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
										<a class="btn btn-primary more" href="">
												  		<div>+ &nbsp; Edit Data PPTK</div>
												  		<div><i class="ion-ios-arrow-thin-right"></i></div>
										  			    </a>
										
											
		</div>	
					
		</div>		
		</div>	 -->	



		

<!-- //agile-grid-right -->
<script src="js/bootstrap.js"></script>
<!-- agile-grid-right -->
<script src="js/graph.js"></script>
<!-- //agile-grid-right -->
<script src="js/proton.js"></script>
</body>
</html>

			






