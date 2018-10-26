<?php
$konek = mysqli_connect('localhost','root','','modul8');
$result = mysqli_query($konek, "SELECT * FROM data");

echo 
'<center><table border = "2px">
	<thead>
		<tr>
			<th> Nama</th>
			<th> Nim</th>
			<th> Kelas</th>
			<th> Hobi</th>
			<th> Genre Film</th>
			<th> Tempat Wisata </th>
		</tr>
	</thead>
<tbody>';

$row = mysqli_fetch_row($result);
echo
	'<tr>
		<td>'.$row[0].'</td>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
		<td>'.$row[3].'</td>
		<td>'.$row[4].'</td>
		<td>'.$row[5].'</td>
		<td>'.$row[6].'</td>
	</tr></center>';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="">
		table{
			font-family: verdana, helvetica, perpetua, sans-serif;
			font-style: 12px;
		}
		input{
			font-family: verdana, helvetica, perpetua, sans-serif;
			font-style: 12px;
			height:20px;
		}
	</style>
</head>
<body bgcolor="">
 	<br><br><br>
	<center>
		<h2><b>Dashbroad</b></h2>
	<form action="" method="POST">
		<input type="submit" name="submit" value="Logout"><br><br>
	</form>
</body>
</html>
<?php
	session_start();
	if (isset($_POST['submit'])) {
			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$kelas=$_POST['kelas'];
			$hobi=$_POST['hobi'];
			$genre=$_POST['genre'];
			$wisata=$_POST['wisata'];	
		session_destroy();
		header("Location:indek.php");
	}
?>