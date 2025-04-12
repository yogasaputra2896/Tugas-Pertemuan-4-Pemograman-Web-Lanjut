<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>List Siswa</title>
    <!-- Poppins FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- DataTabels -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css" rel="stylesheet" />
  </head>

<body>
  
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

      <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="form-daftar.php">Daftar Baru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="list-siswa.php">Pendaftar</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container mt-3">

        <div class="card shadow-sm">

            <div class="card-header bg-white text-black">
                <h2 class="text-center mb-0">Data Calon Mahasiswa</h2>
            </div>

            <div class="card-header bg-white text-black d-flex justify-content-between align-items-center">
              <a href="form-daftar.php" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Data
              </a>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Sekolah Asal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_GET['status'])) {
                                if ($_GET['status'] == 'sukses') {
                                    echo "<script>alert('Data Berhasil Ditambahkan');</script>";
                                } elseif ($_GET['status'] == 'gagal') {
                                    echo "<script>alert('Data Gagal Ditambahkan');</script>";
                                } elseif ($_GET['status'] == 'edit_sukses') {
                                    echo "<script>alert('Data Berhasil Diedit');</script>";    
                                } elseif ($_GET['status'] == 'edit_gagal') {
                                  echo "<script>alert('Data Gagal Diedit');</script>";
                                } elseif ($_GET['status'] == 'hapus_sukses') {
                                  echo "<script>alert('Data Berhasil Dihapus');</script>"; 
                                } elseif ($_GET['status'] == 'hapus_gagal') {
                                  echo "<script>alert('Data Gagal Dihapus');</script>";     
                              }
                            }
                            
                            $sql = "SELECT * FROM calon_siswa ORDER BY id DESC";
                            $query = mysqli_query($db, $sql);
                            $no = 1;

                            while ($siswa = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                  echo "<td>" . $no++ . "</td>";
                                  echo "<td>" . $siswa['nama'] . "</td>";
                                  echo "<td>" . $siswa['alamat'] . "</td>";
                                  echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                                  echo "<td>" . $siswa['agama'] . "</td>";
                                  echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                                  echo "<td class='text-center'>";
                                  echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn btn-sm btn-warning me-1' title='Edit Data'>
                                          <i class='bi bi-pencil'></i>
                                        </a>";
                                  echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn btn-sm btn-danger' title='Hapus Data' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>
                                          <i class='bi bi-trash'></i>
                                        </a>";
                                  echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap Data Tabels -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
    <!-- Bootstrap icon -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

    <script>
        new DataTable('#example');
        document.querySelector('label[for="dt-length-0"]').style.display = 'none'; // Hide "Show 10 entries" label
    </script>
</body>
</html>