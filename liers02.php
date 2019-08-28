<?php
if (isset($_GET['Input'])) {
 $nama = $_POST['nama'];
 $jln = $_POST['jln'];
 $kecamatan = $_POST['kecamatan'];
 $kota = $_POST['kota'];
 $provinsi = $_POST['provinsi'];
 $kodepos = $_POST['kodepos'];
 $namabarang = $_POST['namabarang'];
 $hargabarang = $_POST['hargabarang'];
 $jumlahbarang = $_POST['jumlahbarang'];
 $deskripsi = $_POST['deskripsi'];
 $tanggalpembeli = $_POST['tanggalpembeli'];

 echo "Nama : <b>$nama</b>";
 echo "Jln/KP : <b>$jln</b>";
 echo "Kecamatan : <b>$kecamatan</b>";
 echo "Kota : <b>$kota</b>";
 echo "Provinsi : <b>$provinsi</b>";
 echo "Kode Pos : <b>$kodepos</b>";
 echo "Nama Barang : <b>$namabarang</b>";
 echo "Harga Barang : <b>$hargabarang</b>";
 echo "Jumlah Barang : <b>$jumlahbarang</b>";
 echo "Deskripsi : <b>$deskripsi</b>";
 echo "Tanggal Pembeli : <b>$tanggalpembeli</b>";
}
?>