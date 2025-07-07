<html>

<head>
	
<title>Percabangan nasgor</title>

</head>

<body>

<h1>Percabangan nasgor</h1>
Harga 1 bungkus nasi goreng bang mali= Rp.10,000<hr>

<form method="post">
	
Uang Transfer<br>

<input type="text" name="uang" required>
<br>
	Jumlah Yang Dipesan<br>


<input type="text" name="barang" required><br>
 
 <br><input type="submit" value="proses"><hr>

<?php

$uang = $_POST["uang"];

$barang = $_POST["barang"];

$barang = 10000*$barang;

if (($uang&&$barang)==""){
	
echo "<br/>Silakan isi Uang dan barang";
}
elseif ($uang<$barang) {
	
$kurang = $uang-$barang;
	
echo "<br/>Uang Anda Kurang<b> 
Rp.$kurang</b>";
}elseif ($uang>$barang) {
	
$lebih = $uang-$barang;
echo 
"Uang Anda Lebih<b> Rp.$lebih";
}
elseif ($uang=$barang) {
	
echo "Uang Anda Pas";
}
  
?>

</form>

</body>

</html>