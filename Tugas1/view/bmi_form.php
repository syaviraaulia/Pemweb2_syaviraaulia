<?php
include_once 'head.html';
include_once 'sidebar.html';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project BMI UTS</h1>
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
                <h3 class="card-title">Aplikasi Menghitung BMI</h3>

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


                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Masukan Body Mass Index(BMI)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="bmi_table.php" method="post" class="form-horizontal">

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="name" class="form-control" placeholder="Masukan Nama">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" required name="placeOfBirth" class="form-control" placeholder="Masukan Tempat Lahir">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">tanggal lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" required name="dateOfBirth" class="form-control" placeholder="Masukan tanggal lahir">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                    <input type="email" required name="email" class="form-control" placeholder="Masukan email">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="pria" name="gender" value="L">
                                        <label for="pria">Pria
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="wanita" name="gender" value="P">
                                        <label for="wanita">Wanita
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10">
                                    <input type="number" required name="weight" class="form-control" placeholder="Masukan Berat Badan">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-10">
                                    <input type="number" required name="height" class="form-control" placeholder="Masukan Tinggi Badan">
                                </div>
                            </div>




                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="d-flex flex-row-reverse">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <div class="p-2"></div>
                                <button type="submit" class="btn btn-info">Kirim</button>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Made With Pressure
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.html';

?>