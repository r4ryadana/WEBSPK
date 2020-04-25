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
                Soal
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
                            <td><?php echo $c11 ?></td>
                            <td><?php echo $c12 ?></td>
                            <td><?php echo $c13 ?></td>
                            <td><?php echo $c14 ?></td>
                            <td><?php echo $benefit ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td><?php echo $c21 ?></td>
                            <td><?php echo $c22 ?></td>
                            <td><?php echo $c23 ?></td>
                            <td><?php echo $c24 ?></td>
                            <td><?php echo $cost ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td><?php echo $c31 ?></td>
                            <td><?php echo $c32 ?></td>
                            <td><?php echo $c33 ?></td>
                            <td><?php echo $c34 ?></td>
                            <td><?php echo $benefit ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td><?php echo $c41 ?></td>
                            <td><?php echo $c42 ?></td>
                            <td><?php echo $c43 ?></td>
                            <td><?php echo $c44 ?></td>
                            <td><?php echo $cost ?></td>
                        </tr>
                        <tr>
                            <th scope="row">C5</th>
                            <td><?php echo $c51 ?></td>
                            <td><?php echo $c52 ?></td>
                            <td><?php echo $c53 ?></td>
                            <td><?php echo $c54 ?></td>
                            <td><?php echo $benefit ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href="saw.php" type="button" class="btn btn-primary btn">Submit</a>
    </div>
</body>

</html>