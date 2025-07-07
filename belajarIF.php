<html>
<head>
<title>BELAJAR IF ELSE</title>
</head>
<body>
<h1>if...else</h1>
<?php
$uang=3000;
$harga=7000;
echo "saya mau beli cilok,uang saya cuma ada Rp.$uang apa bisa boy?";
if($uang<$harga){
  $kurang=$harga-$uang;
  echo "</br> om cilok:gak bisa uang nya kurang<b>Rp.$kurang</b>!";
} else{
 echo "</br>om cilok:bisa kok!";
}
?>
</body>
</html>