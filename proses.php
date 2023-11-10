<?php


if(isset($_POST['aksi'])){
    if($_POST['aksi']=="add"){
        var_dump($_POST);
        die();
        echo "tombol add";
}elseif($_POST['aksi']=="edit"){
    echo "tombol edit";
}
}
if(isset($_GET['hapus'])){

    
    echo 'tombol hapus';
}
?>