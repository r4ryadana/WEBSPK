<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <div>
	<h1><b><center>ELECTREE</center><b></h1>
        <?php
        // Bobot Kriteria
        $bc1 = 3;
        $bc2 = 2;
        $bc3 = 2;
        $bc4 = 2;
        $bc5 = 1;
        // Kriteria A1
        $c1a1 = 2;
        $c2a1 = 4;
        $c3a1 = 2;
        $c4a1 = 3;
        $c5a1 = 3;
        // Kriteria A2
        $c1a2 = 4;
        $c2a2 = 1;
        $c3a2 = 5;
        $c4a2 = 5;
        $c5a2 = 3;
        // Kriteria A3
        $c1a3 = 3;
        $c2a3 = 2;
        $c3a3 = 1;
        $c4a3 = 4;
        $c5a3 = 4;
        ?>
    <!-- Matrix Normalisasi Keputusan----------------->  
    <br>  
    <h3>Penyelesaian 1 : Normalisasi Matrix Keputusan</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $c1a1?></th>
        <th><?php echo $c2a1?></th>
        <th><?php echo $c3a1?></th>
        <th><?php echo $c4a1?></th>
        <th><?php echo $c5a1?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $c1a2?></th>
        <th><?php echo $c2a2?></th>
        <th><?php echo $c3a2?></th>
        <th><?php echo $c4a2?></th>
        <th><?php echo $c5a2?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $c1a3?></th>
        <th><?php echo $c2a3?></th>
        <th><?php echo $c3a3?></th>
        <th><?php echo $c4a3?></th>
        <th><?php echo $c5a3?></th>
    </tr>
    <?php
    // Perhitungan matrix R
    // C1
    $rc1a1 = $c1a1/sqrt(pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2));
    $rc1a2 = $c1a2/sqrt(pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2));
    $rc1a3 = $c1a3/sqrt(pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2));
    // C2
    $rc2a1 = $c2a1/sqrt(pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2));
    $rc2a2 = $c2a2/sqrt(pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2));
    $rc2a3 = $c2a3/sqrt(pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2));
    // C3
    $rc3a1 = $c3a1/sqrt(pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2));
    $rc3a2 = $c3a2/sqrt(pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2));
    $rc3a3 = $c3a3/sqrt(pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2));
    // C4
    $rc4a1 = $c4a1/sqrt(pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2));
    $rc4a2 = $c4a2/sqrt(pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2));
    $rc4a3 = $c4a3/sqrt(pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2));
    // C5
    $rc5a1 = $c5a1/sqrt(pow($c5a1,2)+pow($c5a2,2)+pow($c5a3,2));
    $rc5a2 = $c5a2/sqrt(pow($c5a1,2)+pow($c5a2,2)+pow($c5a3,2));
    $rc5a3 = $c5a3/sqrt(pow($c5a1,2)+pow($c5a2,2)+pow($c5a3,2));
    ?>
    </table>
    <!-- Matrix Normalisasi R----------------->
    <br>
    <h3>Penyelesaian 2 : Matrix Normalisasi R</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th>R</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $rc1a1?></th>
        <th><?php echo $rc2a1?></th>
        <th><?php echo $rc3a1?></th>
        <th><?php echo $rc4a1?></th>
        <th><?php echo $rc5a1?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $rc1a2?></th>
        <th><?php echo $rc2a2?></th>
        <th><?php echo $rc3a2?></th>
        <th><?php echo $rc4a2?></th>
        <th><?php echo $rc5a2?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $rc1a3?></th>
        <th><?php echo $rc2a3?></th>
        <th><?php echo $rc3a3?></th>
        <th><?php echo $rc4a3?></th>
        <th><?php echo $rc5a3?></th>
    </tr>
    <?php
    // Perhitungan matrix V
    // C1
    $vc1a1 = $rc1a1*$bc1;
    $vc1a2 = $rc1a2*$bc1;
    $vc1a3 = $rc1a3*$bc1;
    // C2
    $vc2a1 = $rc2a1*$bc2;
    $vc2a2 = $rc2a2*$bc2;
    $vc2a3 = $rc2a3*$bc2;
    // C3
    $vc3a1 = $rc3a1*$bc3;
    $vc3a2 = $rc3a2*$bc3;
    $vc3a3 = $rc3a3*$bc3;
    // C4
    $vc4a1 = $rc4a1*$bc4;
    $vc4a2 = $rc4a2*$bc4;
    $vc4a3 = $rc4a3*$bc4;
    // C5
    $vc5a1 = $rc5a1*$bc5;
    $vc5a2 = $rc5a2*$bc5;
    $vc5a3 = $rc5a3*$bc5;
    ?>
    </table>
    <!-- Matrix V hasil pembobotan ----------------->
    <br>
    <h3>Penyelesaian 3 : Matrix V Hasil Pembobotan</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th>V</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
    </tr>
    <tr>
        <th>Bobot</th>
        <th><?php echo $bc1?></th>
        <th><?php echo $bc2?></th>
        <th><?php echo $bc3?></th>
        <th><?php echo $bc4?></th>
        <th><?php echo $bc5?></th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $vc1a1?></th>
        <th><?php echo $vc2a1?></th>
        <th><?php echo $vc3a1?></th>
        <th><?php echo $vc4a1?></th>
        <th><?php echo $vc5a1?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $vc1a2?></th>
        <th><?php echo $vc2a2?></th>
        <th><?php echo $vc3a2?></th>
        <th><?php echo $vc4a2?></th>
        <th><?php echo $vc5a2?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $vc1a3?></th>
        <th><?php echo $vc2a3?></th>
        <th><?php echo $vc3a3?></th>
        <th><?php echo $vc4a3?></th>
        <th><?php echo $vc5a3?></th>
    </tr>
    </table>
    <!-- Matrix Corcondace ---------------------->
    <br>
    <h3>Penyelesaian 4 : Concordance Matrix</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>Index Kriteria</th>
    </tr>
    <tr>
        <th>C12</th>
        <th>2, 5</th>
    </tr>
    <tr>
        <th>C13</th>
        <th>2, 3</th>
    </tr>
    <tr>
        <th>C21</th>
        <th>1, 3, 4, 5</th>
    </tr>
    <tr>
        <th>C23</th>
        <th>1, 3, 4</th>
    </tr>
    <tr>
        <th>C31</th>
        <th>1, 4, 5</th>
    </tr>
    <tr>
        <th>C32</th>
        <th>2, 5</th>
    </tr>
    <?php
    // Perhitungan Matrix Concordance C
    $ca1a1 = 0;
    $ca1a2 = $bc2 + $bc5;
    $ca1a3 = $bc2 + $bc3;
    $ca2a1 = $bc1 + $bc3+ $bc4+ $bc5;
    $ca2a2 = 0;
    $ca2a3 = $bc1 + $bc3 + $bc4;
    $ca3a1 = $bc1 + $bc4 + $bc5;
    $ca3a2 = $bc2 + $bc5;
    $ca3a3 = 0;
    // Threshold Concrodance
    $tc = ($ca1a1+$ca1a2+$ca1a3+$ca2a1+$ca2a2
    +$ca2a3+$ca3a1+$ca3a2+$ca3a3)/(3*(3-1));
    ?>
    </table>
    <!-- Matrix Corcondance C -------------------------->
    <br>
    <h3>Penyelesaian 5 : Matrix Concordance C</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th>C</th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $ca1a1?></th>
        <th><?php echo $ca1a2?></th>
        <th><?php echo $ca1a3?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $ca2a1?></th>
        <th><?php echo $ca2a2?></th>
        <th><?php echo $ca2a3?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $ca3a1?></th>
        <th><?php echo $ca3a2?></th>
        <th><?php echo $ca3a3?></th>
    </tr>
    <tr>
        <th>Threshold Concordance</th>
        <th><?php echo $tc?></th>
    </tr>
    </table>
    <!-- Matrix Dominan Corcondance F ----------------------->
    <br>
    <h3>Penyelesaian 6 : Matrix Dominan Concordance F</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th>F</th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>A1</th>
        <th>
            <?php
            if($ca1a1>$tc){
                echo 1; $fa11 = 1;
            }else{
                echo 0; $fa11 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($ca1a2>$tc){
                echo 1; $fa12 = 1;
            }else{
                echo 0; $fa12 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($ca1a3>$tc){
                echo 1; $fa13 = 1;
            }else{
                echo 0; $fa13 = 0;
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>A2</th>
        <th>
            <?php
            if($ca2a1>$tc){
                echo 1; $fa21 = 1;
            }else{
                echo 0; $fa21 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($ca2a2>$tc){
                echo 1; $fa22 = 1;
            }else{
                echo 0; $fa22 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($ca2a3>$tc){
                echo 1; $fa23 = 1;
            }else{
                echo 0; $fa23 = 0;
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>A3</th>
        <th>
            <?php
            if($ca3a1>$tc){
                echo 1; $fa31 = 1;
            }else{
                echo 0; $fa31 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($ca3a2>$tc){
                echo 1; $fa32 = 1;
            }else{
                echo 0; $fa32 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($ca3a3>$tc){
                echo 1; $fa33 = 1;
            }else{
                echo 0; $fa33 = 0;
            }
            ?>
        </th>
    </tr>
    </table>
    <!-- Matrix Discordance ------------------------------->
    <br>
    <h3>Penyelesaian 7 : Discordance Matrix</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th></th>
        <th>Index Kriteria</th>
    </tr>
    <tr>
        <th>C12</th>
        <th>1, 3, 4</th>
    </tr>
    <tr>
        <th>C13</th>
        <th>1, 4, 5</th>
    </tr>
    <tr>
        <th>C21</th>
        <th>2</th>
    </tr>
    <tr>
        <th>C23</th>
        <th>2, 5</th>
    </tr>
    <tr>
        <th>C31</th>
        <th>2, 3</th>
    </tr>
    <tr>
        <th>C32</th>
        <th>1, 3, 4</th>
    </tr>
    <?php
    // Perhitungan Matrix Discordance D
    $da1a1 = 0;
    $da1a2 = max(abs($vc1a1-$vc1a2),abs($vc3a1-$vc3a2),abs($vc4a1-$vc4a2))/
    max(abs($vc1a1-$vc1a2),abs($vc2a1-$vc2a2)
    ,abs($vc3a1-$vc3a2),abs($vc4a1-$vc4a2),abs($vc5a1-$vc5a2));
    $da1a3 = max(abs($vc1a1-$vc1a3),abs($vc4a1-$vc4a3),abs($vc5a1-$vc5a3))/
    max(abs($vc1a1-$vc1a3),abs($vc2a1-$vc2a3)
    ,abs($vc3a1-$vc3a3),abs($vc4a1-$vc4a3),abs($vc5a1-$vc5a3));
    $da2a1 = abs($vc2a2-$vc2a1)/
    max(abs($vc1a2-$vc1a1),abs($vc2a2-$vc2a1)
    ,abs($vc3a2-$vc3a1),abs($vc4a2-$vc4a1),abs($vc5a2-$vc5a1));
    $da2a2 = 0;
    $da2a3 = max(abs($vc2a2-$vc2a3),abs($vc5a2-$vc5a3))/
    max(abs($vc1a2-$vc1a3),abs($vc2a2-$vc2a3)
    ,abs($vc3a2-$vc3a3),abs($vc4a2-$vc4a3),abs($vc5a2-$vc5a3));
    $da3a1 = max(abs($vc2a3-$vc2a1),abs($vc3a3-$vc3a1))/
    max(abs($vc1a3-$vc1a1),abs($vc2a3-$vc2a1)
    ,abs($vc3a3-$vc3a1),abs($vc4a3-$vc4a1),abs($vc5a3-$vc5a1));
    $da3a2 = max(abs($vc1a3-$vc1a2),abs($vc3a3-$vc3a2),abs($vc4a3-$vc4a2))/
    max(abs($vc1a3-$vc1a2),abs($vc2a3-$vc2a2)
    ,abs($vc3a3-$vc3a2),abs($vc4a3-$vc4a2),abs($vc5a3-$vc5a2));
    $da3a3 = 0;
    // Threshold Discrodance
    $td = ($da1a1+$da1a2+$da1a3+$da2a1+$da2a2
    +$da2a3+$da3a1+$da3a2+$da3a3)/(3*(3-1));
    ?>
    </table>
    <!-- Matrix Discordance D ----------------------------->
    <br>
    <h3>Penyelesaian 8 : Matrix Discordance D</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th>D</th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $da1a1?></th>
        <th><?php echo $da1a2?></th>
        <th><?php echo $da1a3?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th><?php echo $da2a1?></th>
        <th><?php echo $da2a2?></th>
        <th><?php echo $da2a3?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th><?php echo $da3a1?></th>
        <th><?php echo $da3a2?></th>
        <th><?php echo $da3a3?></th>
    </tr>
    <tr>
        <th>Threshold Discordance</th>
        <th><?php echo $td?></th>
    </tr>
    </table>
    <!-- Matrix Dominan Discordance G ----------------------->
    <br>
    <h3>Penyelesaian 9 : Matrix Dominan Discordance G</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th>G</th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>A1</th>
        <th>
            <?php
            if($da1a1>$td){
                echo 1; $ga11 = 1;
            }else{
                echo 0; $ga11 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($da1a2>$td){
                echo 1; $ga12 = 1;
            }else{
                echo 0; $ga12 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($da1a3>$td){
                echo 1; $ga13 = 1;
            }else{
                echo 0; $ga13 = 0;
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>A2</th>
        <th>
            <?php
            if($da2a1>$td){
                echo 1; $ga21 = 1;
            }else{
                echo 0; $ga21 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($da2a2>$td){
                echo 1; $ga22 = 1;
            }else{
                echo 0; $ga22 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($da2a3>$td){
                echo 1; $ga23 = 1;
            }else{
                echo 0; $ga23 = 0;
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>A3</th>
        <th>
            <?php
            if($da3a1>$td){
                echo 1; $ga31 = 1;
            }else{
                echo 0; $ga31 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($da3a2>$td){
                echo 1; $ga32 = 1;
            }else{
                echo 0; $ga32 = 0;
            }
            ?>
        </th>
        <th>
            <?php
            if($da3a3>$td){
                echo 1; $ga33 = 1;
            }else{
                echo 0; $ga33 = 0;
            }
            ?>
        </th>
    </tr>
    </table>
    <!-- Matrix Agresi E ----------------------->
    <br>
    <h3>Penyelesaian 10 : Matrix Agresi E</h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: #FFE4E1">
        <th>E</th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
    </tr>
    <tr>
        <th>A1</th>
        <th><?php echo $fa11*$ga11?></th>
        <th><?php echo $fa12*$ga12?></th>
        <th><?php echo $fa13*$ga13?></th>
    </tr>
    <tr>
        <th>A2</th>
        <th style="background-color: yellow"><?php echo $fa21*$ga21?></th>
        <th><?php echo $fa22*$ga22?></th>
        <th><?php echo $fa23*$ga23?></th>
    </tr>
    <tr>
        <th>A3</th>
        <th style="background-color: yellow"><?php echo $fa31*$ga31?></th>
        <th><?php echo $fa32*$ga32?></th>
        <th><?php echo $fa33*$ga33?></th>
    </tr>
    </table>
    <br>
    <h4>Kesimpulan dari hasil yang di dapat menggunakan penyelesaian metode ELECTREE diatas adalah : <h2><center>'Apartemen 2 dan Apartemen 3'</center></h2></h4>
    <br><br><br>
	</div>
</head>