<DOCTYPE html>
<html>
<head>
<title>Makanya belajar</title>
</head>
<body>
<form method="post"
Jumlah Harga yang harus di bayar<br>
<2 hari Maka Harga Perhari Rp.800.000<br>
>2 hari Maka Harga Perhari Rp.700.000<br>
>10 hari Maka Harga Perhari Rp.500.000<br>
Berapa Hari Anda Menginap<br>
<input type="text"name="h"><br>
<input type="submit" name="submit" value="test">
<?php
$h=$_POST["h"];
$k=$_POST["k"];
if($h<2){
$o=$h*$k*800000;
echo "Harga Rp.$o";
}elseif ($h>3){
$p=$h*$k*700000;
echo "harga Rp.$p";
}elseif($h<10){
$q=$h*$k*500000;
echo "Harga Rp.$q";
}
?>
</form>
</body>
</html>