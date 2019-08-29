<!DOCTYPE html>
<html>
<head>
	<title>Total Harga</title>
</head>
<body>
	<form action="liers03.php" method="post" name="input">
    <h2>PEMBELIAN BARANG</h2><hr>
        <table>
        <center>
            <tr>
            <td>Nama Anda</td>
            <td>:</td>
            <td><input type="text" name="name" placeholder="Nama Anda..."></td>
            </tr>
            <tr>
            <td>Jln/KP</td>
            <td>:</td>
            <td><input type="text" name="jln" placeholder="jln/kp..."></td>
            </tr>
            <tr>
            <td>Kecamatan</td>
            <td>:</td>
            <td><input type="text" name="camat" placeholder="kecamatan..."></td>
            </tr>
            <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="kota" placeholder="kota..."></td>
            </tr>
            <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><input type="text" name="provinsi" placeholder="provinsi..."></td>
            </tr>
            <tr>
            <td>Kode pos</td>
            <td>:</td>
            <td><input type="text" name="kode" placeholder="Kode pos..."></td>
            </tr>
			<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Nama Barang..."></td>
			</tr>
			<tr>
			<td>Harga Barang</td>
			<td>:</td>
			<td><input type="text" name="harga" placeholder="Harga Barang..."></td>
			</tr>
			<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td>
			<select name="jumlah">
					<option value="">- PILIH -</option>
						<?php for($x=1;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
            <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi" placeholder="Deskripsi..."></td>
            </tr>
            <tr>
            <td>Tanggal pembeli</td>
            <td>:</td>
            <td><input type="date" name="tanggalpembeli" placeholder="Nama Anda..."></td>
            </tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="hitung" value="Hitung">
					<input type="reset" name="batal" value="Batal">
				</td>
			</tr>
            </center>
		</table>
	</form>
    <hr>
</body>
</html>