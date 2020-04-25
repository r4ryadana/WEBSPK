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
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Soal
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kondisi Fasilitas Pendukung / Sistem Keamanan</th>
                            <th scope="col">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kurang</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Sedang</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Baik</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Baik Sekali</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kondisi Harga dan Bangunan (C2)</th>
                            <th scope="col">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5jt - 6jt</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>6.1jt – 7jt</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>7.1jt – 8jt</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>8.1jt – 9jt</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>> 9jt</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kondisi Tahun Bangunan (C3)</th>
                            <th scope="col">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2015</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>2014</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>2013</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>2012</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2011</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kondisi Jarak ke Tempat Kerja (C4)</th>
                            <th scope="col">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <= 2 KM</td> <td>5
                            </td>
                        </tr>
                        <tr>
                            <td>2.1 KM – 5 KM</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5.1 – 7 KM</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>7.1 – 10 KM</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>> 10 KM</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href="electree2.php" type="button" class="btn btn-primary btn">Submit</a>
        <br>
        <br>
    </div>
</body>

</html>