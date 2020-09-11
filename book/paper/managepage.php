
<?php 
	if(isset($_GET['l'])){
		$l = $_GET['l'];
 
		switch ($l) {
			
			
			case 'lp':
				include "halaman0/laporanrsia.php";
				break;
			case 'lp1':
				include "halaman0/laporan1.php";
				break;

			case 'aset1':
				include "halaman1/aset1.php";
				break;
			case 'iaset1':
				include "halaman1/iaset1.php";
				break;
			case 'aset2':
				include "halaman1/aset2.php";
				break;
			case 'iaset2':
				include "halaman1/iaset2.php";
				break;
			case 'detail1':
				include "halaman1/detailaset1.php";
				break;
			case 'detail2':
				include "halaman1/detailaset2.php";
				break;
			case 'room':
				include "halaman1/roomrs.php";
				break;
			case 'ast':
				include "halaman1/dataaset.php";
				break;
			case 'easet2':
				include "halaman1/editaset2.php";
				break;
			case 'easet1':
				include "halaman1/editaset1.php";
				break;
				
				
			case 'sdm':
				include "halaman2/sdm.php";
				break;
			case 'detailsdm':
				include "halaman2/detailsdm.php";
				break;
			case 'isdm':
				include "halaman2/add.php";
				break;
			case 'ket1':
				include "halaman2/ket1.php";
				break;
			case 'ket2':
				include "halaman2/ket2.php";
				break;
			case 'ket3':
				include "halaman2/ket3.php";
				break;
			case 'ket4':
				include "halaman2/ket4.php";
				break;
			case 'ket5':
				include "halaman2/ket5.php";
				break;
				
				
			case 'keu':
				include "halaman3/keuangan.php";
				break;
			case 'inkeu':
				include "halaman3/in.php";
				break;
			case 'outkeu':
				include "halaman3/out.php";
				break;
			case 'j1':
				include "halaman3/j1.php";
				break;	
			case 'j2':
				include "halaman3/j2.php";
				break;
			case 'idpa':
				include "halaman3/inputdpa.php";
				break;
			case 'dau':
				include "halaman3/inputdau.php";
				break;
			case 'dak':
				include "halaman3/inputdak.php";
				break;
			case 'pptk':
				include "halaman3/inputpptk.php";
				break;
			case 'dpa':
				include "halaman3/dpa.php";
				break;
			case 'ipad':
				include "halaman3/pad.php";
				break;
			case 'idak':
				include "halaman3/dak.php";
				break;
			case 'idau':
				include "halaman3/dau.php";
				break;				
			case 'ipptk':
				include "halaman3/pptk.php";
				break;
			case 'isp2d':
				include "halaman3/sp2d.php";
				break;
				
				
			case 'ipptk':
				include "halaman4/pptk.php";
				break;
			case 'pasien':
				include "halaman4/formpasien.php";
				break;
			case 'bkeupsn1':
				include "halaman4/keupembayaranpasien.php";
				break;
			case 'bkeupsn2':
				include "halaman4/keupembayaranpasien1.php";
				break;
			case 'bkeupsn':
				include "halaman4/prosesbayarpsn.php";
				break;
				
				
			case 'up':
				include "halaman5/index.php";
				break;
				
				
			case 'arsip':
				include "halaman6/index.php";
				break;
			case 'add':
				include "halaman6/save.php";
				break;
			case 'inputarsip':
				include "halaman6/uploadfilepdf/index.php";
				break;

			case 'admin':
				include "halaman7/akun1.php";
				break;
			case 'adminedit':
				include "halaman7/akun1edit.php";
				break;
			case 'pimpinan':
				include "halaman7/akun2.php";
				break;

			case 'dticd':
				include "halaman9/icd.php";
				break;
			case 'inicd':
				include "halaman9/dataicd.php";
				break;

























			case 'akun':
				include "navpage/akun.php";
				break;
			case 'editakun':
				include "navpage/akunedit.php";
				break;


				
			default:
				echo "<center>
				<div>
				<img src='images/maintenance.jpg'>
				</div>
				</center>";
				break;
		}
	}else{
		include "nav/l_data.php";
	}
 
	 ?>