<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <div>
	<h1><b><center>TOPSIS</center><b></h1>
    <?php
        // Bobot Kriteria
        $bc1 = 30;
        $bc2 = 25;
        $bc3 = 20;
        $bc4 = 25;
        // Kriteria A1
        $a1c1 = 3;
        $a2c1 = 4;
        $a3c1 = 5;
        // Kriteria A2
        $a1c2 = 5;
        $a2c2 = 3;
        $a3c2 = 4;
        // Kriteria A3
        $a1c3 = 3;
        $a2c3 = 2;
        $a3c3 = 5;
        // Kriteria A1
        $a1c4 = 1;
        $a2c4 = 3;
        $a3c4 = 1;
        ?>
    </div>
    <!-- Skor Ternormalisasi----------------->
	<br>    
	<h3>Penyelesaian 1 : Skor Ternormalisasi</h3>

    </h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>C1</th>
        <th><?php echo $a1c1?></th>
        <th><?php echo $a2c1?></th>
        <th><?php echo $a3c1?></th>
    </tr>
    <tr>
        <th>C2</th>
        <th><?php echo $a1c2?></th>
        <th><?php echo $a2c2?></th>
        <th><?php echo $a3c2?></th>
    </tr>
    <tr>
        <th>C3</th>
        <th><?php echo $a1c3?></th>
        <th><?php echo $a2c3?></th>
        <th><?php echo $a3c3?></th>
    </tr>
    <tr>
        <th>C4</th>
        <th><?php echo $a1c4?></th>
        <th><?php echo $a2c4?></th>
        <th><?php echo $a3c4?></th>
    </tr>
    </table>
    <p></p>
    <?php
    // Mengitung skor ternormalisasi
    // C1
    $r11 = $a1c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2));
    $r21 = $a2c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2));
    $r31 = $a3c1/sqrt(pow($a1c1,2)+pow($a2c1,2)+pow($a3c1,2));
    // C2
    $r12 = $a1c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2));
    $r22 = $a2c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2));
    $r32 = $a3c2/sqrt(pow($a1c2,2)+pow($a2c2,2)+pow($a3c2,2));
    // C3
    $r13 = $a1c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2));
    $r23 = $a2c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2));
    $r33 = $a3c3/sqrt(pow($a1c3,2)+pow($a2c3,2)+pow($a3c3,2));
    // C4
    $r14 = $a1c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2));
    $r24 = $a2c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2));
    $r34 = $a3c4/sqrt(pow($a1c4,2)+pow($a2c4,2)+pow($a3c4,2));
    ?>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>C1</th>
        <th><?php echo $r11?></th>
        <th><?php echo $r21?></th>
        <th><?php echo $r31?></th>
    </tr>
    <tr>
        <th>C2</th>
        <th><?php echo $r12?></th>
        <th><?php echo $r22?></th>
        <th><?php echo $r32?></th>
    </tr>
    <tr>
        <th>C3</th>
        <th><?php echo $r13?></th>
        <th><?php echo $r23?></th>
        <th><?php echo $r33?></th>
    </tr>
    <tr>
        <th>C4</th>
        <th><?php echo $r14?></th>
        <th><?php echo $r24?></th>
        <th><?php echo $r34?></th>
    </tr>
    </table>
    <?php
    // Mengitung skor ternormalisasi terbobot
    // C1
    $y11 = $r11*$bc1;
    $y21 = $r21*$bc1;
    $y31 = $r31*$bc1;
    // C2
    $y12 = $r12*$bc2;
    $y22 = $r22*$bc2;
    $y32 = $r32*$bc2;
    // C3
    $y13 = $r13*$bc3;
    $y23 = $r23*$bc3;
    $y33 = $r33*$bc3;
    // C4
    $y14 = $r14*$bc4;
    $y24 = $r24*$bc4;
    $y34 = $r34*$bc4;
    ?>
    <!-- Skor Ternormalisasi Terbobot----------------->
	<br>    
	<h3>Penyelesaian 2 : Skor Ternormalisasi Terbobot</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>C1</th>
        <th><?php echo $y11?></th>
        <th><?php echo $y21?></th>
        <th><?php echo $y31?></th>
    </tr>
    <tr>
        <th>C2</th>
        <th><?php echo $y12?></th>
        <th><?php echo $y22?></th>
        <th><?php echo $y32?></th>
    </tr>
    <tr>
        <th>C3</th>
        <th><?php echo $y13?></th>
        <th><?php echo $y23?></th>
        <th><?php echo $y33?></th>
    </tr>
    <tr>
        <th>C4</th>
        <th><?php echo $y14?></th>
        <th><?php echo $y24?></th>
        <th><?php echo $y34?></th>
    </tr>
    </table>
    <?php
    // Mengitung solusi ideal positif
    // C1
    $ap1 = max($y11,$y21,$y31);
    // C2
    $ap2 = max($y12,$y22,$y32);
    // C3
    $ap3 = max($y13,$y23,$y33);
    // C4
    $ap4 = min($y14,$y24,$y34);
    ?>
    <!-- Solusi ideal positif-----------------> 
	<br>   
	<h3>Penyelesaian 3 : Solusi Ideal Positif</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
    </tr>
    <tr>
        <th>A+</th>
        <th><?php echo $ap1?></th>
        <th><?php echo $ap2?></th>
        <th><?php echo $ap3?></th>
        <th><?php echo $ap4?></th>
    </tr>
    </table>
    <?php
    // Mengitung solusi ideal negatif
    // C1
    $an1 = min($y11,$y21,$y31);
    // C2
    $an2 = min($y12,$y22,$y32);
    // C3
    $an3 = min($y13,$y23,$y33);
    // C4
    $an4 = max($y14,$y24,$y34);
    ?>
    <!-- Solusi ideal negatif----------------->  
	<br>  
	<h3>Penyelesaian 4 : Solusi Ideal Negatif</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
    </tr>
    <tr>
        <th>A-</th>
        <th><?php echo $an1?></th>
        <th><?php echo $an2?></th>
        <th><?php echo $an3?></th>
        <th><?php echo $an4?></th>
    </tr>
    </table>
    <?php
    // Mengitung jarak solusi ideal positif
    // C1
    $dp1 = sqrt(pow(($ap1-$y11),2)+pow(($ap2-$y12),2)+pow(($ap3-$y13),2)+pow(($ap4-$y14),2));
    // C2
    $dp2 = sqrt(pow(($ap1-$y21),2)+pow(($ap2-$y22),2)+pow(($ap3-$y23),2)+pow(($ap4-$y24),2));
    // C3
    $dp3 = sqrt(pow(($ap1-$y31),2)+pow(($ap2-$y32),2)+pow(($ap3-$y33),2)+pow(($ap4-$y34),2));
    ?>
    <!-- Jarak Solusi ideal positif----------------->    
	<br>
	<h3>Penyelesaian 5 : Jarak Solusi Ideal Positif</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>D1+</th>
        <th>D2+</th>
        <th>D3+</th>
    </tr>
    <tr>
        <th>Hasil</th>
        <th><?php echo $dp1?></th>
        <th><?php echo $dp2?></th>
        <th><?php echo $dp3?></th>
    </tr>
    </table>
    <?php
    // Mengitung jarak solusi ideal negatif
    // C1
    $dn1 = sqrt(pow(($y11-$an1),2)+pow(($y12-$an2),2)+pow(($y13-$an3),2)+pow(($y14-$an4),2));
    // C2
    $dn2 = sqrt(pow(($y21-$an1),2)+pow(($y22-$an2),2)+pow(($y23-$an3),2)+pow(($y24-$an4),2));
    // C3
    $dn3 = sqrt(pow(($y31-$an1),2)+pow(($y32-$an2),2)+pow(($y33-$an3),2)+pow(($y34-$an4),2));
    ?>
    <!-- Jarak Solusi ideal positif----------------->
	<br>    
	<h3>Penyelesaian 6 : Jarak Solusi Ideal Negatif</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>D1-</th>
        <th>D2-</th>
        <th>D3-</th>
    </tr>
    <tr>
        <th>Hasil</th>
        <th><?php echo $dn1?></th>
        <th><?php echo $dn2?></th>
        <th><?php echo $dn3?></th>
    </tr>
    </table>
    <?php
    // Mengitung skor akhir setiap alternatif
    // C1
    $v1 = $dn1/($dn1+$dp1);
    // C2
    $v2 = $dn2/($dn2+$dp2);
    // C3
    $v3 = $dn3/($dn3+$dp3);
    ?>
    <!-- skor akhir setiap alternatif----------------->
	<br>    
	<h3>Penyelesaian 7 : Skor Akhir Setiap Alternatif</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>V1</th>
        <th>V2</th>
        <th>V3</th>
    </tr>
    <tr>
        <th>Hasil</th>
        <th><?php echo $v1?></th>
        <th><?php echo $v2?></th>
        <th style="background-color: yellow	"><?php echo $v3?></th>
    </tr>
    </table>
	<br>
        <?php
        if ($v1 > $v2 && $v1 > $v3) {
            echo ("<h4>Kesimpulan dari hasil yang di dapat menggunakan penyelesaian metode TOPSIS diatas adalah : <h2><center>'Alternatif 1 = Sepatu 1'</center></h2></h4>");
        }elseif ($v2 > $v3 && $v2 > $v1) {
            echo ("<h4>Kesimpulan dari hasil yang di dapat menggunakan penyelesaian metode TOPSIS diatas adalah : <h2><center>'Alternatif 2 = Sepatu 2'</center></h2></h4>");
        } else {
            echo ("<h4>Kesimpulan dari hasil yang di dapat menggunakan penyelesaian metode TOPSIS diatas adalah : <h2><center>'Alternatif 3 = Sepatu 3'</center></h2></h4>");
        }

        ?>
		<br><br><br>
</head>