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
                <li class="nav-item active">
                    <a class="nav-link" href="electree.php">Electree</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Topsis.php">Topsis</a>
                </li>
            </ul>
        </div>
    </nav>
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
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Normalisasi Matrix Keputusan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                            <th scope="col">C4</th>
                            <th scope="col">C5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>A1</th>
                            <td><?php echo $c1a1 ?></td>
                            <td><?php echo $c2a1 ?></td>
                            <td><?php echo $c3a1 ?></td>
                            <td><?php echo $c4a1 ?></td>
                            <td><?php echo $c5a1 ?></td>
                        </tr>
                        <tr>
                            <th>A2</th>
                            <td><?php echo $c1a2 ?></td>
                            <td><?php echo $c2a2 ?></td>
                            <td><?php echo $c3a2 ?></td>
                            <td><?php echo $c4a2 ?></td>
                            <td><?php echo $c5a2 ?></td>
                        </tr>
                        <tr>
                            <th>A3</th>
                            <td><?php echo $c1a3 ?></td>
                            <td><?php echo $c2a3 ?></td>
                            <td><?php echo $c3a3 ?></td>
                            <td><?php echo $c4a3 ?></td>
                            <td><?php echo $c5a3 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    // Perhitungan matrix R
    // C1
    $rc1a1 = $c1a1 / sqrt(pow($c1a1, 2) + pow($c1a2, 2) + pow($c1a3, 2));
    $rc1a2 = $c1a2 / sqrt(pow($c1a1, 2) + pow($c1a2, 2) + pow($c1a3, 2));
    $rc1a3 = $c1a3 / sqrt(pow($c1a1, 2) + pow($c1a2, 2) + pow($c1a3, 2));
    // C2
    $rc2a1 = $c2a1 / sqrt(pow($c2a1, 2) + pow($c2a2, 2) + pow($c2a3, 2));
    $rc2a2 = $c2a2 / sqrt(pow($c2a1, 2) + pow($c2a2, 2) + pow($c2a3, 2));
    $rc2a3 = $c2a3 / sqrt(pow($c2a1, 2) + pow($c2a2, 2) + pow($c2a3, 2));
    // C3
    $rc3a1 = $c3a1 / sqrt(pow($c3a1, 2) + pow($c3a2, 2) + pow($c3a3, 2));
    $rc3a2 = $c3a2 / sqrt(pow($c3a1, 2) + pow($c3a2, 2) + pow($c3a3, 2));
    $rc3a3 = $c3a3 / sqrt(pow($c3a1, 2) + pow($c3a2, 2) + pow($c3a3, 2));
    // C4
    $rc4a1 = $c4a1 / sqrt(pow($c4a1, 2) + pow($c4a2, 2) + pow($c4a3, 2));
    $rc4a2 = $c4a2 / sqrt(pow($c4a1, 2) + pow($c4a2, 2) + pow($c4a3, 2));
    $rc4a3 = $c4a3 / sqrt(pow($c4a1, 2) + pow($c4a2, 2) + pow($c4a3, 2));
    // C5
    $rc5a1 = $c5a1 / sqrt(pow($c5a1, 2) + pow($c5a2, 2) + pow($c5a3, 2));
    $rc5a2 = $c5a2 / sqrt(pow($c5a1, 2) + pow($c5a2, 2) + pow($c5a3, 2));
    $rc5a3 = $c5a3 / sqrt(pow($c5a1, 2) + pow($c5a2, 2) + pow($c5a3, 2));
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Normalisasi Matrix R
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                            <th scope="col">C4</th>
                            <th scope="col">C5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>A1</th>
                            <td><?php echo $rc1a1 ?></td>
                            <td><?php echo $rc2a1 ?></td>
                            <td><?php echo $rc3a1 ?></td>
                            <td><?php echo $rc4a1 ?></td>
                            <td><?php echo $rc5a1 ?></td>
                        </tr>
                        <tr>
                            <th>A2</th>
                            <td><?php echo $rc1a2 ?></td>
                            <td><?php echo $rc2a2 ?></td>
                            <td><?php echo $rc3a2 ?></td>
                            <td><?php echo $rc4a2 ?></td>
                            <td><?php echo $rc5a2 ?></td>
                        </tr>
                        <tr>
                            <th>A3</th>
                            <td><?php echo $rc1a3 ?></td>
                            <td><?php echo $rc2a3 ?></td>
                            <td><?php echo $rc3a3 ?></td>
                            <td><?php echo $rc4a3 ?></td>
                            <td><?php echo $rc5a3 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    // Perhitungan matrix V
    // C1
    $vc1a1 = $rc1a1 * $bc1;
    $vc1a2 = $rc1a2 * $bc1;
    $vc1a3 = $rc1a3 * $bc1;
    // C2
    $vc2a1 = $rc2a1 * $bc2;
    $vc2a2 = $rc2a2 * $bc2;
    $vc2a3 = $rc2a3 * $bc2;
    // C3
    $vc3a1 = $rc3a1 * $bc3;
    $vc3a2 = $rc3a2 * $bc3;
    $vc3a3 = $rc3a3 * $bc3;
    // C4
    $vc4a1 = $rc4a1 * $bc4;
    $vc4a2 = $rc4a2 * $bc4;
    $vc4a3 = $rc4a3 * $bc4;
    // C5
    $vc5a1 = $rc5a1 * $bc5;
    $vc5a2 = $rc5a2 * $bc5;
    $vc5a3 = $rc5a3 * $bc5;
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Normalisasi Matrix R
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                            <th scope="col">C4</th>
                            <th scope="col">C5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>A1</th>
                            <td><?php echo $rc1a1 ?></td>
                            <td><?php echo $rc2a1 ?></td>
                            <td><?php echo $rc3a1 ?></td>
                            <td><?php echo $rc4a1 ?></td>
                            <td><?php echo $rc5a1 ?></td>
                        </tr>
                        <tr>
                            <th>A2</th>
                            <td><?php echo $rc1a2 ?></td>
                            <td><?php echo $rc2a2 ?></td>
                            <td><?php echo $rc3a2 ?></td>
                            <td><?php echo $rc4a2 ?></td>
                            <td><?php echo $rc5a2 ?></td>
                        </tr>
                        <tr>
                            <th>A3</th>
                            <td><?php echo $rc1a3 ?></td>
                            <td><?php echo $rc2a3 ?></td>
                            <td><?php echo $rc3a3 ?></td>
                            <td><?php echo $rc4a3 ?></td>
                            <td><?php echo $rc5a3 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Matrix V Hasil Pembobotan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                            <th scope="col">C4</th>
                            <th scope="col">C5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Bobot</th>
                            <td><?php echo $bc1 ?></td>
                            <td><?php echo $bc2 ?></td>
                            <td><?php echo $bc3 ?></td>
                            <td><?php echo $bc4 ?></td>
                            <td><?php echo $bc5 ?></td>
                        </tr>
                        <tr>
                            <th>A1</th>
                            <td><?php echo $vc1a1 ?></td>
                            <td><?php echo $vc2a1 ?></td>
                            <td><?php echo $vc3a1 ?></td>
                            <td><?php echo $vc4a1 ?></td>
                            <td><?php echo $vc5a1 ?></td>
                        </tr>
                        <tr>
                            <th>A2</th>
                            <td><?php echo $vc1a2 ?></td>
                            <td><?php echo $vc2a2 ?></td>
                            <td><?php echo $vc3a2 ?></td>
                            <td><?php echo $vc4a2 ?></td>
                            <td><?php echo $vc5a2 ?></td>
                        </tr>
                        <tr>
                            <th>A3</th>
                            <td><?php echo $vc1a3 ?></td>
                            <td><?php echo $vc2a3 ?></td>
                            <td><?php echo $vc3a3 ?></td>
                            <td><?php echo $vc4a3 ?></td>
                            <td><?php echo $vc5a3 ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#concordance">
            Concordance Matrix
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#discordance">
            Discordance Matrix
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aggresi">
            Matrix Aggresi
        </button>
        <br>
        <br>
        <br>
    </div>
