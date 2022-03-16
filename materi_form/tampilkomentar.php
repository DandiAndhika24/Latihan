<!DOCTYPE html>
<html>
<head>
	<title>BUKU TAMU</title>
</head>
<body>
<h1>Data Komentar Anda</h1>
<hr>
		<form>
			<p>Nama Anda 		:<?php echo $_GET["nama"]; ?> <br>
			<p>Email Anda 		:<?php echo $_GET["email"]; ?> <br>
			<p>Komentar Anda 	:<?php echo $_GET["komen"]; ?> <br>
			<a href="forminputkomentar.php">INPUT DATA LAGI</a>
		</form>

</body>
</html>