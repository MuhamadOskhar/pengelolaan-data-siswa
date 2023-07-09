@extends('layout/admin_template')

@section('title', 'Menambahkan Data')
@section('mainContent')
<!-- daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content row">
    <div class="container-fluid col-sm-10 justify-content-center">
    <!-- general form -->
    <div class="card card-success">
        <div class="card-header">
        <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form method="post">
            <?= csrf_field() ?>
            <!-- input states -->
            <h4>Isi Data Siswa</h4>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Lengkap:</label>
                <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
            </div>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nis">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        NIS:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="nis" name="nis">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nisn">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        NISN:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="nisn" name="nisn">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="agama">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        agama:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="agama" name="agama">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="no_telp">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        nomor telepon:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="no_telp" name="no_telp">
                    </div>
                </div>
            </div>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                        <h5>Gender</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" checked>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                        <h5>Status Anak</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_anak" checked>
                            <label class="form-check-label">Masih Pelajar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_anak">
                            <label class="form-check-label">Sudah Lulus</label>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Isi Data Kelahiran Siswa</h4>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label" for="nama">Tempat Lahir:</label>
                        <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">Tanggal Lahir:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate">
                        </div>
                    </div>
                </div>
            </div>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                        <h5>Status Data</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_data" checked>
                            <label class="form-check-label">Aktif</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_data">
                            <label class="form-check-label">Tidak Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Ayah:</label>
                <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
                <label class="col-form-label" for="nama">Nama Ibu:</label>
                <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
            </div>
            <h4>Isi Alamat Siswa</h4>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nis">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        NIS:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="nis" name="nis">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nisn">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        NISN:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="nisn" name="nisn">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="agama">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        agama:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="agama" name="agama">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="no_telp">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        nomor telepon:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="no_telp" name="no_telp">
                    </div>
                </div>
            </div>
        </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
</section>
<script type="text/javascript">
   $(function () {
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
   });
</script>
@endsection