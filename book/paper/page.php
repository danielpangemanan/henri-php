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
<body class="dashboard-page" style="background: #ebeced">
<nav class="main-menu">
	<?php  
	if($_SESSION['level']=="admin")
		{
			include 'nav/navadmin.php';
		}
	if ($_SESSION['level']=="pimpinan")
		{
			include 'nav/navpimpinan.php';
		}
	else if ($_SESSION['level']=="spvkasir")
		{
			include 'nav/navspvkasir.php';
		}
	else if ($_SESSION['level']=="admisi")
		{
			include 'nav/navadmisi.php';
		}
	else if ($_SESSION['level']=="admrmedis")
		{
			include 'nav/navadmrmedis.php';
		}
	else if ($_SESSION['level']=="medis")
		{
			include 'nav/navmedis.php';
		}
	else if ($_SESSION['level']=="apotik")
		{
			include 'nav/navapotik.php';
		}
	else if ($_SESSION['level']=="keukasir")
		{
			include 'nav/navkeukasir.php';
		}
	else {
		 }
	?>
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

			<div class="w3l_search">
				
				<form action="#" method="post">
					<input type="text" name="kode" value="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" >
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				
			</div>

				<div class="header-right">
					<div class="profile_details_left">
						<div class="header-right-left">
							<!--notifications of menu start -->
									

								<li class="dropdown head-dpdn">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">1</span></a>

									<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
										<li>
											<div class="notification_header">
												<h3>Pemberitahuan</h3>
											</div>
										</li>

										<li><a href="#">
										   <div class="notification_desc">
											<p><?php echo $data['nama'] ?></p>
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
								<?php
									$user=$_SESSION['username'];
									$sql ="SELECT * FROM login WHERE username='$user'";
									$biodata=mysqli_query($koneksi, $sql);
									while ($data=mysqli_fetch_array($biodata)){
								?>
								<li><a href="#"> <?php echo $data['nama'];?></li>
								<?php } ?>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		
		<?php include "managepage.php"; ?>

</section>


		

<!-- //agile-grid-right -->
<script src="js/bootstrap.js"></script>
<!-- agile-grid-right -->
<script src="js/graph.js"></script>
<!-- //agile-grid-right -->
<script src="js/proton.js"></script>
</body>
</html>

			