</body>

</html>

<!-- Modal Concordance-->
<div class="modal fade" id="concordance" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            Normalisasi Matrix R
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">index Kriteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>C12</td>
                                        <td>2, 5</td>
                                    </tr>
                                    <tr>
                                        <td>C13</td>
                                        <td>2, 3</td>
                                    </tr>
                                    <tr>
                                        <td>C21</td>
                                        <td>1, 3, 4, 5</td>
                                    </tr>
                                    <tr>
                                        <td>C23</td>
                                        <td>1, 3, 4</td>
                                    </tr>
                                    <tr>
                                        <td>C31</td>
                                        <td>1, 4, 5</td>
                                    </tr>
                                    <tr>
                                        <td>C32</td>
                                        <td>2, 5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                // Perhitungan Matrix Concordance C
                $ca1a1 = 0;
                $ca1a2 = $bc2 + $bc5;
                $ca1a3 = $bc2 + $bc3;
                $ca2a1 = $bc1 + $bc3 + $bc4 + $bc5;
                $ca2a2 = 0;
                $ca2a3 = $bc1 + $bc3 + $bc4;
                $ca3a1 = $bc1 + $bc4 + $bc5;
                $ca3a2 = $bc2 + $bc5;
                $ca3a3 = 0;
                // Threshold Concrodance
                $tc = ($c1a1 + $ca1a2 + $ca1a3 + $ca2a1 + $ca2a2
                    + $ca2a3 + $ca3a1 + $ca3a2 + $ca3a3) / (3 * (3 - 1));
                ?>
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            Matrix Concordance C
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">C</th>
                                        <th scope="col">A1</th>
                                        <th scope="col">A2</th>
                                        <th scope="col">A3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>A1</th>
                                        <td><?php echo $ca1a1 ?></td>
                                        <td><?php echo $ca1a2 ?></td>
                                        <td><?php echo $ca1a3 ?></td>
                                    </tr>
                                    <tr>
                                        <th>A2</th>
                                        <td><?php echo $ca2a1 ?></td>
                                        <td><?php echo $ca2a2 ?></td>
                                        <td><?php echo $ca2a3 ?></td>
                                    </tr>
                                    <tr>
                                        <th>A3</th>
                                        <td><?php echo $ca3a1 ?></td>
                                        <td><?php echo $ca3a2 ?></td>
                                        <td><?php echo $ca3a3 ?></td>
                                    </tr>
                                    <tr>
                                        <th>Threshold Concordance</th>
                                        <td><?php echo $tc ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Matriks dominan -->
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            Matrix Dominan Concordance F
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">F</th>
                                        <th scope="col">A1</th>
                                        <th scope="col">A2</th>
                                        <th scope="col">A3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>A1</th>
                                        <td>
                                            <?php
                                            if ($ca1a1 > $tc) {
                                                echo 1;
                                                $fa11 = 1;
                                            } else {
                                                echo 0;
                                                $fa11 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($ca1a2 > $tc) {
                                                echo 1;
                                                $fa12 = 1;
                                            } else {
                                                echo 0;
                                                $fa12 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($ca1a3 > $tc) {
                                                echo 1;
                                                $fa13 = 1;
                                            } else {
                                                echo 0;
                                                $fa13 = 0;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>A2</th>
                                        <td>
                                            <?php
                                            if ($ca2a1 > $tc) {
                                                echo 1;
                                                $fa21 = 1;
                                            } else {
                                                echo 0;
                                                $fa21 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($ca2a2 > $tc) {
                                                echo 1;
                                                $fa22 = 1;
                                            } else {
                                                echo 0;
                                                $fa22 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($ca2a3 > $tc) {
                                                echo 1;
                                                $fa23 = 1;
                                            } else {
                                                echo 0;
                                                $fa23 = 0;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>A3</th>
                                        <td>
                                            <?php
                                            if ($ca3a1 > $tc) {
                                                echo 1;
                                                $fa31 = 1;
                                            } else {
                                                echo 0;
                                                $fa31 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($ca3a2 > $tc) {
                                                echo 1;
                                                $fa32 = 1;
                                            } else {
                                                echo 0;
                                                $fa32 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($ca3a3 > $tc) {
                                                echo 1;
                                                $fa33 = 1;
                                            } else {
                                                echo 0;
                                                $fa33 = 0;
                                            }
                                            ?>
                                        </td>
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
</div>
<!-- end Modal Concordance-->


<!-- Modal discordance-->
<div class="modal fade" id="discordance" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            Normalisasi Matrix R
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">index Kriteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>C12</td>
                                        <td>1, 3, 4</td>
                                    </tr>
                                    <tr>
                                        <td>C13</td>
                                        <td>1, 4, 5</td>
                                    </tr>
                                    <tr>
                                        <td>C21</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>C23</td>
                                        <td>2, 5</td>
                                    </tr>
                                    <tr>
                                        <td>C31</td>
                                        <td>2, 3</td>
                                    </tr>
                                    <tr>
                                        <td>C32</td>
                                        <td>1, 3, 4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
                // Perhitungan Matrix Discordance D
                $da1a1 = 0;
                $da1a2 = max(abs($vc1a1 - $vc1a2), abs($vc3a1 - $vc3a2), abs($vc4a1 - $vc4a2)) /
                    max(
                        abs($vc1a1 - $vc1a2),
                        abs($vc2a1 - $vc2a2),
                        abs($vc3a1 - $vc3a2),
                        abs($vc4a1 - $vc4a2),
                        abs($vc5a1 - $vc5a2)
                    );
                $da1a3 = max(abs($vc1a1 - $vc1a3), abs($vc4a1 - $vc4a3), abs($vc5a1 - $vc5a3)) /
                    max(
                        abs($vc1a1 - $vc1a3),
                        abs($vc2a1 - $vc2a3),
                        abs($vc3a1 - $vc3a3),
                        abs($vc4a1 - $vc4a3),
                        abs($vc5a1 - $vc5a3)
                    );
                $da2a1 = abs($vc2a2 - $vc2a1) /
                    max(
                        abs($vc1a2 - $vc1a1),
                        abs($vc2a2 - $vc2a1),
                        abs($vc3a2 - $vc3a1),
                        abs($vc4a2 - $vc4a1),
                        abs($vc5a2 - $vc5a1)
                    );
                $da2a2 = 0;
                $da2a3 = max(abs($vc2a2 - $vc2a3), abs($vc5a2 - $vc5a3)) /
                    max(
                        abs($vc1a2 - $vc1a3),
                        abs($vc2a2 - $vc2a3),
                        abs($vc3a2 - $vc3a3),
                        abs($vc4a2 - $vc4a3),
                        abs($vc5a2 - $vc5a3)
                    );
                $da3a1 = max(abs($vc2a3 - $vc2a1), abs($vc3a3 - $vc3a1)) /
                    max(
                        abs($vc1a3 - $vc1a1),
                        abs($vc2a3 - $vc2a1),
                        abs($vc3a3 - $vc3a1),
                        abs($vc4a3 - $vc4a1),
                        abs($vc5a3 - $vc5a1)
                    );
                $da3a2 = max(abs($vc1a3 - $vc1a2), abs($vc3a3 - $vc3a2), abs($vc4a3 - $vc4a2)) /
                    max(
                        abs($vc1a3 - $vc1a2),
                        abs($vc2a3 - $vc2a2),
                        abs($vc3a3 - $vc3a2),
                        abs($vc4a3 - $vc4a2),
                        abs($vc5a3 - $vc5a2)
                    );
                $da3a3 = 0;
                // Threshold Discrodance
                $td = ($da1a1 + $da1a2 + $da1a3 + $da2a1 + $da2a2
                    + $da2a3 + $da3a1 + $da3a2 + $da3a3) / (3 * (3 - 1));
                ?>
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            Matrix Discordance C
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">C</th>
                                        <th scope="col">A1</th>
                                        <th scope="col">A2</th>
                                        <th scope="col">A3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>A1</th>
                                        <td><?php echo $da1a1 ?></td>
                                        <td><?php echo $da1a2 ?></td>
                                        <td><?php echo $da1a3 ?></td>
                                    </tr>
                                    <tr>
                                        <th>A2</th>
                                        <td><?php echo $da2a1 ?></td>
                                        <td><?php echo $da2a2 ?></td>
                                        <td><?php echo $da2a3 ?></td>
                                    </tr>
                                    <tr>
                                        <th>A3</th>
                                        <td><?php echo $da3a1 ?></td>
                                        <td><?php echo $da3a2 ?></td>
                                        <td><?php echo $da3a3 ?></td>
                                    </tr>
                                    <tr>
                                        <th>Threshold Discordance</th>
                                        <td><?php echo $td ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Matriks dominan -->
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            Matrix Dominan Discordance G
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">G</th>
                                        <th scope="col">A1</th>
                                        <th scope="col">A2</th>
                                        <th scope="col">A3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>A1</th>
                                        <td>
                                            <?php
                                            if ($da1a1 > $td) {
                                                echo 1;
                                                $ga11 = 1;
                                            } else {
                                                echo 0;
                                                $ga11 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($da1a2 > $td) {
                                                echo 1;
                                                $ga12 = 1;
                                            } else {
                                                echo 0;
                                                $ga12 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($da1a3 > $td) {
                                                echo 1;
                                                $ga13 = 1;
                                            } else {
                                                echo 0;
                                                $ga13 = 0;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>A2</th>
                                        <td>
                                            <?php
                                            if ($da2a1 > $td) {
                                                echo 1;
                                                $ga21 = 1;
                                            } else {
                                                echo 0;
                                                $ga21 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($da2a2 > $td) {
                                                echo 1;
                                                $ga22 = 1;
                                            } else {
                                                echo 0;
                                                $ga22 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($da2a3 > $td) {
                                                echo 1;
                                                $ga23 = 1;
                                            } else {
                                                echo 0;
                                                $ga23 = 0;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>A3</th>
                                        <td>
                                            <?php
                                            if ($da3a1 > $td) {
                                                echo 1;
                                                $ga31 = 1;
                                            } else {
                                                echo 0;
                                                $ga31 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($da3a2 > $td) {
                                                echo 1;
                                                $ga32 = 1;
                                            } else {
                                                echo 0;
                                                $ga32 = 0;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($da3a3 > $td) {
                                                echo 1;
                                                $ga33 = 1;
                                            } else {
                                                echo 0;
                                                $ga33 = 0;
                                            }
                                            ?>
                                        </td>
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
</div>
<!-- end Modal discordance-->


<!-- Modal Agressi-->
<div class="modal fade" id="aggresi" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-header">
                            Matrix Agrresi E
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">C</th>
                                        <th scope="col">A1</th>
                                        <th scope="col">A2</th>
                                        <th scope="col">A3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>A1</th>
                                        <td><?php echo $fa11 * $ga11 ?></td>
                                        <td><?php echo $fa12 * $ga12 ?></td>
                                        <td><?php echo $fa13 * $ga13 ?></td>
                                    </tr>
                                    <tr>
                                        <th>A2</th>
                                        <td><?php echo $fa21 * $ga21 ?></td>
                                        <td><?php echo $fa22 * $ga22 ?></td>
                                        <td><?php echo $fa23 * $ga23 ?></td>
                                    </tr>
                                    <tr>
                                        <th>A3</th>
                                        <td><?php echo $fa31 * $ga31 ?></td>
                                        <td><?php echo $fa32 * $ga32 ?></td>
                                        <td><?php echo $fa33 * $ga33 ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            Pilihan yang terpilih adalah Apartemen 2 dan Apartemen 3
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Modal Agressi-->