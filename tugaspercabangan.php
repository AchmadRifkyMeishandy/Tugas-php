<html>
<head>
<title>percabangan</title>
</head>
<body>
<h1>percabangan</h1>
Harga 1 paket nasi goreng= Rp.15,000<hr>
<form method="post">
uang transfer<br>
<input type="text" name="uang" required><br>
Jumlah yang di pesan<br>
<input type="text" name="barang" required><br>
<br><input type="submit" value="proses"><hr>
<?php
$uang = $_POST["uang"];
$barang = $_POST["barang"];
$barang = 15000*$barang;
if (($uang&&$barang)==""){
    echo "<br/>silahkan isi uang dan barang ";
}elseif ($uang<$barang) {
 $kurang = $uang-$barang;
 echo "<br/>uang anda kurang<b> Rp.$kurang</b>";
}elseif ($uang>$barang) {
 $lebih = $uang-$barang;
 echo "uang anda lebih<b> Rp.$lebih";
}elseif ($uang=$barang){
 echo "uang anda pas";
}
?>
</form>
</body>
</html>
