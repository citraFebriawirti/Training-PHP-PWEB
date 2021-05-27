<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr>
  <h1 align="center">Kalkulator MRX</h1>
    <div align="center">
	<form method="POST">
<hr>	
<form method="POST">
	<label>Masukkan Input 1</label><br>
	<input type="number" name="inp1"><br>

	<label>Masukkan Input 2</label><br>
	<input type="number" name="inp2"><br><br>
	<select name="operator">
		<option value="tambah">+</option>
		<option value="kurang">-</option>
		<option value="kali">*</option>
		<option value="bagi">/</option>
	</select>
	<input type="submit" name="submit">

</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
	$inp1=$_POST['inp1'];
	$inp2=$_POST['inp2'];
	$operator=$_POST['operator'];

if ($operator=='tambah') {
		$hasil=$inp1+$inp2;
		echo "Hasil dari $inp1+$inp2 =$hasil";
	}elseif ($operator=='kurang') {
		$hasil=$inp1-$inp2;
		echo "Hasil dari $inp1-$inp2 =$hasil";
	}elseif ($operator=='kali') {
		$hasil=$inp1*$inp2;
		echo "Hasil dari $inp1*$inp2 =$hasil";
	}elseif ($operator=='bagi') {
		$hasil=$inp1 / $inp2;
		echo "Hasil dari $inp1/$inp2 =$hasil";
	}else{
		$hasil='tidak ditemukan';
		echo $hasil;
	}		

}
?>