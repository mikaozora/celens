<?php
include 'connect.php';
include 'fungsi.php';
$jurusan = jurusan($connect);
$kelas = kelas($connect);
?>
<head>
    <link rel="stylesheet" href="http://localhost/php/challenge/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/php/challenge/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/php/challenge/style.css">
</head>
<div class="overlay">
    <div class="wrap">
<h1>Form Tambah</h1>
<form action="proses.php" method="POST">
    <input type="text" name="NIS" placeholder="NIS" autocomplete="off"><br>
    <input type="text" name="nama" placeholder="Nama" autocomplete="off"><br>
    <select name="jurusan" id="jurusan">
        <option value="">Pilih Jurusan</option>
        <?php
            foreach($jurusan as $j){ ?>
            <option value="<?= $j['id_jurusan'] ?>"><?= $j['jurusan'] ?></option>    
        <?php }
        ?>
    </select><br><br>
    <select name="kelas" id="kelas">
        <option value="">Pilih Kelas</option>
        <?php
            foreach($kelas as $k){ ?>
            <option value="<?= $k['id_kelas'] ?>"><?= $k['kelas'] ?></option>    
        <?php }
        ?>
    </select><br><br>
    <input type="text" name="alamat" placeholder="Alamat" autocomplete="off"><br>
    <input type="text" name="web" placeholder="Nilai Web" autocomplete="off"><br>
    <input type="text" name="pbo" placeholder="Nilai PBO" autocomplete="off"><br>
    <input type="text" name="basdat" placeholder="Nilai Basdat" autocomplete="off"><br>
    <input type="text" name="desain" placeholder="Nilai Desain" autocomplete="off"><br>
    <input type="text" name="progdas" placeholder="Nilai Progdas" autocomplete="off"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>
</div>
</div>