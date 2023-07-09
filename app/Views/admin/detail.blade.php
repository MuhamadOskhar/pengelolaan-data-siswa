@extends('layout/admin_template')

@section('title', 'Halaman Dashboard')
@section('mainContent')
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
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="dist/img/user6-128x128.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Nina Mcintire</h3>

                    <p class="text-muted text-center">Software Engineer</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NISN:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Gender:</b> <a class="float-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Agama:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nomor Telepon:</b> <a class="float-right">13,287</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Ayah:</b> <a class="float-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Ibu:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jalan:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kecamatan:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kelurahan:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kota:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Provinsi:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Tempat Lahir:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Hari Lahir:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Bulan Lahir:</b> <a class="float-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Tahun Lahir:</b> <a class="float-right">543</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Update Data</b></a>
                </div>
                <!-- /.card-body -->
        </div>
    </div>
    </div>
</section>
@endsection