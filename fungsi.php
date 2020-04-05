<?php
function jurusan($connect){
    $sql = "SELECT id_jurusan, jurusan FROM jurusan";
    $res = mysqli_query($connect, $sql);
    $j = array();
    while($data = mysqli_fetch_assoc($res)){
        $j[] = $data;
    }
    return $j;
}
function kelas($connect){
    $sql = "SELECT id_kelas, kelas FROM kelas";
    $res = mysqli_query($connect, $sql);
    $k = array();
    while($data = mysqli_fetch_assoc($res)){
        $k[] = $data;
    }
    return $k;
}
?>