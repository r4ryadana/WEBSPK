<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <div>
	<h1><b><center>MOORA</center><b></h1>
	<br>
<?php
// bobot Mora
$mora_b_1 = 10;
$mora_b_2 = 5;
$mora_b_3 = 15;
$mora_b_4 = 10;
$mora_b_5 = 8;
$mora_b_6 = 6;
// Matrix Keputusan X A1
$x_a1_1 = 5;
$x_a1_2 = 13000;
$x_a1_3 = 2;
$x_a1_4 = 2;
$x_a1_5 = 1;
$x_a1_6 = 1;

// Matrix Keputusan X A2
$x_a2_1 = 2;
$x_a2_2 = 10000;
$x_a2_3 = 1;
$x_a2_4 = 1;
$x_a2_5 = 0;
$x_a2_6 = 1;

// Matrix Keputusan X A3
$x_a3_1 = 10;
$x_a3_2 = 17000;
$x_a3_3 = 3;
$x_a3_4 = 3;
$x_a3_5 = 0;
$x_a3_6 = 2;

// Matrix Keputusan X A4
$x_a4_1 = 1;
$x_a4_2 = 9000;
$x_a4_3 = 1;
$x_a4_4 = 1;
$x_a4_5 = 1;
$x_a4_6 = 1;

// Matrix Keputusan X A5
$x_a5_1 = 7;
$x_a5_2 = 14000;
$x_a5_3 = 2;
$x_a5_4 = 2;
$x_a5_5 = 0;
$x_a5_6 = 2;

// Matrix Normalisasi C1
$n_a1_1 = $x_a1_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a2_1 = $x_a2_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a3_1 = $x_a3_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a4_1 = $x_a4_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a5_1 = $x_a5_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));

// Matrix Normalisasi C2
$n_a1_2 = $x_a1_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a2_2 = $x_a2_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a3_2 = $x_a3_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a4_2 = $x_a4_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a5_2 = $x_a5_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));

// Matrix Normalisasi C3
$n_a1_3 = $x_a1_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a2_3 = $x_a2_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a3_3 = $x_a3_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a4_3 = $x_a4_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a5_3 = $x_a5_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));

// Matrix Normalisasi C4
$n_a1_4 = $x_a1_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a2_4 = $x_a2_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a3_4 = $x_a3_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a4_4 = $x_a4_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a5_4 = $x_a5_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));

// Matrix Normalisasi C5
$n_a1_5 = $x_a1_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a2_5 = $x_a2_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a3_5 = $x_a3_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a4_5 = $x_a4_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a5_5 = $x_a5_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));

// Matrix Normalisasi C6
$n_a1_6 = $x_a1_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a2_6 = $x_a2_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a3_6 = $x_a3_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a4_6 = $x_a4_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a5_6 = $x_a5_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));

// Matrix Normalisasi Bobot A1
$nb_a1_1 = $n_a1_1 * $mora_b_1;
$nb_a1_2 = $n_a1_2 * $mora_b_2;
$nb_a1_3 = $n_a1_3 * $mora_b_3;
$nb_a1_4 = $n_a1_4 * $mora_b_4;
$nb_a1_5 = $n_a1_5 * $mora_b_5;
$nb_a1_6 = $n_a1_6 * $mora_b_6;

// Matrix Normalisasi Bobot A2
$nb_a2_1 = $n_a2_1 * $mora_b_1;
$nb_a2_2 = $n_a2_2 * $mora_b_2;
$nb_a2_3 = $n_a2_3 * $mora_b_3;
$nb_a2_4 = $n_a2_4 * $mora_b_4;
$nb_a2_5 = $n_a2_5 * $mora_b_5;
$nb_a2_6 = $n_a2_6 * $mora_b_6;

