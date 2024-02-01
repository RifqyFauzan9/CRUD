<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
    // add data
    if ($_POST['aksi'] == "add") {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama_siswa'];
        $foto = $_FILES['foto_siswa']['name'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];


        $dir = 'img/';
        $tmpfile = $_FILES['foto_siswa']['tmp_name'];

        move_uploaded_file($tmpfile, $dir . $foto);

        $query = "INSERT INTO tb_siswaa VALUES(null,'$nisn','$nama','$foto','$jeniskelamin','$alamat')";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            header('location:index.php');
        } else {
            echo $query;
        }
        // edit data
    } else if ($_POST['aksi'] == "edit") {
        echo "tombol edit";
    }
}
// delete data
if (isset($_GET['hapus'])) {
    $id_siswa = $_GET['hapus'];
    $queryShow = "SELECT * FROM tb_siswaa WHERE id_siswa = '$id_siswa';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);
    // var_dump($result);
    // die();
    unlink("img/" . $result['foto_siswa']);
    $query = "DELETE FROM tb_siswaa WHERE id_siswa = '$id_siswa'";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header('location:index.php');
    } else {
        echo $query;
    }
}
