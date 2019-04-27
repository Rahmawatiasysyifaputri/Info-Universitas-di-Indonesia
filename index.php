<!DOCTYPE html>
<html>
<head>
      
	<title>Info Universitas Rekomendasi di Indonesia</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">INFO UNIVERSITAS DI INDONESIA</h1>
		<h3 class="deskripsi">Universitas Berakreditasi A</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=akredita">Universitas</a></li>
			<li><a href="http://localhost/tugas%20akhir/data%20wishlist/form-create.php">WISHLIST</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'akredita':
				include "halaman/akredita.php";
				break;
			case 'wishlist':
				include "halaman/wishlist.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>