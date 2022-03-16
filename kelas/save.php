<?php
if(isset($_POST['simpan'])) {
    require_once("../config.php");
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "INSERT INTO kelas SET kelas= '$kelas' , kapasitas='$kapasitas' , terisi='$terisi'";
    $query = mysqli_query($config, $sql);
    if($query) {
        echo "<script>alert('Data Berhasil Disimpan');</script>";
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan');</script>";
        echo "<script>location='index.php';</script>";
        //var_dump($sql);
    }
}