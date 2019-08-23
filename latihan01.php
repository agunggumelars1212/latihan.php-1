<html>
 <head><title>Pengolahan Form ~ Text</title></head> 
 <body>
 <FORM ACTION = "proseslatihan01.php" METHOD="POST" NAME="input">
 <h1>Formulir Pendaftaran</h1>
No.Pendaftaran : <input type="text" name="nopendaftaran" ><br>
NISN           : <input type="text" name="nis" ><br>
NAMA           : <input type="text" name="nama" ><br>
ALAMAT         : <textarea rows="4" cols="30" rows"5" name="alamat"></textarea><br>
CITA CITA      : <input type="text" name="citacita" ><br>
TEMPAT LAHIR   : <input type="text" name="tempatlahir" ><br>
TANGGAL LAHIR  : <input type="date" name="tanggallahir" ><br>
ASAL SEKOLAH   : <input type="text" name="asalsekolah" ><br>
JURUSAN        : <select name="jurusan">
                 <option value="rpl">Teknik Rekayasa Perangkat Lunak</option>
                 <option value="tsm">Teknik Sepedah Motor</option>
                 <option value="tkr">Teknik Kendaraan Ringan</option>
                  </select><br>
JENIS KELAMIN  : <input type="radio" name="jk" value="lakilaki" >Laki-laki
                 <input type="radio" name="jk" value="wewe">Perempuan<br>
AGAMA          : <select name="agama">
                 <option value="islam">islam</option>
                 <option value="kristen">kristen</option>
                 <option value="hindu">hindu</option>
                  </select><br>
NAMA AYAH       : <input type="text" name="namaayah" ><br>
PERKERJAAN AYAH : <input type="text" name="perkerjaanayah" ><br>
NAMA IBU        : <input type="text" name="namaibu" ><br>
PERKERJAAN IBU  : <input type="text" name="perkerjaanibu" ><br>
HOBBY          : <input type="checkbox" name="mainkendang" value = "mainkendang">Main kendang
                 <input type="checkbox" name="mancing" value = "mancing">Mancing 
                 <input type="checkbox" name="putsal " value = "putsal">Putsal
                 <input type="checkbox" name="mainbola" value = "mainbola">Main bola
                 <input type="checkbox" name="kaleci" value = "kaleci">kaleci
                 <input type="checkbox" name="ngurek" value = "ngurek">Ngurek<br>
 <input type="submit" name="Input" value="Input">
 <input type="reset" name="reset" value="Hapus">
 </FORM>
 </body>
</html> 
