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
    // Atlanta
    $a1c11 = 1;
    $a1c12 = 1 / 6;
    $a1c13 = 1 / 4;
    // Birmingham
    $a1c21 = 6;
    $a1c22 = 1;
    $a1c23 = 3;
    // Charlotte
    $a1c31 = 4;
    $a1c32 = 1 / 3;
    $a1c33 = 1;
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">SAW&WP</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../ahp.php">AHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../electree.php">Electree</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Tabel Alternatif Pendapatan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Pasar</th>
                            <th scope="col">Atlanta</th>
                            <th scope="col">Birmingham</th>
                            <th scope="col">Charlote</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Atlanta</th>
                            <td><?php echo $a1c11 ?></td>
                            <td><?php echo $a1c12 ?></td>
                            <td><?php echo $a1c13 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Bringmiham</th>
                            <td><?php echo $a1c21 ?></td>
                            <td><?php echo $a1c22 ?></td>
                            <td><?php echo $a1c23 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Charlote</th>
                            <td><?php echo $a1c31 ?></td>
                            <td><?php echo $a1c32 ?></td>
                            <td><?php echo $a1c33 ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <?php
    //jumlahalternatifpasar
    $ja1k1 = $a1c11 + $a1c21 + $a1c31;
    $ja1k2 = $a1c12 + $a1c22 + $a1c32;
    $ja1k3 = $a1c13 + $a1c23 + $a1c33;
    // perhitungan normalisasi
    // Atlanta pasar
    $na1c11 = $a1c11 / $ja1k1;
    $na1c12 = $a1c12 / $ja1k2;
    $na1c13 = $a1c13 / $ja1k3;
    // Birmingham pasar
    $na1c21 = $a1c21 / $ja1k1;
    $na1c22 = $a1c22 / $ja1k2;
    $na1c23 = $a1c23 / $ja1k3;
    // Charlotte pasar
    $na1c31 = $a1c31 / $ja1k1;
    $na1c32 = $a1c32 / $ja1k2;
    $na1c33 = $a1c33 / $ja1k3;
    // jumlah hasil normalisasi
    $ja1n1 = $na1c11 + $na1c12 + $na1c13;
    $ja1n2 = $na1c21 + $na1c22 + $na1c23;
    $ja1n3 = $na1c31 + $na1c32 + $na1c33;
    // perhitungan PW
    $pwa1c1 = $ja1n1 / 3;
    $pwa1c2 = $ja1n2 / 3;
    $pwa1c3 = $ja1n3 / 3;
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
                            <th scope="col">Pasar</th>
                            <th scope="col">Atlanta</th>
                            <th scope="col">Bringmiham</th>
                            <th scope="col">Charlote</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Atlanta</th>
                            <td><?php echo $na1c11 ?></td>
                            <td><?php echo $na1c12 ?></td>
                            <td><?php echo $na1c13 ?></td>
                            <td><?php echo $ja1n1 ?></td>
                            <td><?php echo $pwa1c1 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Bringmiham</th>
                            <td><?php echo $na1c21 ?></td>
                            <td><?php echo $na1c22 ?></td>
                            <td><?php echo $na1c23 ?></td>
                            <td><?php echo $ja1n2 ?></td>
                            <td><?php echo $pwa1c2 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Charlotte</th>
                            <td><?php echo $na1c31 ?></td>
                            <td><?php echo $na1c32 ?></td>
                            <td><?php echo $na1c33 ?></td>
                            <td><?php echo $ja1n3 ?></td>
                            <td><?php echo $pwa1c3 ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
    <?php
    // perhitungan matriks
    $ma1c1 = ($a1c11 * $pwa1c1) + ($a1c12 * $pwa1c2) + ($a1c13 * $pwa1c3);
    $ma1c2 = ($a1c21 * $pwa1c1) + ($a1c22 * $pwa1c2) + ($a1c23 * $pwa1c3);
    $ma1c3 = ($a1c31 * $pwa1c1) + ($a1c32 * $pwa1c2) + ($a1c33 * $pwa1c3);
    // perhitungan matriks dibagi PW
    $mca1w1 = $ma1c1 / $pwa1c1;
    $mca1w2 = $ma1c2 / $pwa1c2;
    $mca1w3 = $ma1c3 / $pwa1c3;
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
                            <th scope="row">Atlanta</th>
                            <td><?php echo $ma1c1 ?></td>
                            <td><?php echo $mca1w1 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Bringmiham</th>
                            <td><?php echo $ma1c2 ?></td>
                            <td><?php echo $mca1w2 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Charlotte</th>
                            <td><?php echo $ma1c3 ?></td>
                            <td><?php echo $mca1w3 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
    <?php
    // menghitung λmaks
    $cma1 = ($mca1w1 + $mca1w2 + $mca1w3) / 3;
    $ccia1 = ($cma1 - 3) / (3 - 1);
    $ccra1 = $ccia1 / 0.58;
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
                            <td><?php echo $cma1 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CI</th>
                            <td><?php echo $ccia1 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CR</th>
                            <td><?php echo $ccra1 ?></td>
                            <th><?php
                                if ($ccra1 < 0.1) {
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
        <a href="pasar.php" type="button" class="btn btn-primary btn">Tabel Alternatif Pasar</a>
        <a href="pendapatan.php" type="button" class="btn btn-primary btn">Tabel Alternatif Pendapatan</a>
        <a href="infrastruktur.php" type="button" class="btn btn-primary btn">Tabel Alternatif Infrastruktur</a>
        <a href="transportasi.php" type="button" class="btn btn-primary btn">Tabel Alternatif Transportasi</a>
        <a href="../ahp.php" type="button" class="btn btn-danger btn">Kembali</a>
        <br>
        <br>
        <br>
    </div>
</body>

</html>