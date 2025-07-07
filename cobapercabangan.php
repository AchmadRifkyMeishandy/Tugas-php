<html>
<head>
<title>coba percabangan</title>
</head>
<body>
<h1>Belajar percabangan</h1>
<form method="post">
uang kita=<input type="text"name="uang"
required><br>
harga nasi=<input type="text"name=""harga"
required><br>
<?php
$uang=$_POST["uang"];
$harga=@_POST["harga"];
if(($uang&&$harga)==""){
    echo "</br>silahkan isi uang dan harga";
}else if($uang<$harga){
   $kurang=$harga-$uang;
echo "</br>uang ada lebih <b>Rp. $kurang</b>";
}
?>
<br><input type="submit"value="proses">

</form>
</body>
</html>