// Matrix Normalisasi Bobot A3
$nb_a3_1 = $n_a3_1 * $mora_b_1;
$nb_a3_2 = $n_a3_2 * $mora_b_2;
$nb_a3_3 = $n_a3_3 * $mora_b_3;
$nb_a3_4 = $n_a3_4 * $mora_b_4;
$nb_a3_5 = $n_a3_5 * $mora_b_5;
$nb_a3_6 = $n_a3_6 * $mora_b_6;

// Matrix Normalisasi Bobot A4
$nb_a4_1 = $n_a4_1 * $mora_b_1;
$nb_a4_2 = $n_a4_2 * $mora_b_2;
$nb_a4_3 = $n_a4_3 * $mora_b_3;
$nb_a4_4 = $n_a4_4 * $mora_b_4;
$nb_a4_5 = $n_a4_5 * $mora_b_5;
$nb_a4_6 = $n_a4_6 * $mora_b_6;

// Matrix Normalisasi Bobot A5
$nb_a5_1 = $n_a5_1 * $mora_b_1;
$nb_a5_2 = $n_a5_2 * $mora_b_2;
$nb_a5_3 = $n_a5_3 * $mora_b_3;
$nb_a5_4 = $n_a5_4 * $mora_b_4;
$nb_a5_5 = $n_a5_5 * $mora_b_5;
$nb_a5_6 = $n_a5_6 * $mora_b_6;

// menghitung nilai Yi

// Nilai Max
$max_a1 = $nb_a1_3 + $nb_a1_4 + $nb_a1_5 + $nb_a1_6;
$max_a2 = $nb_a2_3 + $nb_a2_4 + $nb_a2_5 + $nb_a2_6;
$max_a3 = $nb_a3_3 + $nb_a3_4 + $nb_a3_5 + $nb_a3_6;
$max_a4 = $nb_a4_3 + $nb_a4_4 + $nb_a4_5 + $nb_a4_6;
$max_a5 = $nb_a5_3 + $nb_a5_4 + $nb_a5_5 + $nb_a5_6;

// Nilai Min
$min_a1 = $nb_a1_1 + $nb_a1_2;
$min_a2 = $nb_a2_1 + $nb_a2_2;
$min_a3 = $nb_a3_1 + $nb_a3_2;
$min_a4 = $nb_a4_1 + $nb_a4_2;
$min_a5 = $nb_a5_1 + $nb_a5_2;

