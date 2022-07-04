<?php
include_once 'head.html';
include_once 'sidebar.html';

require_once 'patient.php';
require_once 'bmi.php';
require_once 'bmi_patient.php';


$patient1 = new Patient(1, '001', 'Jimmy', 'Jakarta', '2007/5/3', 'mimijimmy@gmail.com', 'L');
$bmi1 = new BMI(69.8, 169);
$bmiPatient1 = new BMIPatient(1, $bmi1, date("Y-m-d"), $patient1);


$patient2 = new Patient(2, '002', 'Naia', 'Seoul', '1095/6/1', 'naynayi@gmail.com', 'P');
$bmi2 = new BMI(55.3, 165);
$bmiPatient2 = new BMIPatient(2, $bmi2, date("Y-m-d"), $patient2);

$patient3 = new Patient(3, '003', 'Vura', 'Bandung', '1972/6/1', 'vurahura@gmail.com', 'p');
$bmi3 = new BMI(45.2, 171);
$bmiPatient3 = new BMIPatient(3, $bmi3, date("Y-m-d"), $patient3);

$listBmiPatient = array($bmiPatient1, $bmiPatient2, $bmiPatient3);

if (isset($_POST['name'])) {
    $name = $_POST['name'] ?? '';
    $placeOfBirth = $_POST['placeOfBirth'] ?? '';
    $dateOfBirth = $_POST['dateOfBirth'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $weight = $_POST['weight'] ?? '';
    $height = $_POST['height'] ?? '';

    $patientInput = new Patient(4, '004', $name, $placeOfBirth, $dateOfBirth, $email, $gender);
    $bmiInput = new BMI($weight, $height);
    $bmiPatientInput = new BMIPatient(4, $bmiInput, date("Y-m-d"), $patientInput);

    array_push($listBmiPatient, $bmiPatientInput);
}


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Body Mass Index</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Halaman Utama</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Menghitung BMI</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">


                <div class="card card-success mb-5">
                    <div class="card-header">
                        <h3 class="card-title">Hasil Data Body Mass Index(BMI)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Kode Pasien</th>
                                    <th>Nama Pasien</th>
                                    <th>Gender</th>
                                    <th>Berat (kg)</th>
                                    <th>Tinggi (cm)</th>
                                    <th>Nilai BMI</th>
                                    <th>Status BMI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($listBmiPatient); $i++) {
                                    echo '<tr>';
                                    echo '<td>' . $listBmiPatient[$i]->id . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->date . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->patient->code . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->patient->name . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->patient->gender . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->bmi->weight . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->bmi->height . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->bmi->ValueBMI() . '</td>';
                                    echo '<td>' . $listBmiPatient[$i]->bmi->StatusBMI($listBmiPatient[$i]->bmi->ValueBMI()) . '</td>';
                                    echo '</tr>';
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>

                </div>

                <?php if (isset($_POST['name'])) {
                    $gender_type = '';

                    if ($patientInput->gender == "P") {
                        $gender_type = 'girl';
                    } elseif ($patientInput->gender == "L") {
                        $gender_type = 'boy';
                    }

                    $opa1 = 0.2;
                    $opa2 = 0.2;
                    $opa3 = 0.2;
                    $opa4 = 0.2;
                    $opa5 = 0.2;

                    $mass = $bmiInput->ValueBMI();

                    if ($mass >= 30.0) {
                        $opa5 = 1;
                    } elseif ($mass >= 27.0 && $mass <= 29.9) {
                        $opa4 = 1;
                    } elseif ($mass >= 24.0 && $mass <= 26.9) {
                        $opa3 = 1;
                    } elseif ($mass >= 18.5 && $mass <= 23.9) {
                        $opa2 = 1;
                    } elseif ($mass <= 18.4) {
                        $opa1 = 1;
                    }


                ?>
                    <div class="container">
                        <h3 class="text-center font-weight-bold mb-5">BMI Anda Adalah <?= $bmiInput->ValueBMI() ?></h3>
                        <div class="row">
                            <div class="col-sm">
                                <img src="../assets/dist/img/a1.jpg" class="img-fluid mb-3" style="max-width: 80%; height: 75%;opacity: <?= $opa1 ?>;">
                                <h5 class="text-center"> Kekurangan Bobot </h5>
                                <h5 class="text-center">
                                    < 18.5 </h5>
                            </div>
                            <div class="col-sm">
                                <img src="../assets/dist/img/a2.jpg" class="img-fluid mb-3" style="max-width: 80%; height: 75%;opacity: <?= $opa2 ?>;">
                                <h5 class="text-center"> Sehat </h5>
                                <h5 class="text-center"> 18.5 - 23.9 </h5>
                            </div>
                            <div class="col-sm">
                                <img src="../assets/dist/img/a3.jpg" class="img-fluid mb-3" style="max-width: 80%; height: 75%;opacity: <?= $opa3 ?>;">
                                <h5 class="text-center"> Kelebihan Bobot</h5>
                                <h5 class="text-center"> 24 - 26.9</h5>
                            </div>
                            <div class="col-sm">
                                <img src="../assets/dist/img/a4.jpg" class="img-fluid  mb-3" style="max-width: 80%; height: 75%;opacity: <?= $opa4 ?>;">
                                <h5 class="text-center"> Obesitas 1</h5>
                                <h5 class="text-center"> 27 - 29.9 </h5>
                            </div>
                            <div class="col-sm">
                                <img src="../assets/dist/img/a5.jpg" class="img-fluid mb-3" style="max-width: 80%; height: 75%;opacity: <?= $opa5 ?>;">
                                <h5 class="text-center"> Obesitas 2 </h5>
                                <h5 class="text-center"> 30 < </h5>

                </div>  
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Push by pressure
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>


</div>
<?php
include_once 'footer.html';

?>