<!DOCTYPE html>
<html>
<head>
	<title>SPK</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">TUGAS WEB SPK</h1>
		<h3 class="deskripsi">Pengenalan metode SPK dan penyelesaianya</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home"><h5><b>Home</b></h5></a></li>
            <li><a href="index.php?page=sawdanwp"><h5><b>SAW & WP</b></h5></a></li>
			<li><a href="index.php?page=ahp"><h5><b>AHP</b></h5></a></li>
			<li><a href="index.php?page=electree"><h5><b>ELECTREE</b></h5></a></li>
            <li><a href="index.php?page=topsis"><h5><b>TOPSIS</b></h5></a></li>
            <li><a href="index.php?page=moora"><h5><b>MOORA</b></h5></a></li>
            <li><a href="index.php?page=gdss"><h5><b>GDSS</b></h5></a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
            case 'home':
				include "home.php";
				break;
			case 'sawdanwp':
				include "metode/sawdanwp.php";
				break;
			case 'ahp':
				include "metode/ahp.php";
				break;
			case 'electree':
				include "metode/electree.php";
                break;
            case 'topsis':
				include "metode/topsis.php";
                break;
            case 'moora':
				include "metode/moora.php";
                break;
            case 'gdss':
				include "metode/gdss.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>