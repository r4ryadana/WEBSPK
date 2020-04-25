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
    // Fasilitas Pendukung
    $c11 = 2;
    $c12 = 4;
    $c13 = 3;
    $c14 = 30;
    // Harga Bangunan
    $c21 = 7000000;
    $c22 = 10000000;
    $c23 = 8500000;
    $c24 = 20;
    // Kontruksi Bangunan
    $c31 = 2012;
    $c32 = 2015;
    $c33 = 2010;
    $c34 = 20;
    // Jarak Tempat Kerja
    $c41 = 7;
    $c42 = 2;
    $c43 = 4;
    $c44 = 20;
    // JSistem Keamanan Apartemen
    $c51 = 3;
    $c52 = 3;
    $c53 = 4;
    $c54 = 10;
    //keterangan
    $benefit = "benefit";
    $cost = "cost";
    // perhitungan normalisasi
    // Fasilitas Pendukung
    $nc11 = $c11 / $c12;
    $nc12 = $c12 / $c12;
    $nc13 = $c13 / $c12;
    $nc14 = $c14 / 100;

    //Harga Bangunan 
    $nc21 = $c21 / $c21;
    $nc22 = $c21 / $c22;
    $nc23 = $c21 / $c23;
    $nc24 = $c24 / 100;
    // Kontruksi Bangunan
    $nc31 = $c31 / $c31;
    $nc32 = $c32 / $c32;
    $nc33 = $c33 / $c32;
    $nc34 = $c34 / 100;
    // Jarak Tempat Kerja
    $nc41 = $c42 / $c41;
    $nc42 = $c42 / $c42;
    $nc43 = $c42 / $c43;
    $nc44 = $c44 / 100;
    //Sistem Keamanan Aparteme
    $nc51 = $c51 / $c53;
    $nc52 = $c52 / $c53;
    $nc53 = $c53 / $c53;
    $nc54 = $c54 / 100;
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">SAW&WP</a>
                </li>
                <li class="nav-item">
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
                normalisasi
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Apartemen 1</th>
                            <th scope="col">Apartemen 2</th>
                            <th scope="col">Apartemen 3</th>
                            <th scope="col">Bobot</th>
                            <th scope="col">Jenis Atribut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td><?php echo $nc11 ?></td>
                            <td><?php echo $nc12 ?></td>
                            <td><?php echo $nc13 ?></td>
                            <td><?php echo $nc14 ?></td>
                            <td><?php echo $benefit ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $nc21 ?></td>
                            <td><?php echo $nc22 ?></td>
                            <td><?php echo $nc23 ?></td>
                            <td><?php echo $nc24 ?></td>
                            <td><?php echo $cost ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $nc31 ?></td>
                            <td><?php echo $nc32 ?></td>
                            <td><?php echo $nc33 ?></td>
                            <td><?php echo $nc34 ?></td>
                            <td><?php echo $benefit ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td><?php echo $nc41 ?></td>
                            <td><?php echo $nc42 ?></td>
                            <td><?php echo $nc43 ?></td>
                            <td><?php echo $nc44 ?></td>
                            <td><?php echo $cost ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C5</th>
                            <td><?php echo $nc51 ?></td>
                            <td><?php echo $nc52 ?></td>
                            <td><?php echo $nc53 ?></td>
                            <td><?php echo $nc54 ?></td>
                            <td><?php echo $benefit ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    //perkalian dengan bobot
    // Apartemen1
    $pc1 = ($nc11 * $c14 / 100);
    $pc2 = ($nc21 * $c24 / 100);
    $pc3 = ($nc31 * $c34 / 100);
    $pc4 = ($nc41 * $c44 / 100);
    $pc5 = ($nc51 * $c54 / 100);
    //Apartemen 2 
    $p1 = ($nc12 * $c14 / 100);
    $p2 = ($nc22 * $c24 / 100);
    $p3 = ($nc32 * $c34 / 100);
    $p4 = ($nc42 * $c44 / 100);
    $p5 = ($nc52 * $c54 / 100);
    //Apartemen 3
    $p11 = ($nc13 * $c14 / 100);
    $p22 = ($nc23 * $c24 / 100);
    $p33 = ($nc33 * $c34 / 100);
    $p44 = ($nc43 * $c44 / 100);
    $p55 = ($nc53 * $c54 / 100);
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                perkalian dengan bobot
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">Apartemen 1</th>
                            <th scope="col">Apartemen 2</th>
                            <th scope="col">Apartemen 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td><?php echo $pc1 ?></td>
                            <td><?php echo $p1 ?></td>
                            <td><?php echo $p11 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $pc2 ?></td>
                            <td><?php echo $p2 ?></td>
                            <td><?php echo $p22 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $pc3 ?></td>
                            <td><?php echo $p3 ?></td>
                            <td><?php echo $p33 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td><?php echo $pc4 ?></td>
                            <td><?php echo $p4 ?></td>
                            <td><?php echo $p44 ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C5</th>
                            <td><?php echo $pc5 ?></td>
                            <td><?php echo $p5 ?></td>
                            <td><?php echo $p55 ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href="index.php" type="button" class="btn btn-danger btn">Kembali</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jawabanSaw">
            Jawaban Saw
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jawabanWp">
            Jawaban WP
        </button>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>


</body>
<!-- Modal -->
<div class="modal fade" id="jawabanSaw" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <?php

                // jawaban
                $v1 = ($pc1 + $pc2 + $pc3 + $pc4 + $pc5);
                $v2 = ($p1 + $p2 + $p3 + $p4 + $p5);
                $v3 = ($p11 + $p22 + $p33 + $p44 + $p55);

                ?>
                <div class="card">
                    <div class="card-header">
                        Jawaban SAW
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">Apartemen 1</th>
                                    <th scope="col">Apartemen 2</th>
                                    <th scope="col">Apartemen 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td><?php echo $v1 ?></td>
                                    <td><?php echo $v2 ?></td>
                                    <td><?php echo $v3 ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal WP-->
<div class="modal fade" id="jawabanWp" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <?php
                $S1 = pow($pc1, $c14 / 100) * pow($pc2, $c24 / 100) * pow($pc3, $c34 / 100) * pow($pc4, $c44 / 100) * pow($pc5, $c54 / 100);
                $S2 = pow($p1, $c14 / 100) * pow($p2, $c24 / 100) * pow($p3, $c34 / 100) * pow($p4, $c44 / 100) * pow($p5, $c54 / 100);
                $S3 = pow($p11, $c14 / 100) * pow($p22, $c24 / 100) * pow($p33, $c34 / 100) * pow($p44, $c44 / 100) * pow($p55, $c54 / 100);
                ?>
                <div class="card">
                    <div class="card-header">
                        Menghitung Nilai Alternatif
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col"> S1</th>
                                    <th scope="col"> S2</th>
                                    <th scope="col"> S3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td><?php echo $S1 ?></td>
                                    <td><?php echo $S2 ?></td>
                                    <td><?php echo $S3 ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <BR>
                <?php
                $WP1 = $S1 / ($S1 + $S2 + $S3);
                $WP2 = $S2 / ($S1 + $S2 + $S3);
                $WP3 = $S3 / ($S1 + $S2 + $S3);
                ?>
                <div class="card">
                    <div class="card-header">
                        Jawaban WP
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">Apartemen 1</th>
                                    <th scope="col">Apartemen 2</th>
                                    <th scope="col">Apartemen 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td><?php echo $WP1 ?></td>
                                    <td><?php echo $WP2 ?></td>
                                    <td><?php echo $WP3 ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</html>