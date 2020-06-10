<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <div>
	<h1><b><center>GDSS</center><b></h1>
	<br>
	<h3>Penyelesaian 1 : Penyelesaian menggunakan perhitungan MOORA</h3>
    <div class="row">
        <div class="col-sm-4">
        <table class="table table-bordered" border="1">
            
                <th style="background-color: #FFE4E1">Juri 1</th>
                <th style="background-color: #FFE4E1">Nilai Yi</th>	
                <th style="background-color: #FFE4E1">Ranking</th>
            </tr>
            <tr>
                <th>A1</th>
                <th><?php echo $a1j1 = 0.228?></th>
                <th>2</th>
            </tr>
            <tr>
                <th>A2</th>
                <th><?php echo $a2j1 = 0.212?></th>
                <th>4</th>
            </tr>
            <tr>
                <th>A3</th>
                <th><?php echo $a3j1 = 0.216?></th>
                <th>3</th>
            </tr>
            <tr>
                <th>A4</th>
                <th><?php echo $a4j1 = 0.184?></th>
                <th>5</th>
            </tr>
            <tr>
                <th>A5</th>
                <th><?php echo $a5j1 = 0.249?></th>
                <th>1</th>
            </tr>
        </table>
        </div>
        <div class="col-sm-4">
        <table class="table table-bordered" border="1">
            
                <th style="background-color: #FFE4E1">Juri 2</th>
                <th style="background-color: #FFE4E1">Nilai Yi</th>
                <th style="background-color: #FFE4E1">Ranking</th>
            </tr>
            <tr>
                <th>A1</th>
                <th><?php echo $a1j2 = 0.220?></th>
                <th>3</th>
            </tr>
            <tr>
                <th>A2</th>
                <th><?php echo $a2j2 = 0.252?></th>
                <th>1</th>
            </tr>
            <tr>
                <th>A3</th>
                <th><?php echo $a3j2 = 0.195?></th>
                <th>5</th>
            </tr>
            <tr>
                <th>A4</th>
                <th><?php echo $a4j2 = 0.221?></th>
                <th>2</th>
            </tr>
            <tr>
                <th>A5</th>
                <th><?php echo $a5j2 = 0.206?></th>
                <th>4</th>
            </tr>
        </table>
        </div>
        <div class="col-sm-4">
        <table class="table table-bordered" border="1">
            
                <th style="background-color: #FFE4E1">Juri 3</th>
                <th style="background-color: #FFE4E1">Nilai Yi</th>
                <th style="background-color: #FFE4E1">Ranking</th>
            </tr>
            <tr>
                <th>A1</th>
                <th><?php echo $a1j3 = 0.230?></th>
                <th>2</th>
            </tr>
            <tr>
                <th>A2</th>
                <th><?php echo $a2j3 = 0.245?></th>
                <th>1</th>
            </tr>
            <tr>
                <th>A3</th>
                <th><?php echo $a3j3 = 0.209?></th>
                <th>3</th>
            </tr>
            <tr>
                <th>A4</th>
                <th><?php echo $a4j3 = 0.198?></th>
                <th>5</th>
            </tr>
            <tr>
                <th>A5</th>
                <th><?php echo $a5j3 = 0.205?></th>
                <th>4</th>
            </tr>
        </table>
        </div>
		<br>
        <h3>Penyelesaian 2 : Bobot Borda</h3>
        <div class="col-sm-6">
        <table class="table table-bordered" border="1">
            
                <th style="background-color: #FFE4E1">Ranking 1</th>
                <th style="background-color: #FFE4E1">Ranking 2</th>
                <th style="background-color: #FFE4E1">Ranking 3</th>
                <th style="background-color: #FFE4E1">Ranking 4</th>
                <th style="background-color: #FFE4E1">Ranking 5</th>
            </tr>
            <tr>
                <th><?php echo $bb1 = 5?></th>
                <th><?php echo $bb2 = 4?></th>
                <th><?php echo $bb3 = 3?></th>
                <th><?php echo $bb4 = 2?></th>
                <th><?php echo $bb5 = 1?></th>
            </tr>
        </table>
        </div>
    </div>
	<br>
        <h3>Penyelesaian 3 : Menghitung Borda</h3>
        <div class="col-sm-8">
        <table class="table table-bordered" border="1">
            
                <th style="background-color: #FFE4E1">Ranking</th>
                <th style="background-color: #FFE4E1">1</th>
                <th style="background-color: #FFE4E1">2</th>
                <th style="background-color: #FFE4E1">3</th>
                <th style="background-color: #FFE4E1">4</th>
                <th style="background-color: #FFE4E1">5</th>
            </tr>
            <tr>
                <th>A1</th>
                <th><?php echo $a1rb1 = 0*$bb1?></th>
                <th><?php echo $a1rb2 = ($a1j1+$a1j3)*$bb2?></th>
                <th><?php echo $a1rb3 = $a1j2*$bb3?></th>
                <th><?php echo $a1rb4 = 0*$bb4?></th>
                <th><?php echo $a1rb5 = 0*$bb5?></th>
            </tr>
            <tr>
                <th>A2</th>
                <th><?php echo $a2rb1 = ($a2j2+$a2j3)*$bb1?></th>
                <th><?php echo $a2rb2 = 0*$bb2?></th>
                <th><?php echo $a2rb3 = 0*$bb3?></th>
                <th><?php echo $a2rb4 = $a2j1*$bb4?></th>
                <th><?php echo $a2rb5 = 0*$bb5?></th>
            </tr>
            <tr>
                <th>A3</th>
                <th><?php echo $a3rb1 = 0*$bb1?></th>
                <th><?php echo $a3rb2 = 0*$bb2?></th>
                <th><?php echo $a3rb3 = ($a3j1+$a3j3)*$bb3?></th>
                <th><?php echo $a3rb4 = 0*$bb4?></th>
                <th><?php echo $a3rb5 = $a3j2*$bb5?></th>
            </tr>
            <tr>
                <th>A4</th>
                <th><?php echo $a4rb1 = 0*$bb1?></th>
                <th><?php echo $a4rb2 = $a4j2*$bb2?></th>
                <th><?php echo $a4rb3 = 0*$bb3?></th>
                <th><?php echo $a4rb4 = 0*$bb4?></th>
                <th><?php echo $a4rb5 = ($a4j1+$a4j3)*$bb5?></th>
            </tr>
            <tr>
                <th>A5</th>
                <th><?php echo $a5rb1 = $a5j1*$bb1?></th>
                <th><?php echo $a5rb2 = 0*$bb2?></th>
                <th><?php echo $a5rb3 = 0*$bb3?></th>
                <th><?php echo $a5rb4 = ($a5j2+$a5j3)*$bb4?></th>
                <th><?php echo $a5rb5 = 0*$bb5?></th>
            </tr>
        </table>
        </div>
        <?php
        $pb1 = $a1rb1+$a2rb1+$a3rb1+$a4rb1+$a5rb1;
        $pb2 = $a1rb2+$a2rb2+$a3rb2+$a4rb2+$a5rb2;
        $pb3 = $a1rb3+$a2rb3+$a3rb3+$a4rb3+$a5rb3;
        $pb4 = $a1rb4+$a2rb4+$a3rb4+$a4rb4+$a5rb4;
        $pb5 = $a1rb5+$a2rb5+$a3rb5+$a4rb5+$a5rb5;
        $tpb = $pb1+$pb2+$pb3+$pb4+$pb5;
        ?>
        <div class="col-sm-4">
        <table class="table table-bordered" border="1">
            
                <th style="background-color: #FFE4E1">Poin Borda</th>
                <th style="background-color: #FFE4E1">Nilai Borda</th>
                <th style="background-color: #FFE4E1">Ranking</th>
            </tr>
            <tr>
                <th><?php echo $pb1?></th>
                <th><?php echo number_format($pb1/$tpb,3,",",".")?></th>
                <th>2</th>
            </tr>
            <tr>
                <th><?php echo $pb2?></th>
                <th><?php echo number_format($pb2/$tpb,3,",",".")?></th>
                <th style="background-color: yellow">1</th>
            </tr>
            <tr>
                <th><?php echo $pb3?></th>
                <th><?php echo number_format($pb3/$tpb,3,",",".")?></th>
                <th>4</th>
            </tr>
            <tr>
                <th><?php echo $pb4?></th>
                <th><?php echo number_format($pb4/$tpb,3,",",".")?></th>
                <th>5</th>
            </tr>
            <tr>
                <th><?php echo $pb5?></th>
                <th><?php echo number_format($pb5/$tpb,3,",",".")?></th>
                <th>3</th>
            </tr>
            <tr>
                <th><h4><?php echo $tpb?></h4></th>
            </tr>
        </table>
        </div>
		<br>
	<h4>Kesimpulan dari hasil yang di dapat menggunakan penyelesaian metode GDSS diatas adalah : <h2><center>'Apartemen 2 = Purwanto.,S.Pd'</center></h2></h4>
    <br><br><br>
	</div>   
    </h3>