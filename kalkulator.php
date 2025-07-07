<?php

if (isset($_POST["submit"])){
	
$satu = $_POST["satu"];
	
$dua = $_POST["dua"];
	
$operator = $_POST["operator"];

	
if($operator == "+"){
		
$hasil = $satu+$dua;
	
}elseif($operator == "-"){
		
$hasil = $satu-$dua;
	
}elseif($operator == "X"){
		
$hasil = $satu*$dua;
	
}elseif($operator == "/"){
		
$hasil = $satu/$dua;
	
}else{
		
echo "Pilih Operator";
	
}	

}

?>
<html>
<head>
<title>Hitung Nilai akhir siswa smkn 64 jakarta</title>
<style>
table{background:salmon; padding:10px;border - radius:5px;}
table input{width:100%; border :0px;
table tr td selesct{width:100%}
</style>
</head>
<body>
<form method="post"action="">
<table>

<tr>
<td>Hitung nilai akhir siswa smkn 64 jakarta</td>
</tr>
<tr>
<td colspan="2"><input type="text" name="satu" value=""></td>
</tr>
<tr>
<td colspan="2"><input type="text" name="dua" value=""></td>
</tr>
<tr>
<td colspan="2">
<select name="operator">
<option>- mata pelajaran -</option>
<option value="matematika">matematika</option>
<option value="b.indonesia"><b.indonesia</option>
<option value="b.inggris">b.inggris</option>
<option value="produktif">produktif</option>
</select>
</td>
</tr>
<tr>
<td><input type="reset" name="reset" value="c"></td>
<td><input type="submit" name="submit"value="="></td>
</tr>
<tr>
<td colspan="2"><input type="text" name="hasil" value=""></td>
</tr>
</form>


</body>
</html>
<tr>
	
<?php if(isset($_POST["submit"])){ ?>
		
<td colspan="2"><input type="text" name="hasil" value="<?php echo $hasil ?>"></td>
	
<?php } 
?>


</tr>
