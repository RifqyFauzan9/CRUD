<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola</title>
    <link rel="shortcut icon" href="img/CRUD ICON.png" type="image/x-icon">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <!-- css boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a style="text-decoration: none;" class="navbar-brand" href="index.php">
            CRUD Beginner
          </a>
        </div>
      </nav>

      <!-- isi -->
      <div class="container">
        <form action="proses.php" method="post" enctype="multipart/form-data">
          <div class="mb-3 row mt-3">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
              <input required type="number" class="form-control" id="nisn" name="nisn" placeholder="Ex: 54635">
            </div>
          </div>

          <div class="mb-3 row mt-3">
            <label for="nama" class="col-sm-2 col-form-label">NAMA DIREKTUR</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="nama" name="nama_siswa" placeholder="Ex: Ahmad">
            </div>
          </div>

          <div class="mb-3 row mt-3">
            <label for="foto" class="col-sm-2 col-form-label">FOTO SISWA</label>
            <div class="col-sm-10">
                <input required class="form-control" type="file" id="foto" name="foto_siswa">
            </div>
          </div>
         
          <div class="mb-3 row mt-3">
            <label for="jenis-kelamin" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
            <div class="col-sm-10">
                <select class="form-select" id="jenis-kelamin" name="jenis_kelamin">
                    <option selected>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
            </div>
          </div>

          <div class="mb-3 row mt-3">
            <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
                <textarea required class="form-control atur-ulang" placeholder="Masukkan Alamat Anda" id="alamat" name="alamat" style="height: 100px" ></textarea>
            </div>
          </div>
          <?php
          if(isset($_GET['edit'])){
            ?>
            <button type="submit" value="edit" name="aksi" class="btn btn-success btn-sm"><i class='bx bx-save'></i></button>
            <?php
          }else{
            ?>
            <button type="submit" value="add" name="aksi" class="btn btn-success btn-sm"><i class='bx bxs-file-plus'></i></button>
         <?php }
         ?>
          <!-- back -->
          <a href="index.php" style="margin-left: 5px;" type="button" class="btn btn-danger btn-sm"><i class='bx bx-arrow-back'></i></a>
          </div>
        </form>
    <!-- link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>