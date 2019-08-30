<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PENDAFTARAN TNI</title>
</head>
<body>
    <fieldset>
    <legend>
    PENDAFTARAN TENTARA NEGARA INDONESIA
    </legend>
    <form action="" method="get">
        <label for="">Nama : </label>
        <input type="text" min="1" name="b" required>
        <label for="">Berat Badan : </label>
        <input type="number" min="1" name="m" required>
        <label for="">Tinggi Badan : </label>
        <input type="number" min="1" name="n" required>
        <br>
        <br>
        <input type="submit" name="simpan" value="Simpan">
        <input type="reset" name="reset" value="Hapus">
    </form>
    </fieldset>

    <?php
    if (isset($_GET['simpan'])) {
        $nama = $_GET['b'];
        $bb = $_GET['m'];
        $tb = $_GET['n'];
        function tni($berat , $tinggi){
        if ($berat >= 60 && $tinggi >= 165) {
            $e = "Selamat Anda Diterma";
        }else {
            $e = "Kembali Latihan Pantang Menyerah";
        }
        return $e;
    }
        $terima = tni($bb, $tb);
        echo "Nama Anda : $nama<br> Berat Badan anda : $bb<br> Tinggi Badan anda : $tb<br> Status Anda : $terima";
    }
    ?>
</body>
</html>