// nilai YI
$yi_a1 = $max_a1 - $min_a1;
$yi_a2 = $max_a2 - $min_a2;
$yi_a3 = $max_a3 - $min_a3;
$yi_a4 = $max_a4 - $min_a4;
$yi_a5 = $max_a5 - $min_a5;
?>

      <h3>Matrix Keputusan (X)</h3>
      <table class="table table-bordered">
                    <tr class="text-center">
                        <th style="background-color: #FFE4E1"></th>
                        <th style="background-color: #FFE4E1">C1</th>
                        <th style="background-color: #FFE4E1">C2</th>
                        <th style="background-color: #FFE4E1">C3</th>
                        <th style="background-color: #FFE4E1">C4</th>
                        <th style="background-color: #FFE4E1">C5</th>
                        <th style="background-color: #FFE4E1">C6</th>
                    </tr>
                    <tr class="text-center">
                        <td>A1</td>
                        <td><?php echo $x_a1_1?></td>
                        <td><?php echo $x_a1_2?></td>
                        <td><?php echo $x_a1_3?></td>
                        <td><?php echo $x_a1_4?></td>
                        <td><?php echo $x_a1_5?></td>
                        <td><?php echo $x_a1_6?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A2</td>
                        <td><?php echo $x_a2_1?></td>
                        <td><?php echo $x_a2_2?></td>
                        <td><?php echo $x_a2_3?></td>
                        <td><?php echo $x_a2_4?></td>
                        <td><?php echo $x_a2_5?></td>
                        <td><?php echo $x_a2_6?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A3</td>
                        <td><?php echo $x_a3_1?></td>
                        <td><?php echo $x_a3_2?></td>
                        <td><?php echo $x_a3_3?></td>
                        <td><?php echo $x_a3_4?></td>
                        <td><?php echo $x_a3_5?></td>
                        <td><?php echo $x_a3_6?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A4</td>
                        <td><?php echo $x_a4_1?></td>
                        <td><?php echo $x_a4_2?></td>
                        <td><?php echo $x_a4_3?></td>
                        <td><?php echo $x_a4_4?></td>
                        <td><?php echo $x_a4_5?></td>
                        <td><?php echo $x_a4_6?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A5</td>
                        <td><?php echo $x_a5_1?></td>
                        <td><?php echo $x_a5_2?></td>
                        <td><?php echo $x_a5_3?></td>
                        <td><?php echo $x_a5_4?></td>
                        <td><?php echo $x_a5_5?></td>
                        <td><?php echo $x_a5_6?></td>
                    </tr>
      </table>
  </div>
  <br>
      <h3>Penyelesaian 1 : Matriks Normalisasi</h3>
      <table class="table table-bordered" border="1">
                    <tr class="text-center">
                        <th style="background-color: #FFE4E1"></th>
                        <th style="background-color: #FFE4E1">C1</th>
                        <th style="background-color: #FFE4E1">C2</th>
                        <th style="background-color: #FFE4E1">C3</th>
                        <th style="background-color: #FFE4E1">C4</th>
                        <th style="background-color: #FFE4E1">C5</th>
                        <th style="background-color: #FFE4E1">C6</th>
                    </tr>
                    <tr class="text-center">
                        <td>A1</td>
                        <td><?php echo sprintf("%.3f", $n_a1_1)?></td>
                        <td><?php echo sprintf("%.3f", $n_a1_2)?></td>
                        <td><?php echo sprintf("%.3f", $n_a1_3)?></td>
                        <td><?php echo sprintf("%.3f", $n_a1_4)?></td>
                        <td><?php echo sprintf("%.3f", $n_a1_5)?></td>
                        <td><?php echo sprintf("%.3f", $n_a1_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A2</td>
                        <td><?php echo sprintf("%.3f", $n_a2_1)?></td>
                        <td><?php echo sprintf("%.3f", $n_a2_2)?></td>
                        <td><?php echo sprintf("%.3f", $n_a2_3)?></td>
                        <td><?php echo sprintf("%.3f", $n_a2_4)?></td>
                        <td><?php echo sprintf("%.3f", $n_a2_5)?></td>
                        <td><?php echo sprintf("%.3f", $n_a2_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A3</td>
                        <td><?php echo sprintf("%.3f", $n_a3_1)?></td>
                        <td><?php echo sprintf("%.3f", $n_a3_2)?></td>
                        <td><?php echo sprintf("%.3f", $n_a3_3)?></td>
                        <td><?php echo sprintf("%.3f", $n_a3_4)?></td>
                        <td><?php echo sprintf("%.3f", $n_a3_5)?></td>
                        <td><?php echo sprintf("%.3f", $n_a3_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A4</td>
                        <td><?php echo sprintf("%.3f", $n_a4_1)?></td>
                        <td><?php echo sprintf("%.3f", $n_a4_2)?></td>
                        <td><?php echo sprintf("%.3f", $n_a4_3)?></td>
                        <td><?php echo sprintf("%.3f", $n_a4_4)?></td>
                        <td><?php echo sprintf("%.3f", $n_a4_5)?></td>
                        <td><?php echo sprintf("%.3f", $n_a4_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A5</td>
                        <td><?php echo sprintf("%.3f", $n_a5_1)?></td>
                        <td><?php echo sprintf("%.3f", $n_a5_2)?></td>
                        <td><?php echo sprintf("%.3f", $n_a5_3)?></td>
                        <td><?php echo sprintf("%.3f", $n_a5_4)?></td>
                        <td><?php echo sprintf("%.3f", $n_a5_5)?></td>
                        <td><?php echo sprintf("%.3f", $n_a5_6)?></td>
                    </tr>
      </table>
	  <br>
      <h3>Penyelesaian 2 : Matrix Normalisasi Bobot</h3>
      <table class="table table-bordered">
                    <tr class="text-center" style="background-color: #FFE4E1">
                        <th>Bobot</th>
                        <th><?php echo $mora_b_1 ?></th>
                        <th><?php echo $mora_b_2 ?></th>
                        <th><?php echo $mora_b_3 ?></th>
                        <th><?php echo $mora_b_4 ?></th>
                        <th><?php echo $mora_b_5 ?></th>
                        <th><?php echo $mora_b_6 ?></th>
                    </tr>
                    <tr class="text-center">
                        <th></th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>C6</th>
                    </tr>
                    <tr class="text-center">
                        <td>A1</td>
                        <td><?php echo sprintf("%.3f", $nb_a1_1)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a1_2)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a1_3)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a1_4)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a1_5)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a1_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A2</td>
                        <td><?php echo sprintf("%.3f", $nb_a2_1)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a2_2)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a2_3)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a2_4)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a2_5)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a2_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A3</td>
                        <td><?php echo sprintf("%.3f", $nb_a3_1)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a3_2)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a3_3)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a3_4)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a3_5)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a3_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A4</td>
                        <td><?php echo sprintf("%.3f", $nb_a4_1)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a4_2)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a4_3)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a4_4)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a4_5)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a4_6)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>A5</td>
                        <td><?php echo sprintf("%.3f", $nb_a5_1)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a5_2)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a5_3)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a5_4)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a5_5)?></td>
                        <td><?php echo sprintf("%.3f", $nb_a5_6)?></td>
                    </tr>
      </table>
	  <br>
      <h3>Penyelesaian 3 : Menghitung Nilai YI</h3>
      <table class="table table-bordered">
                    <tr class="text-center" style="background-color: #FFE4E1">
                        <th></th>
                        <th>MAX</th>
                        <th>MIN</th>
                        <th>YI</th>
                        <th>Ranking</th>

                    </tr>
                    <tr class="text-center">
                        <td>A1</td>
                        <td><?php echo sprintf("%.3f", $max_a1)?></td>
                        <td><?php echo sprintf("%.3f", $min_a1)?></td>
                        <td><?php echo sprintf("%.3f", $yi_a1)?></td>
                        <td style="background-color: yellow">1</td>
                    </tr>
                    <tr class="text-center">
                        <td>A2</td>
                        <td><?php echo sprintf("%.3f", $max_a2)?></td>
                        <td><?php echo sprintf("%.3f", $min_a2)?></td>
                        <td><?php echo sprintf("%.3f", $yi_a2)?></td>
                        <td>5</td>
                    </tr>
                    <tr class="text-center">
                        <td>A3</td>
                        <td><?php echo sprintf("%.3f", $max_a3)?></td>
                        <td><?php echo sprintf("%.3f", $min_a3)?></td>
                        <td><?php echo sprintf("%.3f", $yi_a3)?></td>
                        <td>3</td>
                    </tr>
                    <tr class="text-center">
                        <td>A4</td>
                        <td><?php echo sprintf("%.3f", $max_a4)?></td>
                        <td><?php echo sprintf("%.3f", $min_a4)?></td>
                        <td><?php echo sprintf("%.3f", $yi_a4)?></td>
                        <td>2</td>
                    </tr>
                    <tr class="text-center">
                        <td>A5</td>
                        <td><?php echo sprintf("%.3f", $max_a5)?></td>
                        <td><?php echo sprintf("%.3f", $min_a5)?></td>
                        <td><?php echo sprintf("%.3f", $yi_a5)?></td>
                        <td>4</td>
                    </tr>
      </table>
	  <br>
		<h4>Kesimpulan dari hasil yang di dapat menggunakan penyelesaian metode MOORA diatas adalah : <h2><center>'Adelan'</center></h2></h4>
    <br><br><br>
  </div>
</div>
</body>
</html>