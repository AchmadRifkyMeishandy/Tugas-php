<html>
<head>
<title>Nilai akhir</title>
</head>
<body>
<h1>Nilai akhir Siswa smkn 64 jakarta</h1>
<form method="post" action="nilaiakhir.php">
<label>Nama siswa</label><br/>
<input type="text" name="nama"><br/>
<label>mata pelajaran</label><br/>
<select class="opt" name="mapel">
<option value="mtk">matematika</option>	
<option value="b.indo">b.indonesia</option>
<option value="b.ing">b.inggris</option>
<option value="prod">produktif</option>
</select><br/>
<label>nilai tugas</label><br/>
<input type="text" name="nilaitugas"><br/>
<label>nilai uts</label><br/>
<input type="text" name="nilaiuts"><br/>
<label>nilai uas</label><br/>
<input type="text" name="nilaiuas"><br/>
<input type="submit" name="hitung" value="submit">
</form>
<?php
error_reporting(0);
if(isset($_POST['hitung'])) {
$nama = $_POST['nama'] ;
$nilaitugas = $_POST['nilaitugas'];
$nilaiuts = $_POST['nilaiuts'] ;
$nilaiuas = $_POST['nilaiuas'] ;
$mapel = $_POST['mapel'] ;
switch ($mapel) {
case 'mtk':
$pelajaran = "matematika";
break;
case 'b.indo':
$pelajaran = "b.indonesia";
break;
case 'b.ing':
$pelajaran = "b.inggris";
break;
case 'prod':
$pelajaran = "produktif";
break;
}
}
$nilai_raport = $nilaiuts+$nilaiuas+$nilaitugas/3 ;
							
echo "<hr>";
echo "<br>Nama siswa : $nama ";
echo "<br>Mata pelajaran : $pelajaran " ;
echo "<br>Nilai Tugas : $nilaitugas ";
echo "<br>Nilai uts : $nilaiuts ";
echo "<br>Nilai uas : $nilaiuas ";
echo "<br>Nilai raport : $nilai_raport ";
?>
</body>
</html>