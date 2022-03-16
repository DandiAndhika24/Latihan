<html>
<head>
	<title>Latihan IF Dan ELSE</title>
</head>
<body>
<?php
	$nb=$_POST['nilai2'];
	$na=$_POST['nilai1'];
	$r=$_POST['rumus'];
?>
	<h2>Hasil Hitung Rumus</h2>
	Nilai a adalah  = <?php echo "$na"; ?> <br>
	Nilai b adalah  = <?php echo "$nb"; ?> <br>


<?php
	if($na=="0" && $nb=="0")
	{echo "Tidak ada hasil perhitungan";}
	else
	{
		if($r=="s")
		{
			$hasil=(0.5*($na*nb));
			echo "Rumus yang dipilih adalah = Segitiga<br>
		   		  Hasil perhitungan rumus = $hasil";
		}
		else
		{
			$hasil=($na*$nb);
			echo "Rumus yang dipilih adalah = Persegi Panjang<br>
				  Hasil perhitungan rumus = $hasil";
		}
	}
?>
</body>
</html>