<?php
include 'koneksi.php';
$query = "SELECT * FROM `tb_siswa`";
$sql = mysqli_query($conn, $query);

$no = 0;
// var_dump($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="shortcut icon" href="img/CRUD ICON.png" type="image/x-icon">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a style="text-decoration: none;" class="navbar-brand" href="#">
            CRUD Beginner
          </a>
        </div>
      </nav>
      <div class="container">
        <figure>
            <blockquote class="blockquote">
                <h1 class="mt-3">DATA SISWA</h1>
              <p>Menampilkan data yang disimpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              CREATE READ UPDATE DELETE
            </figcaption>
          </figure>
          
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NISN</th>
                  <th>NAMA SISWA</th>
                  <th>FOTO SISWA</th>
                  <th>JENIS KELAMIN</th>
                  <th>ALAMAT</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  while($result = mysqli_fetch_assoc($sql)){
                    
                  
                  ?>
                <tr>
                 
                  <td><?php echo ++$no?></td>
                  <td><?php echo $result ['nisn']?></td>
                  <td><?php echo $result ['nama_siswa']?></td>
                  <td><img style="width: 100px;" class="foto" src="img/<?php echo $result ['foto_siswa']?>" alt=""></td>
                  <td><?php echo $result ['jenis_kelamin']?></td>
                  <td><?php echo $result ['alamat']?></td>
                  <td>
                    <a href="kelola.php?edit=<?php echo $result ['id_siswa']?>" style="margin-left: 10px;" type="button" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square mb-1" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    </a>
                      <a href="proses.php?hapus=<?php echo $result ['id_siswa']?>" style="margin-left: 10px;" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash mb-1" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                      </svg></a>
                  </td>
                  <?php
                  }
                  ?>
                </tr>
            </tbody>
        </table>
      </div>
      <a href="kelola.php" type="button" class="btn btn-success mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill mb-1" viewBox="0 0 16 16">
            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
          </svg>
          
        </a>
      </div>
    <!-- link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>