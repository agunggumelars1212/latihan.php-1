<?php
if(isset($_POST['sbm'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    foreach($nama as $data => $val) {
        echo"Nama saya : " . $nama[data] .
        " - kelas : " . $kelas[data]. "<hr>";
    }
}
?>