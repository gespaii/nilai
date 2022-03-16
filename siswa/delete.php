<?php
if(isset($_GET['id'])) {
    require_once("../config.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id='$id'";
    $query = mysqli_query($config, $sql);
    if($query) {
        header('location: index.php');
        //echo "<a href=index.php onclick=”return confirm(‘Yakin Hapus?’)”>Hapus</a>";
        //echo "<td><a href=index.php onClick=\"return confirm('Are you sure want to delete ?')\">Delete</a></td>";
    } else {
        echo "Data gagal dihapus, <a href='index.php'>Kembali</a>";
        //var_dump($sql)
    }
} else {
    echo "Jangan akses langsung ke halaman ini <a href='index.php'>Kembali</a>";
}