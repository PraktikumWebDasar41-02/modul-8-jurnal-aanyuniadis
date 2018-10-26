<?php
$konek = mysqli_connect('localhost','root','','modul8');
$result = mysqli_query($konek, "SELECT * FROM data");

echo 
'<center><table border = "2px">
	<thead>
		<tr>
			<th> Nama</th>
			<th> Password</th>
			<th> Email</th>
		</tr>
	</thead>
<tbody>';

$row = mysqli_fetch_row($result);
echo
	'<tr>
		<td>'.$row[0].'</td>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
	</tr></center>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>output</title>
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
		<h2><b>Profil</b></h2>
	<form action="" method="POST">
		<input type="submit" name="submit" value="submit"><br><br>
	</form>
</body>
</html>
<?php
	session_start();
	if (isset($_POST['submit'])) {
			$nama=$_POST['nama'];
			$password=$_POST['password'];
			$email=$_POST['email'];
		header("Location:dashbroad.php");
	}
?>