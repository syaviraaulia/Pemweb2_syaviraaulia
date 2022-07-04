<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MAHASISWA</title>
</head>

<body>
    <div class="content">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><b>WEB02</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Review PHP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP OOP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </li>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="" aria-label="">
                                <button class="btn btn-success" type="submit">SUBMIT</button>
                            </form>
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><b>Login</b></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <b> Dropdown</b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                    </div>
                </div>
            </nav>
            
            <div class="row mt-4">
                <div class="col-4">
                    <span><b>Show</b></span>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                            <li><a class="dropdown-item" href="#">5</a></li>
                            <li><a class="dropdown-item" href="#">6</a></li>
                            <li><a class="dropdown-item" href="#">7</a></li>
                            <li><a class="dropdown-item" href="#">8</a></li>
                            <li><a class="dropdown-item" href="#">9</a></li>
                            <li><a class="dropdown-item" href="#">10</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <span><b>entries</b></span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <label for="" class=""><b>Search : </b></label>
                    <input type="text" class="ms-1">
                </div>
            </div>
            <div class="row">
                <?php
                require_once "class_mahasiswa.php";

                $ns1 = new Mahasiswa("012011", "Syavira Aulia", "TI", 2013, 3.8, "Cum Laude");
                $ns2 = new Mahasiswa("012012", "Naia Fadiyah", "TI", 2013, 3.9, "Cum Laude");
                $ns3 = new Mahasiswa("011011", "Zahrah", "SI", 2011, 3.46, "Memuaskan");
                $ns4 = new Mahasiswa("011012", "Sulastri", "SI", 2011, 3.2, "Memuaskan");

                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                ?>
                
                <div class="container-fluid">
                <table class="table">
                 <thead class="table-dark"></thead><br>
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">NIM <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Nama <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Prodi <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Thn Angkatan <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">IPK <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Predikat <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Ubah <i class="bi bi-chevron-expand"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($ar_nilai as $ns) {
                                echo '<tr><td>' . $nomor . '</td>';
                                echo '<td>' . $ns->nim . '</td>';
                                echo '<td>' . $ns->nama . '</td>';
                                echo '<td>' . $ns->prodi . '</td>';
                                echo '<td>' . $ns->thn_angkatan . '</td>';
                                echo '<td>' . $ns->ipk . '</td>';
                                echo '<td>' . $ns->predikat_ipk() . '</td>';
                                echo '<td> <a><i class="bi bi-eye" style="color: blue"></i> <i class="bi bi-pencil" style="color: blue"></i></a></td>';
                                $nomor++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <span>Showing 1 to 4 of 4 entries</span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row my-2 ">
                <hr>
            </div>
            <div class="row">
                <div class="bagian_bawah">
                    <h6>Lab Pemrograman Web Lanjutan</h6>
                    <p>Dosen : Sirojul Munir S.Si,M.Kom <br>
                        STT-NF-Kampus B
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>