<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <div>
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
    <h3><b>Skor Ternormalisasi</b></h3>
    <table class="table table-bordered" border="1">
    <tr style="background-color: aqua">
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
</head>