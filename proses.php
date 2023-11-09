<?php
if(isset($_POST['aksi'])){
    if($_POST['aksi']=="add"){
        echo "tombol add";
}elseif($_POST['aksi']=="edit"){
    echo "tombol simpan";
}
}
if(isset($_GET['hapus'])){
    echo 'tombol hapus';
}
?>