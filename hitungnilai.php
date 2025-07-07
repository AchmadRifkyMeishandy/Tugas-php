<html>
<head>
<title>Nilai akhir</title>
</head>
<body>
<h1>PROGAM HARGA BAYAR</h1>
<form method="post" action="nilaiakhir.php">
<label>Harga beli</label><br/>
<input type="text" name="nama"><br/>
<label>merk</label><br/>
<select class="opt" name="merk">
<option value="tyt">toyota</option>	
<option value="hnd">honda</option>
<option value="szk">suzuki</option>

</select><br/>
<label>harga bayar</label><br/>
<input type="text" name="harga bayar"><br/>

<input type="submit" name="hitung" value="harga setelah diskon">
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