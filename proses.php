<?php
include 'connect.php';
include 'fungsi.php';
if(isset($_POST['simpan'])){
    $nis = $_POST['NIS'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $web = $_POST['web'];
    $pbo = $_POST['pbo'];
    $basdat = $_POST['basdat'];
    $desain = $_POST['desain'];
    $progdas = $_POST['progdas'];
    $ket = "";
    $predikat = "";
    $rata = ($web + $pbo + $basdat + $desain + $progdas) / 5;
    if($rata > 89 && $rata <= 100){
        $ket = "Excellent";
        $predikat = "A";
    }else if($rata > 79 && $rata < 90){
        $ket = "Baik";
        $predikat = "B";
    }else if($rata > 69 && $rata < 80){
        $ket = "Cukup";
        $predikat = "C";
    }else if($rata > 59 && $rata < 70){
        $ket = "Kurang";
        $predikat = "D";
    }else if($rata <= 59){
        $ket = "Rendah";
        $predikat = "E";
    }
    $sql = "INSERT INTO siswa (NIS, nama, id_jurusan, id_kelas, alamat, web, pbo, basdat, desain, progdas, keterangan, predikat, rata)
            VALUES ('$nis', '$nama', '$jurusan', '$kelas', '$alamat', '$web', '$pbo', '$basdat', '$desain', '$progdas', '$ket', '$predikat', '$rata')";
    $res = mysqli_query($connect, $sql); 
    $hitung = mysqli_affected_rows($connect);
    if($hitung == 1){
        header('Location: index.php');
    }else{
        header('Location: tambah.php');
    }
}else{
    header('Location: tambah.php');
}
?>