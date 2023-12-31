<?php $__env->startSection('title', 'Halaman Dashboard'); ?>
<?php $__env->startSection('mainContent'); ?>

  <style>
    .buttons-excel {
      background: var(--primary);
    }.buttons-excel::before {
      content: "Unduh Sebagai ";
    }
    .card-outline-left {
      border-left: 0.3rem solid var(--success);
    }
  </style>
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Read Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-outline-left">
      <div class="card-primary p-4">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
    </div>
  </div>
</section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card-header -->
          <div class="card">
            <div class="card-body">
                  <div class="row">
                    <a href="<?php echo e(base_url('dashboard/create')); ?>" class="btn border-primary text-primary btn-sm col-sm-1 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">Tambah Data</a>
                    <a href="<?php echo e(base_url('dashboard/export_excel')); ?>" class="btn border-primary text-primary btn-sm col-sm-1 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">Export Data</a>
                    <a href="" class="btn border-primary text-primary btn-sm col-sm-1 p-2 ml-2" onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')">Import Data</a>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Lengkap</th>
                        <th>Gender</th>
                        <th>Agama</th>
                        <th>Nomor Telepon</th>
                        <th>Status Data</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $data_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($data['nis']); ?></td>
                        <td><?php echo e($data['nisn']); ?></td>
                        <td><?php echo e($data['nama']); ?></td>
                        <td><?php echo e(['Perempuan', 'Laki Laki'][$data['gender']]); ?></td>
                        <td><?php echo e($data['agama']); ?></td>
                        <td><?php echo e($data['no_telp']); ?></td>
                        <td><?php echo e(['Aktif', 'Tidak Aktif'][$data['status_data']]); ?></td>
                        <td>
                          <a onmouseover="this.classList.add('btn-info');this.classList.remove('text-info')" onmouseout="this.classList.remove('btn-info');this.classList.add('text-info')" href="<?php echo e(base_url('/dashboard/detail')); ?>/<?php echo e($data['nis']); ?>" class="btn border-info text-info btn-sm">
                            <i class="fas fa-eye"></i>
                          </a>
                          <a onmouseover="this.classList.add('btn-primary');this.classList.remove('text-primary')" onmouseout="this.classList.remove('btn-primary');this.classList.add('text-primary')" href="<?php echo e(base_url('/dashboard/update')); ?>/<?php echo e($data['nis']); ?>" class="btn border-primary text-primary btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a onmouseover="this.classList.add('btn-danger');this.classList.remove('text-danger')" onmouseout="this.classList.remove('btn-danger');this.classList.add('text-danger')" onclick="doSoftDelete(\'<?php echo e($data['nis']); ?>\')" class="btn border-danger text-danger btn-sm">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
        </div>
      </div>
  </section>
  <script>
    function doSoftDelete(nis) {
      // Membuat data dictionary
      let data = {nis: nis};

      // Kirim data ke controller menggunakan AJAX
      $.ajax({
        url: '<?php echo e(site_url("dashboard/soft_delete")); ?>',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function(response) {
          alert("Data berhasil dihapus");
        window.location.href = "<?php echo e(site_url('dashboard')); ?>";
        },
        error: function(xhr, status, error) {
          alert("Data gagal ditambahkan: " + xhr.status + "\n" + xhr.responseText + "\n" + error);
        }
      });
    }
  </script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "language": {
            "info": 'Last updated data on'
        }
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>