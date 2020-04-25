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
    <?php
    // Kriteria pasar
    $c11 = 1;
    $c12 = 1 / 3;
    $c13 = 2;
    $c14 = 4;
    // Kriteria pendapatan
    $c21 = 3;
    $c22 = 1;
    $c23 = 5;
    $c24 = 3;
    // Kriteria infrastruktur
    $c31 = 1 / 2;
    $c32 = 1 / 5;
    $c33 = 1;
    $c34 = 2;
    // Kriteria transportasi
    $c41 = 1 / 4;
    $c42 = 1 / 3;
    $c43 = 1 / 2;
    $c44 = 1;
    ?>
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
                <li class="nav-item active">
                    <a class="nav-link" href="ahp.php">AHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="electree.php">Electree</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Topsis.php">Topsis</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Tabel Kriteria
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Pasar</th>
                            <th scope="col">Pendapatan</th>
                            <th scope="col">Infrastruktur</th>
                            <th scope="col">Transportasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Pasar</th>
                            <td><?php echo $c11 ?></td>
                            <td><?php echo $c12 ?></td>
                            <td><?php echo $c13 ?></td>
                            <td><?php echo $c14 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pendapatan</th>
                            <td><?php echo $c21 ?></td>
                            <td><?php echo $c22 ?></td>
                            <td><?php echo $c23 ?></td>
                            <td><?php echo $c24 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Infrastruktur</th>
                            <td><?php echo $c31 ?></td>
                            <td><?php echo $c32 ?></td>
                            <td><?php echo $c33 ?></td>
                            <td><?php echo $c34 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Transportasi</th>
                            <td><?php echo $c41 ?></td>
                            <td><?php echo $c42 ?></td>
                            <td><?php echo $c43 ?></td>
                            <td><?php echo $c44 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <?php
    // jumlah kriteria -->
    $jk1 = $c11 + $c21 + $c31 + $c41;
    $jk2 = $c12 + $c22 + $c32 + $c42;
    $jk3 = $c13 + $c23 + $c33 + $c43;
    $jk4 = $c14 + $c24 + $c34 + $c44;
    // perhitungan normalisasi
    // Kriteria pasar
    $nc11 = $c11 / $jk1;
    $nc12 = $c12 / $jk2;
    $nc13 = $c13 / $jk3;
    $nc14 = $c14 / $jk4;
    // Kriteria pendapatan
    $nc21 = $c21 / $jk1;
    $nc22 = $c22 / $jk2;
    $nc23 = $c23 / $jk3;
    $nc24 = $c24 / $jk4;
    // Kriteria infrastruktur
    $nc31 = $c31 / $jk1;
    $nc32 = $c32 / $jk2;
    $nc33 = $c33 / $jk3;
    $nc34 = $c34 / $jk4;
    // Kriteria transportasi
    $nc41 = $c41 / $jk1;
    $nc42 = $c42 / $jk2;
    $nc43 = $c43 / $jk3;
    $nc44 = $c44 / $jk4;
    // jumlah hasil normalisasi
    $jn1 = $nc11 + $nc12 + $nc13 + $nc14;
    $jn2 = $nc21 + $nc22 + $nc23 + $nc24;
    $jn3 = $nc31 + $nc32 + $nc33 + $nc34;
    $jn4 = $nc41 + $nc42 + $nc43 + $nc44;
    // perhitungan PW
    $pwc1 = $jn1 / 4;
    $pwc2 = $jn2 / 4;
    $pwc3 = $jn3 / 4;
    $pwc4 = $jn4 / 4;
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
                            <th scope="col">Kriteria</th>
                            <th scope="col">Pasar</th>
                            <th scope="col">Pendapatan</th>
                            <th scope="col">Infrastruktur</th>
                            <th scope="col">Transportasi</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Pasar</th>
                            <td><?php echo $nc11 ?></td>
                            <td><?php echo $nc12 ?></td>
                            <td><?php echo $nc13 ?></td>
                            <td><?php echo $nc14 ?></td>
                            <td><?php echo $jn1 ?></td>
                            <td><?php echo $pwc1 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pendapatan</th>
                            <td><?php echo $nc21 ?></td>
                            <td><?php echo $nc22 ?></td>
                            <td><?php echo $nc23 ?></td>
                            <td><?php echo $nc24 ?></td>
                            <td><?php echo $jn2 ?></td>
                            <td><?php echo $pwc2 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Infrastruktur</th>
                            <td><?php echo $nc31 ?></td>
                            <td><?php echo $nc32 ?></td>
                            <td><?php echo $nc33 ?></td>
                            <td><?php echo $nc34 ?></td>
                            <td><?php echo $jn3 ?></td>
                            <td><?php echo $pwc3 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Transportasi</th>
                            <td><?php echo $nc41 ?></td>
                            <td><?php echo $nc42 ?></td>
                            <td><?php echo $nc43 ?></td>
                            <td><?php echo $nc44 ?></td>
                            <td><?php echo $jn4 ?></td>
                            <td><?php echo $pwc4 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
    <?php
    // perhitungan matriks
    $mc1 = ($c11 * $pwc1) + ($c12 * $pwc2) + ($c13 * $pwc3) + ($c14 * $pwc4);
    $mc2 = ($c21 * $pwc1) + ($c22 * $pwc2) + ($c23 * $pwc3) + ($c24 * $pwc4);
    $mc3 = ($c31 * $pwc1) + ($c32 * $pwc2) + ($c33 * $pwc3) + ($c34 * $pwc4);
    $mc4 = ($c41 * $pwc1) + ($c42 * $pwc2) + ($c43 * $pwc3) + ($c44 * $pwc4);
    // perhitungan matriks dibagi PW
    $mcw1 = $mc1 / $pwc1;
    $mcw2 = $mc2 / $pwc2;
    $mcw3 = $mc3 / $pwc3;
    $mcw4 = $mc4 / $pwc4;
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Menghitung Matriks
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Matriks</th>
                            <th scope="col">Matriks/PW</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Pasar</th>
                            <td><?php echo $mc1 ?></td>
                            <td><?php echo $mcw1 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pendapatan</th>
                            <td><?php echo $mc2 ?></td>
                            <td><?php echo $mcw2 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Infrastruktur</th>
                            <td><?php echo $mc3 ?></td>
                            <td><?php echo $mcw3 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Transportasi</th>
                            <td><?php echo $mc4 ?></td>
                            <td><?php echo $mcw4 ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
    <?php
    // menghitung λmaks
    $cm = ($mcw1 + $mcw2 + $mcw3 + $mcw4) / 4;
    $cci = ($cm - 4) / (4 - 1);
    $ccr = $cci / 0.9;
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Menghitung lambda max dan CI
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">perhitungan</th>
                            <th scope="col">Hasil</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Lambda max</th>
                            <td><?php echo $cm ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CI</th>
                            <td><?php echo $cci ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CR</th>
                            <td><?php echo $ccr ?></td>
                            <th><?php
                                if ($ccr < 0.1) {
                                    echo ("Dapat Digunakan");
                                } else {
                                    echo ("Tidak Dapat Digunakan");
                                }
                                ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href="ahp/pasar.php" type="button" class="btn btn-primary btn">Tabel Alternatif Pasar</a>
        <a href="ahp/infrastruktur.php" type="button" class="btn btn-primary btn">Tabel Alternatif Pendapatan</a>
        <a href="ahp/pendapatan.php" type="button" class="btn btn-primary btn">Tabel Alternatif Infrastruktur</a>
        <a href="ahp/transportasi.php" type="button" class="btn btn-primary btn">Tabel Alternatif Transportasi</a>
        <br>
        <br>
        <br>
    </div>
</body>

</html>