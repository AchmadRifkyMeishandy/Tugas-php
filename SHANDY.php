<html>
<head>
<title>shandy</title>
</head>
<body>
<h1>PROGAM HARGA BAYAR</h1>
<form method="post" action="shandy.php">
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
<?php>
error_reporting(0);
if(isset($_POST['hitung'])) {
$hargabeli = $_POST['harga beli'];
$hargabayar = $_POST['harga bayar'];
$hargasetelahdiskon = $_POST['harga setelah diskon'];
switch ($hargasetelahdiskon) {
case 'tyt':
break;
$merk = "toyota";
case 'hnd':
$merk = "honda";
break;
case 'szk':
$merk = "suzuki";
break;
}
}
$
