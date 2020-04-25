<html>

<head>
    <title>
        Tugas Akhir SPK
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">SAW&WP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ahp.php">AHP</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="electree.php">Electree</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Topsis.php">Topsis</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    // Bobot Kriteria

    use function PHPSTORM_META\map;

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

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Skor
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Sepatu 1</th>
                            <th scope="col">Sepatu 2</th>
                            <th scope="col">Sepatu 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td><?php echo $a1c1; ?></td>
                            <td><?php echo $a2c1; ?></td>
                            <td><?php echo $a3c1; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $a1c2; ?></td>
                            <td><?php echo $a2c2; ?></td>
                            <td><?php echo $a3c2; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $a1c3; ?></td>
                            <td><?php echo $a2c3; ?></td>
                            <td><?php echo $a3c3; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td><?php echo $a1c4; ?></td>
                            <td><?php echo $a2c4; ?></td>
                            <td><?php echo $a3c4; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    //skor ternomalisasi
    //c1
    $ta1c1 = $a1c1 / sqrt(pow($a1c1, 2) + pow($a2c1, 2) + pow($a3c1, 2));
    $ta2c1 = $a2c1 / sqrt(pow($a1c1, 2) + pow($a2c1, 2) + pow($a3c1, 2));
    $ta3c1 = $a3c1 / sqrt(pow($a1c1, 2) + pow($a2c1, 2) + pow($a3c1, 2));
    //c2
    $ta1c2 = $a1c2 / sqrt(pow($a1c2, 2) + pow($a2c2, 2) + pow($a3c2, 2));
    $ta2c2 = $a2c2 / sqrt(pow($a1c2, 2) + pow($a2c2, 2) + pow($a3c2, 2));
    $ta3c2 = $a3c2 / sqrt(pow($a1c2, 2) + pow($a2c2, 2) + pow($a3c2, 2));
    //c3
    $ta1c3 = $a1c3 / sqrt(pow($a1c3, 2) + pow($a2c3, 2) + pow($a3c3, 2));
    $ta2c3 = $a2c3 / sqrt(pow($a1c3, 2) + pow($a2c3, 2) + pow($a3c3, 2));
    $ta3c3 = $a3c3 / sqrt(pow($a1c3, 2) + pow($a2c3, 2) + pow($a3c3, 2));
    //c4
    $ta1c4 = $a1c4 / sqrt(pow($a1c4, 2) + pow($a2c4, 2) + pow($a3c4, 2));
    $ta2c4 = $a2c4 / sqrt(pow($a1c4, 2) + pow($a2c4, 2) + pow($a3c4, 2));
    $ta3c4 = $a3c4 / sqrt(pow($a1c4, 2) + pow($a2c4, 2) + pow($a3c4, 2));
    ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Ternomalisasi
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Sepatu 1</th>
                            <th scope="col">Sepatu 2</th>
                            <th scope="col">Sepatu 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td><?php echo $ta1c1; ?></td>
                            <td><?php echo $ta2c1; ?></td>
                            <td><?php echo $ta3c1; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $ta1c2; ?></td>
                            <td><?php echo $ta2c2; ?></td>
                            <td><?php echo $ta3c2; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $ta1c3; ?></td>
                            <td><?php echo $ta2c3; ?></td>
                            <td><?php echo $ta3c3; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td><?php echo $ta1c4; ?></td>
                            <td><?php echo $ta2c4; ?></td>
                            <td><?php echo $ta3c4; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    //skor ternomalisasi
    //c1
    $na1c1 = $ta1c1 * $bc1;
    $na2c1 = $ta2c1 * $bc1;
    $na3c1 = $ta3c1 * $bc1;
    //c2
    $na1c2 = $ta1c2 * $bc2;
    $na2c2 = $ta2c2 * $bc2;
    $na3c2 = $ta3c2 * $bc2;
    //c3
    $na1c3 = $ta1c3 * $bc3;
    $na2c3 = $ta2c3 * $bc3;
    $na3c3 = $ta3c3 * $bc3;
    //c4
    $na1c4 = $ta1c4 * $bc4;
    $na2c4 = $ta2c4 * $bc4;
    $na3c4 = $ta3c4 * $bc4;
    ?>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Normalisasi
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Sepatu 1</th>
                            <th scope="col">Sepatu 2</th>
                            <th scope="col">Sepatu 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td><?php echo $na1c1; ?></td>
                            <td><?php echo $na2c1; ?></td>
                            <td><?php echo $na3c1; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $na1c2; ?></td>
                            <td><?php echo $na2c2; ?></td>
                            <td><?php echo $na3c2; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $na1c3; ?></td>
                            <td><?php echo $na2c3; ?></td>
                            <td><?php echo $na3c3; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td><?php echo $na1c4; ?></td>
                            <td><?php echo $na2c4; ?></td>
                            <td><?php echo $na3c4; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    //skor
    //A+
    $apc1 = max($na1c1, $na2c1, $na3c1);
    $apc2 = max($na1c2, $na2c2, $na3c2);
    $apc3 = max($na1c3, $na2c3, $na3c3);
    $apc4 = min($na1c4, $na2c4, $na3c4);
    //A-
    $amc1 = min($na1c1, $na2c1, $na3c1);
    $amc2 = min($na1c2, $na2c2, $na3c2);
    $amc3 = min($na1c3, $na2c3, $na3c3);
    $amc4 = max($na1c4, $na2c4, $na3c4);
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">A+</th>
                            <th scope="col">A-</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td><?php echo $apc1; ?></td>
                            <td><?php echo $amc1; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $apc2; ?></td>
                            <td><?php echo $amc2; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $apc3; ?></td>
                            <td><?php echo $amc3; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td><?php echo $apc4; ?></td>
                            <td><?php echo $amc4; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    //skor
    //D+
    $dpc1 = SQRT(pow(($apc1 - $na1c1), 2) + pow(($apc2 - $na1c2), 2) + pow(($apc3 - $na1c3), 2) + pow(($apc4 - $na1c4), 2));
    $dpc2 = SQRT(pow(($apc2 - $na2c1), 2) + pow(($apc2 - $na2c2), 2) + pow(($apc3 - $na2c3), 2) + pow(($apc4 - $na2c4), 2));
    $dpc3 = SQRT(pow(($apc1 - $na3c1), 2) + pow(($apc2 - $na3c2), 2) + pow(($apc3 - $na3c3), 2) + pow(($apc4 - $na3c4), 2));
    //D-
    $dmc1 = SQRT(pow(($amc1 - $na1c1), 2) + pow(($amc2 - $na1c2), 2) + pow(($amc3 - $na1c3), 2) + pow(($amc4 - $na1c4), 2));
    $dmc2 = SQRT(pow(($amc2 - $na2c1), 2) + pow(($amc2 - $na2c2), 2) + pow(($amc3 - $na2c3), 2) + pow(($amc4 - $na2c4), 2));
    $dmc3 = SQRT(pow(($amc1 - $na3c1), 2) + pow(($amc2 - $na3c2), 2) + pow(($amc3 - $na3c3), 2) + pow(($amc4 - $na3c4), 2));
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    Menghitung Jarak Alternatif dengan Solusi Ideal Positif Dan Negatif
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">D+</th>
                            <th scope="col">D-</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td><?php echo $dpc1; ?></td>
                            <td><?php echo $dmc1; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $dpc2; ?></td>
                            <td><?php echo $dmc2; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $dpc3; ?></td>
                            <td><?php echo $dmc3; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    //skor
    $a1 = $dmc1 / ($dmc1 + $dpc1);
    $a2 = $dmc2 / ($dmc2 + $dpc2);
    $a3 = $dmc3 / ($dmc3 + $dpc3);
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    Menghitung Skor Akhir untuk Setiap Alternatif
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">A1</th>
                            <td><?php echo $a1; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">A2</th>
                            <td><?php echo $a2; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">A3</th>
                            <td><?php echo $a3; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href="Topsis.php" type="button" class="btn btn-danger btn">Kembali</a>
        <br>
        <br>
    </div>
</body>

</html>