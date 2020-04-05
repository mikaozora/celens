<?php
include 'connect.php';
$sql = "SELECT * FROM siswa INNER JOIN jurusan ON siswa.id_jurusan = jurusan.id_jurusan 
    INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas ORDER BY nama";
$res = mysqli_query($connect, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $detail[] = $data;
}
?>

<head>
    <link rel="stylesheet" href="http://localhost/php/challenge/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/php/challenge/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/php/challenge/style.css">
</head>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2><i class="fas fa-book-open"></i> R A P O R T</h2>
            <h4><a href="tambah.php"><i class="fas fa-border-plus"></i></i></a></h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Rata-rata</th>
                            <th>Predikat</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($detail as $d) { ?>
                        <tr>
                            <td scope="row"><?= $no ?></td>
                            <td><?= $d['nama'] ?></td>
                            <td><?= $d['jurusan'] ?></td>
                            <td><?= $d['kelas'] ?></td>
                            <td><?= $d['rata'] ?></td>
                            <td><?= $d['predikat'] ?></td>
                            <td><?= $d['keterangan'] ?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                    <tr>
                        <td colspan="7">
                            <h4><a href="tambah.php"><i class="fas fa-plus"></i></i></a></h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    