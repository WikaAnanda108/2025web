<?php
session_start();
include "koneksi.php";
ceklogin();

$query = "SELECT * FROM prodi";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php";
?>

<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
<!--end::App Main--> 

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Data Prodi</h3>
                </div>
                <!-- /.card-header -->
                <form action="tambahaksimahasiswa.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nim" class="form-label">nim</label>
                        <input type="text" name="nim" id="nim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">password</label>
                        <input type="text" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="form-label">nama mahasiswa</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                        <div class="form-group">
                        <label for="tanggal_lahir" class="form-label">tanggal_lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                    </div>
                        <div class="form-group">
                        <label for="telp" class="form-label">telp</label>
                        <input type="text" name="telp" id="telp" class="form-control" required>
                    </div>
                        <div class="form-group">
                        <label for="email" class="form-label">email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                        <div class="form-group">
                        <label for="id_prodi" class="form-label">prodi</label>
                        <select class="form-select" name="id_prodi" id="id_prodi">
                        <?php foreach($data as $d) : ?>
                        <option value="<?= $d["id"] ?>"><?= $d["nama"] ?></option>  
                        <?php endforeach; ?>
                    </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="foto">Ubah Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" />
                    </div>
      
         
         
        </div>
        <div class="card-footer">
        <a href="index.php" class="btn btn-warning">Kembali</a>
        <button type="Submit" class= "btn btn-primary">Simpan</button>
         </div>
    </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
    </div>
  
<?php
include "template/footer.php";
?>