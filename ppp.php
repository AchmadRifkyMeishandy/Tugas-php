<head>
<title>KALKULATOR</title>       

<script type="text/javascript">
function tambah(){
var num1 = document.myform.angka1.value;
var num2 = document.myform.angka2.value;
var pertambahan = parseInt(num1) + parseInt(num2);
document.getElementById('add').value = pertambahan;}
function kurang(){
var num1 = document.myform.angka1.value;
var num2 = document.myform.angka2.value;
var pengurangan = parseInt(num1) - parseInt(num2);
document.getElementById('add').value = pengurangan;}
function kali(){
var num1 = document.myform.angka1.value;
var num2 = document.myform.angka2.value;
var perkalian = parseInt(num1) * parseInt(num2);
document.getElementById('add').value = perkalian;}
function bagi(){
var num1 = document.myform.angka1.value;
var num2 = document.myform.angka2.value;
var pembagian = parseInt(num1) / parseInt(num2);
document.getElementById('add').value = pembagian;}
        </script>
</head>
<body>
<FORM NAME="myform">
<h1><b><center>KALKULATOR</center></b></h1><center><table border = "1">
<br></br>
Angka ke - 1 = <input type="text" name = "angka1">
<br></br>
Angka ke - 2 = <input type="text" name = "angka2">
<br></br>
Hasilnya     = <input type = "text" id = "add" name = "hasil" value= "">
<br></br>     
<INPUT TYPE="button" NAME="tambah1" Value="+" onClick="tambah()"/>
<INPUT TYPE="button" NAME="kurang1" Value="-" onClick="kurang()"/>
<INPUT TYPE="button" NAME="kali1" Value="*" onClick="kali()"/>
<INPUT TYPE="button" NAME="bagi1" Value="/" onClick="bagi()"/></table></center>
</FORM>
</body>
</html>