<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../gambar/logo.jpeg" type="image/x-icon">
    <title>Aplikasi Nilai</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <div class="container-fluid">
                <a class="navbar-brand" href=".">
                    <img src="../gambar/logo.jpeg" height="74px" class="d-inline-block align-text-center">
                    <span class="h1">WebPro-Aplikasi Nilai</span>
                </a>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="../">Home</a>
                            <a class="nav-link" href="../kelas">Kelas</a>
                            <a class="nav-link active" href=".">Siswa</a>
                        </div>
                    </div>
                </div>    
            </div>
        </nav>

        <div class="card">
            <div class="card-body">
                <div class="mb-2">
                    <span class="h2">Data Siswa</span>
                    <a href="add.php" class="btn btn-primary btn-sm" style="float: right">Tambah Data</a>
                </div>
                <table class="table table-success table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../config.php");
                        $sql = "SELECT siswa.id as sid, siswa.*, kelas.* FROM siswa JOIN kelas ON siswa.kelas_id = kelas.id";
                        $query = mysqli_query($config, $sql);
                        if(mysqli_num_rows($query) >0 ) {
                            $no=1;
                            while($r=mysqli_fetch_assoc($query)){
                                echo "<tr>";
                                    echo "<td>".$no."</td>";
                                    echo "<td>".$r['nis']."</td>";
                                    echo "<td>".$r['nama']."</td>";
                                    echo "<td>".$r['tempat_lahir']."</td>";
                                    echo "<td>".$r['tanggal_lahir']."</td>";
                                    echo "<td>".$r['kelas']."</td>";
                                        echo '<td><a href="edit.php?id='.$r['sid'].'">Edit</a> | <a href="delete.php?id='.$r['sid'].'" onclick="return confirm(\'Yakin Akan dihapus?\')">Hapus</a></td>';
                                        //echo "<td><a href='edit.php?id=$r[id]'>Edit</a> | <a href='delete.php?id=$r[id]' onclick='return confirm('Yakin Hapus?')'>Hapus</a> </td>";
                                echo "</tr>";
                                $no++;
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>  

        <div class="fixed-bottom">
            <div class="card">
                <div class="card-body">
                    <p>&copy; 2022 - Webpro by Pisa</p>
        </div>

    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>