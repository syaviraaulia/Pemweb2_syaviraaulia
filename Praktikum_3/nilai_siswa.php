<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
        <div class="container">
            <h4>Form Nilai Siswa</h4>
            <hr>
            <form class="form-horizontal" method="POST" action="nilai_siswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                    </div>
                </div>
            </form>
                <?php
                    include_once 'libfungsi.php';
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                    $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
                    $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                   echo "Nama Siswa : $nama_siswa";
                   echo "<br/>Mata Kuliah : $mata_kuliah";
                   echo "<br/>Nilai UTS : $nilai_uts";
                   echo "<br/>Nilai UAS : $nilai_uas";
                   echo "<br/>Nilai Tugas : $nilai_tugas";

                   $nilai_akhir = presentase($nilai_uts, $nilai_uas, $nilai_tugas);
                   $grade_nilai = grade_nilai($nilai_akhir);

                   echo "<br/>Nilai Akhir : $nilai_akhir";
                   echo "<br/>Nilai kelulusan : ", kelulusan($nilai_akhir);
                   echo "<br/>Grade Nilai : ", $grade_nilai;
                   echo "<br/>Predikat Nilai : ", predikat_nilai($grade_nilai);
                
                ?>
        </div>
    </body>
</html>