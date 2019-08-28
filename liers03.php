<?php
		if(isset($_POST['hitung'])){
            $nama1 = $_POST['name'];
            $jln = $_POST['jln'];
            $kecamatan = $_POST['camat'];
            $kota = $_POST['kota'];
            $provinsi = $_POST['provinsi'];
            $kodepos = $_POST['kode'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$jumlah = $_POST['jumlah'];
			$total = $harga*$jumlah;
            
            
            echo "Nama Anda: <b>$nama1</b><br>";
            echo "Jln/KP : <b>$jln</b><br>";
            echo "Kecamatan : <b>$kecamatan</b><br>";
            echo "Kota : <b>$kota</b><br>";
            echo "Provinsi : <b>$provinsi</b><br>";
            echo "Kode Pos : <b>$kodepos</b><br>";
            echo "Nama Barang : <b>$nama</b><br>";
            echo "Harga : <b>$harga</b><br>";
            echo "Jumlah Barang  : <b>$jumlah</b><br>";
            echo "Total : <b>$total</b><br>";
        
        }
        
?>