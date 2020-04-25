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
                            <th scope="col">Sepatu 1</th>
                            <th scope="col">Sepatu 2</th>
                            <th scope="col">Sepatu 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">C1</th>
                            <td>Sedang</td>
                            <td>Baik</td>
                            <td>Sangat Baik</td>
                        </tr>
                        <tr>
                            <th scope="row">C2</th>
                            <td>Sangat Baik</td>
                            <td>Sedang</td>
                            <td>Baik</td>
                        </tr>
                        <tr>
                            <th scope="row">C3</th>
                            <td>Sedang</td>
                            <td>Kurang</td>
                            <td>Sangat Baik</td>
                        </tr>
                        <tr>
                            <th scope="row">C4</th>
                            <td>Murah</td>
                            <td>Mahal</td>
                            <td>Murah</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Pembobotan skor alternatif untuk C1, C2, dan C3 adalah:
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Skala</th>
                            <th scope="col">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sangat Kurang</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Kurang</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Sedang</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Baik</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>SangatBaik</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                pembobotan untuk C4
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Skala</th>
                            <th scope="col">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Murah</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Sedang</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Mahal</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href="Topsis2.php" type="button" class="btn btn-primary btn">Submit</a>
        <br>
        <br>
    </div>
</body>

</html>