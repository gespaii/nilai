<?php
if(isset($_POST['update'])) {
    require_once("../config.php");
    $id = $_POST['id'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "UPDATE kelas SET kelas= '$kelas' , kapasitas='$kapasitas' , terisi='$terisi' WHERE id='$id'";
    $query = mysqli_query($config, $sql);
    if($query) {
        echo "<script>alert('Data Berhasil DiUpdate');</script>";
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data Gagal DiUpdate');</script>";
        echo "<script>location='index.php';</script>";
        //var_dump($sql);
    }
}