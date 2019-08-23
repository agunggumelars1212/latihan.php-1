<?php
if (isset($_POST['Input'])) {
 $nopendaftaran = $_POST['nopendaftaran'];
 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $citacita = $_POST['citacita'];
 $tempatlahir = $_POST['tempatlahir'];
 $tanggallahir = $_POST['tanggallahir'];
 $asalsekolah = $_POST['asalsekolah'];
 $jurusan = $_POST['jurusan'];
 $jk = $_POST['jk'];
 $agama = $_POST['agama'];
 $namaayah = $_POST['namaayah'];
 $perkerjaanayah = $_POST['perkerjaanayah'];
 $namaibu = $_POST['namaibu'];
 $perkerjaanibu = $_POST['perkerjaanibu'];
 echo "<b> From fomulir </b> <br><br>";
 echo "No.Pendaftaran          : ";
 echo $nopendaftaran. "<br>";
 echo "NISN        : ";
 echo $nis. "<br>";
 echo "Nama : ";
 echo $nama. "<br>";
 echo "Alamat         : ";
 echo $alamat. "<br>";
echo "Cita-cita         : ";
 echo $citacita. "<br>";
 echo "Tempat lahir         : ";
 echo $tempatlahir. "<br>";
 echo "Tanggal lahir         : ";
 echo $tanggallahir. "<br>";
 echo "Asal sekolah         : ";
 echo $asalsekolah. "<br>";
 echo "Tempat lahir         : ";
 echo $tempatlahir. "<br>";
 echo "Jurusan         : ";
 echo $jurusan. "<br>";
 echo "Jenis kelamin         : ";
 echo $jk. "<br>";
 echo "Agama         : ";
 echo $agama. "<br>";
 echo "Nama Ayah       : ";
 echo $namaayah. "<br>";
 echo "Perkerjaan Ayah         : ";
 echo $perkerjaanayah. "<br>";
 echo "Nama Ibu         : ";
 echo $namaibu. "<br>";
 echo "Perkerjaan ibu         : ";
 echo $perkerjaanibu. "<br>";
} if (isset($_POST['mainkendang'])) {
    echo "hobby : " . $_POST['mainkendang'] . "<br>";
    }
    if (isset($_POST['mancing'])) {
    echo "hobby : " . $_POST['mancing'] . "<br>";
    }
    if (isset($_POST['putsal'])) {
    echo "hobby : " . $_POST['putsal'] . "<br>";
    }
    if (isset($_POST['mainbola'])) {
        echo "hobby : " . $_POST['mainbola'] . "<br>";
    }
    if (isset($_POST['kaleci'])) {
    echo "hobby : " . $_POST['kaleci'] . "<br>";
    }
    if (isset($_POST['ngurek'])) {
    echo "hobby : " . $_POST['ngurek'] . "<br>";
    }
?>



