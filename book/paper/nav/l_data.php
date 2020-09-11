<?php  
		if($_SESSION['level']=="admin")

		{
			include 'sideadmin.php';

		}else if ($_SESSION['level']=="pimpinan")

		{
			include 'sidepimpinan.php';

		}else if ($_SESSION['level']=="spvkasir")

		{
			include 'sidespvkasir.php';

		}else if ($_SESSION['level']=="admisi")

		{
			include 'sideadmisi.php';

		}else if ($_SESSION['level']=="admrmedis")

		{
			include 'sideadmrmedis.php';

		}else if ($_SESSION['level']=="medis")

		{
			include 'sidemedis.php';

		}else if ($_SESSION['level']=="apotik")

		{
			include 'sideapotik.php';

		}else if ($_SESSION['level']=="keukasir")

		{
			include 'sidekeukasir.php';

		}
?>