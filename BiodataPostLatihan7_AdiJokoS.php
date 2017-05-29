<html>
<head>
<title>Latihan Jobsheet 7</title>
</head>
<body>
<?php
if(isset($_POST['kirim']))
{
	echo"Nama		:<b>".$_POST["nama"]."</b><br>";
	echo"Alamat		:<b>".$_POST["alamat"]."</b><br>";
	echo"Email		:<b>".$_POST["email"]."</b><br>";
	echo"Komentar	:<b>".$_POST["komentar"]."</b><br>";
}
?>
</body>
</html>