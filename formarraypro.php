<?php
if(isset($_POST['sbm'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $hobi = $_POST['hoby'];

    foreach($nama as $data => $val) {
        echo"Nama : " . $nama[$data] .
        " - kelas : " . $kelas[$data].
        " - hobby : " . $hobi[$data] . "<hr>";
    }
}
?>